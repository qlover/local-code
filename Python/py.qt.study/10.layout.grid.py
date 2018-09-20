

import sys
from PyQt5.QtWidgets import QDesktopWidget
from PyQt5.QtWidgets import (QWidget, QGridLayout, 
    QPushButton, QApplication)
# 这种布局比较常用
# 这个布局将窗口分成列和行，也就是一种类似网格的布局
# 
# 本例将会出个计算器的布局

class Example(QWidget):
	def __init__(self):
		super(Example, self).__init__()
		self.initUI()		

	def initUI(self):
		# 创建一个网格系统
		grid = QGridLayout()
		# 将网格应用与整个窗口中
		self.setLayout(grid)

		# 创建一个计算器
		self.calc(grid)



		self.resize(400, 400)
		self.center()
		self.setWindowTitle('Box layout')
		self.show()

	def calc(self, layout):
		names = ['C','CE','','Close',
				'7','8','9','/',
				'4','5','6','x',
				'1','2','3','-',
				'0','.','+','=']
		# 为上面的元素生成每个元素的坐标
		positions = [(i,j) for i in range(5) for j in range(4)]
		
		# 循环整个列表
		for p,n in zip(positions, names):
			# 将每一个元素生成一个按钮
			btn = QPushButton(n)
			# 并将生成的按钮赋值添加到 grid 层中
			layout.addWidget(btn, *p)


	def center(self):
		qr = self.frameGeometry()
		cp = QDesktopWidget().availableGeometry().center()
		qr.moveCenter(cp)
		self.move(qr.topLeft())


if __name__ == '__main__':
	app = QApplication(sys.argv)
	ex = Example()
	sys.exit(app.exec_())

