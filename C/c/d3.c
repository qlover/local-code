
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
		printf("�����������\n");

		scanf("%d",&t);

	
	}while(t!=2);
	
	printf("���Ĵ�������ȷ");
	
	return 0;

}