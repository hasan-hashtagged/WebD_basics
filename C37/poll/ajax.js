var http;
function sendVote(int) {
  http = new XMLHttpRequest();
  if(http == null) {
    alert('XMLHttpRequest does not support');
    return;
  }
  var url = 'vote.php';
  url += "?name="+int;
  url += "&sid="+Math.random();
  http.onreadystatechange = stateChanged;
  http.open("GET", url, true);
  http.send(null);
}

function stateChanged() {
  if(http.readyState == 4 || http.readyState == "complete") {
    document.getElementById('res').innerHTML = http.responseText;
  }
}
