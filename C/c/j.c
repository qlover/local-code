	#include <stdio.h>
	typedef struct Person
	{
		int age;
		int height;
		int weight;
		char name[15];

	} person;

	void show(person *);	//����һ����ӡ�Ľ���ĺ��������� person �ṹ����Ϊ�ؼ��֣�����ָ��Ϊ������Ҳ���ǵ�ַ��

	int main()
	{
		person p={10,20,50,"��"};
		show(&p);
		printf("������%s,��ߣ�%d,���䣺%d,���أ�%d\n",p.name,p.height,p.age,p.weight);

		return 0;
	}

	void show(person *p)
	{
		p->age=50;
		printf("������%s,��ߣ�%d,���䣺%d,���أ�%d\n",p->name,p->height,p->age,p->weight);
	}
