#!D:\Environment\Python3.6\python

import pymysql

# 连接数据库
try:
	# _dao = pymysql.connect("localhost","root","123","test_py")
	# 如果值传入错误则会抛出错误
	_dao = pymysql.connect("localhost","root","root123","test_py")
	print("数据库连接成功！")
	pass
except Exception as e:
	print("数据库连接失败！")
	print(e)

# 获取操作数据库的对象
cursor = _dao.cursor()

# 创建一个表
# 名字为 TAB_2
sql = """CREATE TABLE tab_2 (
          ID INT NOT NULL,
          AGE INT,  
          SEX CHAR(1)
	)"""

# 如果为 SQL 语句则里面的关键字单词要大写，否则不通过
# 但最好建议所有单词都大写

try:
	cursor.execute(sql)
	print("表创建成功")
	pass
except Exception as e:
	print("表创建失败")
	print(e)


# 插入数据
sql = "INSERT INTO TAB_2(ID,AGE,SEX) VALUES(1,18,'M')"

try:
   # 执行sql语句
   cursor.execute(sql)
   # 提交到数据库执行
   _dao.commit()
   print("数据插入成功")
except Exception as e:
   # 如果发生错误则回滚 并打印错误信息
   print("数据插入失败")
   _dao.rollback()
   print(e);








