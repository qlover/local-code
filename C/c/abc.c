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
         ���汣��       ����BUG
*/

////		 ��������yan_xu��д				////
////		ת�ػ���BUG����ϵ����			////
////			QQ:1341283988				////
////	�˳������ѧϰ������������ҵ��;	////
////				����Ը�				////




#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <windows.h>
#include <conio.h>
#include <color.h>
#include <string.h>
#define MAX_HEIGHT 10					//¥���ĸ߶�
#define MAX_WINDOW_LINES 30				//���������
#define MAX_WINDOW_COLS 44				//�����һ�е��ַ�
#define MOVE_SPEED 200					//�����ƶ��ٶȣ�����ԽСԽ��
#define HERE_STYLE "��"					//������ʽ
void goto_xy(int x,int y)				//�ƶ����:[x����][y���]
{
	HANDLE hOut;
	hOut = GetStdHandle(STD_OUTPUT_HANDLE);
	COORD pos={x,y};
	SetConsoleCursorPosition(hOut,pos);
}
void HideCursor()						//���ع��
{
	CONSOLE_CURSOR_INFO cursor_info = {1, 0}; 
	SetConsoleCursorInfo(GetStdHandle(STD_OUTPUT_HANDLE), &cursor_info);
}
void Building(int Weight,int Distance)	//���ƴ�¥:[���][�������ߵľ���]
{
	for(int length=0;length<=Weight+1;length++)
	{
		for(int height=0;height<=MAX_HEIGHT;height++)
		{
			goto_xy(Distance+length*2,height+(MAX_WINDOW_LINES-1-MAX_HEIGHT));
			BLACK_WHITE;
			printf("��");
		}
	}
}
void Clean_Building(int Weight,int Distance)//������ƵĴ�¥:[���][�������ߵľ���]
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
void SetHero(int Length)				//������������:[���][�������ߵľ���]
{
	goto_xy(Length,MAX_WINDOW_LINES-2-MAX_HEIGHT);
	BLACK_RED;
	printf(HERE_STYLE);
}
void Move_Hero(int Length)				//�ƶ�����:[�ƶ��ľ���]
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
void Stick(int holdtimes)				//��ʾ����(����)(- -):[��ס�Ĵ���]
{
	goto_xy(2,MAX_WINDOW_LINES-2-MAX_HEIGHT-holdtimes);
	BLACK_YELLOW;
	printf("�~");
}
void Draw_Stick(int Length)				//���ư���(����):[����]
{
	for(int count=4;count<=Length+2;count++)
	{
		goto_xy(count++,MAX_WINDOW_LINES-1-MAX_HEIGHT);
		BLACK_YELLOW;
		printf("�~");
	}
}
void Clean_Stick(int Length)			//�������:[������ӵĳ���]
{
	for(int count=MAX_WINDOW_LINES-2-MAX_HEIGHT;count>=0;count--)//����
	{
		goto_xy(2,count);
		printf(" ");
	}
	for(int count=4;count<=Length+2;count++)//����
	{
		goto_xy(count++,MAX_WINDOW_LINES-1-MAX_HEIGHT);
		printf(" ");
	}
}
void Menu()								//�˵�
{
	//�߿�
	BLACK_DRED;
	goto_xy(MAX_WINDOW_COLS/4,MAX_WINDOW_LINES/5);
	printf("�X");
	for(int count=MAX_WINDOW_COLS/4+1;count<=MAX_WINDOW_COLS/4*3;count=count+2)
		printf("�T");
	goto_xy(MAX_WINDOW_COLS/4*3,MAX_WINDOW_LINES/5);
	printf("�[");
	for(int count=MAX_WINDOW_LINES/5+1;count<=MAX_WINDOW_LINES/5*4;count++)
	{
		goto_xy(MAX_WINDOW_COLS/4,count);
		printf("�U");
	}
	for(int count=MAX_WINDOW_LINES/5+1;count<=MAX_WINDOW_LINES/5*4;count++)
	{
		goto_xy(MAX_WINDOW_COLS/4*3,count);
		printf("�U");
	}
	goto_xy(MAX_WINDOW_COLS/4,MAX_WINDOW_LINES/5*4);
	printf("�^");
	for(int count=MAX_WINDOW_COLS/4+1;count<=MAX_WINDOW_COLS/4*3;count=count+2)
		printf("�T");
	goto_xy(MAX_WINDOW_COLS/4*3,MAX_WINDOW_LINES/5*4);
	printf("�a");
	//����
	BLACK_RED;
	goto_xy(MAX_WINDOW_COLS/4+2,MAX_WINDOW_LINES/5+1);
	printf("����Ӣ��(Stick hero)");
	goto_xy(MAX_WINDOW_COLS/4+12,MAX_WINDOW_LINES/5+2);
	printf("BY:yan_xu");
	goto_xy(MAX_WINDOW_COLS/4+2,MAX_WINDOW_LINES/5+4);
	BLACK_DYELLOW;
	printf("˵��:");
	goto_xy(MAX_WINDOW_COLS/4+4,MAX_WINDOW_LINES/5+5);
	printf("�������ʹ�����쳤");
	goto_xy(MAX_WINDOW_COLS/4+4,MAX_WINDOW_LINES/5+6);
	printf("�ٰ�һ��ֹͣ");
	goto_xy(MAX_WINDOW_COLS/4+4,MAX_WINDOW_LINES/5+7);
	printf("һ��Ҫ��");
	goto_xy(MAX_WINDOW_COLS/4+4,MAX_WINDOW_LINES/5+8);
	printf("Ӣ���ߵ�����Ŷ~");
	BLACK_GRAY;
	goto_xy(MAX_WINDOW_COLS/4+6,MAX_WINDOW_LINES/5+14);
	printf("���������ʼ��Ϸ");
}
void Score(int piont)
{
	BLACK_DRED;
	goto_xy(MAX_WINDOW_COLS/4,MAX_WINDOW_LINES/5);
	printf("�X");
	for(int count=MAX_WINDOW_COLS/4+1;count<=MAX_WINDOW_COLS/4*3;count=count+2)
		printf("�T");
	goto_xy(MAX_WINDOW_COLS/4*3,MAX_WINDOW_LINES/5);
	printf("�[");
	for(int count=MAX_WINDOW_LINES/5+1;count<=MAX_WINDOW_LINES/5*2;count++)
	{
		goto_xy(MAX_WINDOW_COLS/4,count);
		printf("�U");
	}
	for(int count=MAX_WINDOW_LINES/5+1;count<=MAX_WINDOW_LINES/5*2;count++)
	{
		goto_xy(MAX_WINDOW_COLS/4*3,count);
		printf("�U");
	}
	goto_xy(MAX_WINDOW_COLS/4,MAX_WINDOW_LINES/5*2);
	printf("�^");
	for(int count=MAX_WINDOW_COLS/4+1;count<=MAX_WINDOW_COLS/4*3;count=count+2)
		printf("�T");
	goto_xy(MAX_WINDOW_COLS/4*3,MAX_WINDOW_LINES/5*2);
	printf("�a");
	
	BLACK_YELLOW;
	goto_xy(MAX_WINDOW_COLS/4+2,MAX_WINDOW_LINES/5+1);
	printf("��ϲ������:");
	goto_xy(MAX_WINDOW_COLS/4+10,MAX_WINDOW_LINES/5+2);
	printf("%d ��",piont);
	BLACK_GRAY;
	goto_xy(MAX_WINDOW_COLS/4+8,MAX_WINDOW_LINES/5+4);
	printf("�����������");
}
int main()
{
	int count=0,score=0;
	char window[40]="";
	sprintf(window, "mode con: cols=%d lines=%d", MAX_WINDOW_COLS, MAX_WINDOW_LINES);
	system(window);
	HideCursor();
	SetConsoleTitle("����Ӣ��(Stick hero)          BY:yan_xu");
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