
from PyQt5.QtWidgets import QMainWindow, QMessageBox

from view.UserView import Ui_UserWindow

from window.Window import Window

from window import UserChoose

# 用户界面类
class User(QMainWindow, Ui_UserWindow, Window):
	def __init__(self):
		super(User, self).__init__()
		self.setupUi(self)
		self.setFixed()
		# 为 点菜 按钮添加事件
		self.orderButton.clicked.connect(self.openChoose)

		# 为 查询 添加事件
		self.queryButton.clicked.connect(self.nothing)

	# 打开点菜界面
	def openChoose(self):
		# 得到点菜界面
		self.UserChoose_ = UserChoose.UserChoose()
		# 打开到点菜界面
		self.openTO(self.UserChoose_).user_text.setText(self.WINDOW_NOW['userchoose'])


