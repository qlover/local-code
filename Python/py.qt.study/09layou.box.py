

import sys
from PyQt5.QtWidgets import QDesktopWidget

from PyQt5.QtWidgets import (QWidget, QPushButton, 
    QHBoxLayout, QVBoxLayout, QApplication)


# 用一个 box 层装两个按钮
class Example(QWidget):
	def __init__(self):
		super(Example, self).__init__()
		self.initUI()		

	def initUI(self):
		# 先报建两个按钮
		okBtn = QPushButton('确认')
		ccBtn = QPushButton('取消')

		# 创建一个水平 box 
		hbox = QHBoxLayout()
		# 添加一个拉伸因子
		hbox.addStretch(1)
		# 向这个 box 添加这两个按钮 
		hbox.addWidget(okBtn)
		hbox.addWidget(ccBtn)

		# 创建一个垂直的 box 
		vbox = QVBoxLayout()
		vbox.addStretch(1)
		# 向垂直的 box 添加水平的 box
		# 水平布局被放置在垂直布局中
		# 垂直框中的拉伸系数将水平框与按钮一起推到窗口底部。
		vbox.addLayout(hbox)

		# 最后将结合的层放在窗口中
		self.setLayout(vbox)

		# 这样两个按钮就会在窗口的左下角排列出现
		self.resize(200, 200)
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
