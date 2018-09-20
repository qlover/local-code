

class URLer(object):
	def __init__(self):
		# 准备爬取的集合
		self.readys = set()
		# 已经爬取的集合
		self.alreadys = set()

	# 添加一个准备爬取的地址
	def addReadyUrl(self, url):
		# 如果传入的这个 url 不在准备爬取或者不在已经爬取的集合中
		# 则说明该地址还没有爬取，则添加到准备爬取的列表中
		if url not in self.readys and url not in self.alreadys:
			self.readys.add(url)

	# 将已经爬取的地址添加到已经爬取的地址集合中
	def addReadyUrls(self, urls):
		for url in urls:
			self.readys.add(url)

	# 判断是否还有需要爬取的地址
	def hasReadyUrl(self):
		# 如果这个集合的长度不等于 0 则说明还有
		return len(self.readys) != 0

	# 得到准备爬取的集合中的最后一个地址
	def getReadyUrl(self):
		# 用 pop() 方法得到集合中的最后一个地址
		url = self.readys.pop()
		# 将将这个地址添加到已经爬取的地址集合中
		self.alreadys.add(url)
		return url
