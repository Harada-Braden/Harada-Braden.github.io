function doubleHeight()
{
	document.getElementById('pic_of_the_family').style.width = "75%";
}

function returnToNormal()
{
	document.getElementById('pic_of_the_family').style.width = "50%";
	document.getElementById('pic_of_the_family').style.borderRadius = "20px";
}

function changeRadius()
{
	document.getElementById('pic_of_the_family').style.borderRadius = "100px";
}

function changeColor()
{
	var color = prompt("What color? (can be name, hex, or rgb)");
	var buttons = document.getElementsByClassName('myButtons');
	
	for(var i=0; i < buttons.length; i++)
    {
        buttons[i].style.color = color;
    }
}

function changeBorder()
{
	document.getElementById('pic_of_the_family').style.border = "10px solid black";
	
}

function changeBorderBack()
{
	document.getElementById('pic_of_the_family').style.border = "none";
	document.getElementById('pic_of_the_family').style.borderRadius = "20px";

}