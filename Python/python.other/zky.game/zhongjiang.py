# 中奖
import random
# 1.循环接收用户的7个数字
times = 1  	# 记录用户输入的次数
users = []	# 准备一个空的容器，用来接收用户输入的
# 循环 7 次
while times <= 7:
	# 如果报错了，就用 try 捕获
	try:
		# 得到 用户输入 值
		# 用 int() 将该值变成整型
		# 如果用户输入的是非数字用 int() 就会报错
		num = int(input('请输入你的第 %s 个数字' % times))
		# 添加到该窗口中
		users.append(num)
		# 循环完成一次增加一次记数
		times += 1
	# 如果出现了错误就输出输入数字
	except Exception as e:
		print('请输入数字')
# 2. 随机产生奖池
times = 7   # 记录随机产生的 7 个数
pools = []  # 准备一个空的容器，用来存放随机产生的 7 个奖池号码
# 循环 7 次
while times:
	# 每循环一次产生一 1 - 99 之间的一个随机数
	# 并添加到 pools 中
	pools.append(random.randint(1,100))
	times -= 1
# 3.判断用户中了几个号
count = 0  # 用于记录中了多少个号码
# 循环用户输入的7个数
for u in users:
	# 如果这个数在奖池中
	if u in pools:
		# 则记录加1
		count += 1
		# 并打印出这个号码中奖
		print('%s 中奖' % u)
# 最后打印中了多少个
print('共有 %s 个号中奖' % count)
