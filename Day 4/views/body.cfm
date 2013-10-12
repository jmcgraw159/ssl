<b>Emails:</b><br>

<!---<cfdump var="#data#">--->

<cfloop query="data">
	<cfoutput>#email#</cfoutput>
	<cfoutput>#password#</cfoutput>
	<cfoutput>#dob#</cfoutput>
	<cfoutput>#gender#</cfoutput>
	<a href="?action=update&id=<cfoutput>#id#</cfoutput>">Update</a>
	<a href="?action=delete&id=<cfoutput>#id#</cfoutput>">Delete</a><br>
</cfloop>

<a href="?action=addform">Add User</a><br>