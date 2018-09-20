#include <stdio.h>
int main()
{
	
	int a,b,c;
	
	puts("\n----------------\n请输入1-7的整数\n----------------");
	//用户输入 1-7 输出星期
	scanf("%d",&a);
	if(a == 1){ printf("星期一");}
	else if(a == 2){ printf("星期二");}
	else if(a == 3){ printf("星期三");}
	else if(a == 4){ printf("星期四");}
	else if(a == 5){ printf("星期五");}
	else if(a == 6){ printf("星期六");}
	else if(a == 7){ printf("星期七");}

	puts("\n----------------\n请输入一个1-5位的整数\n----------------");
	//用户输入1-5位数，判断是几位数
	scanf("%d",&a);

	if( a >=0 && a <= 9){ printf("一位数");}
	else if( a >=10 && a <= 99){ printf("二位数");}
	else if( a >=100 && a <= 999){ printf("三位数");}
	else if( a >=1000 && a <= 9999){ printf("四位数");}
	else if( a >=10000 && a <= 99999){ printf("五位数");}
	else{ printf("数有问题");}

	a=0;b=0;c=0;
	puts("\n----------------\n分别输入a，b，c\n----------------");
	//输入三角形的三边长，判断它是什么三角形
	scanf("%d,%d,%d",&a,&b,&c);

	if(a+b<=c||a+c<=b||b+c<=a){
		printf("不是个三角形!\n");
	}else{
		if(a==c||a==b||b==c){

			if(a==c&&a==b) 
				printf("等边三角形!\n");
			else 
				printf("等腰三角形!\n");


		}else printf("任意三角形\n");
	}

	return 0;
}














