module.exports = 
	function(request,response){
		var http = require('http');
		var fs = require('fs');
		var path = require('path')
		console.log('Request', request.url);
		if(request.url === '/'){
			fs.readFile('views/index.html', 'utf8', function(errors, contents){
				response.writeHead(200, {'Content-type': 'text/html'});
				response.write(contents);
				response.end();
			});
		} else if(path.extname(request.url) === '.html'){
			fs.readFile('views/' + request.url, 'utf8', function(errors, contents){
				response.write(contents);
				response.end();
			});
		} else if(path.extname(request.url) === '.css') {
		  fs.readFile('stylesheets/' + request.url, 'utf8', function (errors, contents){
		      response.writeHead(200, {'Content-Type': 'text/css'});  // send data about response
		      response.write(contents);  //  send response body
		      response.end(); // finished!
		  });
	  } else if(path.extname(request.url) === '.png') {
		  fs.readFile('images/' + request.url, function (errors, contents){
		      response.writeHead(200, {'Content-Type': 'image/png'});  // send data about response
		      response.write(contents);  //  send response body
		      response.end(); // finished!
		  });
		} else {
			response.end('File not found!!!');
		}

	}
