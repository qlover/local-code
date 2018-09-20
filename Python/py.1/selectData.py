#!D:\Environment\Python3.6\python
import pymysql;

_dao = pymysql.connect("localhost","root","root123","test_py")
cs = _dao.cursor()

'''
ID INT NOT NULL,
AGE INT,  
SEX CHAR(1)
'''

# 插入数据函数
def addData(id, age, sex):
	sql = "INSERT INTO tab_2(ID,AGE,SEX) \
	VALUES (%d,%d,'%s' )" \
	% (id, age, sex) 

	try:
		cs.execute(sql)
		_dao.commit() 
		print("数据插入成功")
	except Exception as e:
		print("数据插入失败，请检查参数是不正确。")
		_dao.rollback()
		print(e)
		pass

# addData(5,22,'M')
# addData(6,19,'M')
# addData(7,21,'W')


# 查询 ID 大于 4 的信息,并以 ID 为升序返回
sql = "SELECT * FROM TAB_2 WHERE ID >= %d ORDER BY ID ASC" %(4)

cs.execute(sql)

# 获取所有信息
result = cs.fetchall() # 返回类似二维数组的列表

print("ID\tAGE\tSEX")
for row	in result:
	print("%2d\t%2d\t%2s" \
		%(row[0], row[1], row[2]) )
	pass


# 返回第一条数据
sql = "SELECT * FROM TAB_2 LIMIT 0,%d" %(1)
cs.execute(sql)
result = cs.fetchone()
print(result)


