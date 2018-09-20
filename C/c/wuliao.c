
#include <stdlib.h>
#include <stdio.h>
#include <time.h>
#include <color.h>
#include <windows.h>
#include <mmsystem.h>
#pragma comment (lib, "Winmm.lib")
#define M 35//map high
#define N 60//map side
/*#include <mmsystem.h>

#pragma comment(lib,"winmm.lib")
*/
 
struct Player
{
	int mx,my;//position
	int BLOOD, MANA, EXPERIENCE;//
	int Blood, Mana, Experience;
	int attack;
	int SuppiementBlood, SuppiementMana;
	int GRADE;
	int AttackAdd;
	int MONEY;
	int direction;
	int jump;
}player;


_Bool other=0;
int ch[M][N]={0};//map
int dx,dy;
int dxl;
int dgj;
int Time=1;
char Key;
int Speed=0;
_Bool EnemyCan;
clock_t START; 
clock_t END;


void OTHER();
void console();
void start();//start
void finish();//finish
void gotoxy(int x,int y);
void MapClear();

void menu();
void IncessantType();
void Ship();
 
void WarInitialize();
void PrintfInitialize();
void PrintfPlayer();

void PlayerJudge();
void EememyJudge();

void PrintfMap();
void PlayerMove();
void EnemyMove();


