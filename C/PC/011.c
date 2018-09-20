#include <stdio.h>
#include <math.h>
int main()
{
	/*//1.1到N（输入的数据）中，偶数的和
	int i,sum,n;
	printf("请输入大于1的整数：");
	scanf("%d",&n);
	i = 0;
	sum = 0;
	while(i<=n){
		sum += i;
		i+=2;
	}
	printf("1到%d的偶数和是%d",n,sum);
	/*/












	/*//2.求1/(2n-1)的前n项和
	int i,n;
	float qian,sum,c;
	printf("请输第多少项");
	scanf("%d",&n);
	i=1;
	sum = 0;
	while(i<=n){
		c = 2*i-1;
		sum += 1/c;
		//printf("%f\n",sum);                     
		i++;
	}
	printf("前50项的和是%f",sum);
	/*/






	/*//3.求A+AA+AAA.....
	int i,n,a,t,sum=0;
	printf("请输入一个0-8的整数：");
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





	/*/4.两个正整数m和n的最大公约数和最小公倍数。
	//最大公约数（最大公因数）就是几个数公有的因数中最大的一个.例12与18
	//最小公倍数就是几个数公有的倍数中最小的一个.
	int m,n,t,p,r;
	printf("请输入两个正整数n,m:");
	scanf("%d,%d",&m,&n);
	if (n<m){
   		t=n;n=m;m=t;
  	 }
	for(p = m * n;m!=0;m = r){
		r = n%m;
		n = m;
	}
  	printf("它们的最大公约数为:%d\n",n);
  	printf("它们的最小公约数为:%d\n",p/n);

	/*/




	/*/5.输出所有水仙花数
	int a,b,c;
	int i=100;
	while(i<1000){
		a = i/100;  //get 百位立方
		b = i/10%10;   //十位立方
		c = i%10%10;   //个位立方
		//printf("%d,%d,%d\n",a,b,c);
		if((pow(a,3)+pow(b,3)+pow(c,3))== i) printf("%d\n",i);
		i++;
	}
	/*/



	/*/6.完数
	int i,n,c,sum=0;// sum 用来存放所有因子的和，c用于存放有几个因子，N则是每个因子分别是多少
	for(i=1; i <=1000; i++){
		c = 0;sum=0;
		//printf("%d的因子有：",i);
		for(n=1; n<i; n++){
			if(i%n == 0){
				sum += n;
				//printf("%d|",n);	
			}else continue;
		}
		if(sum == i){
			printf("%d是完数\n",i);
		}
		//printf("因子和是%d\n",sum);
	}
	/*/



	/*/7.分数序列
	int i;
	float sum = 2,a,b,c,d;
	i=0;a=3;b=2;c=a/b;d=a+b;
	while(i<20){
		sum += c;
		b = a;		
		a = d;
		c = a/b;
		d = a+b;
		i++;
	}
	printf("前20项和是%f",sum);
	/*/
	
	
		

	/*/8.反弹
	int i;
	float z,half,sum;
	z = 100;
	sum = 0;
	for(i=0; i < 10; i++){
		
		half = z/2;
		sum += z + half;
		z/=2;
	}
	printf("第10次共经过%f,反弹%f",sum,half);
	/*/




	/*/9.输出星号  
	int i,j,k;
	for(i=0; i <=1 ;i++) {
		for(j=0; j <=  2-i;j++)
			printf(" "); 
		for(k=0; k <=  2*i;k++)
			printf("*"); 
		printf("\n"); 
	}
	for(i=0;i<3;i++) {
		for(j=0;j <= i;j++)
			printf(" "); 
		for(k=0;k <= 4-2*i;k++)
			printf("*"); 
		printf("\n"); 
	} 
	/*/

	



	/*/10.
	int i;
	for(i=1; i <= 20; i++){
		if(i%5 == 0) printf("%3d\n",i);
		else printf("%3d",i);
	}
	*/
	



	/*/11.
	int i,in[20]={0},t;
	printf("请输入10个整数");
	for(i=0;i <10; i++){
		scanf("%d",&in[i]);
	}
	t = in[0];
	for(i=0; i < 10; i++){
		if(t < in[i]) t = in[i];
	}
	printf("最大值是%d",t);
	*/

		
		
		
	/*/12.
	int i,in[20]={0},t=0;
	printf("请输入10个整数");
	for(i=0;i <10; i++){
		scanf("%d",&in[i]);
	}
	for(i=0; i < 10; i++){
		t += in[i];
	}
	printf("这个十个数和是%d",t);
	*/
		
		
		
		
		
		
		
		
		
		
		
		
	return 0;
}














