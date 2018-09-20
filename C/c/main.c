/*【main()】函数的参数
main函数可以不带参数,也可以带参数，这个参数可以认为是 main函数的形式参数。
C语言规定main函数的参数只能有两个，习惯上这两个参数写为argc和argv。
因此，main函数的函数头可写为：
    main (argc,argv)
C语言还规定argc(第一个形参)必须是整型变量,argv( 第二个形参)必须是指向字符串的指针数组。
加上形参说明后，main函数的函数头应写为：
    main (int argc,char *argv[])
    由于main函数不能被其它函数调用，因此不可能在程序内部取得实际值。
	那么，在何处把实参值赋予main函数的形参呢? 实际上,main函数的参数值是从操作系统命令行上获得的。
	当我们要运行一个可执行文件时，在DOS提示符下键入文件名再输入实际参数即可把这些实参传送到main的形参中去。
DOS提示符下命令行的一般形式为：
    C:\>可执行文件名  参数  参数……;  
    但是应该特别注意的是，main 的两个形参和命令行中的参数在位置上不是一一对应的。
	因为,main的形参只有二个，而命令行中的参数个数原则上未加限制。
	argc参数表示了命令行中参数的个数(注意：文件名本身也算一个参数)，
argc的值是在输入命令行时由系统按实际参数的个数自动赋予的。
例如有命令行为：
    C:\>E24  BASIC  foxpro  FORTRAN
由于文件名E24本身也算一个参数，所以共有4个参数，因此argc取得的值为4。
argv参数是字符串指针数组，其各元素值为命令行中各字符串(参数均按字符串处理)的首地址。 
指针数组的长度即为参数个数。数组元素初值由系统自动赋予。其表示如图所示：

*/

#include <stdio.h>
int main(int argc,char **argv){//向上看
	int i;
	printf("%d",argc);//输出输入的个数
	for(i=0; i < argc;i++)
	{
		printf("%s\n",argv[i]);	//输出每个输入的参数
	}
	
	return 0;
}

/* int main(int argc,char **argv){	

	FILE *fr = NULL;
	int i=0;	
	long len = 0;	
	if(argc != 2 )
	{
		puts("没有找到你的第二个参数");
		return 0;	
	}
	fr = fopen(argv[1],"r");
	fseek(fr,0,2);
	len = ftell(fr);
	printf("当前这个文件的大小是 %d 个字节",len);
	fclose(fr);
	return 0;
} */