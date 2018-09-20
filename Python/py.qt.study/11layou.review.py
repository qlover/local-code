
import sys
from PyQt5.QtWidgets import QDesktopWidget
from PyQt5.QtWidgets import (QWidget, QLabel, QLineEdit, 
    QTextEdit, QGridLayout, QApplication)


class Example(QWidget):
	def __init__(self):
		super(Example, self).__init__()
		self.initUI()		

	def initUI(self):

		# 创建三个标签
		title = QLabel('title')
		author = QLabel('author')
		review = QLabel('review')
		# 创建三个文本框
		te = QLineEdit()
		ae = QLineEdit()
		re = QTextEdit() # 多选用 text 

		# 创建一个网格
		grid = QGridLayout()
		# 设置小部件之间的间隔
		grid.setSpacing(10)

		# 添加创建的元素
		
		# 添加一个小部件
		# 6个参数表示控件名，行，列，占用行数，占用列数，对齐方式
		grid.addWidget(title, 1, 0)
		grid.addWidget(te, 1, 1)

		grid.addWidget(author, 2, 0)
		grid.addWidget(ae, 2, 1)

		grid.addWidget(review, 3, 0)
		grid.addWidget(re, 3, 1, 4, 1)

		# 最后将层放上窗口
		self.setLayout(grid)
		self.resize(400, 400)
		self.center()
		self.setWindowTitle('Box layout')
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




