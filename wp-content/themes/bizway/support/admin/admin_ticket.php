<?php
/*******************************************************************************
*  Title: Help Desk Software HESK
*  Version: 2.1 from 7th August 2009
*  Author: Klemen Stirn
*  Website: http://www.hesk.com
********************************************************************************
*  COPYRIGHT AND TRADEMARK NOTICE
*  Copyright 2005-2009 Klemen Stirn. All Rights Reserved.
*  HESK is a trademark of Klemen Stirn.

*  The HESK may be used and modified free of charge by anyone
*  AS LONG AS COPYRIGHT NOTICES AND ALL THE COMMENTS REMAIN INTACT.
*  By using this code you agree to indemnify Klemen Stirn from any
*  liability that might arise from it's use.

*  Selling the code for this program, in part or full, without prior
*  written consent is expressly forbidden.

*  Using this code, in part or full, to create derivate work,
*  new scripts or products is expressly forbidden. Obtain permission
*  before redistributing this software over the Internet or in
*  any other medium. In all cases copyright and header must remain intact.
*  This Copyright is in full effect in any country that has International
*  Trade Agreements with the United States of America or
*  with the European Union.

*  Removing any of the copyright notices without purchasing a license
*  is expressly forbidden. To remove HESK copyright notice you must purchase
*  a license for this script. For more information on how to obtain
*  a license please visit the page below:
*  https://www.hesk.com/buy.php
*******************************************************************************/

define('IN_SCRIPT',1);
define('HESK_PATH','../');

/* Get all the required files and functions */
require(HESK_PATH . 'hesk_settings.inc.php');
require(HESK_PATH . 'inc/common.inc.php');
require(HESK_PATH . 'inc/database.inc.php');

hesk_session_start();
hesk_dbConnect();
hesk_isLoggedIn();

/* Check permissions for this feature */
hesk_checkPermission('can_view_tickets');
$can_del_notes	= hesk_checkPermission('can_del_notes',0);
$can_reply		= hesk_checkPermission('can_reply_tickets',0);
$can_delete		= hesk_checkPermission('can_del_tickets',0);
$can_edit		= hesk_checkPermission('can_edit_tickets',0);

$trackingID = strtoupper(hesk_input($_REQUEST['track']));
if (empty($trackingID))
{
	print_form();
}

/* Get ticket info */
$sql = "SELECT * FROM `".hesk_dbEscape($hesk_settings['db_pfix'])."tickets` WHERE `trackid`='".hesk_dbEscape($trackingID)."' LIMIT 1";
$result = hesk_dbQuery($sql);
if (hesk_dbNumRows($result) != 1)
{
	hesk_error($hesklang['ticket_not_found']);
}
$ticket = hesk_dbFetchAssoc($result);

/* Get category name and ID */
$sql = "SELECT * FROM `".hesk_dbEscape($hesk_settings['db_pfix'])."categories` WHERE `id`=".hesk_dbEscape($ticket['category'])." LIMIT 1";
$result = hesk_dbQuery($sql);
/* If this category has been deleted use the default category with ID 1 */
if (hesk_dbNumRows($result) != 1)
{
	$sql = "SELECT * FROM `".hesk_dbEscape($hesk_settings['db_pfix'])."categories` WHERE `id`=1 LIMIT 1";
	$result = hesk_dbQuery($sql);
}
$category = hesk_dbFetchAssoc($result);

/* Is this user allowed to view tickets inside this category? */
hesk_okCategory($category['id']);

/* Delete post action */
if (isset($_GET['delete_post']) && $can_delete)
{
	$n = hesk_isNumber($_GET['delete_post']);
    if ($n)
    {
		$sql = "DELETE FROM `".hesk_dbEscape($hesk_settings['db_pfix'])."replies` WHERE `id`=".hesk_dbEscape($n)." LIMIT 1";
		$res = hesk_dbQuery($sql);
        $_SESSION['HESK_NOTICE']  = $hesklang['repd'];
        $_SESSION['HESK_MESSAGE'] = $hesklang['repl'];
    }
    header('Location: admin_ticket.php?track='.$trackingID.'&Refresh='.mt_rand(10000,99999));
    exit();
}

