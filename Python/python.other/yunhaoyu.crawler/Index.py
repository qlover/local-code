import sys
import re
import os
import time
import urllib.request
from PyQt5 import QtWidgets
from PyQt5.QtWidgets import QApplication, QWidget, QLineEdit, QPushButton, QLabel, QTextEdit
# from PyQt5.QtGui import QIcon
from PyQt5.QtCore import QCoreApplication

class Base():
	root_url = ""
	html = ""

	def __init__(self, url):
		self.root_url = url

	# 请求地址，返回页面内容 
	def request_(self):
		headers = {
		    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) ''Chrome/51.0.2704.63 Safari/537.36'
		}
		req = urllib.request.Request(url= self.root_url)
		res = urllib.request.urlopen(req)
		html = res.read()  #.decode('utf-8'))
		self.html = html
		return self


	# 得到图片地址的文件名
	def getFileName(self, path):
		cfwz = "img\\"
		if not os.path.isdir(cfwz):
			os.mkdir(cfwz)
		pos = path.rindex('/')
		t = os.path.join(cfwz, path[pos + 1:])
		return t

	# 下载图片地址
	def download(self):
		data = str(self.html)
		# 匹配出所有的图片路径
		links = re.findall(r'((http|https):[^s]*?(jpg|png|gif))', data)
		# 讲下
		index = 1
		# 得到全局下的 EX 变量
		g_EX = globals()['EX']
		# link 匹配的内容 
		# head 地址的头
		# last 地址的尾部
		for link, head, last in links:
			try :
				urllib.request.urlretrieve(link, self.getFileName(link))
				g_EX.setTip('yes\n')
				index += 1
				# print("下载成功")
			except Exception as e:
				g_EX.setTip('no\n')
		g_EX.setTip("一共下载 %d 张到本地" % index)

class Window(QWidget):
	def __init__(self):
		super().__init__()
		self.initUI()

	def initUI(self):
		# 设置窗口位置与大小
		self.setGeometry(120, 150, 500, 280) # 设置窗口的 x 坐标,y 坐标， 长，宽
		self.setWindowTitle('图片下载窗口')
		# 阻止窗口改变大小
		self.setFixedSize(self.width(), self.height())
		# self.setWindowIcon(QIcon('web.png'))
		# 创建一个标签
		self.urlLabel = QLabel("下载地址：", self)
		self.urlLabel.setGeometry(100,50, 80, 50)  # 设置控件的 x 坐标,y 坐标， 长，宽
		# 创建输入地址的文本框
		self.urlText =  QLineEdit(self)
		self.urlText.setGeometry(150,50, 250, 30)
		self.urlText.setPlaceholderText('请输入地址')
		# 创建开始按钮
		self.okButton = QPushButton('开始', self)
		self.okButton.setGeometry(40, 100, 70, 50)
		# 创建结束按钮 
		self.overButton = QPushButton('结束', self)
		self.overButton.setGeometry(200,100, 70, 50)
		# 添加文本提示区域
		self.tip = QTextEdit('',self)
		self.tip.setGeometry(50, 180, 450, 80)
		# 为开始添加事件
		self.okButton.clicked.connect(self.ok)
		self.overButton.clicked.connect(self.quit_)
		self.show()

	# 开始爬取
	def ok(self):
		url = self.urlText.text()
		if url == '':
			self.urlText.setPlaceholderText("输入的地址不能为空")
			return
		else:
			# 'https://www.douban.com/'
			B = Base(url)
			B.request_().download()
		return 

	# 关闭窗口并退出
	def quit_(self):
		QCoreApplication.instance().quit()
		sys.exit(0)

	# 设置提示框的文本
	def setTip(self, text):
		strtext = self.tip.toPlainText()
		tipstr = strtext + text
		self.tip.setPlainText(tipstr)

if __name__ == '__main__':
	app = QApplication(sys.argv)
	EX = Window()
	sys.exit(app.exec_())





