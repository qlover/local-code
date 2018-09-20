#!D:\Environment\Python3\python


import random # 导入 random 库
li1 = [] # 创建一个空列表
i=1 # i 作为全局下的循环中的下标控制
c30 = 0 # 记录列表中 30 出现的次数
flag49 = False # 否有 49 数，False 没有 True 有
while i <= 100:
	n = random.randint(1, 100) # 每次循环引用个新的随机数
	li1.append(n) # 将随机数添加至列表末尾
	# 判断是否有 30 并记录
	if n == 30: 
		c30+=1
	# 判断是否有 49
	if n == 49:
		flag49 = True
	i+=1 # 循环增量
print('列表如下', li1)

print("30 有%s次"%(c30))

li1.pop(28) # 删除列表下标为 28 的元素
print('现在列表长度为：', len(li1))
li1.append(102) # 在列表中末尾添加 102
li1.insert(22, 999) # 在列表 22 下标添加一个 999
print('最大值是：', max(li1)) # 最大值
print('最小值是：', min(li1)) # 最小值
li1[50]=888 # 将下标 50 重置为 888
print('列表第50项为:', li1[50])

# 为 49 做出判断
if flag49:
	print('有49')
else:
	print('没有49')

i=0 # 重置循环增量
li2=[] # 创建另一个新的空列表
while i < 100:
	n = random.randint(1, 100)
	li2.append(n) # 向新的列表添加随机数
	i+=1
li1.extend(li2) # 将 li2 列表中的每一个元素依次追加到 li1 末尾
	# 注意这里不能用 append() 
	# 因为 append() 方法是将 li2 作为一个元素添加到 li1 末尾
li1.reverse() # 倒置 li1 

li1.sort() # 对 li1 排序
print('列表如下', li1)

s,i=0,0 # 初始化 s 为0 ，并重置循环增量
while i < len(li1):
	s+=li1[i]
	i+=1

print('列表和是', s)




