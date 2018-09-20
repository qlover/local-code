
from PyQt5.QtWidgets import QMainWindow, QMessageBox

from view.AlertView import Ui_AlertWindow

from window.Window import Window

from window import Main


class Alert(QMainWindow, Ui_AlertWindow, Window):
	def __init__(self):
		super(Alert, self).__init__()
		self.setupUi(self)
		self.setFixed()
		# 为 AlertButton 添加事件响应函数
		self.AlertButton.clicked.connect(self._check)



	# 点击 修改 时触发的事件函数
	def _check(self):
		account = self.user_text.text()
		# 1. 判断三个文本框不能为空
		# 得到三个密码文本框 
		password = self.pass_text.text()
		password_alert = self.pass_alert_text.text()
		password_alert_again = self.pass_alert_again_text.text()

		# 清空三个文本提示
		self.pass_tip.setText('')
		self.pass_alert_tip.setText('')
		self.pass_alert_again_tip.setText('')

		# 判断三个密码不能为空
		if password == '':
			self.pass_tip.setText('密码不能为空')
			return 
		elif password_alert == '':
			self.pass_alert_tip.setText('密码不能为空')
			return
		elif password_alert_again == '':
			self.pass_alert_again_tip.setText('密码不能为空')
			return 
		else:

			# 密码长度不能小于 6 位
			if len(password_alert) < 6 :
				self.pass_alert_tip.setText('密码不能小于6位')
				return 
			elif len(password_alert_again) < 6 :
				self.pass_alert_again_tip.setText('密码不能小于6位')
				return 
			# 然后判断密码是否正确
			else:
				# 先判断用户密码是否正确
				if password != self.getPassByAccount(account):
					self.pass_tip.setText('密码不正确')
					return 

				# 判断最后两个密码是否一样
				if password_alert_again != password_alert :
					self.pass_alert_again_tip.setText('两次密码不一样')
					return 
				else:
					result = self.updatePass(account, password_alert_again)
					if result :
						QMessageBox.warning(self, '修改成功', '用户密码修改成功')
					else:
						QMessageBox.warning(self, '修改失败', '用户密码修改失败,请重新登录')
					# 将打开后的主窗口文本框设置该用户的账号
					self.openMain().user_text.setText(account)


	# 重写父亲 open 
	def open(self):
		# 判断，如果当前这个窗口是没显示的就执行
		if not self.isVisible():
			# 设置当前标题栏
			self.setWindowTitle(self.WINDOW_NOW['alert'])

			# 将文本框初始为当前窗口用户的名字
			self.user_text.setText(self.WINDOW_NOW['alert'])
		
			# 绑定点击事件, self.openMain 继承 Window 
			self.ReturnButton.clicked.connect(self.openMain)
			
			# 打开当前窗口
			self.show()
