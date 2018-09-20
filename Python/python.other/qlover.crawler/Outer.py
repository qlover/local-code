

class Outer():
	# 准备一个窗口装接收来的图片地址列表
	buffs = []
	def __init__(self):
		self.ret = None


	# 接收图片地址
	def revecie(self, buffs):
		for buff in buffs:
			# 将传过来的 buffs 的值映射出来放到
			tmpList = buff.values()
			# 因为要插入到数据库中，所以要将里面的数据用 元组 存放
			self.buffs.append(tuple(tmpList))
		return self


	# 直接写入到 html 文件中
	def html(self, file):
		print('>> writing file', file)
		fs = open(file, 'w', encoding='utf-8')
		res = "<html><meta charset='utf-8' /><link rel='stylesheet' href='default.css'><body>"
		res += "<table><tr><th style='width:20%'>页面地址</th><th style='width:10%'>标题</th><th style='width:50%'>简介</th><th>图片</th></tr>"
		for buff in self.buffs:
			res += "<tr><td><a target='_blank' href='" + buff[0] + "''>"+ buff[0] +"</a>"
			res += "</td><td>"  + buff[1]
			res += "</td><td>" + buff[2]
			res += "</td><td><img src='" + buff[3]
			res += "' /></td></tr>"

		res += "</table></body></html>"
		fs.write(res)
		fs.close()
		print('>> writing file complete', file)
		return self

