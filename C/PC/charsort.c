#include <stdio.h>
#include <string.h>

int main()
{
	char ch[100]="";
	char temp;
	int i,n;
	int half;   //����м��±�
	gets(ch);
	printf("\n����ǰ�����飺");
	puts(ch);
	
	
	//�ж���ż����

	//����
	if( strlen(ch)%2 != 0 ){  
		half = (int)(strlen(ch)/2);  
		//�������
		for( i =0;  i < half; i++){
			for(n=i+1; n<half; n++){   //
				if( strcmp(&ch[n],&ch[i]) < 0 ){   // ��strcmp()==> ch[n] < ch[i]  => -1 
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}
		//�ұ�����
		for( i = half+1 ;  i < strlen(ch); i++){
			for(n = i+1; n < strlen(ch); n++){
				if( strcmp(&ch[n],&ch[i]) > 0 ){   // strcmp()==> ch[n] > ch[i]  => 1
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}	

	}
	//ż��
	else{

		half =  strlen(ch)/2;   
			
		//�������
		for( i = 0;  i < half -1; i++){    //��Ϊż���м�û�п��µ�Ԫ�أ��������Ҫ�Ƚϵ� half-1
			for(n = i+1; n < half ; n++){
				if( strcmp(&ch[n],&ch[i]) < 0){   // ch[n] < ch[i]
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}
		//�ұ�����
		for( i = half ;  i < strlen(ch); i++){   //��Ϊż���м�û�п��µ�Ԫ�أ������ұ�ֱ�Ӵ� half ��ʼ
			for(n = i + 1; n < strlen(ch); n++){

				if( strcmp(&ch[n],&ch[i]) > 0){   // ch[n] > ch[i]
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}	
	}
	
	printf("\n���������飺");
	puts(ch);
	return 0;
}




























*/