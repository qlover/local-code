#include <stdio.h>
#include <string.h>

int main()
{
	char ch[100]="asdfasdfdasdfasd";
	char temp;
	int i,n;
	int half;   //����м��±�
	//gets(ch);
	printf("\n����ǰ�����飺");
	puts(ch);
	//ż��
	if( strlen(ch)%2 == 0 ){  
		half =  strlen(ch)/2;   
			
		//�������
		for( i = 1;  i < half; i++){    //��Ϊż���м�û�п��µ�Ԫ�أ��������Ҫ�Ƚϵ� half-1
			for(n = 0; n < half - 1; n++){
				if( strcmp(&ch[n],&ch[n+1]) > 0){   
					temp = ch[n+1];
					ch[n+1] = ch[n];
					ch[n] = temp;
				}
			}
		}
		//�ұ�����
		for( i = half ;  i < strlen(ch); i++){   //��Ϊż���м�û�п��µ�Ԫ�أ������ұ�ֱ�Ӵ� half ��ʼ
			for(n = half - 1; n < strlen(ch) - 1; n++){
				if( strcmp(&ch[n],&ch[n+1]) < 0){   
					temp = ch[n+1];
					ch[n+1] = ch[n];
					ch[n] = temp;
				}
			}
		}
	}
	//����
	else{
		half = (int)(strlen(ch)/2);  
		//�������
		for( i = 1;  i < half; i++){
			for(n = 0; n < half - i; n++){   //
				if( strcmp(&ch[n],&ch[n+1]) > 0 ){  
					temp = ch[n+1];
					ch[n+1] = ch[n];
					ch[n] = temp;
				}
			}
		}
		//�ұ�����
		for( i = half+2 ;  i < strlen(ch); i++){
			for(n = half+1 ; n < strlen(ch)-1; n++){
				if( strcmp(&ch[n],&ch[n+1]) < 0 ){  
					temp = ch[n+1];
					ch[n+1] = ch[n];
					ch[n] = temp;
				}
			}
		}
			
	}
	
	printf("\n���������飺");
	puts(ch);
	return 0;
}
