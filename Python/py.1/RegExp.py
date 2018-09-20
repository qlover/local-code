#!/usr/bin/python3

import re # 引入正则模块
import math
import random
# 正则表达式
# 串以 r 开头
reg = r'[a-z]+'
s = "one two three four"
print( re.findall(reg, s) )

#随机数
i = 0
while i < 10 :
	print( random.random() )
	i+=1

i = 0
while i < 100 :
	# [0, 9)
	print( random.randrange(10), end="," )
	i+=1






