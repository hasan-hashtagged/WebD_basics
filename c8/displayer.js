var http = require('http');
var url = require('url');
var fs = require('fs');

http.createServer(function(req, res) {
  var q = url.parse(req.url, true);
  if(q.pathname == '/fileupload') {
    var p = q.query;
    res.writeHead(200, {'Content-type' : 'text/plain'});
    res.write(p.fname);
    res.write(p.lname);
    res.end();
  }
  else {
    fs.readFile('testjs.html', function(err, data) {
      res.writeHead(200, {'Content-type': 'text/html'});
      res.write(data);
      res.end();
    });
  }
}).listen(8080);
