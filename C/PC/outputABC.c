#include <stdio.h>

int main()
{

	char ch[27]="ABCDEFGHIGKLMNOPQRSTUVWXYZ\0";
	int i,n,t,N,f;
	N = 26;
	for(i=0; i<N; i++){
		for(n=0; n <= N-i; n++){
			printf(" ");
		}
		for(t=0; t<= 2*i; t++){
			//���ÿһ�ſ�ͷ���β��A
			if(t == 0 || t== 2*i){
				printf("%c",ch[0]);
				//��������ͷ�ͽ�β���A������
				continue; 
			}else {				
				//if(t==i || t < i)	
				//���ÿһ���м估�м��������ĸ
				//ps:��Ϊ���ϸ�if�Ѿ��ж��� ��ͷ�ͽ�β���ԣ����ص��Ļ��A��ʼ���
				if( t <= i){		
					printf("%c",ch[t]);
				}else{
					//*��Ϊ t<=2*i����������t������26*2
					//��Ҫ�����м����������±��ɴ��м����������±꣬������±��Ӧ�ñ�ʾΪ
					//i-t+i
					printf("%c",ch[i-t+i]);
				}
			}
		}
		printf("\n");
	}


	return 0;
}
