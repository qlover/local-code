#include <stdio.h>
#include <string.h>
#include <time.h>
// ����ð������
int bubbleSort(int in[],int len){
	int i,n,t;
	for( i = 0; i < len - 1; i++){
		for( n = 0; n < len - i -1; n++){
			if( in[n+1] > in[n]){
				t = in[n];
				in[n] = in[n+1];
				in[n+1] = t;
			}
		}
	}
}

int main(int argc, char *argv[])
{

	//1/2-2/3+3/4-4/5������ǰ100��
	/*
	int i;
	double sum,n,t;
	sum = 0;
	n = 1;
	t = 2;
	for( i = 0; i < 100; i++,n++,t++){
		if( i%2 == 1){
			sum -= n /t;
		}else{
			sum += n /t;
		}
	}
	printf("ǰ100����ǣ�%f",sum);
	*/


	// ����һ���ִ����ж����Ƿ��ǶԳƴ����硱abcdcba���ǶԳƴ�����123456789������
	/*
	char a[10]="";
	char b[10]="";
	//gets(a);
	scanf("%s",a);
	strcpy(b,a);   // �����ַ���ֵ
	strrev(b);    // �����ַ���
	puts(b);
	if( strcmp(a, b) == 0){   // �Ƚ��ַ���
		printf("�ǶԳƴ�");
	}else{
		printf("���ǶԳƴ�");
	}
	*/


	int i,n,t;
	int in[10];
	srand(time(NULL));
	printf("\n����ǰ��\n");
	for( i = 0; i < 10; i++){
		in[i] = rand() % ( 99 - 10 +1 ) + 10;
		printf("%d,",in[i]);
	}
	
	for( i = 0; i < 9; i++){
		for( n = 0; n < 9 - i ; n++){
			if( in[n+1] > in[n]){
				t = in[n];
				in[n] = in[n+1];
				in[n+1] = t;
			}
		}
	}
	printf("\n�����\n");
	for( i = 0; i < 10; i++){
		printf("%d,",in[i]);
	}





	return 0;
}
