#!/usr/bin/python3

# 打开第一个文件
f = open("./foo.txt", "w")

# 向 foo.txt 文件写内容
f.write("Hello, I am Ptython,\n\nI am very good language.")

# 关闭文件
f.close()

# 如果没有该文件，则会创建一个

