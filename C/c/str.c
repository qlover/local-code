#include <stdio.h>
#include <string.h>


int main()
{
	char str[100]={0};
	char str1[200]="I like computer ";
	char str2[200]="I like computer very much!";
	char *t = NULL;
	gets(str);
	//printf("%d",strlen(str));
	//printf("%s",strcat(str1,str));
	/* if(strcmp(str,str1) ==0)
	{
		puts("这两个字符串相等");
		
	}else{
		puts("这个两个字符串不相等");
	} */
	/* if(strncmp(str,str1,6) ==0)
	{
		puts("这两个字符串相等");
		
	}else{
		puts("这个两个字符串不相等");
	} */

	sprintf(str1,"%s%s",str1,str);
	puts(str1);
	return 0;
}

/*
strlen()
strcat()
strcmp()
strncmp()
sprintf()
strstr()
strchr()
*/

