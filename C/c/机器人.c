# include <stdio.h>
# include <windows.h>
# include <stdlib.h> 
# define MAXSTR 200
# define REBOT "��С�� ˵: "
# define YOUR "��  ˵: "
# define EXIT "-e\n"
# define NOREPLY "�Ҳ�֪����˵ʲô��!\n" 

char * GetRebot(char * str); //������յĶԻ����ݣ����ػ����˻ظ�����
void DelHr(char * str); //ɾ����ȡ�����ַ����еĻ���
void RobotSay(char * str); //�����˻ظ�

int main(void)
{
        char str[1024]; 
        printf("**************************���������****************************\n");
        printf("\n%sHI,������������� ��С��,�ܸ��ĺ�����ʶ^ ^ �˳�����������-e\n",REBOT); 

do
{
        printf("%s",YOUR);
        scanf("%s",str);
        printf("%s",REBOT);

        if (str[0] != '-' && str[1] != 'e' )
        {
                RobotSay(GetRebot(str));
                printf("\n");
        }else{
                printf("����������ʵ���,��ӭ�´�������������~\n");
        } 
        }while(str[0] != '-' && str[1] != 'e' ); 

return 0;
} 

char * GetRebot(char * str)
{
static char keywords[500];
char reply[500];
int i = 0;
FILE * fp; 
if( (fp = fopen("E:\\Ѹ������\\reply","r")) == NULL)
{
        printf("ȱ�ٺ����ļ�!!\n");
        exit(-1);
} 
while ( !feof(fp) ) //��ȡ�ؼ���
{
        i++;
        fgets(keywords,500,fp);
        DelHr(keywords); 

if( i % 2 != 0)
{
if( strstr(str,keywords) != 0 )
{
fgets(reply,500,fp);
return reply;
}
} 
}

fclose(fp);
return NOREPLY; 
} 

void DelHr(char * str)
{
int i,j;

for(i=0; str[i] != '\0'; i++)
{
if(str[i] == '\n')
{
for(j=i; str[j] != '\0'; j++)
{
str[j] = str[j+1];
}
}
}
} 

void RobotSay(char * str)
{
int i; for(i=0; str[i] != '\0'; i++)
{
Sleep(80);

printf("%c",str[i]); }
}
