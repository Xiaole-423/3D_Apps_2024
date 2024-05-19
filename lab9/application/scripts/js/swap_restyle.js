// JavaScript Document
var counter = 0;
//Declare a variable called "currentModel" to record the model showed on the current page
var currentModel;
//
var currentX3d;

$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		//initial setup
		$('#home').show();
		//$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 
		

		$('#navHome').click(function(){
			$('#home').show();
			//$('#about').hide();
			$('#models').hide();
			$('#interaction').hide();
	
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
				  
		});

		/*
		$('#navAbout').click(function(){
			$('#home').hide();
			$('#about').show();
			$('#models').hide();
			$('#interaction').hide();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 	  
		});
		*/

		$('#navModels').click(function(){
			//initial setup
			$('#home').hide();
			//$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 

			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
			
		});
	}

	function selectModel() {

		//initial setup
		currentModel='ColaID';
		//
		currentX3d='ColaModel';

		$('#coke').show();
		//$('#about').hide();
		$('#sprite').hide();
		$('#pepper').hide();
		$('#interaction').hide(); 

		$('#navCoke').click(function(){
			//When select the cola model, assign the "nameSpaceName" value set in the page to "currentModel"
			currentModel='ColaID';
			//
			currentX3d='ColaModel';

			$('#coke').show();
			$('#sprite').hide();
			$('#pepper').hide();
			$('#interaction').show(); 

			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
			
		});

		$('#navSprite').click(function(){
			//When select the sprite model, assign the "nameSpaceName" value set in the page to "currentModel"
			currentModel='SpriteID';
			//
			currentX3d='SpriteModel';

			$('#coke').hide();
			$('#sprite').show();
			$('#pepper').hide();
			$('#interaction').show(); 

			$('#cokeDescription').hide();
			$('#spriteDescription').show();
			$('#pepperDescription').hide(); 
				  	  
		});

		$('#navPepper').click(function(){
			//When select the pepper model, assign the "nameSpaceName" value set in the page to "currentModel"
			currentModel='PepperID';
			//
			currentX3d='PepperModel';

			$('#coke').hide();
			$('#sprite').hide();
			$('#pepper').show();
			$('#interaction').show(); 

			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').show(); 
				   
		});
	}

});

function changeLook() {
	counter += 1;
	switch (counter) {
		case 1:
			document.getElementById('bodyColor').style.backgroundColor = 'lightblue';
			document.getElementById('headerColor').style.backgroundColor = '#FF0000';
			document.getElementById('footerColor').style.backgroundColor = '#FF9900';
			break;
		case 2:
			document.getElementById('bodyColor').style.backgroundColor = '#FF6600';
			document.getElementById('headerClor').style.backgroundColor = '#FF9999';
			document.getElementById('footerColor').style.backgroundColor = '#996699';
			break;
		case 3:
			document.getElementById('bodyColor').style.backgroundColor = 'coral';
			document.getElementById('headerColor').style.backgroundColor = 'darkcyan';
			document.getElementById('footerColor').style.backgroundColor = 'darksalmom';
		case 4:
			counter = 0;
			document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
			document.getElementById('headerColor').style.backgroundColor = 'chocolate';
			document.getElementById('footerColor').style.backgroundColor = 'dimgrey';
			break;
	}
}

function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = '#790022';
	document.getElementById('headerColor').style.backgroundColor = '#f3b6c8';
	document.getElementById('footerColor').style.backgroundColor = '#f3b6c8';
	document.getElementById('rowColor1').style.backgroundColor = '#790022';
	document.getElementById('rowColor2').style.backgroundColor = 'rgb(85, 2, 34)';
	document.getElementById('rowColor3').style.backgroundColor = 'rgb(85, 2, 34)';
	document.getElementById('rowColor4').style.backgroundColor = 'rgb(85, 2, 34)';
}

