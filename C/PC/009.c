#include <stdio.h>
#include <math.h>
int main()
{
	
	//1.
	/*/
	float a,b,c,x1,x2,DT;
	puts("������a,b,c��ֵ��\n");
	scanf("%f,%f,%f",&a,&b,&c);
	//derta ��ֵ��b^2-4ac
	DT = (b * b) - (4 * a *c);
	x1 = ( -b + sqrt( b * b -DT) ) / (2 * a);
	x2 = ( -b - sqrt( b * b -DT) ) / (2 * a);

	if(DT > 0){ 
		printf("���������������ʵ������x1=%.1f,x2=%.1f\n",x1,x2);
	}else if( DT == 0){
		printf("������������ȵ�ʵ������x1=%.1f\n",x1);
	}else printf("����û��ʵ����");	
	/*/



	//2.
	//*/
	int a,b,c,z;
	scanf("%d,%d,%d",&a,&b,&c);
	

	//have BUG
	/* 
	if(a > b && a < c) z =a;
	else if( b > a && b < c) z = b;
	else if( c >a && c <b) z= c;
	*/

	/*/
	if(a < b){
		z = a; a = b; b=z;
	}
	if(b < c){
		z = b; b = c; c = z;
	}
	if(a < b){
		z = a; a = b; b=z;
	}
	printf("%d���м�ֵ",b);

	/*/

	
	//3.
	/*/
	int a,b;
	scanf("%d",&a);
	if( (a%4==0 && a%100!=0) || (a%4==0 && a%400==0)){
		printf("%d������",a);
	}else printf("%d��������",a);
	
	/*/



	
	//4.
	/*/
	float x,y;
	scanf("%f",&x);

	if(x < 1) y = x;
	else if( x >= 1 && x < 10) y = 2*x -1;
	else y = 3*x -11;
	printf("y=%.2f",y);
	/*/


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




	//7.�����Ǽ�λ��ÿλ������
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














