# 收税
def Tax(money):
	se = money - 3500
	sl = 0
	if money <= 3500:
		return 0
	if se <= 1500 : sl = 0.03;
	elif se > 1500 : sl = 0.1;
	elif se > 4500 : sl = 0.2;
	elif se > 9000 : sl = 0.25;
	elif se > 35000 : sl = 0.3;
	elif se > 55000 : sl = 0.35;
	elif se > 80000 : sl = 0.45;

	return se * sl
# 买东西
def bougth(g, my):
	gNum = len(g)  # 商品数量
	while 1:
		show(g, my)
		while 1:
			try:
				num = int(input('>> 请输入商品编号:'))
				break
			except Exception as e:
				print('>> 你输入的商品编号不正确,重新输入 <<')
				continue

		if num > gNum or num <= 0:
			print('>>没有这个商品<<')
			continue

		if my <= goods[num-1][1]:
			print('>>你剩下的钱买不起 %s!' % (goods[num-1][0]) )
			n = input('>>是否要充钱 y/n: ')
			if n == 'y':
				try:
					mo = int(input('>>>要充多少: '))
				except Exception as e:				
					print('由于你金额有问题，你不能充值，你被驱逐走了')
					print('拜拜！')
					return

				my = addMoney(my, mo)
				continue
			else:
				return		
		n = 1
		while n <= gNum:
			if num == n:
				print('>> 你还剩下 %.2f ￥' % (my - goods[num-1][1]) )
				my = my - goods[num-1][1]
				break
			n+=1
		n = 1

# 充钱
def addMoney(my,money):
	return my + money
# 打印商品列表
def show(seq, money):
	print("\n-------【商品列表】--------")
	for ind,val in enumerate(seq):
		print(1+ind, val)
	print('> 你的余额还剩下: %.2f ￥' % money)
	print('-----------------------------')


goods,money = [
	('vivi 全面屏手机',4000),
	('联想笔记本',5200),
	('数码相机',6000),
	('便携式投影仪',2500)
],0
while 1:
	try:
		money = input('Please enter a salary: ')
		money = float(money)
		if money <= 0 :
			print('你的工资不能在 0 以下，请重新输入')
			continue
		break
	except Exception as ve:

		print("你输入的 ", money , "不是你的工资，请重新输入")
		continue
tax = Tax(money)
lastMoney = money - tax
# print('你的要交 %.2f ￥' % tax )
# print('实际收入 %.2f ￥' % lastMoney )
bougth(goods, lastMoney)