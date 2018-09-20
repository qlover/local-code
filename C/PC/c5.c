#include <stdio.h>
#include <string.h>
#include <time.h>
//�������
int pntArray(int in[],int len);
int pntArray(int in[],int len){
	puts("\r");
	int i;
	for(i=0; i <len; i++)
		printf("%d,",in[i]);
}
//�Ƚ�����
int compareSort(int in[],int len);
int compareSort(int in[],int len){
	int i,n,t;
	for(i=0; i < len; i++){
		for( n = i+1 ; n < len-1; n++){
			if( in[n] <= in[i]){
				t = in[n];
				in[n] = in[i];
				in[i] = t;
			}
		}
	}
}
//ð������
int bubbleSort(int arr[],int len);
int bubbleSort(int arr[],int len){
	int i,n,t;
	for(i=1; i<len; i++){
		for(n=0; n <len - i; n++){
			if(arr[n] > arr[n+1]){
				t = arr[n+1];
				arr[n+1] = arr[n];
				arr[n] = t ;
			}
		}
	}
}
//��������
int insertSort(int array[],int len);
int insertSort(int array[],int len){
	int i,j,key;
	for(i=0; i < len; i++){
		key = array[i];
		for(j = i - 1; j >= 0; j--){
			if(array[j] > key){
				//����� key �����ú���������ڵ�ǰ�ĵ�Ԫ
				array[j+1] = array[j];
			}else break;   //�����ҵ��� key С�ľͲ�������
		}
		array[j+1] = key;    //�� key �ص��ƶ���Ŀ�λ��
	}	
}


//�������
int quickSort(int array[], int left, int right);
int quickSort(int array[], int left, int right)
{	
	int z,y,key,t;
	z = left;
	y = right;
	key = array[z];
	if(left < right){
		//����ڲ���һ�������д�����ҵ�Ԫ���±�
		while(z<y){
			//����ҵ��˱� key С������ѭ����
			while( array[y] >= key && y > z) y--;
			array[z] = array[y];
			//����ҵ��˱� key �������ѭ��
			while( array[z] <= key && y > z) z++;
			array[y] = array[z];
		}
		//��λ
		array[z] = key;
		//��Ϊ z �� y �Ѿ����棬��������˭�����ڶ���λ�ö�����
		quickSort(array, left, y - 1);
		quickSort(array, y + 1, right);
	}else return 1;  //��� y �� z ��С����˵����������             
}



