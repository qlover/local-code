#include <stdio.h>
int main(int argc,char **argv){	
	FILE *fr = NULL;
	long leng = 1024;
	char str[500]="";
	fpos_t len;
	fr = fopen(argv[1],"r");
	if(argc != 2 )
	{
		puts("û���ҵ���ĵڶ�������");
		return 0;	
	}
	fseek(fr,0,2);	
	/*	
	leng = ftell(fr);	
	printf("��ǰ�ļ��Ĵ�СΪ %d ���ֽ�",leng);
	*/
	puts("--------------------------------------------------------------------------\b");
	if(fgetpos(fr,&len)==0)
	{
		printf("%s�Ĵ�С�ǣ�%d λ\n\n",argv[1],len);
	}		
	fread(str,len,1,fr);
	if(len < leng)
	{
		printf("%s����ļ������㹻 1 KB\n���� %s ��С�ǣ�%d λ\n",argv[1],argv[1],len);
		puts("--------------------------------------------------------------------------\b");
		return 0;
	}	
	printf("%s��СΪ %d  KB\n\n",argv[1],len/leng);
	if(len < (leng*leng))
	{
		printf("%s����ļ������㹻 1 MB\n���� %s ��С�ǣ�%d KB\n",argv[1],argv[1],len/leng);
		puts("--------------------------------------------------------------------------\b");
		return 0;
	}	
	printf("%s��СΪ %d  MB\n\n",argv[1],len/(leng*leng));	
	if(len < (leng*leng*leng))
	{
		printf("%s����ļ������㹻 1 GB\n���� %s ��С�ǣ�%d MB\n",argv[1],argv[1],len/(leng*leng));
		puts("--------------------------------------------------------------------------\b");
		return 0;
	}
	printf("%s��СΪ %d  GB�����ˣ���\n\n",argv[1],len/(leng*leng*leng));
	fclose(fr);
}
	
	


