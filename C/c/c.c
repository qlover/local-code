#include <stdio.h>
int main(int argc,char **argv){	

	FILE *fr = NULL;
	fr = fopen(argv[1],"w");
	fpos_t len;
	char str[500]="";
	char str2[500]="<script>\nwindow.onload=function(){\n\tvar myNumber=new Array(1,2,3,4,5);\n\tfunction isless(value,index,array){\n\t\tvar result=value;\n\t\treturn result;\n\t}\n\talert(myNumber.map(isless))\n;}\n</script>";
	fseek(fr,0,2);
	fwrite(str2,500,1,fr);
	if(fgetpos(fr,&len)==0)
	{
		printf("文件的大小是:%d",len);
	}	
	rewind(fr);


	fread(str,len,1,fr);

	printf("\n%s",str);
	fclose(fr);
	return 0;
}