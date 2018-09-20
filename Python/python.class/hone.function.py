
# 1.编写一个将十进制转换为二进制的函数，
# 要求采用“除2取余”的方式，以字符串形式返回。
# 10 / 2 = 5 ... 0
# 5 / 2  = 2 ... 1
# 2 / 2 = 1 ...0
# 1 /2 = 0 ... 1
# 
def bin(d):
	res = ""  # 准备一个将要返回的串

	while d:
		# 每次循环 res 加上 d 与 2 取余转换后的串
		res += str(d % 2)
		# 每次循环将 d 折半
		# 因为是 除 2 取余
		d = int(d / 2)
		# [::-1]  这样的写法表示从串的最后取到开头
	return res[::-1]
print(bin(168))

# 2.编写一个函数findstr(str,n),该函数统计字符串 n 在另一个字符串str中出现的次数。
def findstr(str, n):
	parLen = len(str)
	subLen = len(n)
	if subLen > parLen:
		# 子串长度比父串长度长
		return 0
	else:
		# cnt 用于计数
		# beg 在 str 中取子串的开始位置
		# end 在 str 中取子串的结束位置
		cnt,beg,end = 0,0,subLen
		# 循环取到最后 str 的最后一个位置
		while end <= parLen :
			# 得到 beg 和 end 的取的子串
			substr = str[beg: end]
			# print(substr, n)
			# 如果子串与 n 相等就计数加 1
			if substr == n:
				cnt += 1
			# 增量同时加 1
			end += 1;beg += 1
	return cnt
print(findstr('love abc love avabc love','love'))

# 3.利用filter()和lambda表达式求100内，求3的倍数
# lambda x:x+1(1)  => 2
# lambda x:x+1(10)  => 11

# lis = list(range(1,101))  产生 1-100 的列表
# filter() 有两个参数第一个是处理的匿名函数,如果返回为真就处理，假就忽略
# 					 第二个是个序列
# 			该方法返回一个处理好后的类序列(返回的是一个如下的对象地址：)
# <filter object at 0x0000000001E9BBA8>
# 
# 3 的倍数可用这样的函数代替
# def b3(x):
# 	return x % 3 == 0
# 写成 lambda 就这样写：
# 	lambda x: x % 3 == 0
# 	
# type(filter(lambda x: x % 3 == 0, lis)) => <class 'filter'>

# 因数返回的是一个类序列，所以需要用 list 转换成列表，用 tuple 也可以
print(list(filter(lambda x: x % 3 == 0, list(range(1,101)))))


# 4.利用递归实现十进制转换为二进制
def ordtobin(num):
	res = ''
	if num:
		return ordtobin( num // 2 ) + str(num%2)
	else:
		return res
# print(ordtobin(192))

