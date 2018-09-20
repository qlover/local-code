# 输出质数 

t=[]
for x in range(2,101):
	for j in range(2,x):
		if not x % j:
			break
	else:
		t.append(x)
print(t)

