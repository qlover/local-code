#! usr/bin/python3

import sys # 引入 sys 模块
# 生成器
print("生成器")
def fibonacci(n): # 生成器函数 - 斐波那契
    a, b, counter = 0, 1, 0
    while True:
        if (counter > n): 
            return
        yield a
        a, b = b, a + b
        counter += 1
        
f = fibonacci(10) # f 是一个迭代器，由生成器返回生成

while True:
    try:
        print (next(f), end=",") # 不自动换行，并且最后一个元素是逗号
    except StopIteration :
        sys.exit()






