#include <stdio.h>
 void myprintf();


int main() 
{ 
	int i,n; 

	for(i=0;i<10;i++) 
	{ 
		myprintf(i);	//为什么要传个i 不会传i的话，将会是死循环，因为，没有定义多少列，多少排，所以将是死循环

	
		printf("\n");
	} 
}
/*
for(i=0;i<10;i++) 
	{ 

		for(n=1;n<=i;n++) 
			printf("%d*%d=%d ",i,n,i*n); 
		printf("\n"); 
	} 
*/
 void myprintf(int m)	//m就是mypritnf()函数的本身  所以放在main()函数中时，还少了一个 <=的对象，
						//还少了一个然后这个对象就是main()函数中的for（）语句中的变量i ， 所以得传递一个这个变量i

 {
	 int n;
	 for(n=0; n<m; n++)
	 {
		 printf("*");
		
	 }
 } 