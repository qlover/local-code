#include <stdio.h>
int main()
{
	//getchar() putchar() getch()
	char ch;
	ch = getchar();

	
	while(ch !='#')
	{
		putchar(ch);
		ch = getchar();
	}
	
	
	printf("%c\n",ch);	
	return 0;
}