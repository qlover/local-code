#!D:\Environment\Python3.6\python


import xml.sax

class MovieHandler( xml.sax.ContentHandler ):
   def __init__(self):
      self.CurrentData = ""
      self.type = ""
      self.format = ""
      self.year = ""
      self.rating = ""
      self.stars = ""
      self.description = ""

   # 元素开始调用
   def startElement(self, tag, attributes):
      self.CurrentData = tag
      if tag == "movie":
         print ("*****Movie*****")
         title = attributes["title"]
         print ("Title:", title)

   # 元素结束调用
   def endElement(self, tag):
      if self.CurrentData == "type":
         print ("Type:", self.type)
      elif self.CurrentData == "format":
         print ("Format:", self.format)
      elif self.CurrentData == "year":
         print ("Year:", self.year)
      elif self.CurrentData == "rating":
         print ("Rating:", self.rating)
      elif self.CurrentData == "stars":
         print ("Stars:", self.stars)
      elif self.CurrentData == "description":
         print ("Description:", self.description)
      self.CurrentData = ""

   # 读取字符时调用
   def characters(self, content):
      if self.CurrentData == "type":
         self.type = content
      elif self.CurrentData == "format":
         self.format = content
      elif self.CurrentData == "year":
         self.year = content
      elif self.CurrentData == "rating":
         self.rating = content
      elif self.CurrentData == "stars":
         self.stars = content
      elif self.CurrentData == "description":
         self.description = content
  
if ( __name__ == "__main__"):
   
   # 创建一个 XMLReader
   parser = xml.sax.make_parser()
   # turn off namepsaces
   parser.setFeature(xml.sax.handler.feature_namespaces, 0)

   # 重写 ContextHandler
   Handler = MovieHandler()
   parser.setContentHandler( Handler )
   
   parser.parse("movies.xml")
   
# class userHandler( xml.sax.ContentHandler ):
# 	def __init__(self):
# 		self.current = ""
# 		self.user = ""
# 		self.pw = ""
# 		self.site = ""

# 	# 元素开始调用
# 	def beginElement(self, tag, attr):
# 		self.current = tag
# 		if tag == "list":
# 			print("******list*******")
# 			title = attr["title"]
# 			print("Title:", title)
# 	# 元素结束调用
# 	def endElement(self, tag):
# 		if self.current == "user":
# 			print ("user:", self.user)
# 		elif self.current == "pass":
# 			print ("pass:", self.pw)
# 		elif self.current == "site":
# 			print ("site:", self.site)
# 	# 读取字符时调用
# 	def characters(self, content):
# 		if self.current == "user":
# 			self.user = content
# 		elif self.current == "pass":
# 			self.pw = content
# 		elif self.current == "site":
# 			self.site = content

# if __name__ == '__main__':
#    # 创建一个 XMLReader
#    parser = xml.sax.make_parser()
#    # turn off namepsaces
#    parser.setFeature(xml.sax.handler.feature_namespaces, 0)

#    # 重写 ContextHandler
#    Handler = userHandler()
#    parser.setContentHandler( Handler )
   
#    parser.parse("./user.xml")

