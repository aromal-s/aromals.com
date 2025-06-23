var http=require('http')
var fs=require('fs')
const { text } = require('stream/consumers')
http.createServer(function(req,res){
    fs.readFile('index.html',function(err,data){
        res.writeHead(200,{'Content-Type':'text/html'})
        res.write(data);
        res.end();
    })
}).listen(7000)