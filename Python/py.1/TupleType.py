#! usr/bin/python3

tup1 = ('qlover', 'home', 1997, 2000);
tup2 = (1, 2, 3, 4, 5 );
tup3 = "a", "b", "c", "d"; # 这样定义也是一个元组

tup4 = (10,);
# 元组中只包含一个元素时，需要在元素后面添加逗号
# 元组与字符串类似，下标索引从0开始，可以进行截取，组合
print(tup1+('lee',)) # 一个元素时加上最后的逗号
print("tup1[2]=", tup1[2]) # => 1997
print("tup2[1:3]", tup2[1:3]) # => (2, 3)
print(tup3) # => ('a', 'b', 'c', 'd')

