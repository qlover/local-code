#include <stdio.h>
int main()
{
	int i=0,j;
	int f=5,d=2,s;
	printf("�����������ʽ�𰸵��ڶ��٣�\n");
	
	printf("%d*%d=?\n",f,d,s);
	s=f*d;
	
	printf("�������:");
	scanf("%d",&s);
	do
	{
		printf("�𰸴���,�����ǳ˷��ھ�������ϸ������Ȼ��������������");
		
		for(j=1;j<10;j++)
		{
			for(i=1;i<=j;i++)
			{
				printf("%d*%d=%02d ",i,j,i*j);
			}
			printf("\n");
		}
		
		printf("�������:");
		scanf("%d",&s);
		
	}while(s!=10);
	
	
	
	printf("������Ĵ���ȷ\n");
	
	
	

	
	
	
	return 0;
}