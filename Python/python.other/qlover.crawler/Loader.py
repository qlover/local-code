
# 从 urllib 导入 request 请求模块
from urllib import request

class Loader():

	def down(self, url):
		# 得到一个请求
		res = request.urlopen(url)
		# 如果请求的状态码 不等于 200
		if res.getcode() != 200:
			return # 直接退出
		else:
			return res.read().decode("utf8")  # 返回该请求的内容

