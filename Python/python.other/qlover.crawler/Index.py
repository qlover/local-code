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


	def craw(self, times=10):
		print("ready craw>> %s"% self.root);
		self.URL.addReadyUrl(self.root)
		count = 1
		while self.URL.hasReadyUrl():
			try:
				url = self.URL.getReadyUrl()
				print("craw %d>> %s"%(count, url))
				html = self.load.down(url)
				urls,data = self.Parse.parse(url, html)
				if not  urls:
					print(">> The page entry is empty")
					continue
				self.URL.addReadyUrls(urls)				
				self.lists.append(data)
				if count == times:
					break
				count += 1
			except Exception as e:
				print('>> craw failed.')
		self.Out.revecie(self.lists).html("info.html")

if __name__ == '__main__':
	try:
		arg = sys.argv[1:]
		keyword = arg[0]
		times = arg[1]
	except IndexError as ie:
		keyword = input('请输入关键字: ').strip()
		times = input('请输入条数: ').strip()
		if keyword == '':
			keyword = 'python'
		if times == '':
			times = 5
		elif times.isnumeric():
			times = int(times)
		else:
			print('>> argument must be int')
			print("your enter", times)
			sys.exit(0)
	except Exception as e:
		print("revecie argument failed")
		print("py python.py [keyword='python'] [times=5]")


	start = datetime.datetime.now()
	print("now time>> ",time.strftime("%Y-%m-%d %H:%M:%S", time.localtime()))	
	Spider = Exec(keyword)
	Spider.craw(times)
	over = datetime.datetime.now()
	print("over time>> ",time.strftime("%Y-%m-%d %H:%M:%S", time.localtime()))
	print("total seconds>> ",(over-start).seconds,'s')


#
# infomation
# 张震鹏
# 
#
#
