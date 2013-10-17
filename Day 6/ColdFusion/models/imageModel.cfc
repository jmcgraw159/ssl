<cfcomponent>
	<cffunction name="resize" returntype="void" access="public">
	<cfargument name="file" type="any">
	<cfset myImage=ImageNew("file")>
	<cfset ImageResize(myImage,"50%","","blackman",2)>
	<cfimage source="#myImage#" action="write" destination="../test_myImage.jpeg" overwrite="yes">
	<img src="test_myImage.jpeg"/>
	</cffunction>

	 <cffunction name="fileUpload" returntype="void" access="public">
        <cfargument name="file" type="any">
        <cffile 
            action = "upload"
            destination = "../"
            fileField = file
            accept = "image/jpg, image/gif">
    </cffunction>
</cfcomponent>