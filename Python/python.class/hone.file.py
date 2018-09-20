
# 1.编写一个程序实现：判断两个文件那些行不一样，输出不一样的行。
# 
# file1 文件1
# file2 文件2
def showNotLine(file1, file2):
	# open(file1,'r')  只读形式打开一个文件句柄
	# readlines()  		将文件里面的内容全部以序列的形式返回出来
	# 					但是，这个并不是列表，元组，只是一个序列
	# enumerate() 		带一个参数，这个参数可以是任何序列
	# 					将参数以索引对值的格式映射成一个序列
	# list() 			将参数转换成列表
	# 
	# f1 的格式如下：
	# 	[('0',''),('1',''),('2','')] 前面表示行号，后面是这一行的内容
	f1 = list(enumerate(open(file1,'r').readlines()))
	f2 = list(enumerate(open(file2,'r').readlines()))
	# 得到两个文件最小长度
	# 因为只比较到最小长度
	Len = min(len(f1),len(f2))
	for x in range(0, Len):
		# 从行号 0 开始，逐行比较内容
		# 不相等就打印出来
		if f1[x][1] != f2[x][1]:
			# strip()   去掉第行末尾的换行，默认参数就是\n
			print("\n%s>>%d: %s"% (file1, x, f1[x][1].strip('\n')) )
			print("%s>>%d: %s"% (file2, x, f2[x][1].strip('\n')) )
# showNotLine('hone1.txt','hone2.txt')

# 3.编写一个程序，实现输入两个行号，显示两个行号之间内容。
# 
# file 	文件
# beg 	起始位置
# end 	结束位置 
def showLine(file, beg, end):
	# 如果起始位置大于结束位置，交换
	if beg > end:
		beg, end = end, beg
	# 和上面一样的
	f1 = list(enumerate(open(file,'r').readlines()))
	# 如果结束位置比整个文件行数还大
	if end > len(f1):
		# 则让 end 等于整个文件行数
		end = len(f1)
	for x in range(beg, end):
		print(">>%d: %s" %(x+1, f1[x][1].strip('\n')))

# showLine('hone1.txt',0,10)
