
# 继承链

class Human(object):

	name4 = '人类'
	def __init__(self):
		pass



class Man(Human):
	name3 = '男人'
	def __init__(self):
		super(Man, self).__init__()


class Dad(Man):
	name2 = '爸爸'
	def __init__(self):
		super(Dad, self).__init__()

class Son(Dad):
	name = '儿子'

	name2 = '我不要爸爸了'
	def __init__(self):
		super(Son, self).__init__()
		

s = Son()
s.name2 = '我不想当儿子了'
s1 = Son()


# 一个对象使用一个成员的过程是
print('我是: ',s.name)
# print(s.name2)
print(s.name3)
print(s.name4)
print(s.name2)
print(s1.name2)






