#include <stdio.h>
#include <string.h>
void intCheck();
typedef struct scroce{
	char name[5];
	int chinese;
	int math;
	int chemistry;
} scr;

int main()
{
	int i,n,t;
	int mainCycle=1;
	int len;
	i=0;
	puts("********************************************************************");
	puts("\t\t��ӭ�����ɼ�ͳ�Ƶĳ��� ");
	puts("***************************(С��ʾ���밴��һ����Ҫ�����룬��Ȼ������)");
	while(mainCycle)
	{
		printf("��������Ҫͳ�ƵĴ���");
		scanf("%d",&n);
		printf("����Ҫͳ�ƵĴ����ǣ�%d\n",n);
		t = n;
		scr one[t];
		printf("��������ĳɼ�\n");
		puts("-----------------------------\n");
	
		for(i=0; i<t ; ++i)
		{
			puts("���������������");
		Goname:
			scanf("%s",one[i].name);
			len = strlen(one[i].name);
			if(len >6 )
			{
				puts("������һ����ȷ������,������ 6 ���ַ�");
				goto Goname;
			}
			puts("��������� Chinese��");
		Gochinese:	
			scanf("%d",&one[i].chinese);
			if(one[i].chinese >150 || one[i].chinese < 0)
			{
				puts("Please enter number of a certain");
				goto Gochinese;
			}
			puts("��������� Math��");	
		Gomath:
			scanf("%d",&one[i].math);
			if(one[i].math >150 || one[i].math < 0)
			{
				puts("Please enter number of a certain");
				goto Gomath;
			}
			puts("��������� Chemistry��");
		Gochemistry:	
			scanf("%d",&one[i].chemistry);
			if(one[i].chemistry>150 || one[i].chemistry < 0)
			{
				puts("Please enter number of a certain");
				goto Gochemistry;
			}
			puts("--------------------------------\n");
		} 
		puts("********************\n");
		puts("*������������ĳɼ�*\n");
		printf("����\tChinese\tMath\tChemistry\n");
		for(i=0; i<t; ++i)
		{
			printf("%s\t%4d\t%3d\t%6d\t\n\n\n",one[i].name,one[i].chinese,one[i].math,one[i].chemistry);
		}	
	}	
	getchar();
	return 0;
}
void intCheck(int m)
{
	if(m > 150 || m <0)
	{
		puts("Please enter number of a certain ");
	}
}




/*
int main()
{
	scr one[1];
	int len;
	scanf("%s",one[1].name);
	len = strlen(one[1].name);
	printf("%d",len);
	
	return 0;
	
}
  */
