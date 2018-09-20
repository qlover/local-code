
# http://image.baidu.com/search/acjson?tn=resultjson_com&ipn=rj&ct=201326592&is=&fp=result&queryWord=龙珠超&cl=2&lm=-1&ie=utf-8&oe=utf-8&adpicid=&st=&z=&ic=&word=龙珠超&s=&se=&tab=&width=&height=&face=&istype=&qc=&nc=1&fr=&pn=30&rn=30&gsm=1e&1512969526172=

# http://image.baidu.com/search/acjson?tn=resultjson_com&ipn=rj&ct=201326592&is=&fp=result&queryWord=龙珠超&cl=2&lm=-1&ie=utf-8&oe=utf-8&adpicid=&st=&z=&ic=&word=龙珠超&s=&se=&tab=&width=&height=&face=&istype=&qc=&nc=1&fr=&pn=60&rn=30&gsm=3c&1512969526303=

# 上面两个地址不同的是 pn 参数
# 最后 的参数可以不用管经过实验是时间戳
#

from urllib import request
import urllib
import json
import re
import sys
import os

# pn 参数表示页数偏移量是 30 ，也就是每次访问是 30 递增
def request_(keyword, pn=30):
	keyword = urllib.parse.quote(keyword)
	url = 'http://image.baidu.com/search/acjson?tn=resultjson_com&ipn=rj&ct=201326592&is=&fp=result&queryWord=%s&cl=2&lm=-1&ie=utf-8&oe=utf-8&adpicid=&st=&z=&ic=&word=%s&s=&se=&tab=&width=&height=&face=&istype=&qc=&nc=1&fr=&pn=%s&rn=30' % (keyword, keyword, pn)
	headers = {
		'User-Agent' : 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36',
	}
	req = request.Request(url=url, headers=headers, method='GET')
	
	return req

# 下载页面内容
def download(req):
	res = request.urlopen(req)
	content = res.read().decode('utf-8')
	return content

# 解析返回内容
# 也就是在 json 中解析出所有的有效图片路径
def parse_json(content):
	ct = json.loads(content)
	datas = ct['data']
	# 因为返回的 JSON 中最后一个 data 没有值
	last = datas.pop()
	imgs = []
	# 过滤掉没有的图片地址信息
	for data in datas:
		try:
			imgs.append(data['replaceUrl'][1]['ObjURL'])
		except Exception as e:
			# print('not image.')
			pass
		# imgs.append(data['objURL'])
	return imgs

# 将一个图片下载到本地
def down(imgurl, filename=''):
	print("开始下载:",imgurl)

	#未能正确获得网页 就进行异常处理
	try:
		res = urllib.request.urlopen(imgurl)

		if str(res.status)!='200':
			# print('未下载成功：',imgurl)
			return 0
	except Exception as e:
		# print('未下载成功：',imgurl)
		return 0

	f = open(filename,'wb')
	f.write(res.read())
	f.close()
	return 1  # print('下载完成\n')


# 将得到的所有图片下载到指定路径本地
def out(imgurls, imgpath="img/", picname=''):
	# 判断是否有这个路径，没有则创建
	if not os.path.isdir(imgpath):
		os.mkdir(imgpath)

	index = 1
	for img in imgurls:
		imgtype = '.jpg'
		status = down(img, imgpath + picname + str(index) + imgtype )
		if status :
			print('下载成功')
			index += 1
		else:
			print('下载失败', img)


# 主函数
def main(times=5):
	imgurls = []
	pn = 30
	# 循环收集图片地址
	while times:
		req = request_('龙珠超', pn)
		cont = download(req)
		res = parse_json(cont)
		imgurls.extend(res)
		pn += 30
		times -= 1
	out(imgurls=imgurls, picname='pic')


if __name__ == '__main__':
	main()
