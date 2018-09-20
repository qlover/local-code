#include <stdio.h>
#include <string.h>
int main()
{	
	FILE *fh;
	fh = fopen("d:\\all the c\\file\\index.html","r");
	//Ð´Èëº¯ÊýÃû½Ð fputs()
	//fputs("<script>window.onload=function(){function fix(firstNum,fixedNum){var div= Math.pow(10,fixedNum);firstNum=Math.round(firstNum*div)/div;return firstNum;}var i=2.2345;var n=2;alert('This is start number'+i);alert('This is fixed number'+n);alert('The resule is :'+fix(i,n))}</script>",fh);
 	while(!feof(fh))
	{
			putchar(getc(fh));
		
	} 	
	fclose(fh);	
	return 0;
}