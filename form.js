var input = document.getElementById("myInput");
var textArea = document.getElementById("textArea");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
  textArea.style.display = "block";
  } else {
  textArea.style.display = "none"
  }
});