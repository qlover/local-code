#include <stdio.h>
int main(int argc,char **argv){	

/* 	FILE *fr = NULL;
	long len = 0;	//��Ϊ�ļ��Ĵ�С���ܺ��ڣ�������Ҫ���� long ������ʾ
	if(argc != 2 )	//�������ж��Ƿ��еڶ���������Ҳ���Ǽ����ļ����Ĳ���
	{
		puts("û���ҵ���ĵڶ�������");
		return 0;	
	}
	fr = fopen(argv[1],"r");	
	fseek(fr,0,2);		
	len = ftell(fr);	
	printf("��ǰ�ļ��ڴ�СΪ %d ���ֽ�",len);	
	fclose(fr); */
		FILE *fr = NULL;
	fpos_t len;	//�����Ƕ��� fgetpos() ��������	

	if(argc != 2 )
	{
		puts("û���ҵ���ĵڶ�������");
		return 0;	
	}
	fr = fopen(argv[1],"r");
	fseek(fr,0,2);
	if(fgetpos(fr,&len)==0)
	{
		printf("��ǰ�ļ��Ĵ�СΪ %d �� MB",len/(1024*1024));
	}
	fclose(fr);

	return 0;
}