#include <stdio.h>
/* long fact(int);
int main()
{
	printf("%d",fact(4));
	return 0;
}

long fact(int n)
{
	int f;
	printf("%d:%p\n",n ,&n);
	if(n>1)
	{
		f = fact(n-1)*n;
		printf("%d:%p\n",n ,&n);
	}else{
		printf("%d:%p\n",n ,&n);
		f =1;
	}
	return f;
}
 */
 
 /*这是我第一个阶乘*/
 #define n 100;
long dg(int);
int main(){
	int a;
	for(a=0; a<=20; a++){
		printf("%d的阶乘是：%d\n",a,dg(a));
	}
	return 0;
}
long dg(int n){
	long i;
	if(n >= 1){			
		i = dg(n-1) * n;	
	}else{
		i = 1;
	}
	return i;
}