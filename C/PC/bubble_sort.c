#include <stdio.h>
#include <string.h>

int main()
{
	char ch[100]="asdfasdfdasdfasd";
	char temp;
	int i,n;
	int half;   //存放中间下标
	//gets(ch);
	printf("\n处理前的数组：");
	puts(ch);
	//偶数
	if( strlen(ch)%2 == 0 ){  
		half =  strlen(ch)/2;   
			
		//左边排序
		for( i = 1;  i < half; i++){    //因为偶数中间没有空下的元素，所以左边要比较到 half-1
			for(n = 0; n < half - 1; n++){
				if( strcmp(&ch[n],&ch[n+1]) > 0){   
					temp = ch[n+1];
					ch[n+1] = ch[n];
					ch[n] = temp;
				}
			}
		}
		//右边排序
		for( i = half ;  i < strlen(ch); i++){   //因为偶数中间没有空下的元素，所以右边直接从 half 开始
			for(n = half - 1; n < strlen(ch) - 1; n++){
				if( strcmp(&ch[n],&ch[n+1]) < 0){   
					temp = ch[n+1];
					ch[n+1] = ch[n];
					ch[n] = temp;
				}
			}
		}
	}
	//奇数
	else{
		half = (int)(strlen(ch)/2);  
		//左边排序
		for( i = 1;  i < half; i++){
			for(n = 0; n < half - i; n++){   //
				if( strcmp(&ch[n],&ch[n+1]) > 0 ){  
					temp = ch[n+1];
					ch[n+1] = ch[n];
					ch[n] = temp;
				}
			}
		}
		//右边排序
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
	
	printf("\n处理后的数组：");
	puts(ch);
	return 0;
}
