
# 1.编写一个将十进制转换为二进制的函数，
# 要求采用“除2取余”的方式，以字符串形式返回。
# # 10 / 2 = 5 ... 0
# 5 / 2  = 2 ... 1
# 2 / 2 = 1 ...0
# 1 /2 = 0 ... 1
def bin(d):
	res = []
	while d:
		if d % 2 == 0:
			res.append('0')
		else:
			res.append('1')
		d = int(d / 2)
	res.reverse()
	return ''.join(res)
# print(bin(192))


# 2.编写一个函数findstr(str,n),该函数统计字符串 n 在另一个字符串str中出现的次数。

def findstr(str,n):
	return str.count(n)	
# print(findstr('love abc love avabc love','love'))


# 3.利用 filter() 和 lambda 表达式求100内，求3的倍数

# 因数返回的是一个类序列，所以需要用 list 转换成列表，用 tuple 也可以
def fun():
	lis = list(range(1,101))
	res = filter(lambda x : x % 3 == 0, lis)
	return list(res)

print(fun())


# 4.利用递归实现十进制转换为二进制
def ord(num):
	res = ''
	if num:
		res = ord(num // 2)
		return res + str( num % 2 )
	else:
		return res





