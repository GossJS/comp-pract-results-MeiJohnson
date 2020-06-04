module.exports = class Timer {
  constructor(secs) {
    this._secs = secs;
  };
  get start() { return new Promise(resolve => {
    setTimeout(() => resolve(1), this._secs*1000); 
  });
};

const t = new Timer(3)