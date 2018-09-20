using System;
namespace TestRetypeAPP{

	class ReType{
		static void Main(string[] args){

			// 创建数组
			int[] ints = new int[]{1,2,3,4,5,6,7,8,9,10};
			// 修改
			ints[5] = 100;
			// 访问，可用 for 或 foreach
			// 先来个经典的
			int i = 0;
			int len = ints.Length;  // 获取数组长度，注意大小写
			for(;i<len;i++){
				Console.Write(ints[i]+" ");
			}
			Console.WriteLine();
			// 高端点的做法
			// 这样的做可以不用多的得到数组长度
			foreach (int x in ints) {  // 记得第一个要有数据类型
				Console.Write(x+" ");					
			}
		}
	}

}