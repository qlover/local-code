#include <stdio.h>
 void myprintf();


int main() 
{ 
	int i,n; 

	for(i=0;i<10;i++) 
	{ 
		myprintf(i);	//ΪʲôҪ����i ���ᴫi�Ļ�����������ѭ������Ϊ��û�ж�������У������ţ����Խ�����ѭ��

	
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
 void myprintf(int m)	//m����mypritnf()�����ı���  ���Է���main()������ʱ��������һ�� <=�Ķ���
						//������һ��Ȼ������������main()�����е�for��������еı���i �� ���Եô���һ���������i

 {
	 int n;
	 for(n=0; n<m; n++)
	 {
		 printf("*");
		
	 }
 } 