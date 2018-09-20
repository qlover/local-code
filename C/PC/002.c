#include <stdio.h>
#include <string.h>

int main()
{
	int a,b,c;
	int max,min;
	printf("Please enter three number\n");
	puts("enter A");
	scanf("%d",&a);
	puts("enter B");
	scanf("%d",&b);
	puts("enter C");
	scanf("%d",&c);
	
	if( a > b){
		max = a;
	}else if( b > c){
		max = b;	
	}else max = c;

	if( a < b){
		min = a;
	}else if( b < c){
		min = a;
	}else min = c;
	


	printf("\n最大的数是：%d",max);
	printf("\n最小的数是：%d",min);

	return 0;
}

/*

# include <stdio.h>
void main()
{
	int max(int x,int y,int z);
	int a,b,c,d;
	scanf("%d%d%d",&a,&b,&c);
	d=max(a,b,c);
	printf("max = %d\n",d);
}


int max(int x,int y,int z)
{
	int m ,n;

	if(x>y) m = x;
	else m = y;

	if(m>z) n = m;
	else n = z;

	return(n);
}



	printf("最大的数是：%d",max);


	return 0;
}
*/