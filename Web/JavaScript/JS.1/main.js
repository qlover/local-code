// JavaScript Document

/*var userObject = new Object();
userObject.lastLoginTime = new Date();
alert(userObject.lastLoginTime);

var userObject = {}; // equivalent to new Object()
userObject["lastLoginTime"] = new Date();
alert(userObject["lastLoginTime"]);

var userObject = {"lastLoginTime": new Date() };
alert(userObject.lastLoginTime);
*/
<!--函数定义---->
/*//1.
function func(x)
{
	alert(x);
}
func("blah");
//2.
var func = function(x)
{
	alert(x);
}
func("blah2");
//3.
var func = new Function("x", "alert(x)");
func("blah3");*/

<!---函数的使用--->
//1.
/*function sayHi(x) {
alert("Hi, " + x + "!");
}
sayHi.text = "Hello World!";
sayHi["text2"] = "Hello World... again.";
alert(sayHi["text"]); // displays “Hello World!”
alert(sayHi.text2); // displays “Hello World... again.”
//2.
var greet = function(x)
{
	alert("Hi," + x);
}
greet("MSDM readers");
//3.
*/

<!-------函数 pratice-------->

function func(x,y)
{
		y = "what you name? ";		
		alert(y);
		y = "Are you?"
		alert(x + y);
		
}

//func("My name is Tom.");
//func("My name is Marry.",func("She is my sister.",func("He is my friend.")));

function first(x,y)
{
	
	alert("My web");
	if(x == null){
		return alert("not string!");
	}
	return alert(x);
}
first();
first(first("This is first !"));


<!-----I disunderstand-------->
/*// passing a function as an argument to another
function square(x) {
return x * x;
}
function operateOn(num, func) {
return func(num);
}
// displays 256
alert(operateOn(16, square));
// functions as return values
function makeIncrementer() {
return function(x) { return x + 1; };
}
var inc = makeIncrementer();
// displays 8
alert(inc(7));
// functions stored as array elements
var arr = [];
arr[0] = function(x) { return x * x; };
arr[1] = arr[0](2);
arr[2] = arr[0](arr[1]);
arr[3] = arr[0](arr[2]);
// displays 256
alert(arr[3]);
// functions as object properties
var obj = {"toString" : function() { return "This is an object."; } };
// calls obj.toString()
alert(obj);


*/
<!----->

























