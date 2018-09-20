using System;
namespace DataChangeApp{

	class one{ }
	class two{ }

	class DataChange{
		static void Main(string[] args){
			// 强转
			double d = 3.88;
			int i = (int)d;  // 将 d 强转(显示)转换成整型 
			Console.WriteLine(d);
			Console.WriteLine(i);  // 3
			// 隐示转换
			int n = 100;
			long ln = n;  // 将 n 隐示转换成了 int 
			Console.WriteLine(ln);

			// to 转换
			string str = 123.ToString();
			Console.WriteLine(str); // "123"

			Console.WriteLine(true.ToString()); // True
			Console.WriteLine(3.14.ToString()); // 3.14

			// Convert 和 Parse
			string locstr = 123.ToString();
			//方法一: 用 Convert 
			int j = Convert.ToInt16(locstr);
			//方法二: 用 Parse
			int k = int.Parse(locstr);
			Console.WriteLine(j);
			Console.WriteLine(k); // 123


			// int.TryParse()
			string s1="abcd";
	        string s2="1234";
	        int a,b;
	        bool bo1=int.TryParse(s1,out a);
	        Console.WriteLine(bo1+" "+a); //=> False 0
	        bool bo2=int.TryParse(s2,out b);
	        Console.WriteLine(bo2+" "+b); //=> True 1234


		}
	}

}