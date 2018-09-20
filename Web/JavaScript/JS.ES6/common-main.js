var mod = require('./common-lib');

console.log('common-lib counter->', mod.counter); // 3
mod.incCounter();
console.log('common-lib counter->', mod.counter); // 3