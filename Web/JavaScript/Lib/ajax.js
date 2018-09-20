
/**
 * encapsulation request Ajax Function
 * @param  {object} as [arguments,this arguments is a object]	
 * @return {boolean}    [successful return True and else return False else]
 */
var ajax = function ajax( args ){
	var xhr = new XMLHttpRequest();
	var path = args.url +'?'+ args.args;
	xhr.open(args.method, path);
	xhr.send(null);
	xhr.onreadystatechange = function(){
		if( xhr.readyState == 4 ){
			if( xhr.status == 200 || xhr.status == 304){
				var data = xhr.responseText;
				args.callback(data);
				return true;
			} else {
				throw TypeError("Failed request data!");
				return false;
			}
		}
	}
}

