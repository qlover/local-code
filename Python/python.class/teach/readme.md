



封装

	把一些的功能放到一起工作

继承 

	将父亲的东西（父亲暴露给外面的东西）拿给儿子使用
	
多态

	都有这个功能，只是这个功能做成功的事不同





# 类 #


	类是一种事物

	
# 对象 #
	
	一个对象就是一种该类的一个 *实例*


	对象 是单独 存在的，多个对象有多个地址突然间
	一个类只有一个地址空间

	类 和 对象 都是 引用类型

# 成员 #

	成员存在于类或对象中

	在类中存在的成员叫 		静态成员
	在对象中存在的成员叫	实例成员


属性是描述，方法是动作

## 属性（变量） ##
	类中的属性叫 	静态成员
		静态的成员只给类用,不给实例用
	对象中的属性叫 	实例成员
		实例的成员只给实例用,不给静态用

		* 类的成员是静态的， 对象的成员是实例 的 * 
	
## 方法（函数） ##
	类中的方法叫 	静态方法
	对象中的方法叫 	实例方法
	


# 一个对象使用一个成员的过程是   #

	一个实例 -> 自己实例成员 -> 自己类的 成员 -> 上级的类的成员 -> .... -> Object 的成员 

	静态成员直接用类名点 成员名

	在类的继承中，封装有两种办法，一是给最低级，二是给最高级

	静态成员可以为每个实例共享，而实例成员则是每个实例自己有的