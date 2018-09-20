import sys
import time
import datetime
import URLer
import Loader
import Parser
import Outer

class Exec(object):
	lists = []
	_url = "http://baike.baidu.com/item/"
	def __init__(self, keyword):
		self.URL = URLer.URLer()
		self.load = Loader.Loader()
		self.Parse = Parser.Parser()
		keyword =  self.Parse.quote_(keyword)
		self.Out = Outer.Outer()
		self.root = self._url + keyword

	# 判断是否有该词条
	def check(self):
		html = self.load.down(self.root)
		nores = self.Parse.hasEntry(html)		
		if nores == 3: print('>> has no page'); sys.exit(0)
		elif nores == 2: print('>> has no other entry'); sys.exit(0)
		elif nores == 1: print('>> has entry but'); sys.exit(0)

	def craw(self, times=10):
		# 开始爬取
		print("ready craw>> %s"% self.root);
		self.URL.addReadyUrl(self.root)
		count = 1
		while self.URL.hasReadyUrl():
			try:
				url = self.URL.getReadyUrl()
				print("craw %d>> %s"%(count, url))
				html = self.load.down(url)
				urls,data = self.Parse.parse(url, html)
				self.URL.addReadyUrls(urls)				
				self.lists.append(data)
				if count == times:
					break
				count += 1
			except Exception as e:
				print('>> craw failed.')
				# print(e)
		self.Out.revecie(self.lists).html("info.html")

if __name__ == '__main__':
	keyword,times = '',''
	# 过滤用户输入
	try:
		arg = sys.argv[1:]
		keyword, times = arg[0], int(arg[1])
	except 	IndexError as ie:
		keyword = input('请输入关键字: ')
		times = int(input('请输入条数: '))
	except ValueError as ve:
		print('参数次数不能是非整数')
		sys.exit(0)
	if keyword == '': keyword = 'python'
	elif times == '': times = 5
	Spider = Exec(keyword)
	Spider.check()

	start = datetime.datetime.now()
	print("now time>> ",time.strftime("%Y-%m-%d %H:%M:%S", time.localtime()))	
	Spider.craw(times)
	over = datetime.datetime.now()
	print("over time>> ",time.strftime("%Y-%m-%d %H:%M:%S", time.localtime()))
	print("total seconds>> ",(over-start).seconds,'s')


