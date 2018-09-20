

class Data(object):
	def __init__(self):
		super(Data, self).__init__()


	# 用账号获取 first 
	def getFirstByAccount(self, account):
		return self.cho.ACCOUNT[account]['first']

	# 获取密码
	def getPassByAccount(self, account):
		if self.hasAccount(account):
			return self.cho.ACCOUNT[account]['upass']
		return 

	# 用户是否存在 
	def hasAccount(self, account):
		acts = list(self.cho.ACCOUNT.keys())
		if account in acts:
			return True
		return False

	# 返回用户类型
	def getTypeByAccount(self, account):
		if self.hasAccount(account):
			return self.cho.ACCOUNT[account]['type']
		return None