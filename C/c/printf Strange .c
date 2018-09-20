#include <stdio.h>
int main()
{
	int i=8;	
					//整个 i　＝ ４
	printf("%d,%d,%d,%d\n",i--,i--,i--,i--);
					
							
	printf("%d",i);
						
	//++是正排  -- 是倒排			
	
						
		
	
	
	//printf("%d,%d,%d,%d,%d,%d\n",++i,i,i,i,i,i);			--->9,9,9,9,9,9
	//printf("%d,%d,%d,%d,%d,%d\n",++i,--i,i,i,i,i);		--->8,8,8,8,8,8
	//printf("%d,%d,%d,%d,%d,%d\n",++i,--i,i++,i,i,i);		--->9,9,8,9,9,9
	//printf("%d,%d,%d,%d,%d,%d\n",++i,--i,i++,i--,i,i);	--->
									
	
	//printf("%d,%d,%d,%d,%d,%d\n",++i,--i,i++,i--,i++,i);	--->
	//printf("%d,%d,%d,%d,%d,%d\n",++i,--i,i++,i--,i++,i--);--->
									
	
	
	
	
	
	
	//printf("%d\n",++i);
	//printf("%d,%d\n",++i,--i);
	//printf("%d,%d,%d\n",++i,--i,i++);
	//printf("%d,%d,%d,%d\n",++i,--i,i++,i--);
	//printf("%d,%d,%d,%d,%d\n",++i,--i,i++,i--,i++);
	//printf("%d,%d,%d,%d,%d,%d\n",++i,--i,i++,i--,i++,i--);
	//i+1-1+1-1+1-1
	//i+(-1)+1-1+1-1
	return 0;
}