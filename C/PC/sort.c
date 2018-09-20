#include <stdio.h>
#include <math.h>
#include <time.h>
#define L 20
//输出数组
int pntArray(int in[],int len);
int pntArray(int in[],int len){
	puts("\r");
	int i;
	for(i=0; i <len; i++)
		printf("%d,",in[i]);
}
// 交换数组元素
void swap(int array[], int i, int n){
	int t = array[i];
	array[i] = array[n];
	array[n] = array[i];
}

// 比较排序
int compareSort(int array[],int len);
int compareSort(int array[],int len){
	int i,n,t;
	for( i=0; i < len; i++){
		for( n = 0; n < len; n++){
			if( array[n] >= array[i] ){
				t = array[n];
				array[n] = array[i];
				array[i] = t;
			}
		}
	}
}
// 定义冒泡排序
int bubbleSort(int array[],int len);
int bubbleSort(int array[],int len){
	int i,n,t;
	for( i = 0; i < len - 1; i++){
		for( n = 0; n < len - i -1; n++){
			if( array[n+1] < array[n]){
				t = array[n];
				array[n] = array[n+1];
				array[n+1] = t;
			}
		}
	}
}

// 定义选择排序
int selectSort(int array[],int len);
int selectSort(int array[],int len){
	int i,n,pos,max,t;
	for(i=0; i < len; i++){
		max = array[0];
		pos = 0;
		for(n = 0; n < len-i; n++ ){
			if( array[n] > max){
				max = array[n];
				pos = n;
			}
		}
		t = array[pos];
		array[pos] = array[n-1];
		array[n-1] = t;
	}
}


//定义快排
int quickSort(int array[], int left, int right);
int quickSort(int array[], int left, int right)
{	
	int z,y,key,t;
	z = left;
	y = right;
	key = array[z];
	if(left < right){
		//如果在操作一个数组中从左边找单元的下标
		while(z<y){
			//如果找到了比 key 小的数则不循环，
			while( array[y] >= key && y > z) y--;
			array[z] = array[y];
			//如果找到了比 key 大的数则不循环
			while( array[z] <= key && y > z) z++;
			array[y] = array[z];
		}
		//归位
		array[z] = key;
		//因为 z 与 y 已经碰面，了所以用谁来作第二次位置都可以
		quickSort(array, left, y - 1);
		quickSort(array, y + 1, right);
	}else return 1;  //如果 y 比 z 都小了则说明不用找了             
}

//定义插入排序
int insertSort(int array[],int len);
int insertSort(int array[],int len){
	int i,j,key;
	for(i=0; i < len; i++){
		key = array[i];
		for(j = i - 1; j >= 0; j--){
			if(array[j] > key){
				//如果比 key 大，则让后面的数等于当前的单元
				array[j+1] = array[j];
			}else break;   //否则找到了 key 小的就不用找了
		}
		array[j+1] = key;    //让 key 回到移动后的空位上
	}	
}
// 定义希尔排序
int shellSort(int array[],int len);
int shellSort(int array[],int len){
	int mid = floor(len/2);
	int i,n,temp;
	while( mid >=1 ){
		//类似插入排序
		for( i = mid; i < len; i++){
			// 注意 n 每次的值，-= mid
			for( n = i - mid; n >= 0; n-=mid){
				if( array[n] >= array[n+mid]){
					temp = array[n];
					array[n] = array[n+mid];
					array[n+mid] = temp;
				}
			}
		}
		// 两倍减少增量
		mid = floor(mid/2);
	}
}

// 堆整理
void heap(int array[], int nowInd, int len){
	int buf,pos,t;
	// 2*buf+1 叶节点左边节点下标
	for(buf = nowInd; 2 * buf + 1 < len; buf = pos){
		// 默认取得左节点下标
		// 同时也指向最大子节点下标
		pos = 2 * buf + 1;
		// 如果当前叶节点有右节点 且 右节点大于左节点
		if( pos < len-1 && array[pos+1] > array[pos] ){
			pos++;   // 指向右节点 
		}

		// 最大子节点与叶节点比较
		if( array[buf] < array[pos] ){
			t = array[buf];
			array[buf] = array[pos];
			array[pos] = t;
		}else break;  // 否则去下一个叶节点
	}
}

// 定义堆排序
int heapSort(int array[], int len){
	int i,t;
	// 堆化数组
	// C 语言没有 ceil() 这样的函数需要减个1
	for(i = len/2-1; i >= 0; i--){
		heap(array,i,len);
	}
	// 堆排序
	for(i = len-1; i >= 0; i--){
		// 根节点与当前最后一个节点交换
		t = array[0];
		array[0] = array[i];
		array[i] = t;
		// 缩小范围再次堆化
		// 需要注意当前叶节点与最后节点表示 
		heap(array,0,i);
	}
}



int main()
{
	int arr[L]={0};
	int i;
	srand(time(NULL));
	for(i=0;i < L; i++){
		arr[i] = rand()%50;
	}
	pntArray(arr,L);
	//比较排序
	//compareSort(arr,L);

	//冒泡排序
	//bubbleSort(arr,L);

	//选择排序
	//selectSort(arr,L);
	
	//快速排序
	//quickSort(arr,0,L-1);

	//插入排序
	//insertSort(arr,L);

	//希尔排序
	//shellSort(arr,L);

	// 堆排序
	heapSort(arr,L);



	pntArray(arr,L);
	return 0;
}



/*
int quickSort(int array[], int left, int right);
int quickSort(int array[],int left,int right)
{
    int i = left;
    int j = right;  
    int temp = a[i]; 
  
    if( left < right)
    {          
        while(i < j){
            while((a[j] >= temp) && (i < j)){ 
                j--; 
            }
            a[i] = a[j];
            while((a[i] <= temp) && (i < j)){
                i++; 
            }  
            a[j]= a[i];
        }
        a[i] = temp;
        quickSort(a,left,i-1);
        quickSort(a,j+1,right);
    }
    else
    {
        return;
    }
}



*/