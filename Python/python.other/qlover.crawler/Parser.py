import sys
import urllib
import re
from bs4 import BeautifulSoup

class Parser():
	# 解析
	def parse(self, conn, cont):
		# 从 cont 中得到一个 BeautifulSoup 对象
		soup = BeautifulSoup(cont, "html.parser")
		# 解析出所有的地址
		urls = self.parseUrl(conn, soup)
		# 解析出所有需要的数据
		data = self.parseData(conn, soup)
		# 最后以列表的形式将这这两个数据返回
		return urls, data

	# 解析 URL
	def parseUrl(self, conn, bs ):
		# 准备一个空列表存在返回的待返回的图片地址
		urls = []

		# 用 BS 对象将 mainc-content div 下的所有 href 属性以 /item/ 开头的 所有 a 标签
		# 返回值是一个列表,这个值是带
		
		# r"^/item/[^\=^\&^\?.]+")
		bl = bs.find('div', class_="main-content")
		if bl is None:
			return 
		links = bl.findAll('a', href=re.compile(r"^/item/[^\?.]"))

		if len(links) == 0:
			print(">> get failed, please get again.")
			return None

		# print('----------------遍历 links--------------')
		# 循环用 bs 返回出来的所有 a 标签
		for link in links:
			# 将每一个 A 标签的 href 值取出来
			url = link['href']
			# 然后用 urljoin() 方法将 url 添加到 conn 中，形成一个完整的 url
			fullUrl = urllib.parse.urljoin(conn, url)
			# 向待返回的图片地址列表添加该完整的地址
			urls.append(fullUrl)

		# 返回该列表
		return urls

	def parseData(self, conn, bs):
		data = {}
		# 字典中 url 键的值为传来的图片地址
		data['url'] = conn
		# 取得所有的标题简单
		
		data['title'] = bs.find('dd', class_="lemmaWgt-lemmaTitle-title").find('h1').get_text()

		# 这里需要考虑个问题就，在分析词条页面的时候
		# 有的页面是没有简介和标题图片的，所以需要作个处理
		summary = bs.find('div', class_="lemma-summary") # 直接返回结果
		# 如果没有简介则打印下面这句话
		if summary is None:
			tip = ">>> There is no introduction to this page";print(tip)
			data['summary'] = tip
		else:
			data['summary'] = summary.get_text()
		# 取得所有 .summary-pic 标签下的 img 标签
		img = bs.select('.summary-pic img')  # 返回一个列表
		# 同样，如果没有图片，则打印下面这句话
		if len(img) == 0:
			tip = ">>> There is no image to this page";print(tip)
			data['imgUrl'] = tip
		# 有就将这个图片的地址取得
		else:
			data['imgUrl'] = img[0].attrs['src']
		# 然后将字典返回
		return data

	# 解析字符成 URL 编码
	def quote_(self, str):
		return urllib.parse.quote(str)