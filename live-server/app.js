var createError = require('http-errors');
var express = require('express');
var path = require('path');
var livereload = require("livereload");
var connectLiveReload = require("connect-livereload");

var phpExpress = require('php-express')({
  binPath: 'php'
});

const liveReloadServer = livereload.createServer();
liveReloadServer.server.once("connection", () => {
  setTimeout(() => {
    liveReloadServer.refresh("/");
  }, 100);
});

var app = express();
app.set('views', 'public');
app.engine('php', phpExpress.engine);
app.set('view engine', 'php');
app.use(connectLiveReload());
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(express.static(path.join(__dirname, 'public')));

app.all('/', phpExpress.router)


module.exports = app;
