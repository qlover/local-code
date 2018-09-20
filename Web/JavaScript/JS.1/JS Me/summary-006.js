var moblie_box = document.getElementById("moblieBox");
var startLeft= getLeft(moblie_box);
var startTop= getTop(moblie_box);
var screenWidth = screen.width;
var screenHeight = screen.height;
var moveSetInterval;
var leftTimes = startLeft;
var topTimes = startTop;
moveDIV();	//(主要)执行此函数
<!-- 获取左边距 -->
function getLeft(L){
	var left =  L.offsetLeft;
	while(L = L.offsetParent){
		left += L.offsetLeft;
	}
	return left;
}
<!-- 获取上边距 -->
function getTop(T){
	var top = T.offsetTop;
	while(T = T.offsetParent){
		top += T.offsetTop;
	}
	return top;
}
<!-- 主函数 -->
function moveDIV(){
	mvoeSetInterval = setInterval("movePX();",100);
}
<!-- 向左 -->
function removeLeftPX(){
	leftTimes--;
	moblie_box.style.left = leftTimes+"px";
	if(leftTimes > 30){
		setTimeout("removeLeftPX()",0);
		clearInterval(moveSetInterval);
	}else{
		removeTopPX();	
	}
}
<!-- 向上 -->
function removeTopPX(){
	topTimes--;
	moblie_box.style.top = topTimes+"px";
	if(topTimes >30){
		setTimeout("removeTopPX()",0);
		clearInterval(moveSetInterval);
	}else{
		movePX();
	}
}
<!-- 向下 -->
function moveTopPX(){
	topTimes++;
	moblie_box.style.top = topTimes+"px";
	if(topTimes < screenHeight - 330){
		setTimeout("moveTopPX()",0);
		clearInterval(moveSetInterval);
	}else{
		removeLeftPX();
	}
}
<!-- 向右 -->
function movePX(){
	leftTimes++;
	moblie_box.style.left = leftTimes+"px";
	if(leftTimes < screenWidth-296){
		setTimeout("movePX();",0);
		clearInterval(mvoeSetInterval);
	}else{
		moveTopPX();
	}
}
