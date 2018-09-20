#include <stdio.h>
#include <time.h>
int rann(int min,int max){
	// [min,max]
	//return rand() % (max - min + 1) + min;
	// [min,max)
	//return rand() % (max - min) + min;
	// (min,max]
	//return rand() % (max - min) + (min + 1);
	// (min,max)
	return rand() % (max - min) ;
}
int main(){
	int n=200;
	srand(time(NULL));  // 用时间作为种子
	while(n){
		if(!(n%20)) printf("\n");
		printf("%3d",rann(10,13));		
		n--;
	}
}