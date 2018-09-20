#include <stdio.h>
int main(int argc,char **argv){	
	FILE *fr = NULL;
	long leng = 1024;
	char str[500]="";
	fpos_t len;
	fr = fopen(argv[1],"r");
	if(argc != 2 )
	{
		puts("没有找到你的第二个参数");
		return 0;	
	}
	fseek(fr,0,2);	
	/*	
	leng = ftell(fr);	
	printf("当前文件的大小为 %d 个字节",leng);
	*/
	puts("--------------------------------------------------------------------------\b");
	if(fgetpos(fr,&len)==0)
	{
		printf("%s的大小是：%d 位\n\n",argv[1],len);
	}		
	fread(str,len,1,fr);
	if(len < leng)
	{
		printf("%s这个文件还不足够 1 KB\n所以 %s 大小是：%d 位\n",argv[1],argv[1],len);
		puts("--------------------------------------------------------------------------\b");
		return 0;
	}	
	printf("%s大小为 %d  KB\n\n",argv[1],len/leng);
	if(len < (leng*leng))
	{
		printf("%s这个文件还不足够 1 MB\n所以 %s 大小是：%d KB\n",argv[1],argv[1],len/leng);
		puts("--------------------------------------------------------------------------\b");
		return 0;
	}	
	printf("%s大小为 %d  MB\n\n",argv[1],len/(leng*leng));	
	if(len < (leng*leng*leng))
	{
		printf("%s这个文件还不足够 1 GB\n所以 %s 大小是：%d MB\n",argv[1],argv[1],len/(leng*leng));
		puts("--------------------------------------------------------------------------\b");
		return 0;
	}
	printf("%s大小为 %d  GB以上了！！\n\n",argv[1],len/(leng*leng*leng));
	fclose(fr);
}
	
	


