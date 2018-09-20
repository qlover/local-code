#include <stdio.h>
#define N 10

// void 是函数返回类型
// val 函数名
// int chang 传入一个整形的数，这里做为长
// int kuan 传入一个整形的数，这里做为宽
// return 长 乘 宽 ，面积了
int val(int chang,int kuan){
	return chang * kuan;
}

int main(){


	
	int in[N];	
	int i,n;

	for(i=0; i < N ; i++){
		scanf("%d",in[i]);
	}















/*
	int height,i,n;
	int sum = 0;
	for(i = 0; i < 3 ; i++){
		printf("请输入第%d个人的身高\n",i );
		scanf("%d",&height);
		sum = sum + height;
	}
	printf("所有人的身高是：%d", sum);
*/

/*	
	int x;
	x = 3;
	do{

		printf("%d,",x--);
	}while(x);
*/
	return 0;
}





