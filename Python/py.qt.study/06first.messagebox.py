

import sys
from PyQt5.QtWidgets import QWidget, QMessageBox, QApplication


# QMessageBox提供两套接口来实现，
# 一种是static functions（静态方法调用），
# 另外一种 the property-base API（基于属性的API）。
# 直接调用静态方法是一种比较简单的途径，但是没有基于属性API的方式灵活。
# 在QT的官网上推荐使用the property-base API。

# 有一篇关于这个的文章,具体可以去看
# http://blog.csdn.net/zhulove86/article/details/52524735
class Example(QWidget):
	def __init__(self):
		super(Example, self).__init__()
		self.initUI()

	def initUI(self):
		
		self.setGeometry(200, 200, 300, 300)
		self.setWindowTitle('message box')
		self.show()

	# 这是一个抽象的方法,也就是在闭关窗口时会触发的事件函数
	# 有一个参数就是 event ,这个事件对象 
	def closeEvent(self, e):
		reply = QMessageBox.question(self, 'Message',"Are you sure to quit?",
				QMessageBox.Yes | QMessageBox.No, QMessageBox.No)

		# 如果点击确认
		if reply == QMessageBox.Yes:
			e.accept()  # 同意该事件发生
		else:
			e.ignore()  # 不同意该事件发生


if __name__ == '__main__':
	app = QApplication(sys.argv)
	ex = Example()
	sys.exit(app.exec_())


