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
			//填充每一排开头与结尾的A
			if(t == 0 || t== 2*i){
				printf("%c",ch[0]);
				//消除掉开头和结尾输出A的冗余
				continue; 
			}else {				
				//if(t==i || t < i)	
				//填充每一排中间及中间向左的字母
				//ps:因为在上个if已经判断了 开头和结尾所以，不必担心会从A开始填充
				if( t <= i){		
					printf("%c",ch[t]);
				}else{
					//*因为 t<=2*i，所以最大的t将会是26*2
					//需要将从中间向右填充的下标变成从中间向左填充的下标，则这个下标就应该表示为
					//i-t+i
					printf("%c",ch[i-t+i]);
				}
			}
		}
		printf("\n");
	}


	return 0;
}
