
# fs = open('jun.txt1.txt', 'r', encoding="utf-8")
# data = fs.read()
# res = data.replace('2010', '2017')
# fs.close()

# fs = open('jun.txt1.txt', 'w+', encoding="utf-8")
# fs.write(res)
# fs.close()

# s1 = input('替换的串')
# s2 = input('替换后的串')
# f=open("jun.txt1.txt","r",encoding="utf-8")
# f_1=open("jun.txt2.txt","w",encoding="utf-8")
# for i in f:
#     if s1 in i:
#         i=i.replace(s1, s2)
#     f_1.write(i)
# f.close()
# f_1.close()
# f=open("jun.txt1.txt","w",encoding="utf-8")
# f_1=open("jun.txt2.txt","r",encoding="utf-8")
# f.write(f_1.read())
# f.close()
# f_1.close()




a = int(input('起始行号: '))
b = int(input('结束行号: '))
fs = open('jun.txt1.txt', 'r', encoding='utf-8')
lines = fs.readlines()
for line in range(a-1, b):
	print("%d:>> %s" % (line+1, lines[line]))








