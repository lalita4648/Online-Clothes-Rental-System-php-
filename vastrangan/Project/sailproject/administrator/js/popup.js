// JavaScript Document

function openpopup(id){
      //Calculate Page width and height
      var pageWidth = window.innerWidth;
      var pageHeight = window.innerHeight;
      if (typeof pageWidth != "number"){
      if (document.compatMode == "CSS1Compat"){
            pageWidth = document.documentElement.clientWidth;
            pageHeight = document.documentElement.clientHeight;
      } else {
            pageWidth = document.body.clientWidth;
            pageHeight = document.body.clientHeight;
      }
      } 
      //Make the background div tag visible...
      var divbg = document.getElementById('bg');
      divbg.style.visibility = "visible";
       
      var divobj = document.getElementById(id);
      divobj.style.visibility = "visible";
      if (navigator.appName=="Microsoft Internet Explorer")
      computedStyle = divobj.currentStyle;
      else computedStyle = document.defaultView.getComputedStyle(divobj, null);
      //Get Div width and height from StyleSheet
      var divWidth = computedStyle.width.replace('px', '');
      var divHeight = computedStyle.height.replace('px', '');
      var divLeft = (pageWidth - divWidth) / 2;
      var divTop = (pageHeight - divHeight) / 2;
      //Set Left and top coordinates for the div tag
      divobj.style.left = divLeft + "px";
      divobj.style.top = divTop + "px";
      //Put a Close button for closing the popped up Div tag
      if(divobj.innerHTML.indexOf("closepopup('" + id +"')") < 0 )
      divobj.innerHTML = "<a href=\"#\" onclick=\"closepopup('" + id +"')\"><span class=\"close_button\">X</span></a>" + divobj.innerHTML;
}
function closepopup(id){
      var divbg = document.getElementById('bg');
      divbg.style.visibility = "hidden";
      var divobj = document.getElementById(id);
      divobj.style.visibility = "hidden";
}
/*----- validation of popup start here -------------------*/
function invalid_banner()
	{
		if(document.getElementById("banner").value == "")
  		{
	  		alert("Please Enter  Upload Image! ");
			document.getElementById("banner").focus()
			return false;
		} 
	}
 function invalid()
	{
 	 if(document.getElementById("project_title").value == "")
  		{
	  			alert("Please Enter  Project Title! ");
				document.getElementById("project_title").focus()
				return false;
		}
		
	if(document.getElementById("short_desc").value == "")
  		{
	  		alert("Please Enter  Short Description! ");
			document.getElementById("short_desc").focus()
			return false;
		} 
	if(document.getElementById("file").value == "")
  		{
	  		alert("Please Enter  Upload Image! ");
			document.getElementById("file").focus()
			return false;
		} 
	if(document.getElementById("description").value == "")
  		{
	  		alert("Please Enter  Description! ");
			document.getElementById("description").focus()
			return false;
		} 	
 	}
function invalid_gallery()
	{
		 if(document.getElementById("image_title").value == "")
  		{
	  			alert("Please Enter  Image Title! ");
				document.getElementById("image_title").focus()
				return false;
		}
		
	if(document.getElementById("image_description").value == "")
  		{
	  		alert("Please Enter  Image Description! ");
			document.getElementById("image_description").focus()
			return false;
		} 
	if(document.getElementById("gallery_small").value == "")
  		{
	  		alert("Please Upload Small Image! ");
			document.getElementById("gallery_small").focus()
			return false;
		} 
	if(document.getElementById("gallery").value == "")
  		{
	  		alert("Please Upload Big Image! ");
			document.getElementById("gallery").focus()
			return false;
		} 	
	}		
/*function SendTellAfriend()
{
	var urlname = document.URL;
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;


	if(document.getElementById("project_title").value == "" || trimmed(document.getElementById("project_title").value)== "")
	{
		document.getElementById("project_title").value = "Enter your Project Title"
		return;
	}

	if(document.getElementById("short_desc").value == "" || trimmed(document.getElementById("short_desc").value)== "")
	{
		alert('hi');
		//document.getElementById("short_desc").value = "Enter your Short Description"
		//return;
	}
	
	if(document.getElementById("project_image").value == "" || trimmed(document.getElementById("project_image").value)== "")
	{
		document.getElementById("project_image").value = "Enter your Project Image"
		return;
	}
	if(document.getElementById("description").value == "" || trimmed(document.getElementById("description").value)== "")
	{
		document.getElementById("description").value = "Enter your Description"
		return;
	}
}
*/