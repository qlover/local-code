##
#
# txtUserName
# txtUserPwd
# method	post
# ./Login.aspx
import urllib
url = "http://61.157.243.100/Panto2014/NewPage/Login.aspx"

res = urllib.request.urlopen(url)

req = urllib.request.Request(url=url, method='POST')

if res.getcode() == 200:
	print(res.read())


