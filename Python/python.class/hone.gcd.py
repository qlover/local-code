
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

# 相减损法
def jj(a,b):
	if a > b:
		a, b = b, a
	if b % a == 0 :
		return a
	if a % 2 == 0 and b % 2 == 0 :
		a, b = a // 2, b // 2
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
def dg(a, b):
	if a > b:
		a, b = b, a
	mod = b % a
	if mod == 0: 
		return a
	else: 
		return dg(a, mod)		
# print(dg(18,21))

# 迭代
def dd(a,b):  
	if a > b:
		a, b = b, a
	if b % a == 0:
		return a
	res = b
	i = 2
	while i <= b:
		if a % i == 0 and b % i == 0:
			res = i
		i += 1
	if res == b:
		res = 1
	return res

# print(dd(16, 21))




