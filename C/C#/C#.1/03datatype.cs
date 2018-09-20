using System;
namespace DataType{
	class DataType{
		static void Main(string[] args){
			object obj;
			obj = 100;  // 装箱
			Console.WriteLine(obj);


			// 装箱：值类型转换为对象类型

			int i = 99;
			//整型数据转换为了对象类型（装箱）
			object obj2  = i; 
			Console.WriteLine(i);
			Console.WriteLine(obj2);

			// 拆箱：之前由值类型转换而来的对象类型再转回值类型
			int j = 9;
			object obj3 = j;  // 装箱
			int k = (int)obj3;  // 折箱
			Console.WriteLine(j);
			Console.WriteLine(obj3);
			Console.WriteLine(k);


			Console.ReadKey();
		}
	}


}