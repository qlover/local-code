/*
                   _ooOoo_
                  o8888888o
                  88" . "88
                  (| -_- |)
                  O\  =  /O
               ____/`---'\____
             .'  \\|     |//  `.
            /  \\|||  :  |||//  \
           /  _||||| -:- |||||-  \
           |   | \\\  -  /// |   |
           | \_|  ''\---/''  |   |
           \  .-\__  `-`  ___/-. /
         ___`. .'  /--.--\  `. . __
      ."" '<  `.___\_<|>_/___.'  >'"".
     | | :  `- \`.;`\ _ /`;.`/ - ` : | |
     \  \ `-.   \_ __\ /__ _/   .-` /  /
======`-.____`-.___\_____/___.-`____.-'======
                   `=---='
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
         佛祖保佑       永无BUG
*/

////		 本程序由yan_xu编写				////
////		转载或有BUG请联系本人			////
////			QQ:1341283988				////
////	此程序仅供学习，请勿用作商业用途	////
////				后果自负				////




#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <windows.h>
#include <conio.h>
#include <color.h>
#include <string.h>
#define MAX_HEIGHT 10					//楼房的高度
#define MAX_WINDOW_LINES 30				//界面的行数
#define MAX_WINDOW_COLS 44				//界面的一行的字符
#define MOVE_SPEED 200					//人物移动速度，数字越小越快
#define HERE_STYLE "♀"					//人物样式
void goto_xy(int x,int y)				//移动光标:[x坐标][y左边]
{
	HANDLE hOut;
	hOut = GetStdHandle(STD_OUTPUT_HANDLE);
	COORD pos={x,y};
	SetConsoleCursorPosition(hOut,pos);
}
void HideCursor()						//隐藏光标
{
	CONSOLE_CURSOR_INFO cursor_info = {1, 0}; 
	SetConsoleCursorInfo(GetStdHandle(STD_OUTPUT_HANDLE), &cursor_info);
}
void Building(int Weight,int Distance)	//绘制大楼:[宽度][离界面左边的距离]
{
	for(int length=0;length<=Weight+1;length++)
	{
		for(int height=0;height<=MAX_HEIGHT;height++)
		{
			goto_xy(Distance+length*2,height+(MAX_WINDOW_LINES-1-MAX_HEIGHT));
			BLACK_WHITE;
			printf("■");
		}
	}
}
void Clean_Building(int Weight,int Distance)//清除绘制的大楼:[宽度][离界面左边的距离]
{
	for(int length=0;length<=Weight+1;length++)
	{
		for(int height=0;height<=MAX_HEIGHT;height++)
		{
			goto_xy(Distance+length*2,height+(MAX_WINDOW_LINES-1-MAX_HEIGHT));
			BLACK_WHITE;
			printf(" ");
		}
	}
}
void SetHero(int Length)				//设置人物坐标:[宽度][离界面左边的距离]
{
	goto_xy(Length,MAX_WINDOW_LINES-2-MAX_HEIGHT);
	BLACK_RED;
	printf(HERE_STYLE);
}
void Move_Hero(int Length)				//移动人物:[移动的距离]
{
	int count=0;
	for(count=0;count<=Length;count++)
	{
		goto_xy(count++,MAX_WINDOW_LINES-2-MAX_HEIGHT);
		BLACK_RED;
		printf(" ");
		goto_xy(count,MAX_WINDOW_LINES-2-MAX_HEIGHT);
		BLACK_RED;
		printf(HERE_STYLE);
		Sleep(MOVE_SPEED);
	}
	goto_xy(count,MAX_WINDOW_LINES-2-MAX_HEIGHT);
	printf(" ");
}
void Stick(int holdtimes)				//显示棒子(纵向)(- -):[按住的次数]
{
	goto_xy(2,MAX_WINDOW_LINES-2-MAX_HEIGHT-holdtimes);
	BLACK_YELLOW;
	printf("▇");
}
void Draw_Stick(int Length)				//绘制棒子(横向):[长度]
{
	for(int count=4;count<=Length+2;count++)
	{
		goto_xy(count++,MAX_WINDOW_LINES-1-MAX_HEIGHT);
		BLACK_YELLOW;
		printf("▇");
	}
}
void Clean_Stick(int Length)			//清除棒子:[横向棒子的长度]
{
	for(int count=MAX_WINDOW_LINES-2-MAX_HEIGHT;count>=0;count--)//纵向
	{
		goto_xy(2,count);
		printf(" ");
	}
	for(int count=4;count<=Length+2;count++)//横向
	{
		goto_xy(count++,MAX_WINDOW_LINES-1-MAX_HEIGHT);
		printf(" ");
	}
}
void Menu()								//菜单
{
	//边框
	BLACK_DRED;
	goto_xy(MAX_WINDOW_COLS/4,MAX_WINDOW_LINES/5);
	printf("╔");
	for(int count=MAX_WINDOW_COLS/4+1;count<=MAX_WINDOW_COLS/4*3;count=count+2)
		printf("═");
	goto_xy(MAX_WINDOW_COLS/4*3,MAX_WINDOW_LINES/5);
	printf("╗");
	for(int count=MAX_WINDOW_LINES/5+1;count<=MAX_WINDOW_LINES/5*4;count++)
	{
		goto_xy(MAX_WINDOW_COLS/4,count);
		printf("║");
	}
	for(int count=MAX_WINDOW_LINES/5+1;count<=MAX_WINDOW_LINES/5*4;count++)
	{
		goto_xy(MAX_WINDOW_COLS/4*3,count);
		printf("║");
	}
	goto_xy(MAX_WINDOW_COLS/4,MAX_WINDOW_LINES/5*4);
	printf("╚");
	for(int count=MAX_WINDOW_COLS/4+1;count<=MAX_WINDOW_COLS/4*3;count=count+2)
		printf("═");
	goto_xy(MAX_WINDOW_COLS/4*3,MAX_WINDOW_LINES/5*4);
	printf("╝");
	//文字
	BLACK_RED;
	goto_xy(MAX_WINDOW_COLS/4+2,MAX_WINDOW_LINES/5+1);
	printf("棍子英雄(Stick hero)");
	goto_xy(MAX_WINDOW_COLS/4+12,MAX_WINDOW_LINES/5+2);
	printf("BY:yan_xu");
	goto_xy(MAX_WINDOW_COLS/4+2,MAX_WINDOW_LINES/5+4);
	BLACK_DYELLOW;
	printf("说明:");
	goto_xy(MAX_WINDOW_COLS/4+4,MAX_WINDOW_LINES/5+5);
	printf("按任意键使棍子伸长");
	goto_xy(MAX_WINDOW_COLS/4+4,MAX_WINDOW_LINES/5+6);
	printf("再按一次停止");
	goto_xy(MAX_WINDOW_COLS/4+4,MAX_WINDOW_LINES/5+7);
	printf("一定要让");
	goto_xy(MAX_WINDOW_COLS/4+4,MAX_WINDOW_LINES/5+8);
	printf("英雄走到对面哦~");
	BLACK_GRAY;
	goto_xy(MAX_WINDOW_COLS/4+6,MAX_WINDOW_LINES/5+14);
	printf("按任意键开始游戏");
}
void Score(int piont)
{
	BLACK_DRED;
	goto_xy(MAX_WINDOW_COLS/4,MAX_WINDOW_LINES/5);
	printf("╔");
	for(int count=MAX_WINDOW_COLS/4+1;count<=MAX_WINDOW_COLS/4*3;count=count+2)
		printf("═");
	goto_xy(MAX_WINDOW_COLS/4*3,MAX_WINDOW_LINES/5);
	printf("╗");
	for(int count=MAX_WINDOW_LINES/5+1;count<=MAX_WINDOW_LINES/5*2;count++)
	{
		goto_xy(MAX_WINDOW_COLS/4,count);
		printf("║");
	}
	for(int count=MAX_WINDOW_LINES/5+1;count<=MAX_WINDOW_LINES/5*2;count++)
	{
		goto_xy(MAX_WINDOW_COLS/4*3,count);
		printf("║");
	}
	goto_xy(MAX_WINDOW_COLS/4,MAX_WINDOW_LINES/5*2);
	printf("╚");
	for(int count=MAX_WINDOW_COLS/4+1;count<=MAX_WINDOW_COLS/4*3;count=count+2)
		printf("═");
	goto_xy(MAX_WINDOW_COLS/4*3,MAX_WINDOW_LINES/5*2);
	printf("╝");
	
	BLACK_YELLOW;
	goto_xy(MAX_WINDOW_COLS/4+2,MAX_WINDOW_LINES/5+1);
	printf("恭喜你获得了:");
	goto_xy(MAX_WINDOW_COLS/4+10,MAX_WINDOW_LINES/5+2);
	printf("%d 分",piont);
	BLACK_GRAY;
	goto_xy(MAX_WINDOW_COLS/4+8,MAX_WINDOW_LINES/5+4);
	printf("按任意键继续");
}
int main()
{
	int count=0,score=0;
	char window[40]="";
	sprintf(window, "mode con: cols=%d lines=%d", MAX_WINDOW_COLS, MAX_WINDOW_LINES);
	system(window);
	HideCursor();
	SetConsoleTitle("棍子英雄(Stick hero)          BY:yan_xu");
	srand((unsigned)time(NULL));
	int Weight=0,Distance=0;
	Menu();
	getch();
	while(1)
	{
		score=0;
		system("cls");
		while(1)
		{
			count=0;
			Weight=rand()%3;
			Distance=rand()%13;
			Building(Weight,(Distance+1)*2+6);
			Building(0,0);
			SetHero(0);
			getch();
			while(1)
			{
				Stick(count);
				Sleep(200);
				count++;
				if(_kbhit())
					break;
				if(count>=MAX_WINDOW_LINES-2-MAX_HEIGHT)
					break;
				if(count>=(MAX_WINDOW_COLS-6)/2)
					break;
			}
			getch();
			Clean_Stick(count*2);
			Draw_Stick(count*2);
			Move_Hero(count*2);
			if(count*2>=(Distance+1)*2+4&&count*2<=(Distance+1)*2+6+Weight*2)
				score++;
			else
				break;
			Clean_Stick(count*2);
			Clean_Building(Weight,(Distance+1)*2+6);
		}
		system("cls");
		Score(score);
		getch();
	}
	return 0;
}