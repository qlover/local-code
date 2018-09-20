#! usr/bin/python3

var1 = True;

if var1 :
	print("I am true");  # 打印结果 
else:
	print("I am false");


var2 = 12;

if var2 % 2 == 0:
	print("我是偶数"); # 打印结果
elif var2 % 2 != 0:
	print("我是奇数");
else :
	print("这个数有问题");

### 用户输入数字判断是否是质数

num = int(input("Please enter a number:"))
i = num-1
flag = False
while i > 1 :
	if num % 2 != 0:
		flag = True
		break;
	i-=1
if flag :
	print(num,"是一个质数")
else :
	print(num,"不是一个质数")




# 循环语句
var3 = 5
while var3:
	print(var3)
	var3-=1
else :
	print(var3, "已经循环完毕")


# for 循环
var4 = ["qlover","home",123, {"name","lee"} ]
print("===================for 循环遍历开始")
print(var4)
for i in var4 :
	print(i)
else : # 当条件为假时会执行
	print("===================for 循环遍历结束")



# 测试 pass 语句

for letter in 'Qlover.': 
   if letter == '.':
      pass
      print ('执行 pass 块')
   print ('当前字母 :', letter)
else :
	print("for 执行完毕")