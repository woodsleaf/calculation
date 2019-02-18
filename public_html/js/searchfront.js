var elem = document.getElementById('search');
elem.onkeyup = function () {
	myFunction();
}
function myFunction() {
    var x = document.getElementById('search');
    //x.value = x.value.toLowerCase();
	loadDoc('searchback.php', x.value);	//'searchback.php'
}
function loadDoc(url, search) {
  var request = new XMLHttpRequest();
  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		var serverResponse = this.responseText;
    	document.getElementById('resSearch').innerHTML = serverResponse;
    }
  }
  request.open('POST', url, true);
  request.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  request.send("search=" + search);
}