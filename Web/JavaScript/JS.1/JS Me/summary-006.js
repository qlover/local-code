var moblie_box = document.getElementById("moblieBox");
var startLeft= getLeft(moblie_box);
var startTop= getTop(moblie_box);
var screenWidth = screen.width;
var screenHeight = screen.height;
var moveSetInterval;
var leftTimes = startLeft;
var topTimes = startTop;
moveDIV();	//(��Ҫ)ִ�д˺���
<!-- ��ȡ��߾� -->
function getLeft(L){
	var left =  L.offsetLeft;
	while(L = L.offsetParent){
		left += L.offsetLeft;
	}
	return left;
}
<!-- ��ȡ�ϱ߾� -->
function getTop(T){
	var top = T.offsetTop;
	while(T = T.offsetParent){
		top += T.offsetTop;
	}
	return top;
}
<!-- ������ -->
function moveDIV(){
	mvoeSetInterval = setInterval("movePX();",100);
}
<!-- ���� -->
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
<!-- ���� -->
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
<!-- ���� -->
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
<!-- ���� -->
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
