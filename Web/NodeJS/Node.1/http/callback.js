function learn(something){
	console.log(something)
}
/**
 *
 * 同步与异步
 *
 *
 * 同步：前一个任务执行完成后一个任务才执行，与顺序执行有关    
 * 异步：前一个任务执行与后一个任务执行顺序无关    
 * 
 */
function we(callback, something){
	something += ' is cool'
	callback(something)
}

we(learn, 'Nodejs')

we(function(something){
	console.log(something)
}, 'JavaScript')
