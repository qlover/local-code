#include <stdio.h>
#include <time.h>
#define N 20    //�������޸�����Ԫ�صĸ���
int main()
{

	//(1).��������������������ʽ���� n ���������
	int i,n,sum,temp;
	int cnt = 0;  //���ڼ���
	float avg = 0;   //���ƽ��ֵ
	int in[N]={0};
	int max,pos;    //�����������ڴ�����ֵ�����ֵ�±�
	int min = 0;  //�����Сֵ
	time_t t; 
	srand((unsigned) time(&t)); 

	//�����������
	for(i=0; i < N; i++){
		n = rand() % 1000;
		in[i] = n;
	}


	printf("\n��A��----------------------------\n");
	printf("������Ϊ��");
	//a. ���������ÿ�� 3 ��
	sum = 0;
	for(i=0; i < N; i++){
		if(i%3==0) printf("\n");
		printf("%d,",in[i]);
		//b.���ۺ�
		sum+= in[i];
	}

	printf("\n��B��---------------------------\n");
	printf("���������ǣ�%d",sum);

	
	printf("\n��C��----------------------------\n");
	//c.����----��ѡ������
	printf("����ǰ��");
	for(i=0; i < N ; i++) printf("%d,",in[i]);

	for(i=0; i < N ; i++){
		max = in[0];    
		pos = 0;
		for(n=0; n < N-i; n++){
			if(max >= in[n]){
				max = in[n];    //�õ���������ֵ
				pos = n;		//�õ��������ֵ���±�
				min = in[i];    //�õ���Сֵ
			}
		}
		//�����һ����Ԫ����λ��
		temp = in[pos];
		in[pos] = in[n-1];
		in[n-1] = temp;
	}
	printf("\n�����");
	for(i=0; i < N; i++)
		printf("%d,",in[i]);



	printf("\n��D��----------------------------\n");
	//d.
	printf("�ܱ�3���������У�");
	for(i=0; i < N; i++){
		if(in[i]%3 == 0){
			cnt+=1;   //���һ�����ܱ�3���������ͼ�һ��
			printf("%d,",in[i]);
		}
	}
	if(cnt){
		printf("\t|�����ܱ�3����������%d��",cnt);
	}else printf("\t|NO EXIST");


	printf("\n��E��----------------------------\n");
	//e.��������ƽ��ֵ�Լ�����ƽ��ֵ�����ĸ���
	avg = sum/N;
	cnt=0;   //������0�����¼���
	printf("����ƽ��ֵ%.2f�����У�",avg);
	for(i=0;i < N; i++){
		if(in[i] > avg){
			cnt+=1;
			printf("%d,",in[i]);
		}
	}
	printf("\t|����ƽ��ֵ������%d��",cnt);
	

	printf("\n��F��----------------------------\n");
	//f.(�����ʱ���Ѿ����������ֵ����Сֵ)
	printf("��������ֵ�ǣ�%d",max);
	//��Ϊǰ���Ѿ��ý��������ˣ����Դ����ֵ���ǵ�һ��С��max�ĵ�Ԫ
	printf("\n�����дδ�ֵ�ǣ�%d",in[1]);
	printf("\n�������Сֵ�ǣ�%d",min);
	

	return 0;

}