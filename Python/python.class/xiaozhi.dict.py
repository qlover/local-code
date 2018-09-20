#!D:\Environment\Python3\python


print("欢迎进入通信录")
print("1、查询联系人资料")
print("2、插入新的联系人")
print("3、删除已有联系人")
print("4、退出通信录")
dict_t={}
not_revise = True
while True:
    a=int(input("请输入选择:"))
    if a==4:
        break
    # 查询
    elif a==1:
        name = input("请输入查询用户名:")
        if name in dict_t:
            print(dict_t[name])
        else:
            print("查询的用户不存在")
    # 删除 
    elif a==3:
        name = input("请输入删除用户名:")
        if name in dict_t:
            dict_t.pop(name)
        else:
            print("删除的用户不存在")
    # 判断 2 
    # 不存在修改, 存在就判断是否要修改
    elif a==2:
        name = input("请输入查询的用户名:")
        if name in dict_t:
            not_revise = False
        else:
            not_revise = True

        # 如果不存在就添加
        if not_revise :
            dict_t[name] = name;
        # 如果存在就显示并提示是否修改
        else:
            print(dict_t[name],' 已经存在')
            yes_no = input('是否修改？yes/no:\n')
            if  yes_no == 'yes':
                dict_t.pop(name)
                name = input("请输入修改后的用户名:")
                dict_t[name] = name;
            else:
                break

