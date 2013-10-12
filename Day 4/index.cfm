<cfset views = createObject("component", "models/views")>
<cfset users = createObject("component", "models/users")>
<cfset views.getView("../views/header.cfm")>
<cfset data = users.getAll()>
<cfset views.getView("../views/body.cfm", data)>

<!--- php GET == url.  php POST == form. --->
<cfif isdefined('url.action')>
	<cfif url.action is "delete">
		<cfset users.deleteUser(url.id)>
		<cfelseif url.action is "addform">
		<cfset views.getView("../views/form.cfm")>
		<cfelseif url.action is "adduser">
		<cfset users.addUser(form.email, form.password, form.dob, form.gender)>
		<cfelseif url.action is "update">	
			<cfset data = users.getAll(url.id)>
			<cfset views.getView('../views/updateform.cfm', data)>
		<cfelseif url.action is "updateUser">	
			<cfset users.updateUser(form.email, form.password, form.dob, form.gender, url.id)>
			<cfset data = users.getAll()>
<!--- 			<cfset views.getView('../views/body.cfm', data)> --->
	</cfif>
</cfif>