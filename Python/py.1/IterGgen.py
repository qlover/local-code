#! usr/bin/python3


list1 = [10,20,30,40,50,60]

print( len(list1) ) # => 6


#  迭代器和生成器的用法 
# iter() 和 next()


it = iter(list1) # 得到 迭代器
index = 0
while  index < len(list1): 
	print(next(it)) # 用生成器访问
	index+=1
else :
	print("while 迭代完成")

# 当然 for 循环也可以做到

it = iter(list1) # 重新得到 迭代器
for x in it:
	print(x)
else :
	print("for 迭代完成")



import sys
list2 = ['qlover','hoem',520]
it2 = iter( list2 )
while True :
	try :
		print( next(it2) )
	except StopIteration :
		sys.exit()






