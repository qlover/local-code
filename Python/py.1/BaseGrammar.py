
#!/usr/bin/python3
# 我是单行注释

print("我后面的注释不要看它！") #我还可以这样注释

if True:
	print("我是真的")
else:
	print("我是假的")

#定义第一个字符串变量
#多行字符串连接要用
str = "I'm Python" + \
	"I'm so glad to be here"


print("刚才定义的字符串是：" + str)
#print() 函数会自己换行


#但是在 (),[],{} 中的数据可以不用 \
arr = [
	'one', 'two',
	'three', 'four'	
]
print(arr)


input("\n输入 enter 后退出\n")


