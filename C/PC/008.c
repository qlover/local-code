#include <stdio.h>
int main()
{
	
	int a,b,c;
	
	puts("\n----------------\n������1-7������\n----------------");
	//�û����� 1-7 �������
	scanf("%d",&a);
	if(a == 1){ printf("����һ");}
	else if(a == 2){ printf("���ڶ�");}
	else if(a == 3){ printf("������");}
	else if(a == 4){ printf("������");}
	else if(a == 5){ printf("������");}
	else if(a == 6){ printf("������");}
	else if(a == 7){ printf("������");}

	puts("\n----------------\n������һ��1-5λ������\n----------------");
	//�û�����1-5λ�����ж��Ǽ�λ��
	scanf("%d",&a);

	if( a >=0 && a <= 9){ printf("һλ��");}
	else if( a >=10 && a <= 99){ printf("��λ��");}
	else if( a >=100 && a <= 999){ printf("��λ��");}
	else if( a >=1000 && a <= 9999){ printf("��λ��");}
	else if( a >=10000 && a <= 99999){ printf("��λ��");}
	else{ printf("��������");}

	a=0;b=0;c=0;
	puts("\n----------------\n�ֱ�����a��b��c\n----------------");
	//���������ε����߳����ж�����ʲô������
	scanf("%d,%d,%d",&a,&b,&c);

	if(a+b<=c||a+c<=b||b+c<=a){
		printf("���Ǹ�������!\n");
	}else{
		if(a==c||a==b||b==c){

			if(a==c&&a==b) 
				printf("�ȱ�������!\n");
			else 
				printf("����������!\n");


		}else printf("����������\n");
	}

	return 0;
}














