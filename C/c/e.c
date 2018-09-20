#include <stdio.h>
int main()
{
	int i=0,j;
	int f=5,d=2,s;
	printf("请问下面的算式答案等于多少？\n");
	
	printf("%d*%d=?\n",f,d,s);
	s=f*d;
	
	printf("请输入答案:");
	scanf("%d",&s);
	do
	{
		printf("答案错误,下面是乘法口诀表，请仔细看看，然后在请重新输入");
		
		for(j=1;j<10;j++)
		{
			for(i=1;i<=j;i++)
			{
				printf("%d*%d=%02d ",i,j,i*j);
			}
			printf("\n");
		}
		
		printf("请输入答案:");
		scanf("%d",&s);
		
	}while(s!=10);
	
	
	
	printf("您输入的答案正确\n");
	
	
	

	
	
	
	return 0;
}