


# 同样的事件做了两次以上就需要封装
# 封装-> 写入函数

# def sum(a, b):
# 	return a + b

# # sum(1,2)
# # sum(1,2)
# # sum(1,2)
# # sum(1,2)
# # sum(1,2)
# # sum(1,2)
# # sum(1,2)
# # sum(1,2)
# # sum(1,2)
# # sum(1,2)

# def sums(times,a, b):
# 	while times:
# 		sum(a, b)
# 		time -= 1

# sums(10,1,2)




class Num:

	def sum(a, n):
		return a+n

	def avg(a, b):
		return (a + b) / 2

s = Num()
s.sum(1,2)
s.avg(1,2)
# 封装是把重复做的事给隐藏到一个地方，用一次代替多次调用


