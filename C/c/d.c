#include <stdio.h>
#include <string.h>
int main()
{
	/* FILE *fr=NULL;
	fr = fopen("d:\\all the c\\file\\combat.txt","w");
	if(fr == NULL)
	{
		puts("�ļ���ʧ����");
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
putc() 1.��������е��ַ�,������ѭ����һ��һ���ķ��������±꣬������ַ���������һ�����������������Ǳ�׼�����
	   2.���Ե����Ľ�һ���ַ���ӵ��ļ��У�����һ���ַ����������Ǿ��
fputc()1.ֻ�������ļ�����ʱ����ļ��еľ��λ�����һ���ַ����ɹ��򷵻ظ��ַ���ASCII�룬���ɹ��򷵻� EOF	   
	   
getc() 1.�����л�ȡ�ַ��������ļ������е�һ��һ���Ļ�ȡ�ļ��е����ݣ�����һ�λ�ȡ�ޱ��е��������ݣ�����ѭ������ȡ���Ե��ַ�
fgetc()1.��ר�������ļ������У���ȡ�ļ����ݣ�ͬ fgetc() һ��������ɹ����ض�ȡ���ַ������ɹ����� EOF ����һ�λ�ȡ�ޱ��е��������ݣ�����ѭ������ȡ���Ե��ַ�

*/