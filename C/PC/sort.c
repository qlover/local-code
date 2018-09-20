#include <stdio.h>
#include <math.h>
#include <time.h>
#define L 20
//�������
int pntArray(int in[],int len);
int pntArray(int in[],int len){
	puts("\r");
	int i;
	for(i=0; i <len; i++)
		printf("%d,",in[i]);
}
// ��������Ԫ��
void swap(int array[], int i, int n){
	int t = array[i];
	array[i] = array[n];
	array[n] = array[i];
}

// �Ƚ�����
int compareSort(int array[],int len);
int compareSort(int array[],int len){
	int i,n,t;
	for( i=0; i < len; i++){
		for( n = 0; n < len; n++){
			if( array[n] >= array[i] ){
				t = array[n];
				array[n] = array[i];
				array[i] = t;
			}
		}
	}
}
// ����ð������
int bubbleSort(int array[],int len);
int bubbleSort(int array[],int len){
	int i,n,t;
	for( i = 0; i < len - 1; i++){
		for( n = 0; n < len - i -1; n++){
			if( array[n+1] < array[n]){
				t = array[n];
				array[n] = array[n+1];
				array[n+1] = t;
			}
		}
	}
}

// ����ѡ������
int selectSort(int array[],int len);
int selectSort(int array[],int len){
	int i,n,pos,max,t;
	for(i=0; i < len; i++){
		max = array[0];
		pos = 0;
		for(n = 0; n < len-i; n++ ){
			if( array[n] > max){
				max = array[n];
				pos = n;
			}
		}
		t = array[pos];
		array[pos] = array[n-1];
		array[n-1] = t;
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

//�����������
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
// ����ϣ������
int shellSort(int array[],int len);
int shellSort(int array[],int len){
	int mid = floor(len/2);
	int i,n,temp;
	while( mid >=1 ){
		//���Ʋ�������
		for( i = mid; i < len; i++){
			// ע�� n ÿ�ε�ֵ��-= mid
			for( n = i - mid; n >= 0; n-=mid){
				if( array[n] >= array[n+mid]){
					temp = array[n];
					array[n] = array[n+mid];
					array[n+mid] = temp;
				}
			}
		}
		// ������������
		mid = floor(mid/2);
	}
}

// ������
void heap(int array[], int nowInd, int len){
	int buf,pos,t;
	// 2*buf+1 Ҷ�ڵ���߽ڵ��±�
	for(buf = nowInd; 2 * buf + 1 < len; buf = pos){
		// Ĭ��ȡ����ڵ��±�
		// ͬʱҲָ������ӽڵ��±�
		pos = 2 * buf + 1;
		// �����ǰҶ�ڵ����ҽڵ� �� �ҽڵ������ڵ�
		if( pos < len-1 && array[pos+1] > array[pos] ){
			pos++;   // ָ���ҽڵ� 
		}

		// ����ӽڵ���Ҷ�ڵ�Ƚ�
		if( array[buf] < array[pos] ){
			t = array[buf];
			array[buf] = array[pos];
			array[pos] = t;
		}else break;  // ����ȥ��һ��Ҷ�ڵ�
	}
}

// ���������
int heapSort(int array[], int len){
	int i,t;
	// �ѻ�����
	// C ����û�� ceil() �����ĺ�����Ҫ����1
	for(i = len/2-1; i >= 0; i--){
		heap(array,i,len);
	}
	// ������
	for(i = len-1; i >= 0; i--){
		// ���ڵ��뵱ǰ���һ���ڵ㽻��
		t = array[0];
		array[0] = array[i];
		array[i] = t;
		// ��С��Χ�ٴζѻ�
		// ��Ҫע�⵱ǰҶ�ڵ������ڵ��ʾ 
		heap(array,0,i);
	}
}



int main()
{
	int arr[L]={0};
	int i;
	srand(time(NULL));
	for(i=0;i < L; i++){
		arr[i] = rand()%50;
	}
	pntArray(arr,L);
	//�Ƚ�����
	//compareSort(arr,L);

	//ð������
	//bubbleSort(arr,L);

	//ѡ������
	//selectSort(arr,L);
	
	//��������
	//quickSort(arr,0,L-1);

	//��������
	//insertSort(arr,L);

	//ϣ������
	//shellSort(arr,L);

	// ������
	heapSort(arr,L);



	pntArray(arr,L);
	return 0;
}



/*
int quickSort(int array[], int left, int right);
int quickSort(int array[],int left,int right)
{
    int i = left;
    int j = right;  
    int temp = a[i]; 
  
    if( left < right)
    {          
        while(i < j){
            while((a[j] >= temp) && (i < j)){ 
                j--; 
            }
            a[i] = a[j];
            while((a[i] <= temp) && (i < j)){
                i++; 
            }  
            a[j]= a[i];
        }
        a[i] = temp;
        quickSort(a,left,i-1);
        quickSort(a,j+1,right);
    }
    else
    {
        return;
    }
}



*/