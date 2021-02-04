var http;
function sendTitle(str) {
  http = new XMLHttpRequest();
  var url = "getbook.php";
  url += "?q="+str;
  http.onreadystatechange=stateChanged;
  http.open("GET", url, true);
  http.send(null);
  function stateChanged() {
    if( http.readyState == 4 || http.readyState == "complete" ) {
      document.getElementById('res').innerHTML = http.responseText;  
    }
  }
}
