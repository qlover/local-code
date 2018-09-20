#include <stdio.h>
int main()
{




	//5.
	/*/
	
	float score;
	scanf("%f",&score);
	if(score >= 0 && score < 60){
		printf("你的成绩E"); 
	}else if(score < 70){
		printf("你的成绩D"); 
	}else if(score < 80){
		printf("你的成绩C"); 
	}else if(score < 90){
		printf("你的成绩B"); 
	}else if(score < 100){
		printf("你的成绩A"); 
	}else printf("你的成绩有问题"); 
	puts("\n*************\n");
	switch((int)score/10){
		case 1: case 2: case 3: case 4:
		case 5: printf("你的成绩有E"); break;
		case 6: printf("你的成绩有D"); break;
		case 7: printf("你的成绩有C"); break;
		case 8: printf("你的成绩有B"); break;
		case 9: printf("你的成绩有A"); break;
		case 10: printf("你的成绩有很棒，满分！！"); break;
		default: printf("你的成绩有问题");break;
	}


	/*/




	//6.
	/*/
	int x;
	puts("请输入各数：");
	scanf("%d",&x);

	if( x >= 50)
		printf("￥%.2f", (65.0 * x));
	else if( x >= 40)
		printf("￥%.2f", (145.0 * x * 0.7));
	else if( x > 20)
		printf("￥%.2f", (145.0 * x * 0.8));
	else if( x > 10)
		printf("￥%.2f", (145.0 * x * 0.9));
	else if( x > 0)
		printf("￥%.2f", (145.0 * x));
	else return 0;

	
	/*/




	//7.
	/*/
	int a,b,d,g;
	scanf("%d",&a);
	d =a;
	if(a>=0) g = 1;
	if(a>=10) g = 2;
	if(a>=100) g = 3;
	if(a>=1000) g = 4;
	if(a>=10000) g = 5;
	if(a>=100000 || a<0 ){ g = 6;}
	if(g==6){
		printf("\n\n您输入的数不满足条件");
		return 0;
	}
	printf("\n这个数有%d位\n并且每一位分别是：\n",g);
	for(b = g; b>0; b--){
		printf("第%d位数是：%d\n",b,a%10);
		a/=10;	
	}
	a = d;
	puts("\n并且这个数的逆数为：");
	for(b = 0; b < g; b++){
		printf("%d",a%10);
		a/=10;	
	}
	/*/



	//求数是几位，每位和逆数
	/*/
	int a,wei,d,copy,g;
	scanf("%d",&a); 
	wei = 0 ;  //存储有多少位
	for(copy = a;copy>0;copy/=10,wei++);
	printf("该数是%d位数\n",wei);
	for(copy = a,d = wei; d > 0; d--,a/=10){
		printf("\n第%d位是%d",d,a%10);
		if(d == 1){
			printf("\n并且该数的逆数是");
			for( a = copy,d = 0; d <wei; d++,a/=10){
				printf("%d",a%10);
			}
			break;
		}
	}
	/*/

	

	return 0;
	
}












