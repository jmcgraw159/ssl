<cfcomponent>
	<cffunction name="getAll" returntype="query">
		<cfquery datasource="ssl" name="users">
			select * from users
		</cfquery>
		<cfreturn users>
	</cffunction>
	<cffunction name="deleteUser">
	<cfargument name="id" required="yes">
		<cfquery datasource="ssl" name="users">
			delete from users where id = 
			<cfqueryparam value="#id#">
		</cfquery>
	</cffunction>
	<cffunction name="addUser">
	<cfargument name="email" required="yes">
	<cfargument name="password" required="yes">
	<cfargument name="dob" required="yes">
	<cfargument name="gender" required="yes">
		<cfquery datasource="ssl" name="users">
			insert into users(email, password, dob, gender)values(
			<cfqueryparam value="#email#">, <cfqueryparam value="#password#">, <cfqueryparam value="#dob#">, <cfqueryparam value="#gender#">)
		</cfquery>
	</cffunction>
		<cffunction name="updateUser" returntype="void">
		<cfargument name="email" required="yes">
		<cfargument name="password" required="yes">
		<cfargument name="dob" required="yes">
		<cfargument name="gender" required="yes">
		<cfargument name="id" required="yes">
		<cfquery datasource="ssl" name="users">
			update users set
			email = <cfqueryparam value="#email#">,
			password = <cfqueryparam value="#password#">,
			password = <cfqueryparam value="#dob#">,
			password = <cfqueryparam value="#gender#">
			where id = <cfqueryparam value="#id#">;
		</cfquery>
	</cffunction>
</cfcomponent>