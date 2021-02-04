<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sending data to web server..</title>
    <script type="text/javascript">
      var http = new XMLHttpRequest();

      function validate(name) {
        http.abort();
        http.open("GET", "displayer.php?name="+ name, true);
        http.onreadystatechange = function() {
          if(http.readyState == 4) {
            document.getElementById('res').innerHTML = http.responseText;
          }
        }
        http.send(null);
      }
    </script>
  </head>
  <body>
    <div style="background: green; color:white;">
      <h1>Server validation..</h1>
    </div>
    <form>
      <input type="text" name="name" onkeyup="validate(this.value);" /><br>
      <div id="res"></div>
    </form>
  </body>
</html>
