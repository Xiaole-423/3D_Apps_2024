//adapted from example code 'benskitchen.com'

var spinning = false;
//Set a variable called "id" 
var id;

function spin()
{
	//use "id" to record a string consisting of the variable "currentModel" in swap_restyle.js and " --" and "DEF"
	id=currentModel+'__'+'Timer';

	spinning = !spinning;
	//Confirm the corresponding x3d file by "currentModel" recorded in "id", and find the corresponding property in the x3d file by "DEF" recorded in "id"
	document.getElementById(id).setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	id=currentModel+'__'+'Timer';

	spinning = false;
	document.getElementById(id).setAttribute('enabled', spinning.toString());
}

function animateModel()
{
	id=currentModel+'__'+'Timer';

	if(document.getElementById(id).getAttribute('enabled')!= 'true')
        document.getElementById(id).setAttribute('enabled', 'true');
    else
        document.getElementById(id).setAttribute('enabled', 'false');
	/*
    if(document.getElementById('model__Timer').getAttribute('enabled')!= 'true')
        document.getElementById('model__Timer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__Timer').setAttribute('enabled', 'false');
	*/
}
/**/
function wireframe()
{
	id=currentX3d;

	var e = document.getElementById(id);
	
	//var e = document.getElementById('model');

	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

function polygon()
{
	id=currentX3d;

	var e = document.getElementById(id);
	
	//var e = document.getElementById('model');

	e.runtime.togglePoints(false);
	e.runtime.togglePoints(false);
}

var lightOn = true;

function headlight()
{
	id=currentModel+'__'+'headlight';

	lightOn = !lightOn;
	document.getElementById(id).setAttribute('headlight', lightOn.toString());
	/*
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
	*/
}

function cameraFront()
{
	id=currentModel+'__'+'cameraFront';

	document.getElementById(id).setAttribute('bind', 'true');
	/*
	document.getElementById('model__cameraFront').setAttribute('bind', 'true');
	*/
}

function cameraLeft()
{
	id=currentModel+'__'+'CameraLeft';

	document.getElementById(id).setAttribute('bind', 'true');
	/*
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
	*/
}

function cameraBack()
{
	id=currentModel+'__'+'CameraBack';

	document.getElementById(id).setAttribute('bind', 'true');
	/*
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
	*/
}

function cameraTop()
{
	id=currentModel+'__'+'CameraTop';

	document.getElementById(id).setAttribute('bind', 'true');
	
	//document.getElementById('model__CameraTop').setAttribute('bind', 'true');
	
}

/*
function cameraRight()
{
	id=currentModel+'__'+'CameraRight';

	document.getElementById(id).setAttribute('bind', 'true');
	
	//document.getElementById('model__CameraRight').setAttribute('bind', 'true');
	
}
*/