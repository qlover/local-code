#!/usr/bin/python3

from datatime import date
now = date.today()
print(now)



# 数据压缩
import zlib
s = b'witch witch hs which was..'
print( zlib.crc32(s))