/* Delete notes action */
if (isset($_GET['delnote']))
{
	$n = hesk_isNumber($_GET['delnote']);
    if ($n)
    {
    	if ($can_del_notes)
        {
			$sql = "DELETE FROM `".hesk_dbEscape($hesk_settings['db_pfix'])."notes` WHERE `id`=".hesk_dbEscape($n)." LIMIT 1";
        }
        else
        {
        	$sql = "DELETE FROM `".hesk_dbEscape($hesk_settings['db_pfix'])."notes` WHERE `id`=".hesk_dbEscape($n)." AND `who`=".hesk_dbEscape($_SESSION['id'])." LIMIT 1";
        }
		$res = hesk_dbQuery($sql);
    }
    header('Location: admin_ticket.php?track='.$trackingID.'&Refresh='.mt_rand(10000,99999));
    exit();
}

/* Add a note action */
if (isset($_POST['notemsg']))
{
	$msg = hesk_input($_POST['notemsg']);
    if ($msg)
    {
    	$msg = nl2br(hesk_makeURL($msg));
		$sql = "INSERT INTO `".hesk_dbEscape($hesk_settings['db_pfix'])."notes` (`ticket`,`who`,`dt`,`message`) VALUES (
        '".hesk_dbEscape($ticket['id'])."',
        '".hesk_dbEscape($_SESSION['id'])."',
        NOW(),
        '".hesk_dbEscape($msg)."')";
		hesk_dbQuery($sql);
    }
    header('Location: admin_ticket.php?track='.$trackingID.'&Refresh='.mt_rand(10000,99999));
    exit();
}

/* Print header */
require_once(HESK_PATH . 'inc/header.inc.php');

/* List of categories */
$sql = "SELECT `id`,`name` FROM `".hesk_dbEscape($hesk_settings['db_pfix'])."categories` ORDER BY `cat_order` ASC";
$result = hesk_dbQuery($sql);
$categories_options='';
while ($row=hesk_dbFetchAssoc($result))
{
    if ($row['id'] == $ticket['category']) {continue;}
    $categories_options.='<option value="'.$row['id'].'">'.$row['name'].'</option>';
}

/* Get replies */
$sql = "SELECT * FROM `".hesk_dbEscape($hesk_settings['db_pfix'])."replies` WHERE `replyto`='".hesk_dbEscape($ticket['id'])."' ORDER BY `id` ASC";
$result = hesk_dbQuery($sql);
$replies = hesk_dbNumRows($result);

/* Print admin navigation */
require_once(HESK_PATH . 'inc/show_admin_nav.inc.php');

?>

</td>
</tr>
<tr>
<td>

	<?php
	    if(isset($_SESSION['HESK_NOTICE']))
        {
	?>
	        <div align="center">
	        <table border="0" width="600" id="ok" cellspacing="0" cellpadding="3">
		        <tr>
		        	<td align="left" class="ok_header">&nbsp;<img src="../img/ok.gif" style="vertical-align:text-bottom" width="16" height="16" alt="" />&nbsp; <?php echo $_SESSION['HESK_NOTICE']; ?></td>
		        </tr>
		        <tr>
		        	<td align="left" class="ok_body"><?php echo $_SESSION['HESK_MESSAGE']; ?></td>
		        </tr>
	        </table>
	        </div>
            <br />
	<?php
	        unset($_SESSION['HESK_NOTICE']);
	        unset($_SESSION['HESK_MESSAGE']);
	    }

	    if(isset($_SESSION['HESK_ERROR']))
        {
	?>
	        <div align="center">
	        <table border="0" width="600" id="error" cellspacing="0" cellpadding="3">
		        <tr>
		        	<td align="left" class="error_header">&nbsp;<img src="../img/error.gif" style="vertical-align:text-bottom" width="16" height="16" alt="" />&nbsp; <?php echo $hesklang['error']; ?></td>
		        </tr>
		        <tr>
		        	<td align="left" class="error_body"><?php echo $_SESSION['HESK_MESSAGE']; ?></td>
		        </tr>
	        </table>
	        </div>
            <br />
	<?php
	        unset($_SESSION['HESK_ERROR']);
	        unset($_SESSION['HESK_MESSAGE']);
	    }
	?>

<h3 align="center"><?php echo $ticket['subject']; ?></h3>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td width="7" height="7"><img src="../img/roundcornerslt.jpg" width="7" height="7" alt="" /></td>
	<td class="roundcornerstop"></td>
	<td><img src="../img/roundcornersrt.jpg" width="7" height="7" alt="" /></td>
