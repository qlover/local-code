#! usr/bin/python 




# 将列表当做堆栈使用
stack = [3, 4, 7, 8]

print("初始化：", stack ) #=>[3, 4, 7, 8]
# 插入到顶部
stack.append(10)
print("append(10)：", stack ) #=>[3, 4, 7, 8, 10]
# 释放顶部堆栈
print("top value：", stack.pop() )



# 将列表当作队列使用
from collections import deque
queue = deque(['Qlover','Home','Arry'])
queue.append('Bob')
print(queue) #=> ['Qlover','Home','Arry', 'Bob']
print( queue.popleft() ) #=> 'Qlover'
print( queue ) #=>['Home','Arry', 'Bob']



# 列表推导式
vec = [2, 3, 6]
# 将里面每个数都加上个 10 ，然后返回给 result 
result = [ 10 + x for x in vec ]
print(vec) #=>[2, 3, 6]
print(result) #=> [12, 13, 16]

# 当然还可以乘方，然后返回个类似二维数组的列表
print( [ [ x, x**2] for x in vec ] ) #=>[[2, 4], [3, 9], [6, 36]]

# 操作每一个元素
ff = ['  banana    ', '  loganberry ', 'passion fruit  ']
print ( [x.strip() for x in ff] )  # 为每一个元素去除前后空格

# 把列表中大于 10 的元素乘以 2
# 并返回新的列表
num = [4,12,19,5]
print( [ x*2 for x in num if x > 10] ) # 3=>[24, 38]



# 嵌套列表解析
matrix = [
	[1, 2, 3, 4],
	[5, 6, 7, 8],
	[9, 10, 11, 12],
]
#=> [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]]
print(matrix)
#=> [[1, 5, 9], [2, 6, 10], [3, 7, 11], [4, 8, 12]]
print( [[row[i] for row in matrix] for i in range(4)] )
#扁平化 matrix
print("#扁平化 matrix")
# for x in matrix:
# 	for y in x :
# 		result.append(y)



# 集合推导式
str = 'abca(^&hl^8'
	# 注意了是大括号
rec = { x for x in str if x not in '!@#$%^&*()'}
print(rec) #=>{'c', 'a', 'h', 'b', 'l', '8'}

