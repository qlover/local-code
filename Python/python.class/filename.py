


# fs = open('fiveGroup.txt','w')
# fs.write('zd,cps,zzp,zzx,yh,jap,qrj')
# fs.close()
# fs = open('fiveGroup.txt','r')
# print(fs.read())


for x in range(1,10):
	for i in range(1, x + 1):
		print("%d * %d = %d" % (i, x, x * i),end="")
	print()