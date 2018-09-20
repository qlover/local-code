
# 
#  最大公约数
# 

# 辗转法
def zz(a, b):
	while b != 0:
		mod = a % b
		a = b
		b = mod
	return a
# print(zz(21,37))




# 使相减
# 第一步：任意给定两个正整数；判断它们是否都是偶数。若是，则用2约简；若不是则执行第二步。
# 第二步：以较大的数减较小的数，接着把所得的差与较小的数比较，并以大数减小数。继续这个操作，直到所得的减数和差相等为止。
def jj(a,b):
	if a > b:
		a, b = b, a

	# 首先判断是否最小数就是两个数的最大公约数 #
	if b % a == 0 :
		return a
	# 1.偶数化
	# 判断是否都是偶数

	if a % 2 == 0 and b % 2 == 0 :
		a, b = a // 2, b // 2

	# 2. 交替相减
	divs = []  # 先定义一个
	c = b - a
	while c not in divs:
		divs.append(c)
		b = max(a, c)
		a = min(a, c)
		c = b - a
	return c
print(jj(21, 99))


# 递归
# 整个思路，从两个数的最大余数开始向下找
# 1.两个数的余数等于 0 而最大公约数就是两个数中最小的那个数，否则执行第二步
# 2. 如果两个数的余数不等于 0 
# 	则就用两个数中最小的那个数与这个余数相除，再多次执行
def dg(a, b):
	if a > b:
		a, b = b, a
	# 最大刚才除进最小，则最小就是最大公约数
	mod = b % a
	if mod == 0: 
		return a
	else: 
		return dg(a, mod)		
# print(dg(18,21))




# 迭代
# 
# 从 2 开始找到两个数的的共同公约数
# 
def dd(a,b):  
	# 先找到两个数的最小那个数,因为最大公约数不会比最小的数还大
	if a > b:
		a, b = b, a
	# 如果刚才最小数是最小
	if b % a == 0:
		return a
	# 用来存放结果
	res = b
    # 从 2 数开始找
	i = 2
	while i <= b:
		#  判断 i 是不是两个数的公约数
		#  循环结束就是其最大公约数
		if a % i == 0 and b % i == 0:
			res = i
		i += 1
	# 当循环到最小数还没找到就是 1
	if res == b:
		res = 1
	return res

# print(dd(16, 21))




