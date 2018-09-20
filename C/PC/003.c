#include <stdio.h>
#include <string.h>

int main()
{
	int i=0,n=0,times,max=0;
	int stu[] = {};

	times = 3;


	for( n = 0; n < times; n++){
		printf("\n请输入第%d个数:",n);
		scanf("%d",&stu[n]);
	}

	puts("\n--------------------------\n");

	printf("\n%d",stu[0]);
	printf("\n%d",stu[1]);
	printf("\n%d",stu[2]);
	printf("\n%d",stu[3]);
	/*for( i = 0 ; i < 3; i++){

		if(stu[i] > max){
			max = stu[i];
		}
		printf("\n第%d个数是%d",i,stu[i]);
	}
		printf("\n其中最大的是%d",max);
	*/
	return 0;
}