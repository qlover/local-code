from PyQt5.QtWidgets import QMainWindow, QMessageBox

from view.CookView import Ui_CookWindow

from window.Window import Window


# 厨师界面类
class Cook(QMainWindow, Ui_CookWindow, Window):
	def __init__(self):
		super(Cook, self).__init__()
		self.setupUi(self)
		self.setFixed()
		# 为 返回 按钮添加事件，返回到 User 界面
		self.Return.clicked.connect(self.nothing)

		# 为 退出 按钮添加事件, 返回到主窗口
		self.Quit.clicked.connect(self.openMain)

		# 为打印按钮添加事件
		self.printChooseButton.clicked.connect(self.printChoose)

	# 重写 open 方法
	def open(self):
		self.now_cooker.setText(self.WINDOW_NOW['cook'])
		self.printChoose()
		self.show()

	def printChoose(self):
		# 打印出所有用户菜单
		res = self.printAllChoose()
		self.showList.setPlainText(res)