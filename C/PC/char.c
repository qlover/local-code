#include <stdio.h>
#include <math.h>
#include <string.h>
#define N 100
int main()
{
	char ch[N]="zxcvasdfdtaad";
	char temp;
	int i,n,half;

	int compare;


	//获取用户输入字符串
	//gets(ch);  
	puts("\n处理前的数组：");
	puts(ch);
	
	
	//偶数个字符排序
	if(  !(strlen(ch)%2) ){
		half = strlen(ch) / 2;   //10/2 = 5
		//左边排序
		for( i = 0; i < half ; i++){
			for( n = 0; n < half-1; n++){
				compare = strcmp(&ch[n],&ch[i]);   //获取比较结果
				if( compare > 0){    //ch[n] > ch[i]
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}
		//右边排序
		for( i = half ; i < strlen(ch) ; i++){
			for( n = half ; n < strlen(ch) -1 ; n++){
				compare = strcmp(&ch[n],&ch[i]);   //获取比较结果
				if( compare < 0){    //ch[n] < ch[i]
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}

	//奇数个字符
	}else{
		//奇数排序，右边开始要加1个
		half = (int)(strlen(ch) / 2);   //11/2 = 
		//左边排序
		for( i = 0; i < half ; i++){
			for( n = 0; n < half - 1 ; n++){
				compare = strcmp(&ch[n],&ch[i]);   //获取比较结果
				if( compare > 0){    //ch[n] > ch[i]
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}
		//右边排序
		for( i = half+1; i < strlen(ch) ; i++){
			for( n = half+1 ; n < strlen(ch) -1 ; n++){
				compare = strcmp(&ch[n],&ch[i]);   //获取比较结果
				if( compare < 0){    //ch[n] < ch[i]
					temp = ch[n];
					ch[n] = ch[i];
					ch[i] = temp;
				}
			}
		}

	}

	puts("\n处理后的数组：");
	puts(ch);
	return 0;
}














