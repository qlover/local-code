ming_pian=[
    {"姓名":"张三","qq":"168523498","地址":"四川职院",},

    {"姓名":"李四","qq":"152489303","地址":"四川大学",},

    {"姓名":"王五","qq":"246581052","地址":"四川长江",}
]
while True:
    num=input("请输入一个数：")
    if num=="1":
        name=input("请输入要查找的姓名：")
        for i in ming_pian:
            if name==i["姓名"]:
                print(i)
            break
        else:
            print("没有此人")
    elif num=="2":
        name=input("请输入要删除的姓名：")
        for i in ming_pian:
            if name==i["姓名"]:
                print("此人已存在，退出")
                break
        else:


    elif num == "3":
        name=input("请输入要删除的姓名：")
        for i in ming_pian:
            if name==i["姓名"]:
                ming_pian.remove(i)
                break
        else:
            print("没有此人")
    elif num == "4":
        name=input("请输入要修改的姓名：")
    elif num == "5":
        name=input("请输入要显示的姓名：")
        for i in ming_pian:
            if name==i["姓名"]:
                print("姓名: %s, qq: %s, 地址: %s" % (name, i['qq'], i['地址']))
    elif num == "6":
        name=input("是否要退出y/s：")
        if name == 'y':
            break

    else:
        print("你输入有误，请重新输入：")
