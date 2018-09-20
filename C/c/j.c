	#include <stdio.h>
	typedef struct Person
	{
		int age;
		int height;
		int weight;
		char name[15];

	} person;

	void show(person *);	//定义一个打印的结果的函数，并以 person 结构体用为关键字，并以指针为参数，也就是地址嘛

	int main()
	{
		person p={10,20,50,"刘"};
		show(&p);
		printf("姓名：%s,身高：%d,年龄：%d,体重：%d\n",p.name,p.height,p.age,p.weight);

		return 0;
	}

	void show(person *p)
	{
		p->age=50;
		printf("姓名：%s,身高：%d,年龄：%d,体重：%d\n",p->name,p->height,p->age,p->weight);
	}
