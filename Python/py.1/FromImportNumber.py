#!/usr/bin/python3


# 只导入 number.py 中的 add 成员
from number import add

# 用该语句引入模块时，不需要用模块名. 成员
print( add(1, 2) ) #=>3
#print( sum(4, 4) ) # 报错，因为没有载入 sum 成员
