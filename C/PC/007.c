#include <stdio.h>
int main()
{




	//5.
	/*/
	
	float score;
	scanf("%f",&score);
	if(score >= 0 && score < 60){
		printf("��ĳɼ�E"); 
	}else if(score < 70){
		printf("��ĳɼ�D"); 
	}else if(score < 80){
		printf("��ĳɼ�C"); 
	}else if(score < 90){
		printf("��ĳɼ�B"); 
	}else if(score < 100){
		printf("��ĳɼ�A"); 
	}else printf("��ĳɼ�������"); 
	puts("\n*************\n");
	switch((int)score/10){
		case 1: case 2: case 3: case 4:
		case 5: printf("��ĳɼ���E"); break;
		case 6: printf("��ĳɼ���D"); break;
		case 7: printf("��ĳɼ���C"); break;
		case 8: printf("��ĳɼ���B"); break;
		case 9: printf("��ĳɼ���A"); break;
		case 10: printf("��ĳɼ��кܰ������֣���"); break;
		default: printf("��ĳɼ�������");break;
	}


	/*/




	//6.
	/*/
	int x;
	puts("�����������");
	scanf("%d",&x);

	if( x >= 50)
		printf("��%.2f", (65.0 * x));
	else if( x >= 40)
		printf("��%.2f", (145.0 * x * 0.7));
	else if( x > 20)
		printf("��%.2f", (145.0 * x * 0.8));
	else if( x > 10)
		printf("��%.2f", (145.0 * x * 0.9));
	else if( x > 0)
		printf("��%.2f", (145.0 * x));
	else return 0;

	
	/*/




	//7.
	/*/
	int a,b,d,g;
	scanf("%d",&a);
	d =a;
	if(a>=0) g = 1;
	if(a>=10) g = 2;
	if(a>=100) g = 3;
	if(a>=1000) g = 4;
	if(a>=10000) g = 5;
	if(a>=100000 || a<0 ){ g = 6;}
	if(g==6){
		printf("\n\n�������������������");
		return 0;
	}
	printf("\n�������%dλ\n����ÿһλ�ֱ��ǣ�\n",g);
	for(b = g; b>0; b--){
		printf("��%dλ���ǣ�%d\n",b,a%10);
		a/=10;	
	}
	a = d;
	puts("\n���������������Ϊ��");
	for(b = 0; b < g; b++){
		printf("%d",a%10);
		a/=10;	
	}
	/*/



	//�����Ǽ�λ��ÿλ������
	/*/
	int a,wei,d,copy,g;
	scanf("%d",&a); 
	wei = 0 ;  //�洢�ж���λ
	for(copy = a;copy>0;copy/=10,wei++);
	printf("������%dλ��\n",wei);
	for(copy = a,d = wei; d > 0; d--,a/=10){
		printf("\n��%dλ��%d",d,a%10);
		if(d == 1){
			printf("\n���Ҹ�����������");
			for( a = copy,d = 0; d <wei; d++,a/=10){
				printf("%d",a%10);
			}
			break;
		}
	}
	/*/

	

	return 0;
	
}












