#!D:\Environment\python3.6\python
import json

# Py => JSON
data = {
	'name' : 'qlover',
	'age' : 18,
	'web' : 'www.qlover.website'
}
print(data) 
jsonStr = json.dumps(data)
print(jsonStr)


# JSON => Py
# 将 JSON 对象转换为 Python 字典
data2 = json.loads(jsonStr)
print ("data2['name']: ", data2['name'])
print ("data2['web']: ", data2['web'])




