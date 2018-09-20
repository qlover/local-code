#include <stdio.h>
#include <string.h>

int main()
{
/*	char user[10];
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

char ch[]="abcde";
char ch2[10]="abcde";

printf("%d\n",sizeof(char));

printf("ch占字节数：%d\n",sizeof(ch));
printf("ch2占字节数：%d\n",sizeof(ch2));

printf("\n字符串长：%d",strlen(ch));
printf("\n字符串长：%d",strlen(ch2));




}
