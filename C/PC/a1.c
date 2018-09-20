#include <stdio.h>
#include <string.h>

int main()
{
/*
	char user[10];
	char tc[5] = "exit";
	puts("tip:(enter 'exit' will be quit this)");
	while(1){
		puts("Please enter your name\n");
		puts("**************************");
		scanf("%s",&user);
		if(strcmp(user,tc) == 0) break;
		printf("\nHello,%s,Welcome to SCITS!\n\n",user);
	}
*/



	int i,n,s;
	puts("请输入一个整数");
	scanf("%d",&n);

	/*
	s = n;
	i = 1;
	while( i < s){
		n+=i;
		i++;
	}
	printf("%d到1的和是：%d",s,n);
	*/


	/*
	for( i = n-1; i > 0; i--){
		n += i;
	}
	*/



	/*
	i = n-1;
	while( i > 0){
		n = n + i;
		i-=1;
	}
	*/

	//printf("和是：%d",n);
	return 0;
}
