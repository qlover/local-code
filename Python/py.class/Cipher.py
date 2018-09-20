# -*- coding: UTF-8 -*-
# 
# 密码生成器 
# 	需求：
# 		可生成纯数字，纯字母，甚至纯符号的指定长度或随机长度的密码
# 		密码长度是未知的,且可组合
# 	条件：
# 		密码最低 6 位
# 		密码最长 64 位
# 	
# 
# 
# 	方案
#  		能够产生纯密码
#  		能够产生组合密码
#  		并且产生的组合密码可以指定或不指定开头字符
#  		能够随机排序
# 		
# 	注意事项
# 		_  全局变量
# 


import random

# 定义需要用上的数字字符等
# 提供密码池
passwords = (
	{'value': ('~','!','@','#','$','%','^','&','*','(',')','_','+','-')},
	{'value' : ('1','2','3','4','5','6','7','8','9','0')},
	{'value' : ('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z')},
	{'value' : ('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z')}
)
# 取字符: password[0]['value']
# 取数字: password[1]['value']
# 取小写字母: password[2]['value']
# passwords[0]['value'][0]  => ~
# passwords[0]['value'][13]  => -
# passwords[1]['value'][0]  => 1
# passwords[3]['value'][1]  => B
# 



# # 标题字符串
titleStr = "-"*20 + "\n【密码选项】\n1.字符\n2.数字\n3.小写字母\n4.大写字母\n" + "-"*20
errorStr = "输入不正确，请重新输入:"
lis = ('1','2','3','4') 				# 纯密码的选项
res = ('exit', 'return','quit','no') 	# 退出的关键字
# 该变量控制是否固定密码长度
isFixLength = False;   					# 如果要每个密码长度不同则将 fix 至 True

# 密码长度,不能低于 6 位,长度是未知的，并且最长 64 位, 用下面的 isFixLength 变量控制 
_LEN = random.randint(6,64) 			# 全局下的固定密码长度

############
### 工具 ###
############

# 函数的作用就是将一个功能封装起来想用就直接调用 

# 返回一个随机数 
# 	返回 [beg, end]
def rand(beg, end):
	return random.randint(beg, end);  # 返回一个随机值

# 返回两个“不同”的随机数
# beg 开始位置 end 结束位置 
# 这里的位置 [0,3] 
# 
# 如果想产生 数字+小写字母 就 [1,2]
def randTwo(beg=0, end=3):
	while 1:
		a = rand(beg, end)
		b = rand(beg, end)
		if a != b : break;
	return [a,b]		

# 返回三个“不同”的随机数
def randThree(beg=0, end=3):
	while 1:
		a = rand(beg, end)
		b = rand(beg, end)
		c = rand(beg, end)
		if a != b and a != c and b != c: break;
	return [a,b,c]


### 核心算法 ###
# 对每个密码随机排序
def randSort(seq, times=1):
	# 接收传入的 sequence  序列
	result = list(seq) 	#直接将 seq 变成列表
	t = times  # 随机次数

	# 循环多少次我就执行多少随机排序
	while t:
		random.shuffle(result)  # 对列表进行随机排序
		t  = t - 1
	return result

# 去掉重复,并去掉非数字
def norepeat(seq):
	lists,t = seq,[]
	for x in lists:
		if x not in t and x in lis:
			t.append(x)
	return [int(x)-1 for x in t] 

# 返回随机长度
def _LEN(beg=6, end=64):
	if isFixLength : return _LEN 
	return rand(beg, end)
##############
### 纯密码 ###
##############


# 返回纯字符密码
def symbolCipher():
	l = _LEN()   				# 接收密码长度
	cip = ''   					# 准备一个返回的密码 字符串
	cs = passwords[0]['value'] 	# 取得密码池
	while l:
		# 取得一个字符就加到 cip 中
		cip = cip + cs[rand(0,13)]
		l = l - 1
	# 把密码返回
	return cip
# 返回纯数字密码
def digitCipher():
	l = _LEN()
	cip = ''
	cs = passwords[1]['value'] 	# 取得密码池
	while l:
		cip = cip + cs[rand(0,len(cs)-1)]
		l = l - 1
	return cip
# 返回纯小写字母密码
def lowerCipher():
	l = _LEN()
	cip = ''
	cs = passwords[2]['value'] 	# 取得密码池
	while l:
		cip = cip + cs[rand(0,len(cs)-1)]
		l = l - 1
	return cip
# 返回纯大写字母密码
def upperCipher():
	l = _LEN()
	cip = ''
	cs = passwords[3]['value'] 	# 取得密码池
	while l:
		cip = cip + cs[rand(0,len(cs)-1)]
		l = l - 1
	return cip

