import sys
from PyQt5.QtWidgets import QWidget, QPushButton, QApplication
from PyQt5.QtCore import QCoreApplication

class Example(QWidget):
	def __init__(self):
		super(Example, self).__init__()
		self.initUI()

	def initUI(self):
		qbtn = QPushButton('退出', self)
		# 为 qbtn 添加一个事件
		# 在 PyQt 中事件处理系统是建立在信号与槽机制，
		# 如果我们点击按钮，发出的信号就会发出。
		# 该插槽可以是qt槽或任何可调用的 Python 的 qcoreapplication 
		# 包含主事件循环处理和调度所有的事件的instance()方法给我们当前的实例
		# 
		# clicked 是点击事件
		# 将点击事件发送到参数一中的接收方, 也可以是用户自己定义的一个方法
		# 
		qbtn.clicked.connect(QCoreApplication.instance().quit)
		qbtn.setGeometry(40, 40, 50, 50)

		self.setGeometry(200, 200, 300, 300)
		self.setWindowTitle('Quit Button')
		self.show()

if __name__ == '__main__':
	app = QApplication(sys.argv)
	ex = Example()
	sys.exit(app.exec_())