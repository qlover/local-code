#include <stdio.h>
int Pmax(int legnth);
int Pmin(int legnth);
main()
{
	int shuzu[11]={5,89,19,30,5,89,10,1,30,70,2};
	int i,M;
	M = Pmax(10);	
	printf("M=%d\n",M);	


}

int Pmax(int length){
	int i,L,M;
	L = length;
	M = 0;
	int shuzu[L];
	for(i=0; i < L; i++){
		printf("�������%d����ֵ\n",i+1);
		scanf("%d",&shuzu[i]);
	}
	for(i = 0; i<11; i++){
		if(M < shuzu[i]) M = shuzu[i];
	}
	puts("���������Щ��������������");
	return M;
}

int Pmix(int length){
	int i,L,M;
	L = length;
	M = 0;
	int shuzu[L];
	for(i=0; i < L; i++){
		printf("�������%d����ֵ\n",i+1);
		scanf("%d",&shuzu[i]);
	}
	for(i = 0; i<11; i++){
		if(M > shuzu[i]) M = shuzu[i];
	}
	puts("���������Щ��������С������");
	return M;
}