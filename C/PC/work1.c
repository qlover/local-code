#include <stdio.h>
#include <time.h>
#define N 20    //这里在修改数组元素的个数
int main()
{

	//(1).按键盘输出和随机函数方式输入 n 个整数组成
	int i,n,sum,temp;
	int cnt = 0;  //用于计数
	float avg = 0;   //存放平均值
	int in[N]={0};
	int max,pos;    //在排序中用于存放最大值和最大值下标
	int min = 0;  //存放最小值
	time_t t; 
	srand((unsigned) time(&t)); 

	//输入随机整数
	for(i=0; i < N; i++){
		n = rand() % 1000;
		in[i] = n;
	}


	printf("\n【A】----------------------------\n");
	printf("该数组为：");
	//a. 输出整数，每行 3 个
	sum = 0;
	for(i=0; i < N; i++){
		if(i%3==0) printf("\n");
		printf("%d,",in[i]);
		//b.求累和
		sum+= in[i];
	}

	printf("\n【B】---------------------------\n");
	printf("这个数组和是：%d",sum);

	
	printf("\n【C】----------------------------\n");
	//c.排序----用选择排序
	printf("排序前：");
	for(i=0; i < N ; i++) printf("%d,",in[i]);

	for(i=0; i < N ; i++){
		max = in[0];    
		pos = 0;
		for(n=0; n < N-i; n++){
			if(max >= in[n]){
				max = in[n];    //得到数组的最大值
				pos = n;		//得到数组最大值的下标
				min = in[i];    //得到最小值
			}
		}
		//与最后一个单元交换位置
		temp = in[pos];
		in[pos] = in[n-1];
		in[n-1] = temp;
	}
	printf("\n排序后：");
	for(i=0; i < N; i++)
		printf("%d,",in[i]);



	printf("\n【D】----------------------------\n");
	//d.
	printf("能被3整除的数有：");
	for(i=0; i < N; i++){
		if(in[i]%3 == 0){
			cnt+=1;   //如果一出现能被3整除的数就加一个
			printf("%d,",in[i]);
		}
	}
	if(cnt){
		printf("\t|所以能被3整除的数有%d个",cnt);
	}else printf("\t|NO EXIST");


	printf("\n【E】----------------------------\n");
	//e.输出数组的平均值以及高于平均值的数的个数
	avg = sum/N;
	cnt=0;   //计数归0，重新计数
	printf("大于平均值%.2f的数有：",avg);
	for(i=0;i < N; i++){
		if(in[i] > avg){
			cnt+=1;
			printf("%d,",in[i]);
		}
	}
	printf("\t|高于平均值的数有%d个",cnt);
	

	printf("\n【F】----------------------------\n");
	//f.(排序的时候已经长出了最大值和最小值)
	printf("数组的最大值是：%d",max);
	//因为前面已经用降序排列了，所以次最大值就是第一个小于max的单元
	printf("\n数组中次大值是：%d",in[1]);
	printf("\n数组的最小值是：%d",min);
	

	return 0;

}