#!/usr/bin/python3


# 引入正则模块
import re

s = "www.qlover.website"
print( re.match('.([a-z]+).', s) )
#=> <_sre.SRE_Match object; span=(0, 4), match='www.'>

# 调用返回的 span 
print( re.match('.([a-z]+).', s).span() )
#=> (0,4)

print( re.match('website', s) )



#如果想要获取匹配的字符串，则需要用 mathc 匹配后的对象来操作
myRegExpObj = re.match(r'([a-z]*)', s)

# 如果匹配成功就返回对象，如果失败就返回 None
if myRegExpObj == None :
	print('匹配失败')
else :
	print(myRegExpObj, myRegExpObj.group(1))


# search()

line = "Cats are smarter than dogs";

searchObj = re.search( r'(.*) are (.*?) .*', line, re.M|re.I)

if searchObj:
   print ("searchObj.group() : ", searchObj.group())
   print ("searchObj.group(1) : ", searchObj.group(1))
   print ("searchObj.group(2) : ", searchObj.group(2))
else:
   print ("Nothing found!!")



# sub()

s = "I am very betuful beautiful."
relReg = r' ([a-z]{3,4}) '
rel = re.sub(relReg, ' |very-very| ', s )
# 匹配后返回匹配的字符串
print( rel ) #=> 'I am |very-very| betuful beautiful.'






