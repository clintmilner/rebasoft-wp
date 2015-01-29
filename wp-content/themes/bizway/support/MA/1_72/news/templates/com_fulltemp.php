
<table style="border: 1px solid #ccc;">
	<tr>
		<td><h2>{subject}</h2>
			<p>{fullstory}</p>
            <p class="news_smallText">Published {date} by {user}</p>
		</td>
	</tr>
	<tr>
		<th style="border-top:1px solid #ccc;">Comments</th>
	</tr>
	{comments}
	<tr>
		<td align="center"S>{prev_page|<<< Prev} {pagination} {next_page|Next >>>}</td>
	</tr>
</table>
<p></p>
<table style="border: 1px solid #ccc;">
	<tr >
		<td><h3>Add Comment</h3></td>
	</tr>
	<tr>
		<td align="center">[form]
			<table border="0" cellspacing="0" cellpadding="3" width="100%">
				<tr>
					<td align="right" style="width: 40%">Name</td>
					<td align="left" style="width: 60%">[namefld,20]</td>
				</tr>
				<tr>
					<td align="right">Email</td>
					<td align="left">[mailfld,20] (optional)</td>
				</tr>
<tr>
<td align="right">Remember me</td>
<td align="left">[rememberchk]</td>
</tr>
				<tr>
					<td colspan="2" align="center">
						 Comment<br />
						[comfld,60,10]
					</td>
				</tr>
				<tr>
					<td align="right">Characters Left</td>
					<td align="left">[comlen]</td>
				</tr>
				<tr>
					<td align="right"> </td>
					<td align="left">[securityimg]</td>
				</tr>
				<tr>
					<td align="right">Security Code</td>
					<td align="left">[securityfld] (copy the security code from the image above)</td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td align="left">[pwfld,20] (admins only)</td>
				</tr>
				<tr style="background-color:whitesmoke">
					<td colspan="2" align="center">
						[buttons]
					</td>
				</tr>
			</table>
			[/form]
		</td>
	</tr>
</table>