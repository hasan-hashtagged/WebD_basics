var http = require('http');
var fs = require('fs');
var url = require('url');

http.createServer( function(req, res) {
  var p=url.parse(req.url, true);
  if(p.pathname == '/fileupload') {
    var q = p.query;
    var val = q.fname +" "+q.lname;
    //res.writeHead(200, {'Content-type': 'text/plain'});
    fs.writeFile('test1.txt',val, function(err) {
      if(err) throw err;
      res.write("Saved!");
      res.end();
    });
  }
  else {
    fs.readFile('testjs.html', function(err, data) {
      if(err) throw err;
      res.writeHead(200, {'Content-type' : 'text/html'});
      res.write(data);
      res.end();
    });
  }
}).listen(8080);
