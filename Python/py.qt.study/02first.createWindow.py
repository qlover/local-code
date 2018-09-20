import sys
# 窗口中控件位于 QtWidgets 这个模块中
from PyQt5.QtWidgets import QApplication, QWidget

if __name__ == '__main__':

	# 创建一个 QApplication
	app = QApplication(sys.argv)
	# 在内存中创建出一个窗口
	w = QWidget()
	# 改变窗口大小
	w.resize(300, 200)
	# 移动窗口位置
	w.move(500, 100)
	# 设置窗口标题栏内容
	w.setWindowTitle('Hello World')
	# 将内存中的这个窗口显示出来
	# close() 则是关闭
	w.show()

	# 从这里就不难看出创建窗口其实是可以封装的

	# 最后执行这个应用程序
	sys.exit(app.exec_())

