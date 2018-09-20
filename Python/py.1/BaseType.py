#! usr/bin/python3

a = 100
b = '200'
c = 300.0

print ( a , b, c ) # 100 200 300.0
# a + b 是不行的
print ( a + c) # 400
# 整数+浮点=浮点 

#可同时为多个变量赋值
x = y = z = 5
a,b,c = 50, 80, '520'
print ( x, y, z )
print ( a, b, c )


#测试数字

print("\n Test Number:\n")

a, b, c, d = 20, 5.5, True, 4+3j # 当值一给就创建了对应的对象
print(type(a), type(b), type(c), type(d))

# 测试字符串
print("\n Test String:\n")

str1 = 'I am a string.'; # 单引号字符串
str2 = "I am also a string." # 双引号字符串
print("str1= "+ str1)
print("str2= "+ str2)
print("str1*2= "+ str1*2) # 重复输出2次
print("str2[1:5]= "+ str2[1:5] ) # 截取下标 1 到 4 的字符
print("str1[7:13]= "+ str1[7:13] ) # => string
print("str1[7:]= "+ str1[7:] )  # 截取 s 后面所有字符
print("string in str2 = ", 'string' in str2 ); # ‘string' 在 str2 中

# Python 是支持 C 语言 sprintf() 函数一样的用法
print("I am language, I am a %s" % ('python3')) # =>I am language, I am a python3


# 三引号
print("\n Test Three Quotation:")

# 当然不管是单引号还是双引号都可以
three_str = '''
I am first three quotation string.
xxxxx
xxx \t 
{ I am \n newline }
'''

print(three_str)

# 其实有个很典型的用法就是
data_str = """create table user_info(
  id int auto_increment comment '用户ID',
  name varchar(20) comment '用户名',
);"""
print(data_str)