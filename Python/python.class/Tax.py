# 收税 
# 1. 3500 不交税
# 2. 税额 < 1500	%3 
# 3. 税额 > 1500  	%10 
# 4. 税额 > 4500  	%20
# 5. 税额 > 9000 		%25
# 6. 税额 > 35000 		%30
# 7. 税额 > 55000 		%35
# 8. 税额 > 80000 		%45

# money = float(input('Please enter your salary：'))
# se = money - 3500
# if money <= 3500 :
# 	print('don\'t pay.')
# 	print('salary：', money)
# else:
# 	if se <= 1500 :
# 		print('pay: %.2f ￥' % (se * 0.03))
# 		print('salary: %.2f ￥' % (money - se * 0.03 ))
# 	elif se > 1500 :
# 		print('pay: %.2f ￥' % (se * 0.1))
# 		print('salary: %.2f ￥' % (money - se * 0.1))
# 	elif se > 4500 :
# 		print('pay: %.2f ￥' % (se * 0.2))
# 		print('salary: %.2f ￥' % (money- se * 0.2))
# 	elif se > 9000 :
# 		print('pay: %.2f ￥' % (se * 0.25))
# 		print('salary: %.2f ￥' % (money - se * 0.25))
# 	elif se > 35000 :
# 		print('pay: %.2f ￥' % (se * 0.3))
# 		print('salary: %.2f ￥' % (money - se * 0.3))
# 	elif se > 55000 :
# 		print('pay: %.2f ￥' % (se * 0.35))
# 		print('salary: %.2f ￥' % (money - se * 0.35))
# 	elif se > 80000 :
# 		print('pay: %.2f ￥' % (se * 0.45))
# 		print('salary: %.2f ￥' % (money - se * 0.45))
# 	else:
# 		print('error')

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

def last():
	pass

def bougth():
	pass
goods = ['vivi 全面屏手机','联想笔记本','数码相机','便携式投影仪']
money = float(input('Please enter a salary: '))
tax = Tax(money)

# print('pay: %.2f ￥' % tax )
# print('really salary: %.2f ￥' % (money - tax))
reallyMoney = money - tax


print('\n------【请输入商品编号】-----\n')
my = reallyMoney


# 
while 1:
	for ind,val in enumerate(goods):
		print(ind + 1,val)
	print('你还有这么的钱', my)
	
	id_ = input('Please enter a number: ')
	if my < 2500:
		print('你快没钱了！')
	elif id_ == 'exit':
		break;

	id_ = int(id_)
	if id_ == 1 or id_ == 0:
		print('你还剩下', my - 4000)
		my = my - 4000
	if id_ == 2:
		print('你还剩下', my - 5200)
		my = my - 5200
	if id_ == 3:
		print('你还剩下', my - 6800)
		my = my - 6800
	if id_ == 4:
		print('你还剩下', my - 2500)
		my = my - 2500


