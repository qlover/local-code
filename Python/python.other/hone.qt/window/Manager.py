from PyQt5.QtWidgets import QMainWindow, QMessageBox, QInputDialog
# QInputDialog 输入对话框 

from PyQt5.QtCore import QCoreApplication

from view.ManagerView import Ui_ManagerWindow

from window.Window import Window

from window import Main

# 管理员界面类
class Manager(QMainWindow, Ui_ManagerWindow, Window):
	def __init__(self):
		super(Manager, self).__init__()
		self.setupUi(self)
		self.setFixed()
		# 点击退出按钮退出到主窗口
		self.Quit.clicked.connect(self.openMain)

		# 为 增加员工工号 添加事件
		self.addUserButton.clicked.connect(self.addUser)

		# 为 删除员工工号 添加事件
		self.deletedUserButton.clicked.connect(self.delUser)

		# 为 禁止员工登录  添加事件
		self.frobidUserButton.clicked.connect(self.forbidUser)

		# 为 修改员工 添加事件
		self.alertUserButton.clicked.connect(self.alertUser)

		# 为 点菜管理 添加事件
		self.orderManagerButton.clicked.connect(self.nothing)
		
 
	# 添加员工 
	def addUser(self):
		# QInputDialog.getText() 会返回一个元组
		# 第一项就是输入的值
		# 第二项是输入是否成功: 这个用于判断用户点击的是 ok 还是 cancle 
		account, res = QInputDialog.getText(self, '添加员工账号', '请输入添加的员工账号')
		# 判断点击的是 Ok 还是 取消
		if res:
			# 去掉空格
			account = account.strip()
			# 判断该用户是已经存在了
			if self.hasAccount(account):
				QMessageBox.warning(self,'添加员工','%s 用户已经存在，请重新操作' % account)
				return 

			# 选择的项，默认第一个
			types = ['USER','LEADER','COOKER']
			tp, res = QInputDialog.getItem(self, '用户类型', '请选择用户类型', types)
			# 当选择了 ok 
			if res:
				r = self.addNewUser(account, tp)
				if r:
					QMessageBox.information(self, '添加员工', '用户 %s 添加成功' % account )
				else:
					QMessageBox.information(self, '添加员工', '员工添加失败')

	# 删除员工
	def delUser(self):
		accouts = self.getAllAccount()
		account, res = QInputDialog.getItem(self, '删除员工', '请选择要删除的员工账号', accouts)
		if res:
			oc = QMessageBox.question(self, '删除员工', '是否要真的删除 %s 员工账号' % account, \
				QMessageBox.Ok|QMessageBox.Cancel )
			if oc == QMessageBox.Ok:
				self.dropUser(account)
				QMessageBox.warning(self, '删除员工', '员工删除成功')

	# 禁止员工登录
	def forbidUser(self):
		accouts = self.getAllAccount()
		account, res = QInputDialog.getItem(self, '禁止登录', '请选择要禁止登录的员工账号', accouts)
		if res:
			self.frobidUser(account)
			QMessageBox.warning(self, '禁止登录', '该用户已被禁止登录')

	# 修改员工密码
	def alertUser(self):
		# updatePass
		accouts = self.getAllAccount()
		account, res = QInputDialog.getItem(self, '修改员工密码', '请选择要修改的员工账号', accouts)
		if res :
			password, res = QInputDialog.getText(self, '修改员工密码', '请输入修改后的密码')
			if res :
				self.updatePass(account, password)
				QMessageBox.warning(self, '修改员工密码', '用户密码修改成功')