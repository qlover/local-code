from PyQt5.QtWidgets import QMessageBox
# 导入数据
from data.choose import choose

from window import Main

# 所有窗口类的父类
class Window(object):
	# 静态属性
	# 	这样可以为每个子类提供
	cho = choose()

	# 设置四个参数，代表每个窗口当前的用户
	WINDOW_NOW = {
		'alert': 'unkonw',
		'cook' : 'unkonw',
		'main' : 'login',
		'manager' : 'unkonw',
		'user' : 'unkonw',
		'userchoose': 'unkonw'
	}

	# 构造方法
	def __init__(self):
		super(Window, self).__init__()
		# 为子类提供其它窗口对象
		# Main_ = Main.Main()
		# Alert_ = Alert.Alert()
		# Manager_ = Manager.Manager()
		# User_ = User.User()
		# Cook_ = Cook.Cook()

	def setFixed(self):
		# 阻止调整窗口大小,并阻止最大化窗口按钮
		self.setFixedSize(self.width(), self.height());

	# 获取所有账号
	def getAllAccount(self):
		return list(self.cho.ACCOUNT.keys())

	# 用账号获取 first 
	def getFirstByAccount(self, account):
		return self.cho.ACCOUNT[account]['first']

	# 用户是否禁止登录
	def hasForbid(self, account):
		return self.cho.ACCOUNT[account]['forbid']

	# 用户是否存在 
	def hasAccount(self, account):
		acts = list(self.cho.ACCOUNT.keys())
		if account in acts:
			return True
		return False	

	# 获取密码
	def getPassByAccount(self, account):
		if self.hasAccount(account):
			return self.cho.ACCOUNT[account]['upass']
		return 

	# 返回用户类型
	def getTypeByAccount(self, account):
		if self.hasAccount(account):
			return self.cho.ACCOUNT[account]['type']
		return None


	# 更新用户密码
	def updatePass(self, account, password):
		if self.hasAccount(account):
			self.cho.ACCOUNT[account]['upass'] = password
			# 密码修改了，一定要记得将 first 属性改成 0
			self.cho.ACCOUNT[account]['first'] = 0
			return 1
		return 0


	# 返回员工数量
	# 这个方法主要用于为新用户添加 id 值
	def getUsersLen(self):
		return len(self.cho.ACCOUNT)

	# 添加一个新员工
	def addNewUser(self, account, type_='USER'):
		new_dict = {}
		new_dict['id'] = self.getUsersLen()
		new_dict['upass'] = account
		new_dict['first'] = 1
		new_dict['forbid'] = 0
		new_dict['type'] = type_
		self.cho.ACCOUNT[account] = new_dict
		if self.cho.ACCOUNT[account]:
			return 1
		else:
			return 0

	# 删除一个员工
	def dropUser(self, account):
		del self.cho.ACCOUNT[account]

	# 禁止员工登录
	def frobidUser(self, account):
		self.cho.ACCOUNT[account]['forbid'] = 1


	# 判断用户是否有该菜品
	# 有返回 1
	# 没有返回 0
	def hasChoose(self, account, food_name):

		try:
			if self.cho.ACCOUNT[account]['menu'][food_name] :
				pass
			return 1
		except Exception as e:
			return 0

	# 得到菜品名
	def getMenuNamesByType(self, dis_type):
		return list(self.cho.MENU[dis_type].keys())

	# 得到菜品类型
	def getMenuType(self, food_name):
		for M_T in list(self.cho.MENU.keys()):
			if food_name in self.cho.MENU[M_T]:
				return M_T
		return 

	# 为用户加菜单添加菜品
	def addChoose(self, account, food_name):
		# 新增一个字典，一个字典就是一个菜品信息
		self.cho.ACCOUNT[account]['menu'][food_name] = {}
		# 用户点了一份该菜品
		self.cho.ACCOUNT[account]['menu'][food_name]['amount'] = 1
		
	# 添加用户菜品分量
	def addAmount(self, account, food_name):
		self.cho.ACCOUNT[account]['menu'][food_name]['amount'] += 1

	# 获取用户的菜单
	def getMenuByAccount(self, account):
		return self.cho.ACCOUNT[account]['menu']


	# 删除用户所有菜品
	def delAllMenu(self, account):
		del self.cho.ACCOUNT[account]['menu']

	# 删除用户菜名
	def delMenu(self, account, food_name):
		del self.cho.ACCOUNT[account]['menu'][food_name]
		self.addMenuAmout(food_name)

	# 减量用户菜品分量
	def minusAmount(self, account, food_name):
		self.cho.ACCOUNT[account]['menu'][food_name]['amount'] -= 1





	# 打印用户菜单
	def printChooseByAccount(self, account):
		restr = ""
		# 得到用户所有菜名
		food_names = self.cho.ACCOUNT[account]['menu'].items()

		for food_name, a in food_names:
			restr += "账号：【%s】 菜名：【%s】 份数：【%s】\n" % (account, food_name, a['amount'])
		return restr
	# 打印所有用户菜单
	def printAllChoose(self):
		users = self.getAllAccount()
		restr = ""
		for user in users:
			if self.cho.ACCOUNT[user]['type'] == 'USER':
				restr += self.printChooseByAccount(user)

		return restr

	# 每个窗口对处提供的打开本窗口方法
	# 对外提供自己的接口
	def open(self):
		if not self.isVisible():
			self.show()

	# 用于子类打开其它窗口，闭关自己窗口
	# winobj  将要打开的窗口对象
	def openTO(self, winobj):
		winobj.open()
		self.close()
		return winobj

	# 专门提供一个方法，打开到主窗口
	# 打开主窗口
	def openMain(self):
		self.Main_ = Main.Main()
		self.openTO(self.Main_)
		return self.Main_

	# 提示，还没开发该功能
	def nothing(self):
		QMessageBox.warning(self, 'Null', '暂无此功能')
		return



