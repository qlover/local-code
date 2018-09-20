# 射击一次 80 张劵
# 射击五次 388 张券
# 
# 50 张劵 50 钻石

# 一共需要有幸运值
aim = int(input('输入幸运值：'))

# 当前有多少幸运值
now = 0

# 当前拥有的劵
amont = 2

# 一共花费的钻石
money = 0

# 一共射击了多少次
cnt = 0

# 一次一次射击
# while 1:

# 	if now >= aim:
# 		print('成功获得！')
# 		break
	
# 	print("你还有", amont, "张劵")
# 	if amont <= 80:
# 		money += 50
# 		amont += 50
# 	else:
# 		amont -= 80
# 		now += 1
# 		cnt += 1
# 17450 218

while 1:
	if now >= aim:
		print('成功获得！')
		break

	print("你还有", amont, "张劵")
	# 劵不够,不能射击
	if amont <= 388:
		money += 400
		amont += 400
	# 射击
	else:
		amont -= 388
		now += 5
		cnt += 1
# 17200 44

print("一共花费了", money, "钻石")
print("一共射击了", cnt, "次")