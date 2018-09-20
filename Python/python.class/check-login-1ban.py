#!D:\Environment\Python3\python
'''
 用户输入用户名和密码
 	每一次输入校验五次
'''

cname,cpass= '张三','zhangsan123'
uname = input('请输入用户名：')
while uname != cname:
	uname = input('用户名输入不正确，请重新输入：')
upass = input('请输入密码：')
i = 1;
while i < 5:
	if upass == cpass:
		print('登录成功！')
		break;
	else:
		upass = input('请输入密码：')
	i+=1
else:
	print('你的次数已经用完')


