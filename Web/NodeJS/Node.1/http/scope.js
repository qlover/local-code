var globalVariable = 'This is global variable';
function globalFunction(){
	var localVariable = 'This is local variable';
	console.log('Visit variable');
	console.log(globalVariable);
	console.log(localVariable);
}