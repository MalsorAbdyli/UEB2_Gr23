//DRAG AND DROP
function allowDrop(ev) {
    ev.preventDefault();
    }
    
    function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
    }
    
    function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
    } 
    

//QUESTIONS
$(document).ready(function(){
  $("#question-title").click(function(){
    $("#question-text").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#question-title2").click(function(){
    $("#question-text2").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#question-title3").click(function(){
    $("#question-text3").slideToggle("slow");
  });
});


//CKA OFROJME NE?
  var items = ["KOMODITET", "AMBIENT FAMILJAR", "GLAMUR", "USHQIM DELIKAT", "TRADITË"];
  var buttonClicked = false;
document.getElementById("myButton").addEventListener("click", function(){
  if(!buttonClicked){
    var list = document.getElementById("myList");
    list.style.display = "block";
    for (var i = 0; i < items.length; i++) {
      var newItem = document.createElement("li");
      newItem.innerHTML = items[i];
      list.appendChild(newItem);
    }
    buttonClicked = true;
  }
});

//DATETIMELOCAL
var date = new Date();
var minDate = new Date(date.getFullYear(), date.getMonth(), date.getDate(), 8, 0, 0);
var maxDate = new Date(date.getFullYear(), date.getMonth(), date.getDate(), 23, 0, 0);
document.getElementById("reservation-time").min = minDate.toISOString().slice(0, -1);
document.getElementById("reservation-time").max = maxDate.toISOString().slice(0, -1);