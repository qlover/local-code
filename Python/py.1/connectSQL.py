#!D:\Environment\Python3.6\python

# 导入 mysql 模块
import pymysql

# 打开数据库连接
'''
参数一：服务器
参数二：用户名
参数三：密码
参数四：连接的数据库名
'''
db = pymysql.connect("localhost","root","root123","test_py")


# 使用 cursor() 方法创建一个游标对象 cursor
cursor = db.cursor()
# 使用 execute()  方法执行 SQL 查询 
cursor.execute("SELECT VERSION()")
# 使用 fetchone() 方法获取单条数据.
data = cursor.fetchone()
print ("Database version : %s " % data)
# 关闭数据库连接
db.close()


def insert(self):
	print('>> Start deposit')
	db = pymysql.connect(
			host="localhost",
			port=3306,
			user="root",
			passwd="root123",
			db="crawler",
			charset="utf8"
		)
	cursor = db.cursor()
	# 插入多条语句并，返回插入的条数,插入一条可以用 execute()
	self.ret = cursor.executemany("INSERT INTO spider_entry(url, title, summary, img_url) VALUES(%s,%s,%s,%s)", self.buffs)
	db.commit()   # 要手动的提交在缓存中的数据
	cursor.close()
	db.close()
	self._over(self.ret)
	return self

