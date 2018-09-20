# 猜数

import random
# 得到要猜的数
gues= random.randint(1, 100)
# 多少次机会
m = 6
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
print("该数是", gues)