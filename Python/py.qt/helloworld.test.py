import sys
from PyQt5.QtWidgets import QApplication, QMainWindow, QMessageBox
from helloworld import Ui_Form

class MyMainWindow(QMainWindow, Ui_Form):
	"""docstring for MyMainWindow"""
	def __init__(self):
		super(MyMainWindow, self).__init__()
		self.setupUi(self)
		self.hello_btn.clicked.connect(self.hello)

	def hello(self):
		QMessageBox.warning(self, 'hello', 'Hello, World')


if __name__ == "__main__":
	app = QApplication(sys.argv)
	myWin = MyMainWindow()
	myWin.show()
	sys.exit(app.exec_())
		
