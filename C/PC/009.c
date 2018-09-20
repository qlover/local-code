#include <stdio.h>
#include <math.h>
int main()
{
	
	//1.
	/*/
	float a,b,c,x1,x2,DT;
	puts("请输入a,b,c的值：\n");
	scanf("%f,%f,%f",&a,&b,&c);
	//derta 的值，b^2-4ac
	DT = (b * b) - (4 * a *c);
	x1 = ( -b + sqrt( b * b -DT) ) / (2 * a);
	x2 = ( -b - sqrt( b * b -DT) ) / (2 * a);

	if(DT > 0){ 
		printf("方程有两个不相等实数根：x1=%.1f,x2=%.1f\n",x1,x2);
	}else if( DT == 0){
		printf("方程有两个相等的实数根：x1=%.1f\n",x1);
	}else printf("方程没有实数根");	
	/*/



	//2.
	//*/
	int a,b,c,z;
	scanf("%d,%d,%d",&a,&b,&c);
	

	//have BUG
	/* 
	if(a > b && a < c) z =a;
	else if( b > a && b < c) z = b;
	else if( c >a && c <b) z= c;
	*/

	/*/
	if(a < b){
		z = a; a = b; b=z;
	}
	if(b < c){
		z = b; b = c; c = z;
	}
	if(a < b){
		z = a; a = b; b=z;
	}
	printf("%d是中间值",b);

	/*/

	
	//3.
	/*/
	int a,b;
	scanf("%d",&a);
	if( (a%4==0 && a%100!=0) || (a%4==0 && a%400==0)){
		printf("%d是闰年",a);
	}else printf("%d不是闰年",a);
	
	/*/



	
	//4.
	/*/
	float x,y;
	scanf("%f",&x);

	if(x < 1) y = x;
	else if( x >= 1 && x < 10) y = 2*x -1;
	else y = 3*x -11;
	printf("y=%.2f",y);
	/*/


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




	//7.求数是几位，每位和逆数
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














