#include <stdio.h>
int main()
{
    int i;
	long int g,f;
	//1+����֮��+������������
    float n = 1.0, m = 1.0, sum = 0.0, tmp;
    for (i = 1; i <= 20; i++){
		if(i%2==0){
			sum += m / n;
		}else sum -= m / n;
        tmp = m;
        m = n;
        n += tmp;
    }
    printf("ǰ20�����%f\n", sum);
	//�׳�
	puts("\n*******************\n");
	scanf("%d",&g);
	f = 1;
	while(g>0){
		f*=g;
		g--;
	}
	printf("�׳���%d",f);
    return 0;
}