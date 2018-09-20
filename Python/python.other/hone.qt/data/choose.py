	
class choose():
	# 账号
	ACCOUNT = {
		"admin"	: {
			"id": 1,
			"upass": "admin",
			"type": "ADMIN",
			"first": 0,
			'forbid' : 0,
		},

		"user1" :{
			"id" : 2,
			"upass" : "user1",
			"forbid" : 0,
			"first": 1,
			"type": "USER",
			'menu': {

			}
		},
		"user2":{
			"id" : 3,
			"upass" : "user2",
			"forbid" : 0,
			"first": 1,
			"type": "USER",
			'menu': {

			}
		},
		"leader1":{
			"id" : 4,
			"upass" : "leader1",
			"forbid" : 0,
			"first": 1,
			"type": "LEADER",
			'menu': {

			}
		},
		"cooker1":{
			"id" : 5,
			"upass" : "cooker1",
			"forbid" : 0,
			"first": 1,
			"type": "COOKER",
		},
	}


	# 菜品 
	MENU = {
		# 热菜
		'hotFood' : {
			'热菜一' : { 'price' : 10, 'max' : 10, },
			'热菜二' : { 'price' : 20, 'max' : 10, },
			'热菜三' : { 'price' : 15, 'max' : 10, },
			'热菜四' : { 'price' : 35, 'max' : 10, },
		},
		# 冷菜
		'iceFood' : {
			'冷菜一' : { 'price' : 10, 'max' : 20, },
			'冷菜二' : { 'price' : 20, 'max' : 20, },
			'冷菜三' : { 'price' : 15, 'max' : 20, },
			'冷菜四' : { 'price' : 35, 'max' : 20, },
		},
		# 甜品
		'dessertFood' : {
			'甜品一' : { 'price' : 10, 'max' : 15, },
			'甜品二' : { 'price' : 20, 'max' : 15, },
			'甜品三' : { 'price' : 15, 'max' : 15, },
			'甜品四' : { 'price' : 35, 'max' : 15, },
		},

		# 饮料
		'drink' : {
			'饮料一' : { 'price' : 10, 'max': 30, },
			'饮料二' : { 'price' : 15, 'max': 30, },
			'饮料三' : { 'price' : 20, 'max': 30, },
			'饮料四' : { 'price' : 10, 'max': 30, },
		},
		# 白酒
		'sprit' : {
			'白酒一' : { 'price' : 10, 'max': 30, },
			'白酒二' : { 'price' : 15, 'max': 30, },
			'白酒三' : { 'price' : 20, 'max': 30, },
			'白酒四' : { 'price' : 10, 'max': 30, },
		},

		# 红酒
		'redWine' : {
			'红酒一' : { 'price' : 10, 'max': 30, },
			'红酒二' : { 'price' : 15, 'max': 30, },
			'红酒三' : { 'price' : 20, 'max': 30, },
			'红酒四' : { 'price' : 10, 'max': 30, },
		},
		# 啤酒
		'beer' : {
			'啤酒一' : { 'price' : 10, 'max': 30, },
			'啤酒二' : { 'price' : 15, 'max': 30, },
			'啤酒三' : { 'price' : 20, 'max': 30, },
			'啤酒四' : { 'price' : 10, 'max': 30, },
		},
	}
