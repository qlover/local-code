//this is my function collage
var $ = function(args){
	return new Base(args);
};
//基本类库
function Base(args){
	this.ele = [];

	if(typeof args == 'string'){
		switch(args.charAt(0)){
			case '#':
				this.getId(args.substring(1));
				break;
			case '.':
				this.getClass(args.substring(1));
				break;
			default:
				this.getTag(args);
		}
	}else if(typeof args == 'object'){
		if(args != undefined){
			this.ele[0]=args;
		}
	}
};

//css 选择器子节点
Base.prototype.find = function(){
	for(var i = 0; i < this.ele.length; i++){
		switch(args.charAt(0)){
			case '#':
				this.getId(args.substring(1));
				break;
			case '.':
				this.getClass(args.substring(1));
				break;
			default:
				this.getTag(args);
		}

	}
	return this;
}


Base.prototype.getId = function(id){
	this.ele.push(document.getElementById(id));
	return this;
};
Base.prototype.getTag = function(tag){
	var btn = document.getElementsByTagName(tag);
	for(var i=0; i < btn.length; i++){
		this.ele.push(btn[i]);
	}
	return this;
};
Base.prototype.getName = function(name){
	return document.getElementsByName(name);
},
Base.prototype.getClass = function(cname,idname){
	var node = null;
	if(arguments.length == 2){
		node = document.getElementById(idname);
	}else{
		node = document;
	}
	var dall = node.getElementsByTagName('*');
	for(var i=0; i < dall.length; i++){
		if(dall[i].className == cname){
			this.ele.push(dall[i]);	
		}	
	}
	return this;
}

Base.prototype.getElement = function(num){
	//下面的原理，把 ele 获取到的全部元素的集合交给 el.然后把 ele 清空，再把 el 的唯一的那个元素交给 ele，最后 ele 也就只有一个，也是用户需要的第 num 个
	var el = this.ele[num];	//将 ele 获取到的数组的第 num 个赋给 el
	this.ele = [];			//将 ele 获取到的数组清空，因为只获取 num 下标的那个
	this.ele[0] = el;		//将 el 获取到的 ele 数组的第 num 个再重新赋给 ele
	el = null;				//最后把 el 销毁了
	return this;
}	

//封装类库

//css 方法	
Base.prototype.css = function(attr,value){
	for(var i=0; i <this.ele.length; i++){
		//在不传递参数的时候获取该元素计算后的 css 样式 
		if(arguments.length == 1){		
			return getStyle(this.ele[i],attr);
		}
		this.ele[i].style[attr] = value;
	}
	return this;
};
//html 方法
Base.prototype.html = function(str){
	for(var i=0; i <this.ele.length; i++){
		//在不传递参数的时候获取该元素的 innerHTML
		if(arguments.length == 0){
			return this.ele[i].innerHTML;
		}
		this.ele[i].innerHTML = str;
	}
	return this;
};
//点击事件方法
Base.prototype.click=function(fn){
	for(var i=0; i <this.ele.length; i++){
		this.ele[i].onclick=fn;
	}
	return this;
};

//鼠标浮动与离开事件
Base.prototype.hover = function(over,out){
	for(var i = 0; i<this.ele.length; i++){
		this.ele[i].onmouseover = over;
		this.ele[i].onmouseout = out;
	}	
	return this;
};

//显示元素
Base.prototype.show = function(){	
	for(var i = 0; i<this.ele.length; i++){
		this.ele[i].style.display = 'block';
	}	
	return this;
};

//隐藏元素
Base.prototype.hide = function(){
	for(var i = 0; i < this.ele.length; i++){
		this.ele[i].style.display = 'none';
	}	
	return this;
};

//元素居中
Base.prototype.center = function(){
	var top = (document.documentElement.clientHeight - 250)/2;
	var left = (document.documentElement.clientWidth - 350)/2;
	for(var i = 0; i < this.ele.length; i++){
		this.ele[i].style.left = left + 'px';
		this.ele[i].style.top = top + 'px';
	}
	return this;
}

//浏览器窗口事件(该事件与元素居中一起使用，因为在浏览器的大小被改变的时候，元素也同样也要居中)
Base.prototype.resize = function(fn){
	window.onresize = fn;
	return this;
}

//锁屏功能
Base.prototype.lock = function () {
	for (var i = 0; i < this.ele.length; i++) {
		this.ele[i].style.width = getInner().width + 'px';
		this.ele[i].style.height = getInner().height + 'px';
		this.ele[i].style.display = 'block';
	}
	return this;
};

