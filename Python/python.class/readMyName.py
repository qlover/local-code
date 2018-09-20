#!D:\Environment\Python3\python

# 只读打开文件得到文件句柄
fs = open('name.txt', 'r')
# 读取文件所有字节，并以 \n 返回为列表
names = fs.read().splitlines()
# 遍历列表
for x in names:
	if x == '覃仁杰':
		print(x)
		break
# 关闭文件句柄
fs.close()


