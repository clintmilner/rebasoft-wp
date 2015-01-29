[form]
<style> 
body {font-family:Arial, Helvetica, sans-serif; font-size:12px;}
h2 { font-size:16px; margin:5px 0; font-weight: bold; color:#663399; }
h3 { font-size:14px; margin:5px 0; color:#333333; }
td {font-size:12px;}
a{color:#663399; }
.news_smallText { padding-top: 1px; margin-top: 2px; font-size:10px;}
img {border:none;}
</style>
<h2 align="center">Send "{subject}" to a Friend</h2>
<table border="0" align="center" style="border:1px solid #ccc;" cellpadding="2">
	<tr>
		<td colspan="2"><h3>Your Information</h3></td>
	</tr>
    <tr>
		<td style="width:40%">Your Name</td>
		<td style="width:60%">[sendnamefld,30]</td>
	</tr>
	<tr>
		<td>Your Email</td>
		<td>[sendmailfld,30]</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			Optional message:<br />
			[mesfld,60,10]
		</td>
	</tr>
	<tr>
		<td colspan="2"><h3>Friend's Information</h3></td>
	</tr>
	<tr>
		<td>Friend's Name</td>
		<td>[recnamefld,30]</td>
	</tr>
	<tr>
		<td>Friend's Email</td>
		<td>[recmailfld,30]</td>
	</tr>
	<tr>
		<td colspan="2"><hr /><br />Please Enter the code seen in the image&nbsp;</td></tr>
	<tr>
		<td>[securityimg]</td><td >[securityfld]</td>
	</tr>
	<tr>
		<th colspan="2" align="center">[buttons]</th>
	</tr>
</table>
[/form]
