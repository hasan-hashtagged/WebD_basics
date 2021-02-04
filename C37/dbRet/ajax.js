var http;
function sendName(name) {
  http = new XMLHttpRequest();
  var url = "getname.php";
  url += "?name="+name;
  url += "&sid="+Math.random();
  http.onreadystatechange = stateChanged;
  http.open("GET", url, true);
  http.send(null);
}
function stateChanged() {
  if( http.readyState==4 || http.readyState=="complete") {
    document.getElementById('res').innerHTML = http.responseText;
  }
}
