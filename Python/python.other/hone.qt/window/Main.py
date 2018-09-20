from PyQt5.QtWidgets import QMainWindow, QMessageBox

from PyQt5.QtCore import QCoreApplication

from view.MainView import Ui_LoginWindow

from window import Window, Alert, Cook, Manager, User


# 主窗口
class Main(QMainWindow, Ui_LoginWindow, Window.Window):
	def __init__(self):
		super(Main, self).__init__()
		self.setupUi(self)

		self.Alert_ = Alert.Alert()
		self.Cook_ = Cook.Cook()
		self.Manager_ = Manager.Manager()
		self.User_ = User.User()

		# 阻止调整窗口大小,并阻止最大化窗口按钮
		self.setFixed()

		# 为登录添加事件
		self.login.clicked.connect(self._check)

		# 添加退出按钮的退出
		self.quit.clicked.connect(QCoreApplication.instance().quit)	

		# 光标默认选中自己
		self.user_text.installEventFilter(self)
		
	# 点击登录的事件函数
	def _check(self):
		self.user_tip.setText('')
		self.pass_tip.setText('')

		# 获取当前窗口的两个文本框的值
		account = self.user_text.text()
		password = self.pass_text.text()

		if account == '':
			QMessageBox.warning(self, 'null', '账户名不能这空')
			return 

		pass_ = self.getPassByAccount(account)

		# 判断用户名和密码不能为空
		if account == '':
			self.user_tip.setText("用户名不能为空")
			return 
		if password == '':
			self.pass_tip.setText("密码不能为空")
			return 


		# 存在用户
		if self.hasAccount(account):
			# 判断该用户是否可以登录
			if self.hasForbid(account):
				QMessageBox.warning(self, '禁止登录','你没有登录权限')
				return 
				

			# 得到用户的密码
			tPASS = self.getPassByAccount(account)

			# 先判断密码是否相同
			if password == tPASS:

				# 判断用户是否第一次登录
				if self.getFirstByAccount(account) :
					QMessageBox.warning(self, '第一次登录','第一次登录，请修改密码！')
					# 更改修改窗口的当前用户
					self.WINDOW_NOW['alert'] = account
					self.openTO(self.Alert_)
				else:
					# 判断密码是否相同，如果一样则打开对应窗口
					# 注意这里的密码已经是修改后的密码
					tp = self.getTypeByAccount(account)
					if tp == 'ADMIN':
						self.openTO(self.Manager_)
					elif tp == 'USER':
						self.WINDOW_NOW['userchoose'] = account
						self.openTO(self.User_)
					elif tp == 'LEADER':
						self.WINDOW_NOW['leader'] = account
						self.openTO(self.User_)
					elif tp == 'COOKER':
						self.WINDOW_NOW['cook'] = account
						self.openTO(self.Cook_)
			else:
				self.pass_tip.setText("密码不正确")

		# 不存在用户
		else:
			# QMessageBox.warning(self, '登录失败','登录失败！请检查用户和密码是否正确')
			self.user_tip.setText("该用户名不存在")




# QMessageBox
# 1. question 类型 
#	QMessageBox.question(self,"Question","检测到程序有更新，是否安装最新版本？", 
#		QMessageBox.Ok|QMessageBox.Cancel,QMessageBox.Ok)
# 2. information类型
# 	QMessageBox.information(self,"Information","程序当前版本为V3.11")
# 
# 3. warning 类型
# 	QMessageBox.warning(self,"Warning","恢复出厂设置将导致用户数据丢失，是否继续操作？",
#		QMessageBox.Reset|QMessageBox.Help|QMessageBox.Cancel,QMessageBox.Reset)
# 4 .critical类型
# 	QMessageBox.critical(self,"Critical","服务器宕机！")
# 	
# 5.about类型
# 	QMessageBox.about(self,"About","Copyright 2015 Tony zhu.\n All Right reserved.")




