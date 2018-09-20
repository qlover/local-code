#include <stdio.h>
#include <string.h>

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
int main(int argc, char *argv[]) {
	
	/*
	1.	输入一个不超过五位的正整数，输出其逆数。例如输入12345，输出应为54321。
	2.	计算1+2+3…+n的值，n是从键盘输入的自然数。
	4.	从终端（键盘）将5个整数输入到数组a中，然后将a逆序复制到数组b中，并输出b中各元素的值。
	8.	输入1~10之间的一个数字，输出它对应的英文单词。
	9.	个位数为6且能被3整除但不能被5整除的三位自然数共有多少个，分别是哪些？
	15.	先随机产生N个三位自然数输出，然后再输出其中同时是3、5、7倍数的数。（设N为100）
	18.	输入一行字符，统计其中有多少个字母（包括大写字母和小写字母）。
	19.	输入一个字串，判断它是否是对称串。如”abcdcba”是对称串，”123456789”不是。
	38.	计算：1/2-2/3+3/4-4/5……，前100项。
	*/
	
	/*/ 1. 
	// 思路：分别取出该数的每一位
	int num;
	// 定义个、十、百、千、万
	int g, s, b, q, w;
	scanf("%d", &num);
	// 当输入大于 5 位数直接跳转程序 
	if ( num > 99999 ) return -1;
	g = num % 10 ;  // 取各位
	s = num / 10 % 10;
	b = num / 100 % 10;
	q = num / 1000 % 10;
	w = num / 10000 % 10;  // 取万位
	printf("%d%d%d%d%d",g,s,b,q,w);
	//*/


	/*/ 2. 
	// 思路：将循环从 0 到用户输入的数再做累加
	int n, sum = 0;
	scanf("%d", &n);
	while(n){
		sum += n;
		n--;
	}
	printf("%d", sum);
	//*/

	/*/ 4.
	// 思路：将数组 a 从后向前依次将元素插入到 b 中

	// 初始化两个数组
	int a[5]={0},
		b[5]={0};
	int i;

	// 向 a 中输入
	for(i = 0; i < 5; i++)
		scanf("%d", &a[i]);	

	// 将输入进 a 中的元素从后向前添加到 b
	for(i = 0; i < 5; i++)
		b[i] = a[4-i];

	// 输出
	for(i = 0; i < 5; i++)
		printf("%d", b[i]);
	//*/


	
	/*/ 8.
	// 思路：可用 switch 来做多个判断
	int w;
	scanf("%d", &w);
	switch(w){
		case 0 : printf("zero"); break;
		case 1 : printf("one"); break;
		case 2 : printf("two"); break;
		case 3 : printf("three"); break;
		case 4 : printf("four"); break;
		case 5 : printf("five"); break;
		case 6 : printf("six"); break;
		case 7 : printf("seven"); break;
		case 8 : printf("eight"); break;
		case 9 : printf("nine"); break;
		case 10 : printf("ten"); break;
	}
	//*/




	/*/ 9.  个位数为6且能被3整除但不能被5整除的三位自然数共有多少个，分别是哪些？
	// 思路： 从 100 开始找到 999，在循环中用数分别取余 3 和 6，如果为0则表示为整除
	int i,cnt;
	for(i = 100; i < 999; i++){
		if( (i % 3 == 0) && (i % 6 == 0) && (i % 5 != 0) ){
			cnt++;
			printf("%d,", i);
		}
	}
	printf("一共有%d个数", cnt);
	//*/




	/*/ 15.
	// 思路：产生 100 个随机数，然后在循环这所有的数来判断用数分别与 3 5 7 取余
	// 难点：产生三位的随机数， 100 - 999  可用工式 rand() % (max - min) + (min + 1)
	int in[100], i;
	srand(time(NULL));
	// 生产 100 个三位随机数并存放在 in 数组中
	for( i = 0; i < 100; i++){
		in[i] = rand() % ( 999 - 100 ) + ( 100 + 1 );
	}
	for(i = 0; i < 100; i++){
		if( (in[i] % 3 == 0) && ( in[i] % 5 == 0) && (in[i] % 7 == 0) ){
			printf("%d,", in[i]);
		}
	}
	//*/



	//*/18.输入一行字符，统计其中有多少个字母（包括大写字母和小写字母）。
	// 思路： 有字符串函数，可以用函数统计
	// isupper() 判断是否是大写字母
	// islower() 判断是否是小写字母
	int i = 0;
	int u = 0,  // 存放大写字母个数
		l = 0;  // 存储小写字母个数
	char ch[20]="";

	printf("%d", islower('b') );
	gets(ch);
	for(;i < 20; i++){
		if( islower(ch[i]) == 2){
			l++;
		}
		if( isupper(ch[i]) == 1 ){
			u++;
		}
	}

	printf("大写字母有%d个\n", u);
	printf("小写字母有%d个\n", l);




	/*/ 19. 输入一个字串，判断它是否是对称串。如”abcdcba”是对称串，”123456789”不是。
	// 思路：将输入的一个串放于一个数组中，再将输入的串倒排一次到另一个数组中，比较时，如果相等则是对称串
	// 用字符串函数时记得 #include <string.h>
	char a[10]="";
	char b[10]="";
	//gets(a);  // gets() 可以直接获取一个字符串
	scanf("%s",a);
	strcpy(b,a);   // 复制字符串值
	strrev(b);    // 倒置字符串
	if( strcmp(a, b) == 0){   // 比较字符串
		printf("是对称串");
	}else{
		printf("不是对称串");
	}
	//*/ 


	/*/38.	计算：1/2-2/3+3/4-4/5……，前100项。
	int i;
	float sum = 2,a,b,c,d;
	i=0;a=3;b=2;c=a/b;d=a+b;
	while(i<20){
		sum += c;
		b = a;		
		a = d;
		c = a/b;
		d = a+b;
		i++;
	}
	printf("前20项和是%f",sum);
	//*/



}


/*
3.	从终端（键盘）读入20个数据到数组中，统计其中正数的个数，并计算这些正数之和。
24.	从键盘输入两个字串，判断它们是否相同。
28.	随机产生N个两位自然数，降序排列后输出。（设N为20）
33.	“百钱百鸡”问题。百钱买百鸡，鸡翁一值钱三，鸡母一值钱二，鸡雏三值钱一，问鸡翁、鸡母、鸡雏各几何？
39.	从终端输入3个数a、b、c，按从大到小的顺序输出。
44.	输入任意一行字符，降序排列之。
*/