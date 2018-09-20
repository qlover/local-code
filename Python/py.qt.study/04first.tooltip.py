
import sys
from PyQt5.QtWidgets import (QWidget, QToolTip, 
    QPushButton, QApplication)
from PyQt5.QtGui import QFont 


class Example(QWidget):
	def __init__(self):
		super(Example, self).__init__()
		self.initUI()

	def initUI(self):
		# 这个静态方法放置这个提示的字体和字体大小，这里为 10px
		QToolTip.setFont(QFont('SansSerif', 10))
		# 用该方法创建一个提示,就类似于 a 标签的 title 属性
		# 并且这个提示可以用 html 格式
		self.setToolTip('This is a <b>QWidget</b> widget')

		# 创建一个按钮小部件
		# 参数一，按钮显示出来的文字
		# 参数二，这个参数表示该部件是基于谁的
		btn = QPushButton('点击我', self)
		btn.setToolTip('I am a button')

		# 改变这个按钮在窗口中的大小和位置
		btn.resize(60,60)
		btn.move(100,100)

		self.setGeometry(300, 300, 300, 200)
		self.setWindowTitle('Tooltips')   
		self.show()

if __name__ == '__main__':
	app = QApplication(sys.argv)
	ex = Example()
	sys.exit(app.exec_())