</tr>
<tr>
	<td class="roundcornersleft">&nbsp;</td>
	<td>
    <!-- START TICKET HEAD -->

	<table border="0" cellspacing="1" cellpadding="1">
	<?php
	echo '
	<tr>
	<td>'.$hesklang['trackID'].': </td>
	<td>'.$trackingID.'</td>
	</tr>
	<tr>
	<td>'.$hesklang['ticket_status'].': </td>
	<td>';
	$random=rand(10000,99999);

	    switch ($ticket['status'])
	    {
	    case 0:
	        echo '<font class="open">'.$hesklang['open'].'</font> [<a
	        href="change_status.php?track='.$trackingID.'&amp;s=3&amp;Refresh='.$random.'">'.$hesklang['close_action'].'</a>]';
	        break;
	    case 1:
	        echo '<font class="waitingreply">'.$hesklang['wait_staff_reply'].'</font> [<a
	        href="change_status.php?track='.$trackingID.'&amp;s=3&amp;Refresh='.$random.'">'.$hesklang['close_action'].'</a>]';
	        break;
	    case 2:
	        echo '<font class="replied">'.$hesklang['wait_cust_reply'].'</font> [<a
	        href="change_status.php?track='.$trackingID.'&amp;s=3&amp;Refresh='.$random.'">'.$hesklang['close_action'].'</a>]';
	        break;
	    default:
	        echo '<font class="resolved">'.$hesklang['closed'].'</font> [<a
	        href="change_status.php?track='.$trackingID.'&amp;s=1&amp;Refresh='.$random.'">'.$hesklang['open_action'].'</a>]';
	    }

	echo '</td>
	</tr>
	<tr>
	<td>'.$hesklang['created_on'].': </td>
	<td>'.hesk_date($ticket['dt']).'</td>
	</tr>
	<tr>
	<td>'.$hesklang['last_update'].': </td>
	<td>'.hesk_date($ticket['lastchange']).'</td>
	</tr>
	<tr>
	<td>'.$hesklang['last_replier'].': </td>
	<td>';
	        if ($ticket['lastreplier']) {echo $hesklang['staff'];}
	        else {echo $hesklang['customer'];}
	echo '</td>
	</tr>
	<tr>
	<td>'.$hesklang['category'].': </td>
	<td>
    	<form style="margin-bottom:0;" action="move_category.php" method="post">
    	'.$category['name'].'&nbsp;&nbsp;&nbsp;<i>'.$hesklang['move_to_catgory'].'</i> <select name="category">
	    <option value="" selected="selected">'.$hesklang['select'].'</option>'.$categories_options.'</select>
	    <input type="submit" value="'.$hesklang['move'].'" class="orangebutton" onmouseover="hesk_btn(this,\'orangebuttonover\');" onmouseout="hesk_btn(this,\'orangebutton\');" /><input type="hidden" name="track" value="'.$trackingID.'" />
		</form>
	</td>
	</tr>
	<tr>
	<td>'.$hesklang['replies'].': </td>
	<td>'.$replies.'</td>
	</tr>
	<tr>
	<td>'.$hesklang['priority'].': </td>
	<td>
    	<form style="margin-bottom:0;" action="priority.php" method="post">';

        $options = array(
        	1 => '<option value="1">'.$hesklang['high'].'</option>',
            2 => '<option value="2">'.$hesklang['medium'].'</option>',
            3 => '<option value="3">'.$hesklang['low'].'</option>'
        );

        switch ($ticket['priority'])
        {
        	case 1:
            	echo '<font class="important">'.$hesklang['high'].'</font>';
                unset($options[1]);
                break;
        	case 2:
            	echo '<font class="medium">'.$hesklang['medium'].'</font>';
                unset($options[2]);
                break;
        	default:
            	echo $hesklang['low'];
                unset($options[3]);
        }
		echo '&nbsp;&nbsp;&nbsp;<i>'.$hesklang['change_priority'].'</i> <select name="priority">';

        foreach ($options as $option)
        {
        	echo $option;
        }

        echo '</select>
        <input type="submit" value="'.$hesklang['chg'].'" class="orangebutton" onmouseover="hesk_btn(this,\'orangebuttonover\');" onmouseout="hesk_btn(this,\'orangebutton\');" /><input type="hidden" name="track" value="'.$trackingID.'" />
		</form>
    </td>
	</tr>
	<tr>
	<td>'.$hesklang['archived'].': </td>
	<td>';
    	$can_archive = hesk_checkPermission('can_add_archive',0);
	    if ($ticket['archive'])
	    {
	        echo $hesklang['yes'];
            if ($can_archive)
            {
            	echo ' [<a href="archive.php?track='.$trackingID.'&amp;archived=0">'.$hesklang['remove_archive'].'</a>]';
            }
	    }
	    else
	    {
	        echo $hesklang['no'];
            if ($can_archive)
            {
            	echo ' [<a href="archive.php?track='.$trackingID.'&amp;archived=1">'.$hesklang['add_archive'].'</a>]';
            }
	    }
	?>
	</td>
	</tr>
	</table>

    <br />

	<table border="0" width="100%" cellspacing="0" cellpadding="2">
	<tr>
	<td><b><i><?php echo $hesklang['notes']; ?>:</i></b>

    <?php
    if ($can_reply)
    {
    ?>
    &nbsp; <a href="Javascript:void(0)" onclick="Javascript:hesk_toggleLayerDisplay('notesform')"><?php echo $hesklang['addnote']; ?></a>
    <?php
    }
    ?>
		<div id="notesform" style="display:none">
	    <form method="post" action="admin_ticket.php" style="margin:0px; padding:0px;">
	    <textarea name="notemsg" rows="6" cols="60"></textarea><br />
	    <input type="submit" value="<?php echo $hesklang['s']; ?>" class="orangebutton" onmouseover="hesk_btn(this,'orangebuttonover');" onmouseout="hesk_btn(this,'orangebutton');" /><input type="hidden" name="track" value="<?php echo $trackingID; ?>" />
        <i><?php echo $hesklang['nhid']; ?></i>
	    </form>
	    </div>
    </td>
	<td>&nbsp;</td>
	</tr>

	<?php
    $sql = 'SELECT t1.*, t2.`name` FROM `'.hesk_dbEscape($hesk_settings['db_pfix']).'notes` AS t1 LEFT JOIN `'.hesk_dbEscape($hesk_settings['db_pfix']).'users` AS t2 ON t1.`who` = t2.`id` WHERE `ticket`='.hesk_dbEscape($ticket['id']).' ORDER BY t1.`id` ASC';
	$res = hesk_dbQuery($sql);
	while ($note = hesk_dbFetchAssoc($res))
	{
	?>
    <tr>
    <td>
		<table border="0" width="100%" cellspacing="0" cellpadding="3">
		<tr>
	    <td class="notes"><i><?php echo $hesklang['noteby']; ?> <b><?php echo $note['name']; ?></b></i> - <?php echo hesk_date($note['dt']); ?><br /><img src="../img/blank.gif" border="0" width="5" height="5" alt="" /><br />
	    <?php echo $note['message']; ?></td>
	    </tr>
        </table>
    </td>
    <?php
    if ($can_del_notes || $note['who'] == $_SESSION['id'])
    {
	?>
		<td width="1" valign="top"><a href="admin_ticket.php?track=<?php echo $trackingID; ?>&amp;Refresh=<?php echo mt_rand(10000,99999); ?>&amp;delnote=<?php echo $note['id']; ?>" onclick="return hesk_confirmExecute('<?php echo $hesklang['delnote'].'?'; ?>');"><img src="../img/delete.png" alt="<?php echo $hesklang['delnote']; ?>" title="<?php echo $hesklang['delnote']; ?>" width="16" height="16" /></a></td>
	<?php
    }
    else
    {
    	echo '<td width="1" valign="top">&nbsp;</td>';
    }
	?>
    </tr>
    <?php
	}
    ?>

    </table>

    <!-- END TICKET HEAD -->
	</td>
	<td class="roundcornersright">&nbsp;</td>