int main()
{
	
	srand(time(NULL));   //�ñ���ʱ�������������
	/*/1.�Ƚϣ�ð�ݣ���������
	
	int i,n,ch[20]={0};
	int ran;			//��Ų����������
	for(i=0; i <20; i++)
		ch[i] = rand()%100;    //20��0-100������

	printf("\n");
	for(i=0; i <20; i++){
		printf("%d|",ch[i]);
	}

	//compareSort(ch,20);
	//bubbleSort(ch,20);
	insertSort(ch,20);

	printf("\n");
	for(i=0; i <20; i++){
		printf("%d|",ch[i]);
	}

	/*/


	
	/*/2.������
	int i,n,flag,c=0;
	int in[200]={0},s[200]={0};
	for(i=0; i <200; i++)
		in[i] = 100 + rand()%(1000-101);
	for(i=0; i < 200; i++){
		for(n=2; n < in[i]; n++){
			if( in[i]%n == 0 ){
				flag = 0;
				break;
			}
			flag = 1;
		}
		if(flag){
			s[c] = in[i];
			c++;
		}
	}
	insertSort(s,c);
	pntArray(s,c);

	/*/



	
	/*/3.��ż���ͣ�������
	int i,num,jsum,osum;
	jsum =0; osum =0;
	for(i=0; i <10; i++){
		scanf("%d",&num);
		if(num%2==0) osum += num;
		else jsum += num; 
	}
	printf("\n�������ǣ�%d",jsum);
	printf("\nż�����ǣ�%d",osum);
	/*/
	


	//*/4.
	int in[7]={0};
	int i,n;
	for(i=0; i <6000; i++){
		n = 1+rand()%6;
		in[n]++; 
	}
	for(i=1; i <7; i++){
		printf("\n%d������%d����",i,in[i]);
	}

	//*/



	/*/5.ͳ�Ƶ���
	char ch[100]="abc eiysou h diy t oiuasodif adg";
	int i=0,c=1;
	while( ch[i]!= '\0'){	
		if( isspace(ch[i]) ){
			if(ch[i+1] == '\0'){
				break;
			}
			c++;
		}
		i++;
	}
	printf("������%d��",c);
	/*/
	

	

	/*/6.ɸѡ������
	int in[100]={0};
	int i,n;
	for(i=0; i <100; i++)
		in[i] = 1+rand()%100;

	for(i=0; i<100; i++){
		for(n=3; n < in[i]; n++){
			if( in[i]%n == 0){
				in[i] = 0;
				break;
			}
		}
	}
	for(i=0; i < 100; i++){
		if(i%10==0) printf("\n");
		if( in[i] == 0){
			continue;
		}else{
			printf("%d,",in[i]);
		}
	}
	/*/

	/*/7.3*3 ���ζ�ά����Խ��ߺ�
	int in[3][3]={
		{21,5,7},
		{76,15,65},
		{51,64,24}
	};

	int i,n,sum=0;
	for(i=0; i<3; i++){
		for(n=0; n<3; n++){
			if( n == i || n+i == 3-1){
				sum += in[i][n];
			}
		}
	}
	printf("�Խ��ߺ���:%d",sum);
	/*/


	/*/8.��������
	int in[100]={0};
	int i,n,t;
	for(i=0; i <100; i++)
		in[i] = rand()%100;
	
	bubbleSort(in,100);	
	pntArray(in,100);
	for(i=0; i<50; i++){
		t = in[i];
		in[i] = in[100-i-1];
		in[100-i-1] = t;
	}
	pntArray(in,100);
	/*/


	
	/*/9.ͳ���ַ�
	char ch[]="a525sA&4f6z5c( z65sd% 4aDF5cx%v 6zC5cv$4 a6sZ#5 46z5cvASD4/";
	int j[5]={0};
	int i;
	for(i=0; i < strlen(ch) ; i++){
		if( isalnum(ch[i]) ){	
			if( islower(ch[i]) ){  //��д��ĸ
				j[0]++;
			}else if( isupper(ch[i]) ){   //Сд��ĸ
				j[1]++;
			}else{   //����
				j[2]++;
			}
		}else{
			if( isspace(ch[i]) ){    //�ո�
				j[3]++;
			}else{   //�����ַ�
				j[4]++;
			}
		}
	}
	printf("\nСд��ĸ��%d��",j[0]);
	printf("\n��д��ĸ��%d��",j[1]);
	printf("\n������%d��",j[2]);
	printf("\n�ո���%d��",j[3]);
	printf("\n�����ַ���%d��",j[4]);
	
	/*/
	
	/*/10.����
	char ch[100]="";
	int i;
	gets(ch);
	for(i=0; i < strlen(ch); i++){
		switch(ch[i]){
			case 'x': ch[i]='a';break;
			case 'y': ch[i]='b';break;
			case 'z': ch[i]='c';break;
			default: ch[i]+=3 ;break;
		}
	}
	puts(ch);
	
	/*/

	

	/*/�������10000�������Ƚ�ǰ��������������ʱ��

	clock_t start, finish;  
	double  duration;    
	int in[10000]={0};
	int i=0;
	for(i=0; i <100; i++)
		in[i] = 1+rand()%100;

  
   // ����һ���¼�������ʱ��

	start = clock(); 
	printf("\nִ�п����������ˣ�");  
	quickSort(in,0,10000);
	finish = clock();  
	duration = (double)(finish - start) / CLOCKS_PER_SEC;  
	printf( "%f seconds\n", duration );  


	start = clock(); 
	printf("\nִ�бȽ��������ˣ�");  
	compareSort(in,10000);
	finish = clock();  
	duration = (double)(finish - start) / CLOCKS_PER_SEC;  
	printf( "%f seconds\n", duration );  



	start = clock(); 
	printf("\nִ��ð���������ˣ�");  
	bubbleSort(in,10000);
	finish = clock();  
	duration = (double)(finish - start) / CLOCKS_PER_SEC;  
	printf( "%f seconds\n", duration );  


	start = clock(); 
	printf("\nִ�в����������ˣ�");  
	insertSort(in,10000);
	finish = clock();  
	duration = (double)(finish - start) / CLOCKS_PER_SEC;  
	printf( "%f seconds\n", duration );  
/*/

	return 0;
}
