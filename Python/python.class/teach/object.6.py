

# 继承 

# 父类 子类

class Dad(object):

	Money = 1000
	def __init__(self, mon=0):
		# 这是自己有的，没有给暴露给外面的东西
		# 所以就不能给后代继承
		self.Money = mon

class Son(Dad):

	def __init__(self, mon=0):
		self.Money += mon


	def set(self, mo):
		self.Money += mo

d = Dad(2000) # 实例化一次，就创建了一个对象 

s1 = Son(200) # 实例化一次，就创建了一个对象 
s2 = Son(1000)  # 实例化一次，就创建了一个对象


s3 = Son() # 实例化一次，就创建了一个对象 
s3.set(5000)

# print(s1 == s3) # => False 

print('爸爸有 %s $' % d.Money)
print('大儿子有 %s $' % s1.Money) # => 1200
print('二儿子有 %s $' % s2.Money) # => 2000
print('三儿子有 %s $' % s3.Money)
