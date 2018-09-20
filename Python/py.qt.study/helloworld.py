
import sys
from PyQt5.QtWidgets import *

class HelloWorld(QWidget):
	def __init__(self):
		super(HelloWorld, self).__init__()
		self.initUI()		

	def initUI(self):
		
		btn = QPushButton('Hello World', self)
		btn.resize(100, 50)
		btn.move(50, 50)
		btn.clicked.connect(self.hello)


		self.resize(200, 200)
		self.center()
		self.setWindowTitle('Hello World!')
		self.show()

	def center(self):
		qr = self.frameGeometry()
		cp = QDesktopWidget().availableGeometry().center()
		qr.moveCenter(cp)
		self.move(qr.topLeft())

	def hello(self):
		QMessageBox.warning(self, 'hello', 'Hello, World')


if __name__ == '__main__':
	app = QApplication(sys.argv)
	ex = HelloWorld()
	sys.exit(app.exec_())