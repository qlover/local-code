#include <stdio.h>
int main(int argc,char **argv){	

/* 	FILE *fr = NULL;
	long len = 0;	//因为文件的大小可能很在，所以需要用上 long 型来表示
	if(argc != 2 )	//这里来判断是否有第二个参数，也就是键入文件名的参数
	{
		puts("没有找到你的第二个参数");
		return 0;	
	}
	fr = fopen(argv[1],"r");	
	fseek(fr,0,2);		
	len = ftell(fr);	
	printf("当前文件在大小为 %d 个字节",len);	
	fclose(fr); */
		FILE *fr = NULL;
	fpos_t len;	//这里是定义 fgetpos() 函数参数	

	if(argc != 2 )
	{
		puts("没有找到你的第二个参数");
		return 0;	
	}
	fr = fopen(argv[1],"r");
	fseek(fr,0,2);
	if(fgetpos(fr,&len)==0)
	{
		printf("当前文件的大小为 %d 个 MB",len/(1024*1024));
	}
	fclose(fr);

	return 0;
}