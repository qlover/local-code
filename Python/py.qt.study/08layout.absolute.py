
import sys
from PyQt5.QtWidgets import QDesktopWidget
from PyQt5.QtWidgets import QWidget, QLabel, QApplication

class Example(QWidget):
	def __init__(self):
		super(Example, self).__init__()
		self.initUI()		

	def initUI(self):
		# 创建一个层
		lbl1 = QLabel('one layout', self)
		lbl1.move(15, 10)
		lbl2 = QLabel('two layout', self)
		lbl2.move(20, 20)
		lbl3 = QLabel('one layout', self)
		lbl3.move(30, 30)
		self.resize(200, 200)
		self.center()
		self.setWindowTitle('Absolute')
		self.show()

	def center(self):
		qr = self.frameGeometry()
		cp = QDesktopWidget().availableGeometry().center()
		qr.moveCenter(cp)
		self.move(qr.topLeft())


if __name__ == '__main__':
	app = QApplication(sys.argv)
	ex = Example()
	sys.exit(app.exec_())