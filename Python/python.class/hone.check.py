'''
* class name Check
* @param {string} ciphers 	存放类内部的判断字符串
* @param {int} has 			为用户返回该串是什么类型
*                     			1 => 低级
*                     			2 => 中级
*                     			3 => 高级
*                     			0 => 密码太简短或者错误
* @param {boolean} __init__:type 	是否自动判断
*         						True => 自动判断 (即使自动判断，也要用户自行调用 has 返回结果)
*         						False => 手动判断，
*
*
* @function		autoCheck  		自动判断
* @function		isSings 		判断是否有特殊符号
* @function		low				判断是否是低级密码
* @function		mid				判断是否是中级密码
* @function		high			判断是否是高级密码
* 
'''
class Check:
	ciphers = ''
	has = 0

	# 构造函数
	# 就是在用这个类的时候会触发的函数
	def __init__(self, ciphers, type=True):
		super(check, self).__init__()
		if not ciphers:
			pass
			# raise argumentsError('参数不能为空')
		self.ciphers = list(str(ciphers))  # 将构造函数传入的参数直接转换为字符串

		# 自动判断
		if type :
			self.__autoCheck()
		else:
			pass

	# 自动判断
	def __autoCheck(self):
		if self.low() : self.has = 1
		elif self.mid() : self.has = 2
		elif self.high() : self.has = 3
		else : self.has = 0

		
	# 判断是否是特殊符号
	def isSings(self, char):
		sings = ('~','!','@','#','$','%','^','&','*','(',')','_','=','-','/',',','.','?','<','>',';',':','[',']','{','}','|','\\')
		return char in sings;

	# 低级密码
	def low(self):
		flag = False	# 是否是低级密码
		if len(self.ciphers) <= 8:
			return False
		else:	
			for x in self.ciphers:
				if x.isalnum():
					flag = True
				else : 
					return False
		self.has = 1
		return flag

	# 中级密码
	def mid(self):
		flag = False	# 是否是中级密码

		if len(self.ciphers) <= 8:
			return False
		else:	
			# 先用判断是不是字母、数字、符号都有
			has_num = False
			has_lit = False
			for x in self.ciphers:
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
				for x in self.ciphers:
					if self.isSings(x): break; # 一旦发现符号就返回				
					# 因为前面已经判断了是否存在字母与数字的其中一个了
		self.has = 2
		return flag

	# 高级密码
	def high(self):
		flag = False	# 是否是高级密码

		# 因为是高级，如果有字母或者数字或者符号就表示是三个一起组合
		if len(self.ciphers) <= 16:
			return False
		else:
			for x in self.ciphers:
				if self.isSings(x) or x.isdigit() or x.isalpha() :
					flag = True
				else:
					return False
		self.has = 3
		return flag
