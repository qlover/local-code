#include <stdio.h>
int main()
{
	double fs=0;
	
	printf("请输入您的分数");
	scanf("%lf",&fs);
	
/* 		if(fs>=0  && fs<60)
		{
			printf("不及格");
		}
		else if(fs>=60  && fs<90)
		{
			printf("良");
		}
		else if(fs>=90  && fs<=100)
		{
			printf("优");
		}
		else
		{
			printf("请输入正确的分数");
		}
*/
	
	switch((int)fs/10)
	{
		case 0:
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:printf("不及格");break;
		case 6:
		case 7:
		case 8:printf("良");break;
		case 9:
		case 10:printf("优");break;
		default:break;
	}

	
	return 0;
}