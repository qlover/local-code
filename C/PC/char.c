#include <stdio.h>
#include <math.h>
#include <string.h>
#define N 100
int main()
{
	char ch[N]="zxcvasdfdtaad";
	char temp;
	int i,n,half;

	int compare;


	//��ȡ�û������ַ���
	//gets(ch);  
	puts("\n����ǰ�����飺");
	puts(ch);
	
	
	//ż�����ַ�����
	if(  !(strlen(ch)%2) ){
		half = strlen(ch) / 2;   //10/2 = 5
		//�������
		for( i = 0; i < half ; i++){
			for( n = 0; n < half-1; n++){
				compare = strcmp(&ch[n],&ch[i]);   //��ȡ�ȽϽ��
				if( compare > 0){    //ch[n] > ch[i]
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}
		//�ұ�����
		for( i = half ; i < strlen(ch) ; i++){
			for( n = half ; n < strlen(ch) -1 ; n++){
				compare = strcmp(&ch[n],&ch[i]);   //��ȡ�ȽϽ��
				if( compare < 0){    //ch[n] < ch[i]
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}

	//�������ַ�
	}else{
		//���������ұ߿�ʼҪ��1��
		half = (int)(strlen(ch) / 2);   //11/2 = 
		//�������
		for( i = 0; i < half ; i++){
			for( n = 0; n < half - 1 ; n++){
				compare = strcmp(&ch[n],&ch[i]);   //��ȡ�ȽϽ��
				if( compare > 0){    //ch[n] > ch[i]
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}
		//�ұ�����
		for( i = half+1; i < strlen(ch) ; i++){
			for( n = half+1 ; n < strlen(ch) -1 ; n++){
				compare = strcmp(&ch[n],&ch[i]);   //��ȡ�ȽϽ��
				if( compare < 0){    //ch[n] < ch[i]
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}

	}

	puts("\n���������飺");
	puts(ch);
	return 0;
}














