using System;
namespace TestForeachAPP{

	class Test {
		static void Main(string[] args){
			// 定义一个整形型的数组
			int[] ints = new int[] { 0, 1, 1, 2, 3, 5, 8, 13 };
			foreach (int val in ints){
				System.Console.Write(val+" ");
			}


		}
	}

}