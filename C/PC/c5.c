#include <stdio.h>
#include <string.h>
#include <time.h>
//输出数组
int pntArray(int in[],int len);
int pntArray(int in[],int len){
	puts("\r");
	int i;
	for(i=0; i <len; i++)
		printf("%d,",in[i]);
}
//比较排序
int compareSort(int in[],int len);
int compareSort(int in[],int len){
	int i,n,t;
	for(i=0; i < len; i++){
		for( n = i+1 ; n < len-1; n++){
			if( in[n] <= in[i]){
				t = in[n];
				in[n] = in[i];
				in[i] = t;
			}
		}
	}
}
//冒泡排序
int bubbleSort(int arr[],int len);
int bubbleSort(int arr[],int len){
	int i,n,t;
	for(i=1; i<len; i++){
		for(n=0; n <len - i; n++){
			if(arr[n] > arr[n+1]){
				t = arr[n+1];
				arr[n+1] = arr[n];
				arr[n] = t ;
			}
		}
	}
}
//插入排序
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



int main()
{
	
	srand(time(NULL));   //用本地时间做随机数种子
	/*/1.比较，冒泡，插入排序
	
	int i,n,ch[20]={0};
	int ran;			//存放产生的随机数
	for(i=0; i <20; i++)
		ch[i] = rand()%100;    //20个0-100的整数

	printf("\n");
	for(i=0; i <20; i++){
		printf("%d|",ch[i]);
	}

	//compareSort(ch,20);
	//bubbleSort(ch,20);
	insertSort(ch,20);

	printf("\n");
	for(i=0; i <20; i++){
		printf("%d|",ch[i]);
	}

	/*/


	
	/*/2.找素数
	int i,n,flag,c=0;
	int in[200]={0},s[200]={0};
	for(i=0; i <200; i++)
		in[i] = 100 + rand()%(1000-101);
	for(i=0; i < 200; i++){
		for(n=2; n < in[i]; n++){
			if( in[i]%n == 0 ){
				flag = 0;
				break;
			}
			flag = 1;
		}
		if(flag){
			s[c] = in[i];
			c++;
		}
	}
	insertSort(s,c);
	pntArray(s,c);

	/*/



	
	/*/3.求偶数和，奇数和
	int i,num,jsum,osum;
	jsum =0; osum =0;
	for(i=0; i <10; i++){
		scanf("%d",&num);
		if(num%2==0) osum += num;
		else jsum += num; 
	}
	printf("\n奇数和是：%d",jsum);
	printf("\n偶数和是：%d",osum);
	/*/
	


	//*/4.
	int in[7]={0};
	int i,n;
	for(i=0; i <6000; i++){
		n = 1+rand()%6;
		in[n]++; 
	}
	for(i=1; i <7; i++){
		printf("\n%d出现了%d几次",i,in[i]);
	}

	//*/



	/*/5.统计单词
	char ch[100]="abc eiysou h diy t oiuasodif adg";
	int i=0,c=1;
	while( ch[i]!= '\0'){	
		if( isspace(ch[i]) ){
			if(ch[i+1] == '\0'){
				break;
			}
			c++;
		}
		i++;
	}
	printf("单词有%d个",c);
	/*/
	

	

	/*/6.筛选找素数
	int in[100]={0};
	int i,n;
	for(i=0; i <100; i++)
		in[i] = 1+rand()%100;

	for(i=0; i<100; i++){
		for(n=3; n < in[i]; n++){
			if( in[i]%n == 0){
				in[i] = 0;
				break;
			}
		}
	}
	for(i=0; i < 100; i++){
		if(i%10==0) printf("\n");
		if( in[i] == 0){
			continue;
		}else{
			printf("%d,",in[i]);
		}
	}
	/*/

	/*/7.3*3 整形二维数组对角线和
	int in[3][3]={
		{21,5,7},
		{76,15,65},
		{51,64,24}
	};

	int i,n,sum=0;
	for(i=0; i<3; i++){
		for(n=0; n<3; n++){
			if( n == i || n+i == 3-1){
				sum += in[i][n];
			}
		}
	}
	printf("对角线和是:%d",sum);
	/*/


	/*/8.逆序数组
	int in[100]={0};
	int i,n,t;
	for(i=0; i <100; i++)
		in[i] = rand()%100;
	
	bubbleSort(in,100);	
	pntArray(in,100);
	for(i=0; i<50; i++){
		t = in[i];
		in[i] = in[100-i-1];
		in[100-i-1] = t;
	}
	pntArray(in,100);
	/*/


	
	/*/9.统计字符
	char ch[]="a525sA&4f6z5c( z65sd% 4aDF5cx%v 6zC5cv$4 a6sZ#5 46z5cvASD4/";
	int j[5]={0};
	int i;
	for(i=0; i < strlen(ch) ; i++){
		if( isalnum(ch[i]) ){	
			if( islower(ch[i]) ){  //大写字母
				j[0]++;
			}else if( isupper(ch[i]) ){   //小写字母
				j[1]++;
			}else{   //数字
				j[2]++;
			}
		}else{
			if( isspace(ch[i]) ){    //空格
				j[3]++;
			}else{   //其它字符
				j[4]++;
			}
		}
	}
	printf("\n小写字母有%d个",j[0]);
	printf("\n大写字母有%d个",j[1]);
	printf("\n数字有%d个",j[2]);
	printf("\n空格有%d个",j[3]);
	printf("\n其它字符有%d个",j[4]);
	
	/*/
	
	/*/10.加密
	char ch[100]="";
	int i;
	gets(ch);
	for(i=0; i < strlen(ch); i++){
		switch(ch[i]){
			case 'x': ch[i]='a';break;
			case 'y': ch[i]='b';break;
			case 'z': ch[i]='c';break;
			default: ch[i]+=3 ;break;
		}
	}
	puts(ch);
	
	/*/

	

	/*/随机生产10000个数，比较前面三种排序所用时间

	clock_t start, finish;  
	double  duration;    
	int in[10000]={0};
	int i=0;
	for(i=0; i <100; i++)
		in[i] = 1+rand()%100;

  
   // 测量一个事件持续的时间

	start = clock(); 
	printf("\n执行快速排序用了：");  
	quickSort(in,0,10000);
	finish = clock();  
	duration = (double)(finish - start) / CLOCKS_PER_SEC;  
	printf( "%f seconds\n", duration );  


	start = clock(); 
	printf("\n执行比较排序用了：");  
	compareSort(in,10000);
	finish = clock();  
	duration = (double)(finish - start) / CLOCKS_PER_SEC;  
	printf( "%f seconds\n", duration );  



	start = clock(); 
	printf("\n执行冒泡排序用了：");  
	bubbleSort(in,10000);
	finish = clock();  
	duration = (double)(finish - start) / CLOCKS_PER_SEC;  
	printf( "%f seconds\n", duration );  


	start = clock(); 
	printf("\n执行插入排序用了：");  
	insertSort(in,10000);
	finish = clock();  
	duration = (double)(finish - start) / CLOCKS_PER_SEC;  
	printf( "%f seconds\n", duration );  
/*/

	return 0;
}
