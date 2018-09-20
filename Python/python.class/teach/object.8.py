

# 继承链

# class Human(object):

# 	type_ = '人类'
# 	def __init__(self):
# 		pass

# class Dad(Human):
# 	type_ = '爸爸'
# 	def __init__(self):
# 		super(Dad, self).__init__()

# 	# 对外界提供一个方法，
# 	# 方法返回自己的东西
# 	def getDadType(self):
# 		return self.type_

# class Mom(Human):
# 	type_ = '妈妈'

# 	def __init__(self):
# 		super(Mom, self).__init__()


# 	# 对外界提供一个方法，
# 	# 方法返回自己的东西
# 	def getMonType(self):
# 		return self.type_

# class Son(Dad, Mom):

# 	def __init__(self):
# 		super(Son, self).__init__()
		

# son = Son()

# # self.type_  == '爸爸'
# print('我是 %s 的儿子' % son.type_)

# print('我是 %s 的儿子' % son.getMonType())

# print('我是 %s 的儿子' % son.getDadType())







# class Human(object):

# 	type_ = '人类'
# 	def __init__(self):
# 		pass

# 	# 用上多态
# 	# 这个 t 是一个类型，可以是类也可以是实例
# 	def getType(self, t):
# 		return t.type_


# class Dad(Human):
# 	type_ = '爸爸'
# 	def __init__(self):
# 		super(Dad, self).__init__()

# 	# # 对外界提供一个方法，
# 	# # 方法返回自己的东西
# 	# def getDadType(self):
# 	# 	return Dad.type_

# class Mom(Human):
# 	type_ = '妈妈'

# 	def __init__(self):
# 		super(Mom, self).__init__()


# 	# # 对外界提供一个方法，
# 	# # 方法返回自己的东西
# 	# def getMonType(self):
# 	# 	return Mom.type_

# class Son(Dad, Mom):

# 	def __init__(self):
# 		super(Son, self).__init__()
		

# son = Son()

# # self.type_  == '爸爸'
# # print('我是 %s 的儿子' % son.type_)

# # print('我是 %s 的儿子' % son.getMonType())

# # print('我是 %s 的儿子' % son.getDadType())

# print('我是 %s 的儿子' % son.getType(Dad))
# print('我是 %s 的儿子' % son.getType(Mom))


