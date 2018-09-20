from random import randint
data=list(range(1,101))   # 生成1-100 的列表
search = randint(1,101)   # 随机查找的数
cnt = 0   # 记录一共查找了多少次

def b_f(data_1,num):
	global cnt  # 因为 python 函数作用域不能直接访问全局作用域，所以要用 global 调用 
	cnt += 1    # 每调用 一次这个函数就查找一次就加一次

	if len(data_1)>1:
		# 最开始的写法会有个问题
		# 就是当确定的范围是奇数， int 会向上取整，不是向下取整
		# 这个会把在后一个元素挤掉
		if len(data_1)%2 == 1:
			mid = int(len(data_1) / 2) + 1 # 所以要把后面挤掉的元素加上
		else:
			mid = int(len(data_1) / 2)
		if data_1[mid]==num:
			print("^ %d找到了"% num)
			return   # 当中间值直接等于 num 减少一次查找
		elif num > data_1[mid] :
			return b_f(data_1[mid:len(data_1)],num)
		else:
			return b_f(data_1[0:mid],num)
	else:
		print("%d不存在这个列表中"%num)

b_f(data,search)
print("共找了 %d 次"% cnt)
