
cnt = 0   # 记录多少个三位数
for i in range(1,6):
    for j in range(1,6):
        for k in range(1,6):
            if i!=j and i!=k and j!=k:
                print(i*100+j*10+k)
                cnt+=1
print('有',cnt,'个三位数')

