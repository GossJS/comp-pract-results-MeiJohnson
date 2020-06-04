"use strict";

var _timer = require("./timer.js");

var timer1 = new _timer.Timer(5);
timer1.start.then(function (x) {
  return document.title = x;
});