#include <stdio.h>
#include <math.h>
#include <string.h>
//�ҳ�С��ָ���������������ĺ���
int pntPrime(int range);
int pntdPrime(int range){
	printf("\n**************\n");
	int i,flag,n;
	int m = range;
	for(i=2; i <= m; i++){
		for(n=2; n <i; n++){
			if(!(i%n)){   //�����ȡ������;��һ�����������ľ�˵����������
				//printf("%d��������\n",i);
				flag = 0;
				break;
			}
			flag = 1;				
		}
		if(flag) printf("%d������\n",i);	
	}
	printf("**************\n");
};


int main()
{

	//*/1.�����ַ�����Բ����

		/*/1.1
		long int i=1;
		double m,sum;
		m = 1;
		sum = 0;
		while(i){
			if(1.0/m < 1e-5){
				break;
			}
			
			i%2==0? (sum -= 1.0/m) : (sum += 1.0/m);
			m +=2;
			printf("%.30f\n", sum);
			i++;
		}
		printf("PI=%.30f\n", sum*4);
		/*/
	

		/*/1.2


		/*/





	//*/

	/*//2.
	int i,n,a,t,sum=0;
	printf("������һ��0-9��������");
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
		





	/*/3.��ȫƽ����
	int i,m,j;
	printf("��λ������ȫƽ�����У�\n");
	for(i = 1111; i < 9999; i++){
		//��λ������ȫƽ������ 32 ��ʼ
		m=32;
		while((m++)<100){
			j = m*m;
			if(i == j){
				printf("%d|",j);
				j=0;
				break;
			}
		}

	}
	/*/



	
	/*//4.С�����������ֵĺ�
	float num,zsum,xsum;
	zsum = xsum = 0;
	do{
		scanf("%f",&num);
		zsum += (int)num;
		xsum += num - (int)num;    //С�����ֵ��ڱ����ȥ������
	}while( num != 00);
	printf("\n�������ֺ��ǣ�%d",(int)zsum);
	printf("\nС�����ֺ���:%f",xsum);
	/*/
		
	



	/*/5.�ҳ�С�� M ������
	int i,n,m,flag,c;
	c = 0;
	scanf("%d",&m);
	for(i=2; i <= m; i++){
		for(n=2; n <i; n++){
			if(!(i%n)){   //�����ȡ������;��һ�����������ľ�˵����������
				//printf("%d��������\n",i);
				flag = 0;
				break;
			}
			flag = 1;				
		}
		if(flag) c++;	
	}
	printf("С��%d��������%d��",m,c);
	/*/



	/*/6.��һ������������ǰ�������һ����

	/*/





	/*/7.ѡ��5000 ���·�����������
		//ǧλ�������λ����֮�͵���ʮλ�������λ����֮��
		//ǧλ�������λ����֮�͵��ڸ�λ������ǧλ����֮���10��
		//�����,cnt
		int i,cnt;
		int q,b,s,g;
		for(cnt=0,i=1000;i <= 5000; i++){
			q = i/1000%10;
			b = i/100%10;
			s = i/10%10;
			g = i/1%10;
			//�ж�����
			if((q+b == s+g) && (q+b == 10*(g-q))){
				//printf("\n%d",i);
				cnt++;
			}
			
		}
		printf("\n����%d����������",cnt);
	

	/*/






	//*/8.�������� y = x^2 + 5��ֱ��x=1,x=-1��X��Χ�ɵķ����������



	//*/



	/*/9.Ѱ�Ҳ���� 11 �� 999 ֮�����M��������M,M^2,M^3��Ϊ������
	int i,g,s,b;
	for(i=11; i < 1000; i++){
		b = i/100;
		s = i/10%10;
		g = i/1%10;
		
		//ֻ����λ�������
		if(!b){
			if(s==g){
				printf("%d|",i);
			}else continue;
		}else{    //����λ�������
			if(b == g){
				printf("%d|",i);
			}else continue;
		}

	}
	/*/





	/*/10.�������ͼ��
	char ch[27]="ABCDEFGHIGKLMNOPQRSTUVWXYZ\0";
	int i,n,t,N,f;
	N = 26;
	for(i=0; i<N; i++){
		for(n=0; n <= N-i; n++){
			printf(" ");
		}
		for(t=0; t<= 2*i; t++){
			//������ҵ�A
			if(t == 0 || t== 2*i){
				printf("%c",ch[0]);
				//������ÿһ��tΪ0ʱ��0ǰ������
				//�����ǵ�t==2*i ʱ��t �ĺ������
				continue; 
				
			}else {
								
				//if(t==i || t < i)	
				//���tС��Ҳ�������м��iֵ����ֱ�����B-Z
				//��Ϊ�����if���Ѿ��жϳ���tΪ0ʱ���A
				if( t <= i){		
					printf("%c",ch[t]);
				}else{
					// 012 3 456
					//������һ�ţ���t=3��i=3�������ch[i]
					//����Ҫ�� 3������� 210 ����ĸ������Ҫ�� 456�ĳɶ�Ӧ 210������
					//��Ҫ�� ������±��� ��ǰ�� i-��ǰ��t
						//Ȼ���ټ��ϵ�ǰ��i��Ҳ�Ͱ� 456 �Ķ�Ӧ�� 210��
					printf("%c",ch[i-t+i]);
				}
			}
		}
		printf("\n");
	}

	/*/






	/*/11.��A,B,C��Ϊ3����0�������������㲢������в����������ĸ��� cnt
		//A+B+C = 13,A-C=5
		
		//���ⷽ�̿�֪ c = a -5   <=>
		//A+B+A-5=13   <=>  2a-5 = 13-b
		int a,b,c;
		for(a=5;a<=9;a++){
			for(b=0; b<=8; b++){
				if(2*a - 5 == 13-b){
					printf("a=%d,b=%d,c=%d\n",a,b,a-5);
				}else continue;
			}
		}
	/*/


	//*/12.


	//*/


 

	/*/13.�������ҳ�һ���������ĳ3�����ĺͣ�������3�����Ļ�
	//�����������---------------------------------
	int i,a,b,c;
	for(i=1;i<100;i++){
		for(a=1;a<100;a++){	
			for(b=1;b<100;b++){
				for(c=1;c<100;c++){
					if(a+b+c == i && a*b*c == i){
						printf("%d|a=%d,b=%d,c=%d\n",i,a,b,c);
					}else continue;
				}
			}
		}
	}
	/-----------------------------*/



	//*/14.


	//*/



	//*/


	//*/



	//*/


	//*/

	return 0;
}


//��������
for(i=0;i <10;i++){
	scanf("%d",&arr[i]);
}

//�������
for(i=0; i <10; i++){
	if((i+1)%3==0){
		printf("\n");
	}
	printf("%d",arr[i]);
}










