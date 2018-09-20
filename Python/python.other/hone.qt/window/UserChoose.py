from PyQt5.QtWidgets import QMainWindow, QMessageBox

from PyQt5 import QtCore, QtGui, QtWidgets

from view.UserChooseView import Ui_UserChoose

from window.Window import Window

from window import User

# 用户界面类
class UserChoose(QMainWindow, Ui_UserChoose, Window):

	# 用来记录当前四个点菜按钮菜品类型
	__now_dis_type = 'hotFood' # 默认热菜


	def __init__(self):
		super(UserChoose, self).__init__()
		self.setupUi(self)
		self.setFixed()
		# 得到所有的菜品按钮
		self.dissButton = (
			(self.dis1, 'hotFood'),
			(self.dis2, 'iceFood'),
			(self.dis3, 'dessertFood'),
			(self.dis4, 'sprit'),
			(self.dis5, 'redWine'),
			(self.dis6, 'beer'),
			(self.dis7, 'drink'),
		)

		# 得到四个按钮
		# 每一项的第二个值是菜名
		self.dishesButtons = [
			[self.dishes1Button,''],
			[self.dishes2Button,''],
			[self.dishes3Button,''],
			[self.dishes4Button,''],
		]

		# 为 返回 按钮添加事件，返回到 User 界面
		self.Return.clicked.connect(self.return_)

		# 为 退出 按钮添加事件, 返回到主窗口
		self.Quit.clicked.connect(self.openMain)
		
		# 为每个 菜品 按钮添加事件
		# 这里要注意，不能添加点菜按钮也不能添加菜品，都是固定的!!!
		self.dissButton[0][0].clicked.connect( lambda : self.disChoose(self.dissButton[0][1]))
		self.dissButton[1][0].clicked.connect( lambda : self.disChoose(self.dissButton[1][1]))
		self.dissButton[2][0].clicked.connect( lambda : self.disChoose(self.dissButton[2][1]))
		self.dissButton[3][0].clicked.connect( lambda : self.disChoose(self.dissButton[3][1]))
		self.dissButton[4][0].clicked.connect( lambda : self.disChoose(self.dissButton[4][1]))
		self.dissButton[5][0].clicked.connect( lambda : self.disChoose(self.dissButton[5][1]))
		self.dissButton[6][0].clicked.connect( lambda : self.disChoose(self.dissButton[6][1]))

		# 临时用来记录当前点了哪些菜
		self.NOW_CHOOSE = {}

		# 为四个点菜按钮添加事件
		self.dishesButtons[0][0].clicked.connect( lambda : self.showChoose(self.dishesButtons[0][1]))
		self.dishesButtons[1][0].clicked.connect( lambda : self.showChoose(self.dishesButtons[1][1]))
		self.dishesButtons[2][0].clicked.connect( lambda : self.showChoose(self.dishesButtons[2][1]))
		self.dishesButtons[3][0].clicked.connect( lambda : self.showChoose(self.dishesButtons[3][1]))



		# 初始化点菜四个列表按钮
		self.disChoose(self.__now_dis_type)


		# 为 确认添加事件
		self.okOrderButton.clicked.connect(self.printChoose)



	# 每个按钮点菜事件
	# dis_type  按钮类型
	def disChoose(self, dis_type):

		# 判断点击的菜品和当前列表的菜品类型是否一样
		# if self.__now_dis_type == dis_type:
			# 如果相等则说明四个菜品按钮类型和点击的是一样的
			# 则什么事都不做
			# return 

		# 每点一次按钮重置 __now_dis_type
		self.__now_dis_type = dis_type

		# 用菜品类型得到菜品名字
		menuNames = self.getMenuNamesByType(dis_type)

		# 准备一个新的菜品按钮
		food_names = []

		# 循环将得到的列表菜品名添加到菜品列表中
		for menuName in menuNames:
			# 在添加菜名时把类型也给它
			food_names.append((menuName, dis_type))

		# 将新的覆盖之前的四个点菜按钮值
		# vars_ = locals()
		# Python 里面每个变量都是 locals() | globals() 里面的一个键
		for x in range(0,4):
			# 将按钮值重置
			self.dishesButtons[x][0].setText(food_names[x][0])
			# 在给每个按钮添加一个菜品名
			self.dishesButtons[x][1] = food_names[x][0]


	# 点击点菜按钮时，展示信息
	# food_name  菜的名字
	def showChoose(self, food_name):
		account = self.WINDOW_NOW['userchoose']
		# 当点击了四个按钮就为用户的菜单中添加一次该菜品

		# 如果用户菜单没有这个菜品则添加该菜品
		if not self.hasChoose(account, food_name):
			# 为该用户添加该菜品
			r = self.addChoose(account, food_name)
		# 如果用户已经有了该菜品，则加份
		else:
			self.addAmount(account, food_name)


	# 打印菜单
	def printChoose(self):
		re = self.printChooseByAccount(self.WINDOW_NOW['userchoose'])
		# QMessageBox.warning(self, '用户菜单', re)
		self.showOrderList.setPlainText(re)


	# 返回到上一级界面
	def return_(self):
		# 得到用户界面
		self.User_ = User.User()
		# 打开到用户界面
		self.openTO(self.User_)




