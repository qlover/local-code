#include <stdio.h>
#include <math.h>
#include <string.h>
//找出小于指定数的所有素数的函数
int pntPrime(int range);
int pntdPrime(int range){
	printf("\n**************\n");
	int i,flag,n;
	int m = range;
	for(i=2; i <= m; i++){
		for(n=2; n <i; n++){
			if(!(i%n)){   //如果在取因子有途中一出现能整除的就说明不是素数
				//printf("%d不是素数\n",i);
				flag = 0;
				break;
			}
			flag = 1;				
		}
		if(flag) printf("%d是素数\n",i);	
	}
	printf("**************\n");
};


int main()
{

	//*/1.用三种方法求圆周率

		/*/1.1
		long int i=1;
		double m,sum;
		m = 1;
		sum = 0;
		while(i){
			if(1.0/m < 1e-5){
				break;
			}
			
			i%2==0? (sum -= 1.0/m) : (sum += 1.0/m);
			m +=2;
			printf("%.30f\n", sum);
			i++;
		}
		printf("PI=%.30f\n", sum*4);
		/*/
	

		/*/1.2


		/*/





	//*/

	/*//2.
	int i,n,a,t,sum=0;
	printf("请输入一个0-9的整数：");
	scanf("%d",&a);
	printf("请输入项：");
	scanf("%d",&n);
	i=0; t = 0;
	while(i<=n){
		t += a*pow(10,i);
		sum += t;
		printf("%d\n",t);
		i++;
	}
	printf("%d\n",sum);	
	/*/
		





	/*/3.完全平方数
	int i,m,j;
	printf("四位数的完全平方数有：\n");
	for(i = 1111; i < 9999; i++){
		//四位数的完全平方数从 32 开始
		m=32;
		while((m++)<100){
			j = m*m;
			if(i == j){
				printf("%d|",j);
				j=0;
				break;
			}
		}

	}
	/*/



	
	/*//4.小数和整数部分的和
	float num,zsum,xsum;
	zsum = xsum = 0;
	do{
		scanf("%f",&num);
		zsum += (int)num;
		xsum += num - (int)num;    //小数部分等于本身减去其整数
	}while( num != 00);
	printf("\n整数部分和是：%d",(int)zsum);
	printf("\n小数部分和是:%f",xsum);
	/*/
		
	



	/*/5.找出小于 M 的质数
	int i,n,m,flag,c;
	c = 0;
	scanf("%d",&m);
	for(i=2; i <= m; i++){
		for(n=2; n <i; n++){
			if(!(i%n)){   //如果在取因子有途中一出现能整除的就说明不是素数
				//printf("%d不是素数\n",i);
				flag = 0;
				break;
			}
			flag = 1;				
		}
		if(flag) c++;	
	}
	printf("小于%d的素数有%d个",m,c);
	/*/



	/*/6.找一个素数，并且前后相隔都一样，

	/*/





	/*/7.选出5000 以下符合条件的数
		//千位数字与百位数字之和等于十位数字与个位数字之和
		//千位数字与百位数字之和等于个位数字与千位数字之差的10倍
		//求个数,cnt
		int i,cnt;
		int q,b,s,g;
		for(cnt=0,i=1000;i <= 5000; i++){
			q = i/1000%10;
			b = i/100%10;
			s = i/10%10;
			g = i/1%10;
			//判断条件
			if((q+b == s+g) && (q+b == 10*(g-q))){
				//printf("\n%d",i);
				cnt++;
			}
			
		}
		printf("\n共有%d个这样的数",cnt);
	

	/*/






	//*/8.求抛物线 y = x^2 + 5与直线x=1,x=-1有X轴围成的封闭区域的面积



	//*/



	/*/9.寻找并输出 11 至 999 之间的数M，它满足M,M^2,M^3均为回文数
	int i,g,s,b;
	for(i=11; i < 1000; i++){
		b = i/100;
		s = i/10%10;
		g = i/1%10;
		
		//只有两位数的情况
		if(!b){
			if(s==g){
				printf("%d|",i);
			}else continue;
		}else{    //有三位数的情况
			if(b == g){
				printf("%d|",i);
			}else continue;
		}

	}
	/*/





	/*/10.输出如下图形
	char ch[27]="ABCDEFGHIGKLMNOPQRSTUVWXYZ\0";
	int i,n,t,N,f;
	N = 26;
	for(i=0; i<N; i++){
		for(n=0; n <= N-i; n++){
			printf(" ");
		}
		for(t=0; t<= 2*i; t++){
			//填充左右的A
			if(t == 0 || t== 2*i){
				printf("%c",ch[0]);
				//消除掉每一次t为0时在0前面的填充
				//或者是当t==2*i 时在t 的后面填充
				continue; 
				
			}else {
								
				//if(t==i || t < i)	
				//如果t小于也就是在中间的i值，则直接填充B-Z
				//因为在这个if中已经判断出当t为0时输出A
				if( t <= i){		
					printf("%c",ch[t]);
				}else{
					// 012 3 456
					//比如这一排，当t=3，i=3，则输出ch[i]
					//但是要在 3后面输出 210 的字母，则需要把 456改成对应 210就行了
					//需要把 里面的下标变成 当前的 i-当前的t
						//然后再加上当前的i，也就把 456 改对应的 210了
					printf("%c",ch[i-t+i]);
				}
			}
		}
		printf("\n");
	}

	/*/






	/*/11.设A,B,C，为3个非0的正整数，计算并输出下列不定方程组解的个数 cnt
		//A+B+C = 13,A-C=5
		
		//从这方程可知 c = a -5   <=>
		//A+B+A-5=13   <=>  2a-5 = 13-b
		int a,b,c;
		for(a=5;a<=9;a++){
			for(b=0; b<=8; b++){
				if(2*a - 5 == 13-b){
					printf("a=%d,b=%d,c=%d\n",a,b,a-5);
				}else continue;
			}
		}
	/*/


	//*/12.


	//*/


 

	/*/13.找数，找出一个这个数是某3个数的和，又是这3个数的积
	//这道题有问题---------------------------------
	int i,a,b,c;
	for(i=1;i<100;i++){
		for(a=1;a<100;a++){	
			for(b=1;b<100;b++){
				for(c=1;c<100;c++){
					if(a+b+c == i && a*b*c == i){
						printf("%d|a=%d,b=%d,c=%d\n",i,a,b,c);
					}else continue;
				}
			}
		}
	}
	/-----------------------------*/



	//*/14.


	//*/



	//*/


	//*/



	//*/


	//*/

	return 0;
}


//输入数据
for(i=0;i <10;i++){
	scanf("%d",&arr[i]);
}

//输出数据
for(i=0; i <10; i++){
	if((i+1)%3==0){
		printf("\n");
	}
	printf("%d",arr[i]);
}










