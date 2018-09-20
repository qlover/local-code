//
//INCLUDE PART/////////////////////////////////////////////////////////////////
//
#include<iostream> //IO头文件
#include<cstdlib> //srand函数和rand函数
#include<ctime> //使用time函数初始化随机数种子
#include<conio.h> //kbhit函数检测有无输入
#include<windows.h> //Sleep函数
#include<string> //使用string类的构造函数
//
//DEFINES PART/////////////////////////////////////////////////////////////////
//
#define debug //进入调试模式
#undef debug //退出调试模式
//
//GROBAL STATEMENTS PART///////////////////////////////////////////////////////
//
//全局命名空间声明
using namespace std;
//全局变量声明
int sticklen=0;//棍子长度
int landlen=4;//对岸宽度
int spacelen=6;//空隙长度
int levels=0;//当前闯过关数
//两次延长棍子间的时间间隔（以毫秒计）
c**t int sleeptm=450;
//棍子的最大长度
c**t int maxlen=20;
//空隙的最大长度
c**t int maxspace=10;
//对岸的最大长度
c**t int maxland=6;
//人物走过棍子时，每走一步所需时间
c**t int steptm=250;
//全局函数声明
void printmenu();//为print函数及walk函数提供菜单的打印
void print();//打印画面
void uplevel();//过关并重新设置
void walk();//让人物走过棍子
void gameover();//结束游戏
//
//MAIN FUNCTION PART///////////////////////////////////////////////////////////
//
int main()
{
 int incr=1;//棍子长度增量
//游戏主循环开始
while(true)
 {
 print();//打印游戏画面
getch();//等待输入，有输入时连续延长棍子
getch();
 for(sticklen=1;!kbhit();sticklen+=incr) 
 //无输入时每sleeptm毫秒延长一次棍子
{
if(sticklen==maxlen)
 //如果棍子长度等于棍子的最大长度
incr=-1;//棍子每次增量为-1
 else if(sticklen==0)
 //如果棍子长度为0
 incr=1;//棍子每次增量为1
 print();//打印延长后的棍子
Sleep(sleeptm);//等待sleeptm毫秒
}
incr=1;//重新设置incr的值
if(sticklen<spacelen||
 sticklen>(spacelen+landlen))
 //如果棍子长度小于空隙长度或大于空隙长度与对岸长度之和
{
walk();//让人物走过棍子并掉下
gameover();//游戏结束
}
else //如果不是
{
walk();//让人物走过棍子
//重新设置棍子长度、对岸长度和空隙长度并进入下一关
uplevel();
 }
 }//游戏主循环结束
#ifdef debug //如果是在调试模式
//此处为测试代码
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
#endif //结束调试
return 0;
}//main函数结束
//
//GROBAL FUNCTION DEFINE PART//////////////////////////////////////////////////
//
//print函数：打印棍子伸长时的画面
void print()
{
 int i,j;//循环索引
system("cls");//清屏
printmenu();//打印菜单
//输出maxlen-sticklen个换行
cout<<string(maxlen-sticklen+1,'\n');
 cout<<endl;
 for(i=0;i<sticklen-1;i++)
 {
 cout<<" ▇"<<endl;//输出一截棍子
}
cout<<"♀▇"<<endl;//输出人物和棍子
for(i=0;i<10;i++)
 {
 cout<<"▇▇";//输出这岸
for(j=0;j<spacelen;j++)
 {
 cout<<" ";
 }//输出空隙
for(j=0;j<landlen;j++)
 {
 cout<<"▇";
 }//输出对岸
cout<<endl;//换行
}
}//print函数结束
//walk函数：打印人物走过棍子时的画面
void walk()
{
 int i,j,k;//循环索引
int peopos;//人物位置
for(peopos=0,i=0;i<sticklen-1;i++,peopos++)
 {
 system("cls");//清屏
printmenu();//打印菜单
cout<<string(maxlen-1,'\n');//输出maxlen-1个换行
cout<<endl;
 cout<<" ";
 for(j=0;j<peopos;j++)
 {
 cout<<" ";
 }//输出人物前的空隙
cout<<"♀";//输出人物
cout<<endl;
 cout<<" ";//输出棍子前的空隙
for(j=0;j<sticklen-1;j++)
 {
 cout<<"▇";
 }//输出棍子
cout<<endl;
 for(k=0;k<10;k++)
 {
 cout<<"▇▇";//输出这岸
for(j=0;j<spacelen;j++)
 {
 cout<<" ";
 }//输出空隙
for(j=0;j<landlen;j++)
 {
 cout<<"▇";
 }//输出对岸
cout<<endl;//换行
}
Sleep(steptm);//暂停steptm毫秒
}
system("cls");//清屏
printmenu();//打印菜单
cout<<string(maxlen-1,'\n');//输出maxlen-1个换行
cout<<endl;
 cout<<" ";//输出棍子前的空隙
for(j=0;j<sticklen-1;j++)
 {
 cout<<"▇";
 }//输出棍子
cout<<"♀";//输出人物
cout<<endl;
 for(k=0;k<10;k++)
 {
 cout<<"▇▇";//输出这岸
for(j=0;j<spacelen;j++)
 {
 cout<<" ";
 }//输出空隙
for(j=0;j<landlen;j++)
 {
 cout<<"▇";
 }//输出对岸
cout<<"\n";//换行
}
}//walk函数结束
//gameover函数：红屏并打印游戏结束的画面
void gameover()
{
 system("color 46");//红屏
system("pause");//暂停并等待输入
system("color 07");//恢复默认字体
system("cls");//清屏
system("pause");//暂停
exit(0);//退出
}
//uplevel函数：将棍子长度、空隙长度和对岸长度重新设置并将levels加1
void uplevel()
{
 srand(time(NULL));//重新设置随机数种子
levels+=1;//将关卡数加1 
 landlen=rand()%maxland+1;//重新设置对岸长度
spacelen=rand()%maxspace+1;//重新设置空隙长度
sticklen=0;//重新设置棍子长度
}
//printmenu函数：打印游戏信息
void printmenu()
{
 cout<<"棍子英雄\n";
 cout<<"create by gzicc,2015/08/04\n";
 cout<<"已闯过"<<levels<<"关，"<<"现在是第"<<levels+1<<"关";
}