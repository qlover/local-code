#! usr/bin/python3


# 创建字典

dic1 = { 'name' : 'qlover', 'age' : 18, \
	'email' : 'myused@sina.com' }

# 访问
print("dic1['name']=", dic1['name']) # => 'qlove'
print("dic1['age']=", dic1['age'])  # => 18

# 修改
dic1['name'] = 'home';
print("dic1['name']=", dic1['name']) # => 'home'

# 删除
dic2 = dic1
dic3 = dic2
print(dic2)
print(dic3)
del dic2['age']	# 删除键 'name'
dic2.clear()	# 删除字典
del dic3	# 同样删除字典

print(dic2) # => {}
print(dic3) # => 报错，name 'dic3' is not defined
#但这会引发一个异常，因为用执行 del 操作后字典不再存在


