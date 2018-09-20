#!D:\Environment\Python3.6\python

import _thread, time


# 为线程定义一个函数
def printTime( threadName, delay):
	count = 0
	while count < 5:
		time.sleep(delay)
		count += 1
		print("%s:%s" % 
			( threadName, time.ctime( time.time() ) ) 
		)

# 创建两个线程
try:
	_thread.start_new_thread( printTime, ("Thread-1", 2,)) # 延迟3秒
	_thread.start_new_thread( printTime, ("Thread-2", 4,)) 
except Exception as e:
	print("-----------启动线程失败")
	raise e
# 循环执行本模块
while 1: pass ;