

class Car(object):

	def __init__(self, name, price):
		self.name = name
		self.price = price

	def show(self):
		print('该汽车名字是 %s, 价格 %s'%
			(self.name, self.price))

	# 修改自己汽车的名字
	def setName(self, n):
		self.name = n

baoma = Car('宝马', '100w')
bc	 = Car('奔驰', '150w')
baoma.setName('宝马x6')
bc.setName('奔驰a1')

baoma.show()
bc.show()
