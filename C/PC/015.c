#include <stdio.h>
#include <string.h>
#include <time.h>
// 定义冒泡排序
int bubbleSort(int in[],int len){
	int i,n,t;
	for( i = 0; i < len - 1; i++){
		for( n = 0; n < len - i -1; n++){
			if( in[n+1] > in[n]){
				t = in[n];
				in[n] = in[n+1];
				in[n+1] = t;
			}
		}
	}
}

int main(int argc, char *argv[])
{

	//1/2-2/3+3/4-4/5……，前100项
	/*
	int i;
	double sum,n,t;
	sum = 0;
	n = 1;
	t = 2;
	for( i = 0; i < 100; i++,n++,t++){
		if( i%2 == 1){
			sum -= n /t;
		}else{
			sum += n /t;
		}
	}
	printf("前100项和是：%f",sum);
	*/


	// 输入一个字串，判断它是否是对称串。如”abcdcba”是对称串，”123456789”不是
	/*
	char a[10]="";
	char b[10]="";
	//gets(a);
	scanf("%s",a);
	strcpy(b,a);   // 复制字符串值
	strrev(b);    // 倒置字符串
	puts(b);
	if( strcmp(a, b) == 0){   // 比较字符串
		printf("是对称串");
	}else{
		printf("不是对称串");
	}
	*/


	int i,n,t;
	int in[10];
	srand(time(NULL));
	printf("\n排序前：\n");
	for( i = 0; i < 10; i++){
		in[i] = rand() % ( 99 - 10 +1 ) + 10;
		printf("%d,",in[i]);
	}
	
	for( i = 0; i < 9; i++){
		for( n = 0; n < 9 - i ; n++){
			if( in[n+1] > in[n]){
				t = in[n];
				in[n] = in[n+1];
				in[n+1] = t;
			}
		}
	}
	printf("\n排序后：\n");
	for( i = 0; i < 10; i++){
		printf("%d,",in[i]);
	}





	return 0;
}