//取消锁屏
Base.prototype.unlock = function(){
	for(var i =0; i < this.ele.length; i++){
		this.ele[i].style.display = 'none';
	}
	return this;
}

Base.prototype.drag = function(){
	for(var i =0; i < this.ele.length; i++){
		this.ele[i].onmousedown = function(evt){
			var e = getEvent(evt);
			var _this = this;
			var diffX = e.clientX - _this.offsetLeft;
			var diffY = e.clientY - _this.offsetTop;
			document.onmousemove = function(evt){
				var e = getEvent(evt);
				_this.style.left = e.clientX - diffX + 'px';
				_this.style.top = e.clientY - diffY + 'px';
			}	
			document.onmouseup = function(){
				this.onmousemove = null;
				this.onmoueup = null;
			}
		}
	}
	return this;
}














//$()
  function $(str){
		var j = /^#(_|[a-zA-Z])\w+$/g;
		var d = /^\.(_|[a-zA-Z])\w+$/g;
		var t = /[a-z]/g;
		var save = null;
		if(j.test(str)){
			save = str.split('#');
			return document.getElementById(save[1]);
		}else if(d.test(str)){
			save = str.split('.');
			return document.getElementsByClassName(save);
		}else if(t.test(str)){
			save = str;
			return document.getElementsByTagName(save);
		}else{
			throw new Error('标记引用无效！');
		}
  }



//简单获取元素
function getId(str){
	return document.getElementById(str);
}
function getName(str,index){
	var reg = /[0-9]+/g;
	if(reg.test(index)){
		return document.getElementsByName(str)[index];
	}
	return document.getElementsByName(str)[index];
}
function getTag(str,index){
	var reg = /[0-9]+/g;
	if(reg.test(index)){
		return document.getElementsByTagName(str)[index];
	}
	return document.getElementsByTagName(str);
}



/*------------------------------------------------------*/
/*------------------------------------------------------*/
/*------------------------------------------------------*/
/*------------------------------------------------------*/
/*------------------------------------------------------*/



//这个是 replaceChild 的另一种
function replaceEach(aNode, bNode){
	var aParent = aNode.parentNode;
	var bParent = bNode.parentNode;
	if(aParent && bParent){
		var aNode2 = aNode.cloneNode(true);
		bParent.replaceChild(aNode2, bNode);
		aParent.replaceChild(bNode, aNode);
	}
}

//清掉字段字符串两边空格
function trim(str){
	var reg = /^\s*|\s*$/g;
	str.value = str.value.replace(reg,"");
}

//insertBefore()
function insertAfter(newNode, refNode){
	var parNode = refNode.parentNode;
	if(parNode){
		var lastNode = refNode.lastNode;
		if(parNode == lastNode){
			parNode.appendChild(newNode);
		}else{
			var nextNode = refNode.nextSibling;
			parNode.insertBefore(newNode, nextNode);
		}
	}
}

//checkLetter
function checkLetter(strObject)
{		
	var n= -1;
	var reg = /\s/;
	for(var i=0; i < strObject.length; i++)
	{
		n++;
		var subStr = strObject.substr(0,n);
		var subChar = strObject.charCodeAt(n);
		if(subChar >= 'A'.charCodeAt(0) && subChar <= 'Z'.charCodeAt(0))
		{
			alert("第" + n + "个字符是大写的");
		}else if(subChar >= 'a'.charCodeAt(0) && subChar <= 'z'.charCodeAt(0))
		{
			alert("第" + n + "个字符是小写的");
		}else if(reg.test(strObject)){
			alert("第" + n +"个字符是空格");
		}	
	}
}		

//迭代 map()
function doubleAndAlert(value,index,arry)
{
	var result = value ;//数组中的元素所以执行的代码，（这里用 value 表示了数组中的元素）
	return result;
}

//迭代forEach()
function DD(value){
	var result = value;
	alert(result);
}

//求和
function sum(){
	var sum = 0;
	var argLen = arguments.length;
	if(argLen == 0)return sum;
	for(var i=0; i < argLen; i++)	sum += arguments[i];
	return sum;
}

//平均值
function average(){
	var avg = 0;
	var argLen = arguments.length;
	if(argLen == 0){
		return avg;
	}	
	for(var i=0,l = argLen; i <l; i++){
		avg += arguments[i];
	}
	return Math.round(avg/argLen);
}

//sort() 用参数排序数组
function compare(f,s){
	var result;
	f<s?result =-1:(f>s?result=1:result =0);
	return result;
}

