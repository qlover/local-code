#include <stdio.h>
#include <conio.h>
int main()
{
		

	int i,n;
	int map[5][4]=
	{
		{10,10,10,10},
		{10,0,0,10},
		{10,0,0,10},
		{10,0,0,10},
		{10,10,10,10}
	
	};

	for(i=0; i<5; i++)
	{
		for(n=0; n<4; n++)
		{
			if(map[i][n]==10)
			{
				printf("*");
			}
			if(map[i][n]== 0)
			{
				printf(" ");
			}
		}	
		printf("\n");
	}

	getch();
	return 0;
	

}