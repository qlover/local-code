##!D:\Environment\Python3\python


# 定义一个空列表，准备存从文件中读取出来的名字
temp = []
# 打开 name.txt 文件返回文件中的句柄
# 句柄就相当于文件中的指针
file = open("name.txt","r")
# 将文件中以换行作为分隔
# 将每一个分隔的内容添加到 temp 列表中
for line in file.readlines():	#file.readlines()逐行读取txt文件的内容
	temp1 = line.strip('\n')	#去除每行末尾的换行符"\n"
	temp.append(temp1)		#将处理后的内容temp1添加到列表temp中
myName = '赵政鑫'
# 循环找到自己的名字
for x in temp:
	if x == myName:
		print(x)
		break
file.close()		#关闭文件