</tr>
<tr>
	<td><img src="../img/roundcornerslb.jpg" width="7" height="7" alt="" /></td>
	<td class="roundcornersbottom"></td>
	<td width="7" height="7"><img src="../img/roundcornersrb.jpg" width="7" height="7" alt="" /></td>
</tr>
</table>

        <br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td width="7" height="7"><img src="../img/roundcornerslt.jpg" width="7" height="7" alt="" /></td>
	<td class="roundcornerstop"></td>
	<td><img src="../img/roundcornersrt.jpg" width="7" height="7" alt="" /></td>
</tr>
<tr>
	<td class="roundcornersleft">&nbsp;</td>
	<td>
    <!-- START TICKET REPLIES -->

		<table border="0" cellspacing="1" cellpadding="1" width="100%">
		<tr>
		<td class="ticketalt">

			<table border="0" cellspacing="0" cellpadding="0" width="100%">
			<tr>
			<td valign="top">

			    <table border="0" cellspacing="1">
			    <tr>
			    <td><?php echo $hesklang['date']; ?>:</td>
			    <td><?php echo hesk_date($ticket['dt']); ?></td>
			    </tr>
			    <tr>
			    <td><?php echo $hesklang['name']; ?>:</td>
			    <td><?php echo $ticket['name']; ?></td>
			    </tr>
			    <tr>
			    <td><?php echo $hesklang['email']; ?>:</td>
			    <td><a href="mailto:<?php echo $ticket['email']; ?>"><?php echo $ticket['email']; ?></a></td>
			    </tr>
			    <tr>
			    <td><?php echo $hesklang['ip']; ?>:</td>
			    <td><?php echo $ticket['ip']; ?></td>
			    </tr>
			    </table>

			</td>
			<td style="text-align:right; vertical-align:top;">
			<a href="../print.php?track=<?php echo $trackingID; ?>" target="_blank"><img src="../img/print.png" width="16" height="16" alt="<?php echo $hesklang['printer_friendly']; ?>" title="<?php echo $hesklang['printer_friendly']; ?>" border="0" /></a>

            <?php
            if ($can_edit)
            {
            ?>

			<a href="edit_post.php?track=<?php echo $trackingID; ?>"><img src="../img/edit.png" width="16" height="16" alt="<?php echo $hesklang['edtt']; ?>" title="<?php echo $hesklang['edtt']; ?>" border="0" /></a>

            <?php
            }
            if ($can_delete)
            {
            ?>

            <a href="delete_tickets.php?track=<?php echo $trackingID; ?>&amp;Refresh=<?php echo mt_rand(10000,99999); ?>&amp;delete_ticket=1" onclick="return hesk_confirmExecute('<?php echo $hesklang['dele'].'?'; ?>');"><img src="../img/delete_ticket.png" width="16" height="16" alt="<?php echo $hesklang['dele']; ?>" title="<?php echo $hesklang['dele']; ?>" border="0" /></a>

            <?php
            }
            ?>
            </td>
			</tr>
			</table>

			<?php
			/* custom fields before message */
			$print_table = 0;
			$myclass = ' class="tickettd"';

			foreach ($hesk_settings['custom_fields'] as $k=>$v)
			{
				if ($v['use'] && $v['place']==0)
			    {
			    	if ($print_table == 0)
			        {
			        	echo '<table border="0" cellspacing="1" cellpadding="2">';
			        	$print_table = 1;
			        }

			        echo '
					<tr>
					<td valign="top" '.$myclass.'>'.$v['name'].':</td>
					<td valign="top" '.$myclass.'>'.$ticket[$k].'</td>
					</tr>
			        ';
			    }
			}
			if ($print_table)
			{
				echo '</table>';
			}
			?>

			<p><b><?php echo $hesklang['message']; ?>:</b></p>
			<p><?php echo $ticket['message']; ?><br />&nbsp;</p>

			<?php
			/* custom fields after message */
			$print_table = 0;

			foreach ($hesk_settings['custom_fields'] as $k=>$v)
			{
				if ($v['use'] && $v['place'])
			    {
			    	if ($print_table == 0)
			        {
			        	echo '<table border="0" cellspacing="1" cellpadding="2">';
			        	$print_table = 1;
			        }

			        echo '
					<tr>
					<td valign="top" '.$myclass.'>'.$v['name'].':</td>
					<td valign="top" '.$myclass.'>'.$ticket[$k].'</td>
					</tr>
			        ';
			    }
			}
			if ($print_table)
			{
				echo '</table>';
			}
			?>

			<?php
			if ($hesk_settings['attachments']['use'] && !empty($ticket['attachments'])) {
			    echo '<p><b>'.$hesklang['attachments'].':</b><br />';
			    $att=explode(',',substr($ticket['attachments'], 0, -1));
			    foreach ($att as $myatt) {
			        list($att_id, $att_name) = explode('#', $myatt);
			        echo '<img src="../img/clip.png" width="16" height="16" alt="'.$att_name.'" style="align:text-bottom" /><a href="../download_attachment.php?att_id='.$att_id.'&amp;track='.$trackingID.'">'.$att_name.'</a><br />';
			    }
			    echo '</p>';
			}
			?>

		</td>
		</tr>

		<?php
		$i=1;
		while ($reply = hesk_dbFetchAssoc($result))
		{

			if ($i) {$color='class="ticketrow"'; $i=0;}
			else {$color='class="ticketalt"'; $i=1;}
			$reply['dt']=hesk_date($reply['dt']);
			?>
		    <tr>
		    <td <?php echo $color; ?>>

            	<table border="0" cellspacing="0" cellpadding="0" width="100%">
                <tr>
                <td valign="top">
			        <table border="0" cellspacing="1">
			        <tr>
			        <td><?php echo $hesklang['date']; ?>:</td>
			        <td><?php echo $reply['dt']; ?></td>
			        </tr>
			        <tr>
			        <td><?php echo $hesklang['name']; ?>:</td>
			        <td><?php echo $reply['name']; ?></td>
			        </tr>
			        </table>
                </td>
                <td style="text-align:right; vertical-align:top;">
                <a href="../print.php?track=<?php echo $trackingID; ?>" target="_blank"><img src="../img/print.png" width="16" height="16" alt="<?php echo $hesklang['printer_friendly']; ?>" title="<?php echo $hesklang['printer_friendly']; ?>" border="0" /></a>

	            <?php
	            if ($can_edit)
	            {
	            ?>

				<a href="edit_post.php?track=<?php echo $trackingID; ?>&amp;reply=<?php echo $reply['id']; ?>"><img src="../img/edit.png" width="16" height="16" alt="<?php echo $hesklang['edtt']; ?>" title="<?php echo $hesklang['edtt']; ?>" border="0" /></a>

	            <?php
	            }
				if ($can_delete)
				{
				?>

				<a href="admin_ticket.php?track=<?php echo $trackingID; ?>&amp;Refresh=<?php echo mt_rand(10000,99999); ?>&amp;delete_post=<?php echo $reply['id']; ?>" onclick="return hesk_confirmExecute('<?php echo $hesklang['delt'].'?'; ?>');"><img src="../img/delete.png" width="16" height="16" alt="<?php echo $hesklang['delt']; ?>" title="<?php echo $hesklang['delt']; ?>" border="0" /></a>

				<?php
				}
				?>

                </td>
                </tr>
                </table>

		    <p><b><?php echo $hesklang['message']; ?>:</b></p>
		    <p><?php echo $reply['message']; ?></p>

        <?php
		if ($hesk_settings['attachments']['use'] && !empty($reply['attachments']))
		{
		    echo '<p><b>'.$hesklang['attachments'].':</b><br />';
		    $att=explode(',',substr($reply['attachments'], 0, -1));
		    foreach ($att as $myatt)
		    {
		        list($att_id, $att_name) = explode('#', $myatt);
		        echo '<img src="../img/clip.png" width="16" height="16" alt="'.$att_name.'" style="align:text-bottom" /><a href="../download_attachment.php?att_id='.$att_id.'&amp;track='.$trackingID.'">'.$att_name.'</a><br />';
		    }
		    echo '</p>';
		}

		if ($hesk_settings['rating'] && $reply['staffid'])
		{
			if ($reply['rating']==1)
		    {
		    	echo '<p class="rate">'.$hesklang['rnh'].'</p>';
		    }
		    elseif ($reply['rating']==5)
		    {
		    	echo '<p class="rate">'.$hesklang['rh'].'</p>';
		    }
		}

		echo '</td></tr>';
		}
		?>
        </table>

    <!-- END TICKET REPLIES -->
	</td>
	<td class="roundcornersright">&nbsp;</td>
