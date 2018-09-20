
import sys

from PyQt5.QtWidgets import QApplication

from window import Main, Manager, Cook, User, UserChoose


class Index(object):

	def __init__(self):
		super(Index, self).__init__()
		# 初始化主窗口
		self._Window = Main.Main()
		# self._Window = UserChoose.UserChoose()

	# 运行窗口
	def run(self):
		# 调用 Window 类给每个子类提供对外接口的打开窗口
		self._Window.open()

 


if __name__ == '__main__':
	app = QApplication(sys.argv)
	I = Index()
	I.run()
	sys.exit(app.exec_())



