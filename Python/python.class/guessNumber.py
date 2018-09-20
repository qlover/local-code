#!D:\Environment\Python3\python

''' 猜数 '''


import random
gues= random.randint(1, 100) # 猜的数
m = 6 # 多少次机会
i = 0 
while i < m:
	try:
		num = int(input("Please a number: "))
		i+=1
		rec = m-i
		if num == gues:
			print('你猜对了！|| %s'%(gues))
			break
		elif num < gues :
			print('你输入的小了')
		elif num > gues :
			print('你输入的大了')
		else:
			print('输入错误')
			break
		print('你还有%s次机会'%(rec))
		
	except Exception as e:
		print('请输入一个数字！')


'''
while i < m:
	num = int(input("Please a number: "))
	i+=1
	rec = m-i
	if num == gues:
		print('你猜对了！|| %s'%(gues))
		break
	elif num < gues :
		print('你输入的小了')
	elif num > gues :
		print('你输入的大了')
	else:
		print('输入错误')
		break
	print('你还有%s次机会'%(rec))
'''




# for 循环
'''
for i in range(0, m):
	num = int(input("Please a number: "))
	rec = m-i
	if num == gues:
		print('你猜对了！|| %s'%(gues))
		break
	elif num < gues :
		print('你输入的小了')
	elif num > gues :
		print('你输入的大了')
	else:
		print('输入错误')
		break
	print('你还有%s次机会'%(rec))
'''
	 