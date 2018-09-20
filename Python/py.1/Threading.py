#!D:\Environment\Python3.6\python
import threading, time
# 打印数字函数
def printNumbner(name):
	for x in range(1, 5):
		print("线程%s：%d" % (name,x ))
# 自定义的线程类，但继承于 Thread
class myThread( threading.Thread ):
	
	def __init__(self, name):
		threading.Thread.__init__(self)
		self.name = name
	def run(self):
		print(self.name + "：线程开始")
		printNumbner( self.name )
		print(self.name + "：线程结束")
	
try:
	thread1 = myThread('Thread-1')
	thread2 = myThread('Thread-2')

	# 开始线程
	thread1.start()
	thread2.start()
	thread1.join()
	thread2.join()
	print("主线程结束")
	pass
except Exception as e:
	print(e)	

