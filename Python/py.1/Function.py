#! usr/bin/python3

# 每一个 python 函数
def add(a, b):
	return (a + b);

i,n = 2,3
print( add(i,n) ) # =>5

# python 中参数按照引用传递
o = { 'name': 'qlover'}
print('change before：', o['name'])
def change(dic):
	dic['name'] = 'home' # 函数内部改变了值

change(o)
print('change after：', o['name'])


# 函数参数 #
# 必要参数
def fun1( str ): 
	print(str)
	# 形参与实参一致
fun1('I am qlover.')



# 关键字参数
def fun2( name, age ):
	print("name is：", name)
	print("age is：", age)
# 调用 fun2 但是参数不用按顺序传入
n = 'qlover'
a = 18
fun2( age = a , name = n )
#=> name is qlover
#=> age is 18




# 不定长参数
def fun4( args, *vartuple ):
	print ("output: ")
	print (args)
	for var in vartuple:
		print (var)
	return ; #=> return None
#传入多少个值就打印哪些
fun4(100,200)
fun4(100,500,600)



# 匿名函数
print ("anonymous function")
add = lambda arg1, arg2 : arg1 + arg2
print( add(10, 20) ) #=> 30

# return 
def fun5():
	return ;
print( fun5() ) #=> None


# 作用域
tot = 0 # 全局作用域变量 tot
def fun6( arg1, arg2 ):
	tot = arg1 + arg2 # 局部作用域 tot
	return tot;
print ( fun6(10,20) ) #=> 30
print ( tot ) #=>0
