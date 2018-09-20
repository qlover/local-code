f = open('users.txt', 'a+', encoding='utf-8')
f.seek(0)
user_info = eval(f.read())# 字符串转字典
i =0
while i<3:
    i += 1
    uname = input("请输入用户名：").strip()
    upass = input("请输入密码：").strip()
    passC = input("请确认密码：").strip()
    if not uname or not upass or not passC:
        print("注册失败，用户名或密码不能为空")
        continue
    if upass != passC:
        print("注册失败，两次输入密码不一致")
        continue
    if uname in user_info:
        print("注册失败，用户名已存在")
        continue
    print("恭喜你，注册成功！")
    user_info[uname] = {'password': upass, 'role': '1'}
    f.seek(0)
    f.truncate()
    f.write(str(user_info))
else:
    print("sorry，register over 3 times bye-bye!")
    f.close()
fr = open('users.txt', 'r')
fr.seek(0)
user_info = eval(fr.read())
j = 0
while j<3:
    j +=1
    uname = input("请输入用户名：\n").strip()
    upass = input("请输入密码：\n").strip()
    if not uname:
        print("用户名不能为空")
        continue
    if not upass:
        print("密码不能为空")
        continue
    if uname not in user_info:
        print("用户名不存在")
        continue
    if upass != user_info[uname]['password']:
        print("密码错误")
        continue
    print("恭喜你，登录成功！")
else:
     print("sorry! login over 3 times bye-bye! ")
f.close()
