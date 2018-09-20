	#include <stdio.h>

	int main()
	{
		int i,n;
		puts("请输入你需要知道二进制数的十进制:");
		scanf("%d",&i);
		//printf("%d",i);
		printf("\n%d的二进制是：",i);
		for(n=0; n < 8 ; n++)
		{
			if( (i<<n) & 128)putchar('1');
			else putchar('0');	
		}
	
		return 0;
	}