// 冒泡排序
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

int i;
float sum=0;
int in[10]={0};
for(i = 0; i < 10; i++){
	scanf("%d",&in[i]);
}
bubbleSort(in, 10);

for(i=1; i < 9; i++){
	sum+=in[i];
}
printf("最后的平均分是:%f", sum/8);
















