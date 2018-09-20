#!/usr/bin/python3

x = 10
while x > 0 :
	try:
		x = int( input("重新输入一个值:") )
		break
	except ValueError :
		print('输入有异常,需要在次输入。')


# try-else

try:
	x = int( input("再次重新输入一个值:") )
except ValueError :
	print("有异常")
else:
	print("无异常，正常")
finally:
	print("finally 被执行")


# raise

raise NameError('I am a error.');
"""f
以上返回：

Traceback (most recent call last):
  File "Unusual.py", line 26, in <module>
    raise NameError('I am a error.');
NameError: I am a error.

"""