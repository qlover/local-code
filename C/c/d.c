#include <stdio.h>
#include <string.h>
int main()
{
	/* FILE *fr=NULL;
	fr = fopen("d:\\all the c\\file\\combat.txt","w");
	if(fr == NULL)
	{
		puts("文件打开失败了");
		return 0;
	}
 */
	/* FILE *fp = NULL;
	char ch;
	fp = fopen("d:\\all the c\\file\\combat.txt","r");

	ch = fgetc(fp);
	while(ch!= EOF)
	{
		ch = fgetc(fp);	
		putchar(ch);	
	}
	fclose(fp); */
 
	
/* 	FILE *fp = NULL;
	char ch;
	fp = fopen("d:\\all the c\\file\\combat.txt","r");
	ch = getc(fp);
	while(ch!= EOF)
	{
		ch = getc(fp);
		putchar(ch);	
	}
	fclose(fp); */
	
	//putc() 1.
	/* char str[]="Hello World!";
	int i=0;
	while(str[i])
		putc(str[i++],stdout); */
	
	
	//putc() 2.
	/* FILE *fr=NULL;
	fr = fopen("d:\\all the c\\file\\combat.txt","w");
	putc('a',fr) */
	//putc() 3.
	FILE *fr = NULL;
	char ch;
	fr = fopen("d:\\all the c\\file\\combat.txt","wt");
	while(ch = getchar())
	{
		fputc(ch,fr);
	}	

	fclose(fr);
	
	
	
	//fputc()
	/* FILE *fr=NULL;
	fr = fopen("d:\\all the c\\file\\combat.txt","w");
	fputc('a',fr) ; */
	
	
	
	//getc() 1.
	/* FILE *fr=NULL;
	fr = fopen("d:\\all the c\\file\\combat.txt","r");
	char ch;
	ch = getc(fr);
	putchar(ch); */
	
	
	
	//getc() 2.
	/* FILE *fr=NULL;
	fr = fopen("d:\\all the c\\file\\combat.txt","r");
	char ch;
	ch = getc(fr);
	while(ch!= EOF)
	{
		ch = getc(fr);
		putchar(ch);	
	}
	fclose(fr);  */

	
	
	//fgetc() 1.
	/* FILE *fr=NULL;
	fr = fopen("d:\\all the c\\file\\combat.txt","r");
	char ch;
	ch = fgetc(fr);
	putchar(ch);	
	fclose(fr); */
	
	
	//fgetc() 2.
/* 	FILE *fr=NULL;
	fr = fopen("d:\\all the c\\file\\combat.txt","r");
	char ch;
	ch = fgetc(fr);
	while(ch!= EOF)
	{
		ch = fgetc(fr);
		putchar(ch);	
	}
	fclose(fr);  */
	
	
	
	
	
	return 0;
}

/*
putc() 1.输出数组中的字符,可以用循环来一个一个的访问数组下标，来输出字符串，参数一是数组名，参数二是标准输出流
	   2.可以单独的将一个字符添加到文件中，参数一是字符，参数二是句柄
fputc()1.只用于在文件操作时候对文件中的句柄位置添加一个字符，成功则返回该字符的ASCII码，不成功则返回 EOF	   
	   
getc() 1.从流中获取字符，用于文件操作中的一个一个的获取文件中的内容，不能一次获取巨柄中的所有内容，可用循环来获取所以的字符
fgetc()1.则专用于在文件操作中，读取文件内容，同 fgetc() 一样，如果成功返回读取的字符，不成功返回 EOF 不能一次获取巨柄中的所有内容，可用循环来获取所以的字符

*/