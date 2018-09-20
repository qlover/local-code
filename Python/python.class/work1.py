import os

# 1. 打开 e:/name.txt 文件，读取它的全部内容，并显示出来

fs = open('d:/name.txt','r')
print(fs.read())
fs.close()

# 2. 打印出前 10 行
fs = open('d:/name.txt','r')
c=10
print('-------')
while c:
	print(fs.readline().strip())
	c -= 1
fs.close()

# 3. 删除一个文件
fs = os.remove('d:/name.txt')