</tr>
<tr>
	<td><img src="../img/roundcornerslb.jpg" width="7" height="7" alt="" /></td>
	<td class="roundcornersbottom"></td>
	<td width="7" height="7"><img src="../img/roundcornersrb.jpg" width="7" height="7" alt="" /></td>
</tr>
</table>

<?php
if ($can_reply)
{
?>
<!-- START REPLY FORM -->

<br /><hr />

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td width="7" height="7"><img src="../img/roundcornerslt.jpg" width="7" height="7" alt="" /></td>
	<td class="roundcornerstop"></td>
	<td><img src="../img/roundcornersrt.jpg" width="7" height="7" alt="" /></td>
</tr>
<tr>
	<td class="roundcornersleft">&nbsp;</td>
	<td>

	<h3 align="center"><?php echo $hesklang['add_reply']; ?></h3>

	<script language="javascript" type="text/javascript"><!--
	var myMsgTxt = new Array();
	myMsgTxt[0]='';

	<?php
	/* CANNED RESPONSES */
	$options='';
	$sql = "SELECT * FROM `".hesk_dbEscape($hesk_settings['db_pfix'])."std_replies` ORDER BY `reply_order` ASC";
	$result = hesk_dbQuery($sql);
	while ($mysaved=hesk_dbFetchRow($result))
	{
	    $options .= "<option value=\"$mysaved[0]\">$mysaved[1]</option>\n";
	    echo 'myMsgTxt['.$mysaved[0].']=\''.str_replace("\r\n","\\r\\n' + \r\n'", addslashes($mysaved[2]))."';\n";
	    $i++;
	}

	?>

	function setMessage(msgid)
    {
		var myMsg=myMsgTxt[msgid];

        if (myMsg == '')
        {
        	if (document.form1.mode[0].checked)
            {
				document.getElementById('message').value = '';
            }
            return true;
        }

		myMsg = myMsg.replace(/%%HESK_NAME%%/g, '<?php echo hesk_jsString($ticket['name']); ?>');
		myMsg = myMsg.replace(/%%HESK_EMAIL%%/g, '<?php echo hesk_jsString($ticket['email']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom1%%/g, '<?php echo hesk_jsString($ticket['custom1']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom2%%/g, '<?php echo hesk_jsString($ticket['custom2']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom3%%/g, '<?php echo hesk_jsString($ticket['custom3']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom4%%/g, '<?php echo hesk_jsString($ticket['custom4']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom5%%/g, '<?php echo hesk_jsString($ticket['custom5']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom6%%/g, '<?php echo hesk_jsString($ticket['custom6']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom7%%/g, '<?php echo hesk_jsString($ticket['custom7']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom8%%/g, '<?php echo hesk_jsString($ticket['custom8']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom9%%/g, '<?php echo hesk_jsString($ticket['custom9']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom10%%/g, '<?php echo hesk_jsString($ticket['custom10']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom11%%/g, '<?php echo hesk_jsString($ticket['custom1']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom12%%/g, '<?php echo hesk_jsString($ticket['custom2']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom13%%/g, '<?php echo hesk_jsString($ticket['custom3']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom14%%/g, '<?php echo hesk_jsString($ticket['custom4']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom15%%/g, '<?php echo hesk_jsString($ticket['custom5']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom16%%/g, '<?php echo hesk_jsString($ticket['custom6']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom17%%/g, '<?php echo hesk_jsString($ticket['custom7']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom18%%/g, '<?php echo hesk_jsString($ticket['custom8']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom19%%/g, '<?php echo hesk_jsString($ticket['custom9']); ?>');
		myMsg = myMsg.replace(/%%HESK_custom20%%/g, '<?php echo hesk_jsString($ticket['custom10']); ?>');

	    if (document.getElementById)
        {
			if (document.getElementById('moderep').checked)
            {
				document.getElementById('HeskMsg').innerHTML='<textarea name="message" id="message" rows="12" cols="60">'+myMsg+'</textarea>';
            }
            else
            {
            	var oldMsg = document.getElementById('message').value;
		        document.getElementById('HeskMsg').innerHTML='<textarea name="message" id="message" rows="12" cols="60">'+oldMsg+myMsg+'</textarea>';
            }
	    }
        else
        {
			if (document.form1.mode[0].checked)
            {
				document.form1.message.value=myMsg;
            }
            else
            {
            	var oldMsg = document.form1.message.value;
		        document.form1.message.value=oldMsg+myMsg;
            }
	    }

	}
	//-->
	</script>

	<form method="post" action="admin_reply_ticket.php" enctype="multipart/form-data" name="form1">

    <br />

    <div align="center">
    <table border="0">
    <tr>
    	<td>
	    <?php echo $hesklang['select_saved']; ?>:<br />
	    <select name="saved_replies" onchange="setMessage(this.value)">
		<option value="0"> - <?php echo $hesklang['select_empty']; ?> - </option>
		<?php echo $options; ?>
		</select><br />
	    <label><input type="radio" name="mode" id="moderep" value="0" checked="checked" /> <?php echo $hesklang['mrep']; ?></label><br />
	    <label><input type="radio" name="mode" id="modeadd" value="1" /> <?php echo $hesklang['madd']; ?></label>
        </td>
    </tr>
    </table>
    </div>

	<p align="center"><?php echo $hesklang['message']; ?>: <font class="important">*</font><br />
	<span id="HeskMsg"><textarea name="message" id="message" rows="12" cols="60"></textarea></span></p>

	<?php
	/* attachments */
	if ($hesk_settings['attachments']['use'])
    {
	?>
		<p align="center">

		<?php
		echo $hesklang['attachments'].':<br />';
		for ($i=1;$i<=$hesk_settings['attachments']['max_number'];$i++)
		{
			echo '<input type="file" name="attachment['.$i.']" size="50" /><br />';
		}
		?>

		<?php echo$hesklang['accepted_types']; ?>: <?php echo '*'.implode(', *', $hesk_settings['attachments']['allowed_types']); ?><br />
		<?php echo $hesklang['max_file_size']; ?>: <?php echo $hesk_settings['attachments']['max_size']; ?> Kb
		(<?php echo sprintf("%01.2f",($hesk_settings['attachments']['max_size']/1024)); ?> Mb)

		</p>
	<?php
	}
	?>

	<div align="center">
	<center>
	<table>
	<tr>
	<td>
	<?php
	if ($ticket['status']==0||$ticket['status']==1||$ticket['status']==2)
	{
		echo '<label><input type="checkbox" name="close" value="1" /> '.$hesklang['close_this_ticket'].'</label><br />';
	}
	?>
	<label><input type="checkbox" name="set_priority" value="1" /> <?php echo $hesklang['change_priority']; ?> </label>
	 <select name="priority">
	<option value="3" selected="selected"><?php echo $hesklang['low']; ?></option>
	<option value="2"><?php echo $hesklang['medium']; ?></option>
	<option value="1"><?php echo $hesklang['high']; ?></option>
	</select><br />
	<label><input type="checkbox" name="signature" value="1" checked="checked" /> <?php echo $hesklang['attach_sign']; ?></label>
	(<a href="profile.php"><?php echo $hesklang['profile_settings']; ?></a>)
	</td>
	</tr>
	</table>
	</center>
	</div>

	<p align="center"><input type="hidden" name="orig_id" value="<?php echo $ticket['id']; ?>" />
	<input type="hidden" name="orig_name" value="<?php echo $ticket['name']; ?>" />
	<input type="hidden" name="orig_email" value="<?php echo $ticket['email']; ?>" />
	<input type="hidden" name="orig_track" value="<?php echo $trackingID; ?>" />
	<input type="hidden" name="orig_subject" value="<?php echo $ticket['subject']; ?>" />
	<input type="submit" value="<?php echo $hesklang['submit_reply']; ?>" class="orangebutton" onmouseover="hesk_btn(this,'orangebuttonover');" onmouseout="hesk_btn(this,'orangebutton');" /></p>

	</form>

	</td>
	<td class="roundcornersright">&nbsp;</td>
</tr>
<tr>
	<td><img src="../img/roundcornerslb.jpg" width="7" height="7" alt="" /></td>
	<td class="roundcornersbottom"></td>
	<td width="7" height="7"><img src="../img/roundcornersrb.jpg" width="7" height="7" alt="" /></td>
</tr>
</table>

<!-- END REPLY FORM -->
<?php
}

require_once(HESK_PATH . 'inc/footer.inc.php');

/*** START FUNCTIONS ***/

function print_form() {
global $hesk_settings, $hesklang;
require_once(HESK_PATH . 'inc/header.inc.php');
?>
<p class="smaller"><a href="<?php echo $hesk_settings['site_url']; ?>"
class="smaller"><?php echo $hesk_settings['site_title']; ?></a> &gt;
<a href="admin_main.php" class="smaller"><?php echo $hesklang['support_panel']; ?></a>
&gt; <?php echo $hesklang['view_ticket']; ?><br />&nbsp;</p>
</td>
</tr>
<tr>
<td>

<p>&nbsp;</p>
<h3 align="center"><?php echo $hesklang['view_ticket']; ?></h3>
<p>&nbsp;</p>

<form action="admin_ticket.php" method="get">
<div align="center">
<center>
<table class="white" cellspacing="1" cellpadding="8">
<tr>
<td>
<p align="center"><?php echo $hesklang['ticket_trackID']; ?>: <input type="text" name="track" maxlength="10"
size="12"></p>
<p align="center"><input type="hidden" name="Refresh" value="<?php echo rand(10000,99999); ?>">
<input type="submit" value="<?php echo $hesklang['view_ticket']; ?>" class="button"></p>
</td>
</tr>
</table>
</center>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<!-- HR -->
<p>&nbsp;</p>

<?php
require_once(HESK_PATH . 'inc/footer.inc.php');
exit();
} // End print_form()

?>