//跨浏览器鼠标按键兼容
	function getButton(evt){
		var e = evt || window.event;
		if(evt){			//要把这个写前面，因为 chrome 支持 W3C 又支持 IE
			return e.button;
		}else{
			switch(e.button){
				case 1 : return 0;
				case 4 : return 1;
				case 2 : return 2;
				case 0 : return 2;	//为了兼容 360 IE 内核	
			}
		}
	}


//跨浏览器添加事件
function addEvent(obj,type,fn){
	if(obj.addEventListener){
		obj.addEventListener(type,fn,false);
	}else if(obj.attachEvent){
		obj.attachEvent('on'+type,function (){
			fn.call(obj);
		});
	}
}
//跨浏览器移除事件
function removeEvent(obj,type,fn){
	if(obj.removeEventListener){
		obj.removeEventListener(type,fn,false);
	}else if(obj.detachEvent){
		obj.detachEvent('on' + type,fn);
	}
}

//跨浏览器阻止默认行为
function preDef(evt){
	var e = evt || window.event;
	if(e.preventDefault){
		e.preventDefault();
	}else{
		e.returnValue = false;
	}
}

//跨浏览器获取当前 DOM 元素
function getTarget(evt){
	var e = evt || window.event;
	if(e.target){
		return e.target;
	}else if(window.event.srcElement){
		return window.event.srcElement;
	}
}

//跨浏览器获取当前 DOM 元素的标签名
function getTagName(evt){
	var e = evt || window.event;
	if(e.target){		
		return e.target.tagName;
	}else if(window.event.srcElement){	
		return window.event.srcElement.tagName;
	}
}

//跨浏览器获取字符编码
function getCharCode(event){
	var e = event || window.event;
	if(typeof e.charCode == 'number'){
		return e.charCode;
	}else{
		return e.keyCode;
	}
}

//移除空白节点
	function removeWhiteNode(node){
	  for(var i=0; i< node.childNodes.length; i++){
	     if(node.childNodes[i].nodeType === 3 &&/^\s$/.test(node.childNodes[i].nodeValue)){
	        node.childNodes[i].parentNode.removeChild(node.childNodes[i]);		
	    }			
	  }
	  return node;
	}



//获取键值对URL
function getArgs(){
		var agrs = [];
		var qs = location.search.length>0 ? location.search.substring(1):'';
		var items = qs.split('&');
		var item = null,name = null,value= null;
		for(var i=0; i < items.length; i++){
			item = itmes[i].split('=');
			name = item[0];
			value = itme[1];
			args[name] = value;
		}
		return args;
	}


//跨浏览器选择文本
function getSelectText(text,start,num){
	if(text.setSelectionRange){
		text.setSelectionRagne(start,num);
		text.focus();
	}else if(text.createTextRange){
		var range = text.createTextRange();
		range.collapse(true);
		range.moveStart('character',start);
		range.moveEnd('character',num - start);
		range.select();
	}
}


//跨浏览器获取选取的文本
function getSelectionText(text){
	if(typeof text.selectionStart == 'number'){
		return text.value.substring(text.selectionSatrt,text.selectionEnd);
	}else if(document.selection){
		return document.selection.createRange().text;
	}
}


//跨浏览器获取视口大小
function getInner(){
	if(typeof window.innerWidth != 'undefined'){
		return{
			width : window.innerWidth,
			height : window.innerHeight
		}
	}else{
		return {
			width : document.documentElement.clientWidth,
			height : document.documentElement.clientHeight
		}
	}
}

//跨浏览器获取 Style
function getStyle(ele,attr){
	if(typeof window.getComputedStyle !='undefined'){		//W3C
		return window.getComputedStyle(ele,null)[attr];
	}else if(typeof ele.currentStyle != 'undefined'){		//	IE
		return ele.currentStyle[attr];
	}
}



//获取某个元素下的某个标签集合
function getEach(specified,target){
	var sAll = specified.getElementsByTagName('*');
	var saved = [];
	for(var i = 0; i < sAll.length; i++){
		if(sAll[i].tagName == target){
			saved.push(sAll[i]);
		}
	}
	return saved;
}
//获取元素集合每个元素的子节点
function getEachTexts(elements){
	var saved = [];
	for(var i=0; i < elements.length; i++){
		saved.push(elements[i].innerHTML);
	}
	var savedString = String(saved);
	var savedArray = savedString.split(',');
	return savedArray;
}
//获取元素下的子节点，并用 <br> 分开每一个子节点
function newlingStr(elements,aims){
	var saved = [];
	for(var i=0; i < elements.length; i++){
		saved.push(elements[i].innerHTML);
	}
	var saves = saved.join('<br />');
	return aims.innerHTML = saves;
}


//获取取 Event 对象
function getEvent(event){
	return event || window.event;
}