# 整合纯密码
# @param  {int}  tp   确定返回纯密码的类型
# 						0 => 字符
# 						1 => 数字
# 						2 => 小写字母
# 						3 => 大写字母
def pureChiper(tp):
	t = tp
	if t == 0:
		return symbolCipher()
	elif t == 1:
		return digitCipher()
	elif t == 2:
		return lowerCipher()
	elif t == 3:
		return upperCipher()
# print(pureChiper(0))



################
### 组合密码 ###
################

### 组合密码,任意两种 ###
# @param  {list}   tp   密码组合的类型,
# 						指定返回的两个数，两个就是不同类型的组合
# 							[0,2] #=> 字符与小写字母
# 							[0,1] #=> 字符与数字
# 							[0,3] #=> 字符与大写字母
# 					默认： randTwo(0,3) 
# @param {list}  times  随机排序次数							
# 							
def assembelTwo(tp=randTwo(0,3), times=1):
	# randTwo(0,3)  返回的是 0 - 3 之间的随机的两个数，以列表形式返回
	# tp = [2,3]
	# a = tp[0]  # 取 tp 的第一个元素就是确定了密码的第一种类型 
	# b = tp[1]  # 取 tp 的第二个元素就是确定了密码的第二种类型

	# 得到两种随机的字符类型
	oneList = list(passwords[tp[0]]['value'])  # => password[2]['value'] 
	twoList = list(passwords[tp[1]]['value'])

	# 接收随机的两个密码类型列表值
	lists = []  			# 定义一个空列表，
	lists = oneList     	# 将第一种类型放到里面
	lists.extend(twoList) 	# 再将第二种类型放到里面去
	# 随机排序列表值
	lists = randSort(lists, times)
	last = len(lists)-1 	# 两种组合列表最后元素下标,用于取随机元素
	# 密码长度
	l = _LEN() 
	# 返回的密码串
	cip = ''

	# 循环密码长度次数
	# 每循环一次就加上一个 lists 中的一个
	while l:
		cip = cip + lists[rand(0, last)]
		l = l - 1
	return cip  #  返回这个密码

### 组合密码,三种 ###

def assembelThree(tp=randThree(0,3), times=1):
	oneList = list(passwords[tp[0]]['value'])
	twoList = list(passwords[tp[1]]['value'])	
	threeList = list(passwords[tp[2]]['value'])	 #
	lists = oneList
	lists.extend(twoList)
	lists.extend(threeList) #
	lists = randSort(lists, times)
	last = len(lists)-1 	# 两种组合列表最后元素下标,用于取随机元素
	l = _LEN() 
	cip = '';
	while l:
		cip = cip + lists[rand(0, last)]
		l = l - 1
	return cip	


### 组合四种密码 ###
def assembelFour(tp, times=1):
	oneList = list(passwords[tp[0]]['value'])
	twoList = list(passwords[tp[1]]['value'])	
	threeList = list(passwords[tp[2]]['value'])	 #
	fourList = list(passwords[tp[3]]['value'])	 #
	lists = oneList
	lists.extend(twoList)
	lists.extend(threeList) #
	lists.extend(fourList) #
	lists = randSort(lists, times)
	last = len(lists)-1 	# 两种组合列表最后元素下标,用于取随机元素
	l = _LEN() 
	cip = '';
	while l:
		cip = cip + lists[rand(0, last)]
		l = l - 1
	return cip


### 整合组合密码 ###
def assembelCipher(tp, times=1):
	l = len(tp)
	if l == 1: return pureChiper(tp[0])
	elif l == 2: return assembelTwo(tp, times)
	elif l == 3: return assembelThree(tp, times)
	elif l == 4: return assembelFour(tp, times)
	else : return None


### 主函数 ###
def main():
	print(titleStr)
	while 1:
		userInput = input('输入单个选项或组合选项：')
		# 是否退出
		if userInput in res:
			re = input('是否要退出？[y/n]')
			if re == 'y':
				re = input('真的要要退出？[y/n]')
				if re == 'y': return  # 退出系统
		tp = list(userInput)
		# 去掉重复并去掉非数字
		tp = norepeat(tp)
		# 如果为空，则表示没有任何字符
		if tp == []: 
			print(errorStr)
			continue
		if len(tp) == 1: print(pureChiper(tp[0])) 	# 返回纯密码
		else: print(assembelCipher(tp)) 	# 返回组合密码


# 程序入口
print("tip:输入一个数字或者是组合的数字,提示最好不要有重复")
main()



