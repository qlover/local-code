	#include <stdio.h>

	int main()
	{
		int i,n;
		puts("����������Ҫ֪������������ʮ����:");
		scanf("%d",&i);
		//printf("%d",i);
		printf("\n%d�Ķ������ǣ�",i);
		for(n=0; n < 8 ; n++)
		{
			if( (i<<n) & 128)putchar('1');
			else putchar('0');	
		}
	
		return 0;
	}