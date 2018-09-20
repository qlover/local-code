c = (('apple','orange'),('meat','hotdog'),('iphone','mi'))
for x in range(len(c)):
	print("c[%d]="%(x),end='')
	for y in range(len(c[x])):
		print(c[x][y], end=' ')
	print()