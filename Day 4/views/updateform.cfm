<cfloop query="data">

<form action="?action=updateUser&id=<cfoutput>#id#</cfoutput>" method="post">
	<b>Edit Info</b><br>
	<input type="email" name="email" placeholder="email" value="<cfoutput>#email#</cfoutput>"><br>
	<input type="passwood" name="password" placeholder="password" value="<cfoutput>#password#</cfoutput>"><br>
	<input type="date" name="dob" placeholder="yyyy-mm--dd" value="<cfoutput>#dob#</cfoutput>"><br>
	<input type="text" name="gender" placeholder="gender" value="<cfoutput>#gender#</cfoutput>"><br>
	<input type="submit" value="Edit">
</form>	

</cfloop>	