int main(int argc, char const *argv[])
{
	console();
	system(" cd   ./wuliao.txt");
	menu();
    
	return 0;
}
void console()
{
	HANDLE hOut = GetStdHandle(STD_OUTPUT_HANDLE);	
	CONSOLE_SCREEN_BUFFER_INFO bInfo; 
	GetConsoleScreenBufferInfo(hOut, &bInfo );	
	SetConsoleTitle("أژأ¥أپأ‰آ¢أ±أ–آ®آ·أ°آµأ€أڈأ أ•أ¹"); // أ‰أ¨أ–أƒآ´آ°آ؟أڑآµأ„آ±أھأŒأ¢
	COORD size = {90, 60};//أ‰أ¨أ–أƒآ´آ°آ؟أڑآ´أ³أگآ،
	SetConsoleScreenBufferSize(hOut,size); 	
	SMALL_RECT rc = {10 ,10 , 100, 100};
	SetConsoleWindowInfo(hOut,1 ,&rc);
	 
	
}
void start()
{
	printf(" \n\n\n\n\n      LOAD DATA      ");
	FILE *fp=NULL;
	fp=fopen("./wuliao data.txt", "a+");
	if (fp==NULL)
	{
		printf(" FILE OPEN ERRO\nstop");
		getch();
		return 0;
	}
	fread(&player.GRADE, 4, 1, fp);
	if (player.GRADE==NULL)
	{
		player.GRADE=1;
	}
	fread(&player.AttackAdd, 4, 1, fp);
    if (player.AttackAdd==NULL)
    {
    	player.AttackAdd=0;
    }
    fread(&player.MONEY, 4, 1, fp);
    if (player.MONEY==NULL)
    {
    	player.MONEY=0;
    }
    fread(&player.Experience, 4, 1, fp);
    if (player.Experience==NULL)
    {
    	player.Experience=0;
    }
    fclose(fp);
    printf( "\n\n\n\nLOAD FINISHED   ");
    Sleep(3000);
    system("cls");
}
void finish()
{
   FILE *fp=NULL;
   fp=fopen("./wuliao data.txt", "w+");
   if (fp==NULL)
	{
		printf(" FILE OPEN ERRO\nstop\nFLIE DON'T SAVE\n");
		getch();
		return 0;
	}
	fwrite(&player.GRADE, 4, 1, fp);	
	fwrite(&player.AttackAdd, 4, 1, fp);
	fwrite(&player.MONEY, 4, 1, fp);
	fwrite(&player.Experience, 4, 1, fp);
    fclose(fp);
	
}
void WarInitialize()
{
	player.BLOOD=player.Blood=player.GRADE*100;
	player.MANA=player.Mana=player.GRADE*25;
	player.attack=player.GRADE*5+player.AttackAdd;
	player.SuppiementBlood=player.GRADE*3;
	player.SuppiementMana=player.GRADE*2;
	player.EXPERIENCE=player.GRADE*125;
	player.direction=1;
	player.mx=5;
	player.my=30;
    player.jump=0;
    dx=40;
    dy=30;
    EnemyCan=1;
    dxl=Time*50;
    dgj=Time*5;
}
void PrintfInitialize()
{
	
	ch[player.my][player.mx]=10;
 	ch[player.my+1][player.mx+1]=10;
	ch[player.my+1][player.mx-1]=10;
	ch[player.my+2][player.mx]=10;
	ch[player.my+3][player.mx+1]=10;
	ch[player.my+3][player.mx-1]=10;
	if ( player.direction==1 )
	{
		if (Key!='j')
		{
		ch[player.my][player.mx+2]=10;
		ch[player.my+1][player.mx+2]=10;
		ch[player.my+2][player.mx+2]=10;
		ch[player.my+3][player.mx+2]=10;
		}
		else 
		{
			ch[player.my+2][player.mx+2]=10;
			ch[player.my+2][player.mx+3]=10;
		}	
	}
	if ( player.direction==2 )
	{
		if (Key!='j')
		{
		ch[player.my][player.mx-2]=10;
		ch[player.my+1][player.mx-2]=10;
		ch[player.my+2][player.mx-2]=10;
		ch[player.my+3][player.mx-2]=10;
	    }
		else 
		{
			ch[player.my+2][player.mx-2]=10;
			ch[player.my+2][player.mx-3]=10;
		}			
	}
	ch[dy][dx]=20; 
	ch[dy+1][dx+1]=20;
	ch[dy+1][dx-1]=20;
    ch[dy+2][dx]=20;
    ch[dy+3][dx+1]=20;
    ch[dy+3][dx-1]=20;
}
void PrintfMap()
{
	int x, y;
	for(y=0;y<M;y++)
	{
		for (x=0;x<N-10;x++)
		{
            if (ch[y][x]==1)
            {
            	printf("*");
            }
            if ( ch[y][x]==0 )
            {
            	printf(" ");
            }
            if ( ch[y][x]==10 )
            {
            	BLACK_RED;
            	printf("*");
            	BLACK_WHITE;
            }
            if ( ch[y][x]==20 )
            {
            	BLACK_BLUE;
            	printf("*");
            	BLACK_WHITE;
            }
            if ( ch[y][x]==54 )
            {
            	BLACK_RED;
            	printf("*");
            	BLACK_RED;
            }
            if ( ch[y][x]==55 )
            {
            	BLACK_RED;
            	printf(".");
            	BLACK_WHITE;
            }
            if (ch[y][x]==61)
            {
            	BLACK_GREEN;
            	printf(".");
            	BLACK_WHITE;
            }
             if (ch[y][x]==62)
            {
            	BLACK_BLUE;
            	printf(".");
            	BLACK_WHITE;
            }


		}
		printf("\n");
	}
	MapClear();
}
void PlayerMove()
{
	

	if (kbhit()!= 0)
	{
		if (other)
		{
			Key=getchar();
		}
		 else Key=getch();
		int x=0, y=0;
		int i=0;
		if (Key=='a')
		{
			if (player.my==dy)
			{
				 if (player.mx>dx &&player.mx-dx>5 )
			    {
				    player.direction=2;
			        Speed++;
			        if ( Speed%5==0 )
			        {
				    player.mx-=3;
			        }
			        else player.mx--;
			    }
			    else if (player.mx<dx && dx-player.mx>5)
			    {
				     player.direction=2;
			         Speed++;
			         if ( Speed%5==0 )
			         {
				     player.mx-=3;
			         }
			         else player.mx--;
			    }
			}
			else 
			{
				player.direction=2;
			        Speed++;
			        if ( Speed%5==0 )
			        {
				    player.mx-=3;
			        }
			        else player.mx--;
			}
			
			
		}
		if (Key=='d')
		{
			if (player.my==dy)
			{
				 if (player.mx<dx &&dx-player.mx>5 )
			    {
				    player.direction=1;
			        Speed++;
			        if ( Speed%5==0 )
			        {
				    player.mx+=3;
			        }
			        else player.mx++;
			    }
			    else if (player.mx>dx && player.mx-dx>5)
			    {
				     player.direction=1;
			         Speed++;
			         if ( Speed%5==0 )
			         {
				     player.mx+=3;
			         }
			         else player.mx++;
			    }
			}
			else 
			{
				player.direction=2;
			        Speed++;
			        if ( Speed%5==0 )
			        {
				    player.mx+=3;
			        }
			        else player.mx++;
			}
		}
		if (Key=='j')
		{
			if (player.direction==1)
			{
                if ( player.mx+5>N-11 )
                {
                	i=N-11-player.mx;
                }
                else i=5;
				 for(y=player.my; y<player.my+4;y++ )
				 	for (x=player.mx; x<player.mx+i;x++)
				 		ch[y][x]=50;
			}	 	
			else  if (player.direction==2)
			{
				if ( player.mx-5<1 )
				{
					i=player.mx;
				}
				else i=5;
				for(y=player.my;  y<player.my+4;y++)
				 	for (x=player.mx; x>player.mx-i;x--)
				 		ch[y][x]=50;
			}
		}
		if (Key=='k')
		{
			if (player.jump<=2)
			{
				player.my-=10;
				player.jump++;
			}			
		}
		if (Key=='y'&&player.Mana>=5)
		{
			player.Mana-=10;
			if (player. direction==1)
			{
				player.mx+=(int)N/5;
			}
			else player.mx-=(int)N/5;
			
		}
		if (Key=='u' && player.Mana>=10)
		{
			player.Mana-=20;
			if (player.direction==1)
			{
				 if ( player.mx+5>N-11 )
                {
                	i=N-11-player.mx;
                }
                else i=7;
				 for(y=player.my; y<player.my+4; y++)
				 	for (x=player.mx; x<player.mx+i;x++)
				 		ch[y][x]=51;
			}
			else  if (player.direction==2)
			{
				if ( player.mx-5<1 )
				{
					i=player.mx;
				}
				else i=7;
				for(y=player.my; y<player.my+4;y++ )
				 	for (x=player.mx;x>player.mx-i; x--)
				 		ch[y][x]=52;
			}
		}
		if (Key=='i' && player.Mana>=15)
		{
			player.Mana-=20;
			if (player.direction==1)
			{
				 for(y=player.my; y<player.my+4; y++)
				 	for (x=player.mx;x<player.mx+5; x++)
				 		ch[y][x]=53;
			}
			else  
				for(y=player.my; y<player.my+4; y++)
				 	for (x=player.mx;x>player.mx-5; x--)
				 		ch[y][x]=53;
		}
		if (Key=='o' && player.Mana>=20)
		{
			 
			 player.Mana-=20;
			 srand((int)time(0));
			 if (player.direction==1)
			{
				
				i=rand()%((N-10)-player.mx+1)+player.mx;
				 for(y=0; y<=M; y++) 
				 	for(x=0 ;x<=N-10 ;x++)
				 		if (x==i || x==i+1 || x==i-1)
				 		{
				 			 ch[y][x]=54;
				 		}
			}
			else  
				if (player.direction==2)
			       {
				     
				      i=rand()%(player.mx+1)+1;
				      for(y=0;y<=M ;y++ ) 
				 	   for(x=0; x<=N-10;x++ )
				 		if (x==i || x==i+1 || x==i-1)
				 		{
				 			 ch[y][x]=54;
				 		}
			        }
		}
	    if (Key=='l' && player.Mana>=25)
		{
			player.Mana-=25;			
			for(y=0;y<M;y++)
				for ( x = 0; x < N-11; x++)
				{
					if (x==dx)
					{
						ch[y][x]=55;
					}
				}
		}
	}
	
}
void EememyJudge()
{
	if (ch[dy][dx]==50)
	{
		dxl-=player.attack;
        EnemyCan=0;
	}
	if (ch[dy][dx]==51)
	{
		dx+=10;
		EnemyCan=0;
	}
	if (ch[dy][dx]==52)
	{
		dx-=10;
		EnemyCan=0;
	}
	if (ch[dy][dx]==53)
	{
		 dy=1;
		 EnemyCan=0;
	}
	if (ch[dy][dx]==54)
	{
		 player.Mana+=(int)player.MANA/10;
		 dxl=dxl-player.attack*5;
		 EnemyCan=0;
	}	
	if (ch[dy][dx]==55)
	{
		dxl=dxl-player.attack*5;
		EnemyCan=0;
	}
	if (ch[dy][dx]==62)
	{
		dxl+=100;
		dgj=dgj+5*Time;
	}
	if (dxl<=0)
	{
		Time++;
		player.MONEY=10*(Time-1);
		player.Experience=Time*10+player.Experience;
		WarInitialize();
		finish();
	}
}
void PlayerJudge()
{
	int x, y;
	
	if (player.my<30)
	{
		  player.my+=5;
	}
	if (player.my>30)
	{
		player.my=30;
	}
	if (player.my==30)
	{
		player.jump=0;
	}
	if (player.mx<3)
	{
		player.mx=3;
	}
	if (player.mx>N-11)
	{
		player.mx=N-14;
	}
	if (player.Blood>player.BLOOD)
	{
		player.Blood=player.BLOOD;
	}
	if (player.Mana>player.MANA)
	{
		player.Mana=player.MANA;
	}
	if (ch[player.my][player.mx]==61)
	{
		dxl=player.Blood;
		dgj=player.attack;
	}
	if (ch[player.my][player.mx]==62)
	{
		player.Blood-=dgj*2;
		player.Mana=0;
	}
	if (player.Blood<=0)
	{
		system("cls");
		RED_BLUE;
		gotoxy(10,5);
		printf("  you died  ");
		Sleep(2000);
		finish();
		BLACK_WHITE;
		menu();
	}
	if(player.Experience>=player.EXPERIENCE)
	{
		player.Experience=0;
		player.GRADE+=1;
		WarInitialize();
	}
}
void EnemyMove()
{
	int x, y, i ;
	if (dx<1)
	{
		dx=1;
	}
	if (dx>N-11)
	{
		dx=N-11;
	}
	if (dy<30)
	{
		dy+=5;
	}
	if (dy>30)
	{
		dy=30;
	}
	if (dxl<100)
	{
		srand((int)time(0));
		i=rand()%N-11;
		for (y= 0;y< M; y++)
		{
			for (x = 0; x < N-10; x++)
			{
				if (x==i ||x==i+1 ||x==i-1)
				{
					ch[y][x]=62;
				}
				
			}
		}
		srand((int)time(0));
		i=rand()%4;
		if(i==0)
		{
			for(y=0;y<M;y++)
				for ( x = 0; x < N-11; x++)
				{
					if (x==player.mx)
					{
						ch[y][x]=61;
					}
				}
		}
	}
	if (EnemyCan || Speed%5==0)
	{
		if ( dx<player.mx-4 )
	   {
		dx++;
	   }
	   if ( dx>player.mx+4 )
	   {
		  dx--;
	   }
	   else if ((player.mx-dx<4 || dx-player.mx<4)&& player.my==dy )
	   {
	     	player.Blood=player.Blood-dgj;
       }
	}
	EnemyCan=1;
}
void Ship()
{
	system("cls");
	printf(" \n\n\n\n\n\n\n  1.upgrade your weapon  \n");
	printf("                 2.exit              \n");
	Key=getch();
	if (Key=='1')
	{
		if ((player.MONEY-2*player.AttackAdd)<0)
		{
			printf("YOUR MONEY IS NOT ENOUGH\n");
			Sleep(1500);
		}
		 else if ((player.MONEY-2*player.AttackAdd)>0)
		{
			player.MONEY-=2*player.AttackAdd;
			player.AttackAdd++;
			player.attack=player.GRADE*5+player.AttackAdd;
			finish();
			printf("     SUCCESSFUL  \n");
			Sleep(1500);
		}
		
	}
	if (Key=='2')
	{
		menu();
	}
	else printf(" INPUT ERROR  \n");
	Sleep(1500);
	Ship();
}
void menu()
{
	system("cls");
	printf("\n\n\n\n");
	printf("      1. FIRST TIME      2. SECOND TIME  \n");
    printf("      3. THIRD TIME      4. FORTH  TIME  \n");
    printf("\n              5. SHIP                  \n");
    printf("\n              6. IncessantType         \n");
    printf("\n              7. OTHER                 \n");
    printf("your money :%d\n",player.MONEY );
    printf("your grade :%d\n", player.GRADE);
    printf("your Attack :%d\n", player.attack);
    

    Key=getch();
    switch(Key)
    {
    	case 49: 
    	case 50:
    	case 51:
    	case 52:     printf("Temporarily not opened\n"); Sleep(1500);menu();break;
    	case 53:     Ship();break;
    	case 54:     IncessantType();break;
    	case 55:     OTHER();break;
    	default:   printf(" INPUT ERROR\n"); Sleep(1500);menu(); break;
    }
}
void IncessantType()
{
	system("cls");
	start();

	WarInitialize();
	
	int x,y;
	MapClear();//PlaySound(TEXT("1.wav"),0,SND_FILENAME);
	
	START = clock();
	while(1)
	{
	
	Sleep(100);	
  
    system("cls");
	PrintfInitialize();
    PrintfMap();Sleep(100);
    PlayerMove();Sleep(100);

    EememyJudge();Sleep(100);
    EnemyMove();
    PlayerJudge();Sleep(100);
    PrintfPlayer();Sleep(100);
    END = clock();
       if ( END-START>1600)
       {
    	   START=END;
           player.Blood+=player.SuppiementBlood;
           player.Mana+=player.SuppiementMana;
        }

    }
}
void gotoxy(int x,int y)
{
	HANDLE app;
	COORD  pos;
	pos.X=x;
	pos.Y=y;
	app=GetStdHandle(STD_OUTPUT_HANDLE);
	SetConsoleCursorPosition(app,pos); 
}
void PrintfPlayer()
{
	int i; 
	gotoxy(60,10);
    printf("your money :%d\n",player.MONEY );
    gotoxy(60,12);
    printf("your grade :%d\n", player.GRADE);
    gotoxy(60,14);
    printf("your Attack :%d\n", player.attack);
    gotoxy(60,16);
    BLACK_RED;  
    printf("your blood %d\n",player.Blood );
    gotoxy(60,17);    
    i=(int)player.Blood/( player.BLOOD/8);
    while(i>0)
    {
    	printf("*");
    	i--;
    }
    gotoxy(60,18);
    BLACK_BLUE; 
    printf("your Mana %d\n",player.Mana );
    gotoxy(60,19);    
    i=(int)player.Mana/( player.MANA/8);
    while(i>0)
    {
    	printf("*");
    	i--;
    }
    gotoxy(60,20);
    BLACK_YELLOW; 
    printf("your Experience %d\n",player.Experience );
    gotoxy(60,21);    
    i=(int)player.Experience/(player.EXPERIENCE/8);
    while(i>0)
    {
    	printf("*");
    	i--;
    }
    BLACK_WHITE;
    gotoxy(60,25);
    printf("It's %d time.\n",Time );
    gotoxy(60,26);
    printf("Enemy blood:%d\n",dxl );
   
}
void MapClear()
{
	int x, y;
    for( y=0; y<M; y++)
	{
		for(x=0;x<N-10;x++)
		{
			if (y==0 || x==0 || x==N-11 || y==M-1 || y==N-1 )
			{
				ch[y][x]=1;
			}
			else ch[y][x]=0;
		}				
	}
}
void OTHER()
{
       	other=1;
    	IncessantType();   
}