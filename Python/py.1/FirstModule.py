#! usr/bin/python3


import sys

print('命令行参数如下:')
for i in sys.argv:
	print(i)

print('\n\nPython 路径为：', sys.path, '\n')


# import sys 引入 python 标准库中的 sys.py 模块；这是引入某一模块的方法。
# sys.argv 是一个包含命令行参数的列表。
# sys.path 包含了一个 Python 解释器自动查找所需模块的路径的列表

# 下面用来演示 import 语句使用

import number
print( number.add(2,3) ) #=>5
print( number.sum(2,3,4,5) ) #=>14
print( number.sum(1,2,3,4,5) ) #=>15






