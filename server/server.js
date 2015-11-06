var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var clients = {};
var sys = require('util');


io.set('log level', 0);


// Simply keep a list of clients as they join, and rebroadcast submitted data
// from the client to them.
io.sockets.on('connection', function (socket) {
    sys.debug('Connected ' + socket.id);
    clients[socket.id] = socket;

    socket.on('info', function(msg) {
        sys.debug(socket.id + ': ' + msg);
    });

    socket.on('data', function(data) {
        console.log('ok go data');
        io.emit('update', data);
    });

    socket.on('close', function() {
        delete clients[socket.id];
    });
});


//listen 3000 port
http.listen(3000, function(){
});