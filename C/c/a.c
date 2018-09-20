#include <stdio.h>
void ToUpper(char);
void ToLower(char);
void (*pt)(char);
int main()
{
	char inputChar;
	inputChar = getchar();

	if(inputChar >= 'a' && inputChar <= 'z')
	{
		pt = ToUpper;	
	}
	else if(inputChar >='A' && inputChar <='Z')
	{
		pt = ToLower;	
	}
	pt(inputChar);
	return 0;
}
void ToUpper(char ch)
{
	putchar(ch-'a'+'A');	
}
void ToLower(char ch)
{
	putchar(ch+'a'-'A');	
}



