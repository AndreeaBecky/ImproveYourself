function myFunction() {
  hideFooter();
  createPic();
}

function createPic() {
  var imgs =
      [ 'https://ih0.redbubble.net/image.88477969.8336/flat,550x550,075,f.u2.jpg',
        'https://marketplace.canva.com/MAA_AfpMd4Q/2/0/thumbnail_large/canva-majestic-canyon-pinterest-graphic-MAA_AfpMd4Q.jpg',
	      'https://marketplace.canva.com/MAB2-mP5p6g/2/0/thumbnail_large/canva-typographic-sports-motivational-poster-MAB2-mP5p6g.jpg',
        'https://i.pinimg.com/originals/10/a3/0c/10a30cc7419cfb65c9c9cb1200024c6f.png',
	      'http://fredwideman.com/images/2017/07/11/a81117340700edc5534ec1972ed68204--silly-quotes-art-quotes.jpg',
        'https://i.pinimg.com/564x/86/26/4c/86264c9e5aeb92f7cbe44e60c470240b.jpg'
      ];

  for (var i = 0; i < imgs.length; i++) {
    var items = document.createElement("IMG");
    items.setAttribute("id", "pics");
    items.setAttribute("src", imgs[i]);
    items.setAttribute("width", "400");
    items.setAttribute("height", "600");
    items.setAttribute("alt", "pic");
    document.getElementById("placehere").appendChild(items);
  }
}

function hideFooter() {
  var footer = document.getElementsByClassName("footer")[0];
  footer.style.display = "none";
}

function removeElementsByClass() {
  var list = document.getElementById("placehere");
  while (list.hasChildNodes) {
    list.removeChild(list.firstChild);
  }
}

function showUsers() {
  hideFooter();
  insertUsers();
}

function insertUsers() {
var xhr;
if (window.XMLHttpRequest) { // Mozilla, Safari, ...
  xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
  xhr = new ActiveXObject("Microsoft.XMLHTTP");
}

var data = "username=";
  xhr.open("POST", "getUsers.php", true); 
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
  xhr.send(data);
	xhr.onreadystatechange = display_data;
	function display_data() {
	  if (xhr.readyState == 4 && xhr.status == 200) {
    // the location where the data will be shown
	  document.getElementById("suggestion").innerHTML = xhr.responseText;
    }
  }
  
}