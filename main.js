var spawn   = require('child_process').spawn;
var express = require('express');
var app     = express();

app.use(express.static(__dirname));

app.get('/colorsRequest', function(req, res) {
  var command = spawn(__dirname + '/run.sh', [ req.query.color || '' ]);
  var output  = [];

  command.stdout.on('data', function(chunk) {
    output.push(chunk);
  }); 

  command.on('close', function(code) {
    if (code === 0)
      res.send(Buffer.concat(output));
    else
      res.send(500); // when the script fails, generate a Server Error HTTP response
  });
});

app.listen(3000);
