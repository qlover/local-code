#!D:\Environment\Python3\python

try:
	a = int(input('请输入一个数'))
	b = int(input('请输入一个数'))
	print(a/b)
except ZeroDivisionError:
	print('分母不能为0')

