import sys
from PyQt5.QtWidgets import QWidget, QDesktopWidget, QApplication
# QDesktopWidget 该 类提供用户的桌面的信息，包括尺寸
class Example(QWidget):
	def __init__(self):
		super(Example, self).__init__()
		self.initUI()

	def initUI(self):
		
		self.resize(300, 400)
		self.zx()
		self.setWindowTitle('message box')
		self.show()


	def zx(self):
		# 得到一个矩形的框框
		qr = self.frameGeometry()
		# availableGeometry() 得到屏幕分辨率
		# center() 得到中心
		cp = QDesktopWidget().availableGeometry().center()
		# 将矩形设置在中心
		qr.moveCenter(cp)
		# 将窗口从左上角移到中心的左上角
		self.move(qr.topLeft())

if __name__ == '__main__':
	app = QApplication(sys.argv)
	ex = Example()
	sys.exit(app.exec_())

