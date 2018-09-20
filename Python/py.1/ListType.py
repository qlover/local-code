#! usr/bin/python3
list1 = ['qlover', 'home', 100, 12.21 ];
list2 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
print("list1[1]=", list1[1] ) # =>'home'
print("list1[1:5]=", list2[1:5] ) # => [2, 3, 4, 5]

# append() 可添加列表项


list3 = [1, 2, 3, 4, 5]
print(list3 + [6, 7, 8, 9, 10]) # => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

# 嵌套列表
list4 = ['a', 'b', 'c']
list5 = ['z', 'y', 'z']
list6 = [list4, list5]
print(list6[0][2]) # => 'c'
print(list6) # => [['a', 'b', 'c'], ['z', 'y', 'z']]





