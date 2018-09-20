using System;
namespace BaseGrammarApplication{
	class BaseGrammar {
		static void Main(string[] args){
			// 首先我是单选注释
			/*
				我就是多选注释
			 */
			int i;  		// 定义一个整型变量
			double b;		// 定义一个双精度变量类型
			string str = "hello,c#";	  // 定义一个字符串并初始化
			String str2 = @"C:\windows";  // @字符串中可以任意换行
			object obj;  	// 定义一个对象类型
			// 但是如果定义不赋初始值，编译器报 warring 
			Console.WriteLine(str);
			Console.WriteLine(str2);


			Console.ReadKey();
		}
	}
}