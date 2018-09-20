# 其中第一个为起始路径，
# 第二个为起始路径下的文件夹,
# 第三个是起始路径下的文件.
# dirpath是一个string，代表目录的路径,
# dirnames是一个list，包含了dirpath下所有子目录的名字,
# filenames是一个list，包含了非目录文件的名字.这些名字不包含路径信息,如果需要得到全路径,需要使用 os.path.join(dirpath, name).
# 
# 
# os.remove() 删除文件
# os.rmdir() 删除目录
# os.getsize() 文件大小
import os
path='D:\\New Downloads\\chrome'
for dirpath,dirnames,filenames in os.walk(path):
    for file in filenames:
            fullpath=os.path.join(dirpath,file)  # 文件的本地绝对路径
            size = os.path.getsize(fullpath)  # 文件大小
            # 判断文件是否是垃圾文件
            if size <= 1:
            	os.remove(fullpath)





# 系统盘 %system% 下文件类型：
#      【临时文件（*.tmp）】
#      【临时文件（*._mp）】
#      【日志文件（*.log）】
#      【临时帮助文件（*.gid）】
#      【磁盘检查文件（*.chk）】
#      【临时备份文件（*.old）】
#      【Excel备份文件（*.xlk）】
#      【临时备份文件（*.bak）】
# 用户目录 %userprofile% 下文件夹
#      【COOKIE】 cookies\*.*
#      【文件使用记录】 recent\*.*
#      【IE临时文件】 Temporary Internet Files\*.*
#      【临时文件文件夹】 Temp\*.*
# Windows 目录 %windir% 下文件夹
#      【预读取数据文件夹】 prefetch\*.*
#      【临时文件】 temp\*.*
