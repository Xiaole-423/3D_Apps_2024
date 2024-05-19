// JavaScript Gallery Generator
// Create the XMLHttpRequest Object for communicating with the web server
	var xmlHttp = new XMLHttpRequest ();

	//var numberOfColumns = 1;
	// Stores newly generated gallery HTML code
	var htmlCode = "";
	// Temporarily stores server response while code is generated
	var response;

$(document).ready(function() {
	
	// Set up a path variable to the PHP function that reads the image directory to find the thumbnail file names
	var send = "application/scripts/php/hook.php";
	// Open the connection to the web server
	xmlHttp.open("GET", send, true);
	// Tell the server that the client has no outgoing message, i.e. we are sending nothing to the server
	xmlHttp.send(null);
	// Check we get a valid server response
	xmlHttp.onreadystatechange = function() {

		if(xmlHttp.readyState == 4) {

			response = xmlHttp.responseText.split("~");

			htmlCode += '</tr>';

			for (var i=0;i<response.length;i++) {

				htmlCode += '<a href="application/assets/images/gallery_images'+ response[i] +' " ' + ' data-fancybox data-caption="My X3D model render" > ';
				htmlCode += '<img class="card-img-top img-thumbnail" src="application/assets/images/gallery_images' + response[i] + '"/>';
				htmlCode += '</a>';	
				htmlCode += '</td>';	

				/*
				if(((i+1)%numberOfColumns) == 0 ){
					htmlCode+='</tr></tr>';
				}
				*/
			}

			htmlCode += '</tr>';

			document.getElementById('gallery').innerHTML = htmlCode;
		}
	}
});

