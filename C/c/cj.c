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
	puts("\t\t欢迎来到成绩统计的程序！ ");
	puts("***************************(小帖示：请按照一定的要求输入，不然。。。)");
	while(mainCycle)
	{
		printf("请输入你要统计的次数");
		scanf("%d",&n);
		printf("你需要统计的次数是：%d\n",n);
		t = n;
		scr one[t];
		printf("请输入你的成绩\n");
		puts("-----------------------------\n");
	
		for(i=0; i<t ; ++i)
		{
			puts("请输入你的姓名：");
		Goname:
			scanf("%s",one[i].name);
			len = strlen(one[i].name);
			if(len >6 )
			{
				puts("请输入一个正确的姓名,超过了 6 个字符");
				goto Goname;
			}
			puts("请输入你的 Chinese：");
		Gochinese:	
			scanf("%d",&one[i].chinese);
			if(one[i].chinese >150 || one[i].chinese < 0)
			{
				puts("Please enter number of a certain");
				goto Gochinese;
			}
			puts("请输入你的 Math：");	
		Gomath:
			scanf("%d",&one[i].math);
			if(one[i].math >150 || one[i].math < 0)
			{
				puts("Please enter number of a certain");
				goto Gomath;
			}
			puts("请输入你的 Chemistry：");
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
		puts("*下列是你输入的成绩*\n");
		printf("姓名\tChinese\tMath\tChemistry\n");
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
