'''
1.有字符串：str1 = '<a href="http://www.baidu.com/dvd" target="_blank">鱼C资源打包</a>'，请问如何提取出子字符串：'www.baidu.com'
2.据说只有智商高于150的才能解开这个字符串（还原为有意义的字符串）：str1 = 'i2sl54ovvvb4e3baerj32u56n;$g43ee'
3.字符的格式化表达
4.请问以下这行代码会打印什么内容？ "{{1}}".format("不打印", "打印")
5.如果想要显示Pi = 3.14，format前边的字符串应该怎么填写呢？ ''.format('Pi = ', 3.1415)
6.编程练习：使用Python编程程序实现凯撒加密！
7.编程练习：假设一段英文字母，其中有单独的字母I误写为i，请编程加以纠正
8.编程练习：用户输入一段英文，然后输出这段英文汇总所有长度为4个字母的单词
9.编程练习：请写一个密码安全性检查的脚本代码：check.py
# 密码安全性检查代码
#
# 低级密码要求：
#   1. 密码由单纯的数字或字母组成
#   2. 密码长度小于等于8位
#
# 中级密码要求：
#   1. 密码必须由数字、字母或特殊字符（仅限：~!@#$%^&*()_=-/,.?<>;:[]{}|\）任意两种组合
#   2. 密码长度不能低于8位
#
# 高级密码要求：
#   1. 密码必须由数字、字母及特殊字符（仅限：~!@#$%^&*()_=-/,.?<>;:[]{}|\）三种组合
#   2. 密码只能由字母开头
#   3. 密码长度不能低于16位
10.编程练习：打印如下格式：
001  002 003 004 ... 100 共100个数据
'''


# 1.  提取 www.baidu.com
str1 = '<a href="http://www.baidu.com/dvd" target="_blank">鱼C资源打包</a>'
beg = str1.find('www.baidu.com')
end = beg+13
print(str1[beg:end])

# 2.
str1 = 'i2sl54ovvvb4e3baerj32u56n;$g43ee'

# 4.
print("{{1}}".format("不打印", "打印"))  # => {1} 

# 5.
print('{0}{1}'.format('Pi = ', 3.1415))

# 6.
# 凯撒密码
# ABCDEFGHIJKLMNOPQRSTUVWXYZ
# 凯撒密码就是给一定的偏移量，将字母偏移位置
# 比如说 明文是 A ，偏移量是 1 密码就是 B


print('---------')

# 转换单个字符的 凯撒 
# 支持大小写
def caesar(litter, offset=0): # offset 建议 3 - 25
	# ord('a') 97
	# ord('z') 122
	l = litter  # 接收传入的字母
	flag = False # 判断是否转换过大小写
	# 如果是大写字母,将它转换成小写
	if l.isupper():
		l = l.lower();
		flag = True
	beg = ord(l)  # 将字母转换成整数
	res = beg + offset; # 结果的字符 ascll 码整数
	over = 0 # 右边大于剩下的整数
	if res >= 123 : # 如果超出 z 的值
		over = res - 123		
		res = over + 97
	elif res <= 96: # 如果超出 a 的值
		over = 97 - res
		res =  123 - over
	result = chr(res)
	# 如果转换过大小写，最后在将结果转换回去
	if flag:
		result = result.upper()
	return result

def caesars(litters, offset=0):
	ls = list(litters)  # 接收传入的字符串
	res = ''
	for x in ls:
		res = res + caesar(x, offset)
	return res


# maketrans()
# translate()

zms = 'abc';
print(caesars(zms, 1))
print('---------')



# 7. 假设一段英文字母，其中有单独的字母I误写为i，请编程加以纠正
str1 = "i am is a boy, and i am 18 age."
# ' '.join(str1.split(' '))
str2 = ''
for x in str1.split(' '):
	s = x
	if x == 'i':
		s = 'I'
	str2 = str2 + s + ' '
print(str2)


# 8. 用户输入一段英文，然后输出这段英文汇总所有长度为4个字母的单词
str1 = "This code is exactly equivalent to the first example."
str2 = ''
for x in str1.split(' '):
	if len(x) == 4:
		str2 = str2 + x + ' '
print(str2)


# 9.

# 判断是否是特殊符号
def isSings(char):
	sings = ('~','!','@','#','$','%','^','&','*','(',')','_','=','-','/',',','.','?','<','>',';',':','[',']','{','}','|','\\')
	return char in sings;

# 低级密码
def checkLow(ciphers):
	cl = list(str(ciphers))
	flag = False	# 是否是低级密码
	if len(cl) <= 8:
		return False
	else:	
		for x in cl:
			if x.isalnum():
				flag = True
			else : 
				flag = False
				return flag
	return flag

# 中级密码
def checkMid(ciphers):
	cl = list(str(ciphers))
	flag = False	# 是否是中级密码

	if len(cl) <= 8:
		return False
	else:	
		# 先用判断是不是字母、数字、符号都有
		has_num = False
		has_lit = False
		for x in cl:
			if x.isdigit():
				has_num = True	# 发现了数字
			elif x.isalpha():
				has_lit = True	# 发现了字母
			# 都发现了则直接判断为否
			if has_num and has_lit:
				return False
			else: flag = True

		# 这里表示没有字母和数字同时存在
		if flag	:
			for x in cl:
				if isSings(x): break; # 一旦发现符号就返回				
				# 因为前面已经判断了是否存在字母与数字的其中一个了
	return flag

# 高级密码
def checkHigh(ciphers):
	cl = list(str(ciphers))
	flag = False	# 是否是高级密码

	# 因为是高级，如果有字母或者数字或者符号就表示是三个一起组合
	if len(cl) <= 16:
		return False
	else:
		for x in cl:
			if isSings(x) or x.isdigit() or x.isalpha() :
				flag = True
			else:
				return False
	return flag

# 10.编程练习：打印如下格式：
for x in range(1,101):
	print(str(x).rjust(3,'0'),end=" ")


