
#include <stdio.h>

int main()

{
	int i=1,n=1;
	int t;
	
	printf("%d+%d=?\n",i,n);
	t=i+n;
	
	scanf("%d",&t);
	
	do
	{
		printf("请重新输入答案\n");

		scanf("%d",&t);

	
	}while(t!=2);
	
	printf("您的答案输入正确");
	
	return 0;

}