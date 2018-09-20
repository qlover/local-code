



L = []
cnt = 10   # 记录多少个元素
while cnt:
	n = input('请输入')
	L.append(n)
	cnt -= 1
L.sort()
L.reverse()
print(''.join(L))

