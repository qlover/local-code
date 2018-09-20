
# 创建一个水果类
# 并给每一个对象添加名字, 价格, 颜色
# 怎么吃这个水果 


class Furit(object):

	def __init__(self, name, price, color):
		self.name = name
		self.price = price
		self.color = color
		
	# 说明这个水果怎么吃
	def eat(self, method='削'):
		print('%s %s'%(method, self.name))

bannana = Furit('香蕉','10$','黄')
bannana.eat('剥')
apple = Furit('苹果','20$','红')
apple.eat()

