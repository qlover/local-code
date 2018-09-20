
class Person(object):
	# python 没有静态成员的表示方法
	# 所以下面三个都是实例的属性
	# name = '某某'
	# age = '0'
	# sex = '未知'

	# 构造函数，构造方法，构造器
	# 在实例化每一个对象的时候调用 
	def __init__(self, n, a, s):
		self.name = n
		self.age = a
		self.sex = s

	# 这个是实例的方法
	# 因为 python 没有静态成员的表示方法
	def show(self):
		print(self.name)
		print(self.age)
		print(self.sex)


qrj = Person('qrj','19','男')  # 实例化

lxh = Person('lxh', '19', '女')  # 实例化

qrj.show()
lxh.show()

# mm = Person()
# python 不能直接在类里面为变量赋值
# 因为 python 没有静态方法的表示方法
# mm.show()
# Person.show()







