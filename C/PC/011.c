#include <stdio.h>
#include <math.h>
int main()
{
	/*//1.1��N����������ݣ��У�ż���ĺ�
	int i,sum,n;
	printf("���������1��������");
	scanf("%d",&n);
	i = 0;
	sum = 0;
	while(i<=n){
		sum += i;
		i+=2;
	}
	printf("1��%d��ż������%d",n,sum);
	/*/












	/*//2.��1/(2n-1)��ǰn���
	int i,n;
	float qian,sum,c;
	printf("����ڶ�����");
	scanf("%d",&n);
	i=1;
	sum = 0;
	while(i<=n){
		c = 2*i-1;
		sum += 1/c;
		//printf("%f\n",sum);                     
		i++;
	}
	printf("ǰ50��ĺ���%f",sum);
	/*/






	/*//3.��A+AA+AAA.....
	int i,n,a,t,sum=0;
	printf("������һ��0-8��������");
	scanf("%d",&a);
	printf("�������");
	scanf("%d",&n);
	i=0; t = 0;
	while(i<=n){
		t += a*pow(10,i);
		sum += t;
		printf("%d\n",t);
		i++;
	}
	printf("%d\n",sum);
	/*/





	/*/4.����������m��n�����Լ������С��������
	//���Լ����������������Ǽ��������е�����������һ��.��12��18
	//��С���������Ǽ��������еı�������С��һ��.
	int m,n,t,p,r;
	printf("����������������n,m:");
	scanf("%d,%d",&m,&n);
	if (n<m){
   		t=n;n=m;m=t;
  	 }
	for(p = m * n;m!=0;m = r){
		r = n%m;
		n = m;
	}
  	printf("���ǵ����Լ��Ϊ:%d\n",n);
  	printf("���ǵ���С��Լ��Ϊ:%d\n",p/n);

	/*/




	/*/5.�������ˮ�ɻ���
	int a,b,c;
	int i=100;
	while(i<1000){
		a = i/100;  //get ��λ����
		b = i/10%10;   //ʮλ����
		c = i%10%10;   //��λ����
		//printf("%d,%d,%d\n",a,b,c);
		if((pow(a,3)+pow(b,3)+pow(c,3))== i) printf("%d\n",i);
		i++;
	}
	/*/



	/*/6.����
	int i,n,c,sum=0;// sum ��������������ӵĺͣ�c���ڴ���м������ӣ�N����ÿ�����ӷֱ��Ƕ���
	for(i=1; i <=1000; i++){
		c = 0;sum=0;
		//printf("%d�������У�",i);
		for(n=1; n<i; n++){
			if(i%n == 0){
				sum += n;
				//printf("%d|",n);	
			}else continue;
		}
		if(sum == i){
			printf("%d������\n",i);
		}
		//printf("���Ӻ���%d\n",sum);
	}
	/*/



	/*/7.��������
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
	printf("ǰ20�����%f",sum);
	/*/
	
	
		

	/*/8.����
	int i;
	float z,half,sum;
	z = 100;
	sum = 0;
	for(i=0; i < 10; i++){
		
		half = z/2;
		sum += z + half;
		z/=2;
	}
	printf("��10�ι�����%f,����%f",sum,half);
	/*/




	/*/9.����Ǻ�  
	int i,j,k;
	for(i=0; i <=1 ;i++) {
		for(j=0; j <=  2-i;j++)
			printf(" "); 
		for(k=0; k <=  2*i;k++)
			printf("*"); 
		printf("\n"); 
	}
	for(i=0;i<3;i++) {
		for(j=0;j <= i;j++)
			printf(" "); 
		for(k=0;k <= 4-2*i;k++)
			printf("*"); 
		printf("\n"); 
	} 
	/*/

	



	/*/10.
	int i;
	for(i=1; i <= 20; i++){
		if(i%5 == 0) printf("%3d\n",i);
		else printf("%3d",i);
	}
	*/
	



	/*/11.
	int i,in[20]={0},t;
	printf("������10������");
	for(i=0;i <10; i++){
		scanf("%d",&in[i]);
	}
	t = in[0];
	for(i=0; i < 10; i++){
		if(t < in[i]) t = in[i];
	}
	printf("���ֵ��%d",t);
	*/

		
		
		
	/*/12.
	int i,in[20]={0},t=0;
	printf("������10������");
	for(i=0;i <10; i++){
		scanf("%d",&in[i]);
	}
	for(i=0; i < 10; i++){
		t += in[i];
	}
	printf("���ʮ��������%d",t);
	*/
		
		
		
		
		
		
		
		
		
		
		
		
	return 0;
}














