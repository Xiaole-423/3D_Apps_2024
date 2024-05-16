// JavaScript Gallery Generator
$(document).ready(function() {
	// Create the XMLHttpRequest Object for communicating with the web server
	var xmlHttp = new XMLHttpRequest ();
	// Stores newly generated gallery HTML code
	var htmlCode = "";
	// Temporarily stores server response while code is generated
	var response;
	// Set up a path variable to the PHP function that reads the image directory to find the thumbnail file names
	var send = "application/scripts/php/hook.php";
	// Open the connection to the web server
	xmlHttp.open("GET", send, true);
	// Tell the server that the client has no outgoing message, i.e. we are sending nothing to the server
	xmlHttp.send(null);
	// Check we get a valid server response
	xmlHttp.onreadystatechange = function() {

		/* lab1 */
		if(xmlHttp.readyState == 4) {

			response = xmlHttp.responseText.split("~");

			for (var i=0;i<response.length;i++) {

				htmlCode += '<a href="application/assets/images/gallery_images'+ response[i] +' " ' + ' data-fancybox data-caption="My X3D model render" > ';
				htmlCode += '<img class="card-img-top img-thumbnail" src="application/assets/images/gallery_images' + response[i] + '"/>';
				htmlCode += '</a>';			
			}

			document.getElementById('gallery').innerHTML = htmlCode;
		}
		
	}
});

