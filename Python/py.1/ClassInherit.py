#!usr/bin/python3

class Parent:
	name = '父母'
	money = '$1000'

	def __init__(self, n, m):
		self.name = n
		self.money = m

	def getMoney(self):
		return self.money
	def getName(self):
		return self.name

# 单继承
class Father(Parent):

	def __init__(self):
		# 如果没有 self 指向当前类，则是父类
		# self.name = '父亲'
		# self.money = '$600'
		# 直接调用父类的构造器
		# 但注意传到父类构造时，需要将自己的引用 self 也传过去
		Parent.__init__(self,'Father','$600')
		

	def earning(self, totle):
		return ( self.name + " can earning $%d"%(totle) )

# 单继承
class Mother(Parent):

	def __init__(self ):
		# self.name = '母亲'
		# self.money = '$400'
		Parent.__init__(self,'Mother','$400')
	def shopping(self, totle):
		return ( self.name + " Shopping consumption $%d"%(totle))

# 多继承
class Child(Father,Mother):
	
	def __init__(self ):
		self.name = 'Qlover'
	def need(self, totle):
		return ( self.name + " need $ %d go to school."%(totle))

Dad = Father()
Mom = Mother()
My = Child()
print( Dad.name, Dad.earning(2000) )
print( Mom.name, Mom.shopping(500) )
print( My.name, My.need(100) )

# 父中并没有定义 money ，则是 Parent 中定义，所以继承至 Parent
print(My.name, 'have', My.getMoney()) #=> '$1000'
# 儿子也有父亲与母亲的方法
print(My.earning(100)) #=> 'Qlover can earning $100'
print(My.shopping(50))




