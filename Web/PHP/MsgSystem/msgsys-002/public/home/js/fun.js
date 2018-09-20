

// 返回顶部
function toTop(spd, fn) {
	spd = spd || 800;
	$('html,body').animate({
		scrollTop: 0,
	}, spd, fn);
}
// 滚动到底部
function toBot(spd, fn){
	spd = spd || 800;
	$('html,body').animate({
		scrollTop: $(document).height(),
	}, spd, fn);
}

