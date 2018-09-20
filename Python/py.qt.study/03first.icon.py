
import sys
from PyQt5.QtWidgets import QApplication, QWidget
from PyQt5.QtGui import QIcon


class Example(QWidget):

	def __init__(self):
		super().__init__()

		self.initUI()

	# 创建 GUI 委托给了 initUI() 这个方法
	def initUI(self):
		# 下面的三个方法都继承于 QWidget 
		
		# 这个方法是集合了 resize() 和 move() 两个方法
		# 前两个参数 resize 后两个参数 move
		self.setGeometry(300, 300, 300, 220)
		self.setWindowTitle('set Icon')
		# 标题栏显示的图标
		# 因为图标需要一个 QIcon 对象，所以要创建一个该对象，其它构造则是图片路径
		# self.setWindowIcon(QIcon('web.png'))  
		self.show()

if __name__ == '__main__':
	app = QApplication(sys.argv)
	ex = Example()
	sys.exit(app.exec_())




