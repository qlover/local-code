
class Human(object):

	type_ = ''
	def __init__(self):
		super(Human, self).__init__()

	def setType(self, tp):
		self.type_ = tp

class Dad(Human):

	def __init__(self, tp):
		super(Dad, self).setType(tp)


class Son(Dad):
	def __init__(self, tp):
		super(Son, self).__init__(tp)



son = Son('儿子')

print('我是:',son.type_)

