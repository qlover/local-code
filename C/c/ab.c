#include <stdio.h>
int main()
{
	double fs=0;
	
	printf("���������ķ���");
	scanf("%lf",&fs);
	
/* 		if(fs>=0  && fs<60)
		{
			printf("������");
		}
		else if(fs>=60  && fs<90)
		{
			printf("��");
		}
		else if(fs>=90  && fs<=100)
		{
			printf("��");
		}
		else
		{
			printf("��������ȷ�ķ���");
		}
*/
	
	switch((int)fs/10)
	{
		case 0:
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:printf("������");break;
		case 6:
		case 7:
		case 8:printf("��");break;
		case 9:
		case 10:printf("��");break;
		default:break;
	}

	
	return 0;
}