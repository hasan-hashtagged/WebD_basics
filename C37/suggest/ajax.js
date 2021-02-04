var http;

function sendSuggestion(name) {
  http = new XMLHttpRequest();
  if( name.length == 0) {
    document.getElementById('res').innerHTML = "";
    return;
  }
  var url = "suggest.php?";
  url += "q="+name;
  http.onreadystatechange = stateChanged;
  http.open("GET", url, true);
  http.send(null);
}

function stateChanged() {
  if(http.readyState ==4 || http.readyState == "complete") {
    document.getElementById('res').innerHTML = http.responseText;
  }
}
