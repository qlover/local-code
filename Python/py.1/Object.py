#!/usr/bin/python3


# 创建第一个 Python 的类

class Person:
	name = 'qlover'	
	# 这是一个私有的变量
	__secret = 'I love you'

	# 类似构造函数
	def __init__(self, age) :
		self.age = age

	# 定义一个普通方法
	def foo(self, name, age):
		return ("%s speak: I am %s year old." %(name,age))

	# 定论一个私有的方法
	def __love(self, n ):
		return ("%s love %s" % (self.name, n))
	# 为私有方法定义一个公共的接口
	def love(self, n):
		return self.__love(n);

# 实例化
p1 = Person(18)
# 对象访问
print ( p1.name, p1.age )
# 类似静态成员访问
print ( Person.name )

print( p1.foo('home',20) ) # => 'home speak: I am 20 year old.'

# 类外部不能直接访问私有成员
# print( Person.__secret )
# print( p1.__secret )
# print( p1.__love )

#但是可以通过公共的接口访问私有的成员
print( p1.love('xj')) #=> 'xj speak: I am 20 year old.'




