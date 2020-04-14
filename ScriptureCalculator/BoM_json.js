var students = null;
            
// Issue the XMLHttpRequest object to call webserver and retrieve classlist.html JSON file
function getJSONFile() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "https://harada-braden.github.io/scriptures-json-master/book-of-mormon.json", true);
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //Convert the JSON text back to an object
            students = JSON.parse(this.responseText);
            showStudents();
        }
    }
    xhttp.send();   
}

//  Display all the Book of Mormon Data in the JSON object array.
function showBoM(){
    var result = ""; 
    
    for(var i = 0; i < bom.books.length; i++){
          
        result += "<p><b>Book: </b>" + bom.books[i].book + ", <b>Chapter: </b>" + bom.books[i].chapter + ", <b>Verses: </b>" + bom.books[i.length - 1].verse + "</p>";
    }
    document.getElementById("div_students").innerHTML = result;
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

function bomcalc() {
    // Input from user
    var text = document.getElementById('Days').value;
    var text = document.getElementById('Months').value;

    // Convert text to Number
    var d = parseFloat(text);
    var m = parseFloat(text);

    // Variables for Pages and Chapters
    var p = 531
    var c = 239

    //Formula
    var ps = 531 / d
    var cs = 239 / d
}