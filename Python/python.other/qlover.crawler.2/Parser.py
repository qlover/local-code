import sys
import urllib
import re
from bs4 import BeautifulSoup

class Parser():

	# 判断是否有词条
	# 1  	没有这个词条
	# 2  	没有其它词条
	# 3  	没有这个页面
	# 0		正常
	def hasEntry(self, cont):
		soup = BeautifulSoup(cont, "html.parser")
		# error
		error = soup.find('div', class_="errorBox")
		if error :
			return 3
		# main-content 
		mainContent = soup.find('div', class_="main-content")
		if mainContent :
			urls = mainContent.findAll('a', href=re.compile(r"^/item/"))
			if urls == []:
				return 2
		else:
			return 1
		return 0


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
		# 用 BS 对象将所有 href 属性以 /item/ 开头的 所有 a 标签
		# 返回值是一个列表
		links = bs.find('div','main-content').findAll('a',href=re.compile(r"^/item/"))
		# 如果该页面中没有一个图片地址就，返回失败
		if links == []:
			# print("get failed, please get again.")
			return []
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
		data['url'] = conn
		db = bs.find('dd', class_="lemmaWgt-lemmaTitle-title")
		if db is None: 	data['title'] = "NO_TITLE" # 没标题			
		else: 			data['title'] = db.find('h1').get_text()
		summary = bs.find('div', class_="lemma-summary") # 直接返回结果
		if summary is None: data['summary'] = "NO_SUMMARY"  # 没简介
		else: 				data['summary'] = summary.get_text()
		img = bs.select('.summary-pic img')
		if img == []: 	data['imgUrl'] = "NO_IMAGE"  # 没图片
		else: 			data['imgUrl'] = img[0].attrs['src']
		return data

	# 解析字符成 URL 编码
	def quote_(self, str):
		return urllib.parse.quote(str)