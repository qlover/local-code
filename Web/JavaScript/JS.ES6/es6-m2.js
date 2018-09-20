import {foo} from './es6-m1.js'
console.log('m2', foo);//=> bar
// 此时已经在内部改变
setTimeout(() => console.log('m2', foo), 500); //=> baz