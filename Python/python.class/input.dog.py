#!D:\Environment\Python3\python

age = int(input('请输入你家狗狗的年龄: '))

try:
	if age < 0 :
	    print('你在逗我吧！')
	elif age == 1:
	    print('相当于 14 岁的人')
	elif age == 2:
	    print('相当于 22 岁的人')
	elif age > 2 :
	    human = 22 + ( age-2 ) * 5
	    print('对应人类年龄：', human)
except ValueError:
	print('你输入的有问题')


input('点击  enter 退出')
