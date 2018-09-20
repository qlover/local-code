

class Person(object):
	# 这种写法就是 python 里面的静态属性的写法!!!
	name = '某某'
	age = '0'
	sex = '未知'

	# 构造函数，构造方法，构造器
	def __init__(self, n, a, s):
		self.name = n
		self.age = a
		self.sex = s

	# 这个是实例的方法
	def show(self):
		print(self.name)
		print(self.age)
		print(self.sex)

print(Person.name)
Person.name = 'xxxxxx'
qrj = Person('qrj','19','男')  # 实例化
print(qrj.name) # => qrj
lxh = Person('lxh', '19', '女')  # 实例化
print(lxh.name) # => lxh
# 那 python 的静态属性怎么表示?
# 静态成员直接用类名点 成员名
print(Person.name)


qrj.show()

