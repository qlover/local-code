//
//INCLUDE PART/////////////////////////////////////////////////////////////////
//
#include<iostream> //IOͷ�ļ�
#include<cstdlib> //srand������rand����
#include<ctime> //ʹ��time������ʼ�����������
#include<conio.h> //kbhit���������������
#include<windows.h> //Sleep����
#include<string> //ʹ��string��Ĺ��캯��
//
//DEFINES PART/////////////////////////////////////////////////////////////////
//
#define debug //�������ģʽ
#undef debug //�˳�����ģʽ
//
//GROBAL STATEMENTS PART///////////////////////////////////////////////////////
//
//ȫ�������ռ�����
using namespace std;
//ȫ�ֱ�������
int sticklen=0;//���ӳ���
int landlen=4;//�԰����
int spacelen=6;//��϶����
int levels=0;//��ǰ��������
//�����ӳ����Ӽ��ʱ�������Ժ���ƣ�
c**t int sleeptm=450;
//���ӵ���󳤶�
c**t int maxlen=20;
//��϶����󳤶�
c**t int maxspace=10;
//�԰�����󳤶�
c**t int maxland=6;
//�����߹�����ʱ��ÿ��һ������ʱ��
c**t int steptm=250;
//ȫ�ֺ�������
void printmenu();//Ϊprint������walk�����ṩ�˵��Ĵ�ӡ
void print();//��ӡ����
void uplevel();//���ز���������
void walk();//�������߹�����
void gameover();//������Ϸ
//
//MAIN FUNCTION PART///////////////////////////////////////////////////////////
//
int main()
{
 int incr=1;//���ӳ�������
//��Ϸ��ѭ����ʼ
while(true)
 {
 print();//��ӡ��Ϸ����
getch();//�ȴ����룬������ʱ�����ӳ�����
getch();
 for(sticklen=1;!kbhit();sticklen+=incr) 
 //������ʱÿsleeptm�����ӳ�һ�ι���
{
if(sticklen==maxlen)
 //������ӳ��ȵ��ڹ��ӵ���󳤶�
incr=-1;//����ÿ������Ϊ-1
 else if(sticklen==0)
 //������ӳ���Ϊ0
 incr=1;//����ÿ������Ϊ1
 print();//��ӡ�ӳ���Ĺ���
Sleep(sleeptm);//�ȴ�sleeptm����
}
incr=1;//��������incr��ֵ
if(sticklen<spacelen||
 sticklen>(spacelen+landlen))
 //������ӳ���С�ڿ�϶���Ȼ���ڿ�϶������԰�����֮��
{
walk();//�������߹����Ӳ�����
gameover();//��Ϸ����
}
else //�������
{
walk();//�������߹�����
//�������ù��ӳ��ȡ��԰����ȺͿ�϶���Ȳ�������һ��
uplevel();
 }
 }//��Ϸ��ѭ������
#ifdef debug //������ڵ���ģʽ
//�˴�Ϊ���Դ���
sticklen=8;
 landlen=4;
 spacelen=6;
 print();
 system("pause");
 walk();
 system("pause");
 uplevel();
 print();
 system("pause");
#endif //��������
return 0;
}//main��������
//
//GROBAL FUNCTION DEFINE PART//////////////////////////////////////////////////
//
//print��������ӡ�����쳤ʱ�Ļ���
void print()
{
 int i,j;//ѭ������
system("cls");//����
printmenu();//��ӡ�˵�
//���maxlen-sticklen������
cout<<string(maxlen-sticklen+1,'\n');
 cout<<endl;
 for(i=0;i<sticklen-1;i++)
 {
 cout<<" �~"<<endl;//���һ�ع���
}
cout<<"��~"<<endl;//�������͹���
for(i=0;i<10;i++)
 {
 cout<<"�~�~";//����ⰶ
for(j=0;j<spacelen;j++)
 {
 cout<<" ";
 }//�����϶
for(j=0;j<landlen;j++)
 {
 cout<<"�~";
 }//����԰�
cout<<endl;//����
}
}//print��������
//walk��������ӡ�����߹�����ʱ�Ļ���
void walk()
{
 int i,j,k;//ѭ������
int peopos;//����λ��
for(peopos=0,i=0;i<sticklen-1;i++,peopos++)
 {
 system("cls");//����
printmenu();//��ӡ�˵�
cout<<string(maxlen-1,'\n');//���maxlen-1������
cout<<endl;
 cout<<" ";
 for(j=0;j<peopos;j++)
 {
 cout<<" ";
 }//�������ǰ�Ŀ�϶
cout<<"��";//�������
cout<<endl;
 cout<<" ";//�������ǰ�Ŀ�϶
for(j=0;j<sticklen-1;j++)
 {
 cout<<"�~";
 }//�������
cout<<endl;
 for(k=0;k<10;k++)
 {
 cout<<"�~�~";//����ⰶ
for(j=0;j<spacelen;j++)
 {
 cout<<" ";
 }//�����϶
for(j=0;j<landlen;j++)
 {
 cout<<"�~";
 }//����԰�
cout<<endl;//����
}
Sleep(steptm);//��ͣsteptm����
}
system("cls");//����
printmenu();//��ӡ�˵�
cout<<string(maxlen-1,'\n');//���maxlen-1������
cout<<endl;
 cout<<" ";//�������ǰ�Ŀ�϶
for(j=0;j<sticklen-1;j++)
 {
 cout<<"�~";
 }//�������
cout<<"��";//�������
cout<<endl;
 for(k=0;k<10;k++)
 {
 cout<<"�~�~";//����ⰶ
for(j=0;j<spacelen;j++)
 {
 cout<<" ";
 }//�����϶
for(j=0;j<landlen;j++)
 {
 cout<<"�~";
 }//����԰�
cout<<"\n";//����
}
}//walk��������
//gameover��������������ӡ��Ϸ�����Ļ���
void gameover()
{
 system("color 46");//����
system("pause");//��ͣ���ȴ�����
system("color 07");//�ָ�Ĭ������
system("cls");//����
system("pause");//��ͣ
exit(0);//�˳�
}
//uplevel�����������ӳ��ȡ���϶���ȺͶ԰������������ò���levels��1
void uplevel()
{
 srand(time(NULL));//�����������������
levels+=1;//���ؿ�����1 
 landlen=rand()%maxland+1;//�������ö԰�����
spacelen=rand()%maxspace+1;//�������ÿ�϶����
sticklen=0;//�������ù��ӳ���
}
//printmenu��������ӡ��Ϸ��Ϣ
void printmenu()
{
 cout<<"����Ӣ��\n";
 cout<<"create by gzicc,2015/08/04\n";
 cout<<"�Ѵ���"<<levels<<"�أ�"<<"�����ǵ�"<<levels+1<<"��";
}