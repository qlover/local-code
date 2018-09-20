#include <stdio.h>
#include <string.h>

int main()
{
	char ch[100]="";
	char temp;
	int i,n;
	int half;   //存放中间下标
	gets(ch);
	printf("\n处理前的数组：");
	puts(ch);
	
	
	//判断奇偶个数

	//奇数
	if( strlen(ch)%2 != 0 ){  
		half = (int)(strlen(ch)/2);  
		//左边排序
		for( i =0;  i < half; i++){
			for(n=i+1; n<half; n++){   //
				if( strcmp(&ch[n],&ch[i]) < 0 ){   // ，strcmp()==> ch[n] < ch[i]  => -1 
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}
		//右边排序
		for( i = half+1 ;  i < strlen(ch); i++){
			for(n = i+1; n < strlen(ch); n++){
				if( strcmp(&ch[n],&ch[i]) > 0 ){   // strcmp()==> ch[n] > ch[i]  => 1
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}	

	}
	//偶数
	else{

		half =  strlen(ch)/2;   
			
		//左边排序
		for( i = 0;  i < half -1; i++){    //因为偶数中间没有空下的元素，所以左边要比较到 half-1
			for(n = i+1; n < half ; n++){
				if( strcmp(&ch[n],&ch[i]) < 0){   // ch[n] < ch[i]
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}
		//右边排序
		for( i = half ;  i < strlen(ch); i++){   //因为偶数中间没有空下的元素，所以右边直接从 half 开始
			for(n = i + 1; n < strlen(ch); n++){

				if( strcmp(&ch[n],&ch[i]) > 0){   // ch[n] > ch[i]
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}	
	}
	
	printf("\n处理后的数组：");
	puts(ch);
	return 0;
}




























*/