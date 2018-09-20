/**
 *
 * 数组操作类
 */
var Arrays = function( R ){

	this.array = R;
	this.len = this.array.length;
};

Arrays.prototype = {

	// 打印数组内容
	get : function(){
		return this.array;
	},

	// 改变当前数组
	set : function( r ){
		this.array = r;
	},

	// 最大元素
	max : function(){
		var r = this.array;		
	},

	// 交换
	swap : function( f, b ){
		var t = this.array[f];
		this.array[f] = this.array[b];
		this.array[b] = t;
	},

	// 冒泡排序
	bubbleSort : function(){
		for(var i = 1; i < this.len; i++){
			for(var n = 0; n < this.len - i; n++){
				if( this.array[n+1] <= this.array[n] ){
					this.swap(n,n+1);
				}
			}
		}
	},

	// 选择排序
	selectSort : function(){
		for(var i = 0; i < this.len; i++){
			var max = this.array[0],
				pos = 0;
			for (var n = 1; n < this.len - i; n++) {
				if( this.array[n] >= max ){
					max = this.array[n];
					pos = n;
				}
			}
			this.swap(pos, n -1 );
		}
	},

	// 插入排序
	insertSort : function(){
		for(var i = 1; i < this.len; i++){
			var key = this.array[i];
			for(var n = i - 1; n >= 0; n--){
				if( key < this.array[n] ){
					this.array[n+1] = this.array[n];
				}else break;
			}
			// 因为每次循环向前判断时， n 最后是的下标至少是前两个
			this.array[n+1] = key;

		}
	},



	// 调用快速排序
	q :function( first, back ){
		var x = first,
			y = back,
			key = this.array[x];
		if( first < back ){
			while( x < y){
				// 从右向左搜索
				while( x < y && this.array[y] >= key ) y--;
				this.array[x] = this.array[y];
				// 从左向右搜索
				while( x < y && this.array[x] <= key ) x++;
				this.array[y] = this.array[x];
			}	
			// 当左右两边循环到在了一起
			// 把 key 放回剩下位置
			this.array[x] = key;
			this.q( first, y - 1 );
			this.q( y + 1, back);
		}else{
			return this.array;
		}
	},
	// 快速排序
	quickSort : function(){
		this.q( 0, this.len - 1 );
	},

	// 希尔排序
	shellSort : function(){
		// 第一次定位基准数
		var mid = Math.floor(this.len/2);
		var key = this.array[mid];

		// 第二次搜索
		while( mid >= 1 ){
			// 1.每一次搜索 因为 i = mid
			for( var i = mid; i < this.len; i++ ){
				// 2.基准数之后与基准数之前全部比较
				for(var n = i - mid; n >= 0 ; n-=mid){
					if( this.array[n] >= this.array[mid+n] ){
						this.swap(n, mid+n);
					}
				}		
			}
			// 缩小增量
			mid = Math.floor(mid/2);
		}

	},

	// 堆排序
	heapSort : function(){
		// 先获取当前对象指针
		// 因为在 heap() 函数是局部的，所以 this 是 window 
		var that = this;
		// 堆化数组
		function heap( now, end ){
			// 3. 循环遍历所有叶节点
			for( var i = now ; 2 * i + 1 < end ; i = pos ){
				var pos = 2 * i + 1;  // 1.获取默认子节点指针
				// 2.判断子节点
				if ( pos < end -1 && that.array[pos+1] > that.array[pos] ) {
					pos++;
				};
				// 判断子与叶
				if( that.array[pos] > that.array[i] ){
					that.swap(pos, i);
				}else break;
			}
		};
		// 堆化数组
		for(var i = Math.floor(this.len/2); i >= 0; i--){
			heap(i, this.len );
		}
		// 堆排序
		for(var i = this.len - 1; i >= 0; i--){
			// 根节点与当前叶节点最后一个节点交换
			this.swap(0, i);
			// 考虑如果交换后子节点的子节点还是比当前节点小
			heap(0, i);
		}
	},

	
};





