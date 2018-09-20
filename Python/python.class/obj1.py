
# a = 10
# b = 20
# print(a+b)


# a = 30
# b = 40
# print(a+b)

# a = 50
# b = 50
# print(a+b)


class Dog(object):
	def __init__(self, n):
		self.name = n
	
	def getName(self):
		print('我叫', self.name)

# 二哈
class ERdog(Dog):

	def __init__(self, n):
		super(ERdog, self).__init__(n)
		# d = Dog(n)

# 三哈
class SANdog(Dog):

	def __init__(self, n):
		super(SANdog, self).__init__(n)


er = ERdog('二哈')
er.getName()
san = SANdog('三哈')
san.getName()

