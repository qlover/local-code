using System;
namespace TestObjectAPP {
	
	class One {
		public int sone = 1;

	}
	class Two : One {
		public int stwo = 2;
	}
	class Three : Two {
		public int sthree = 3;
	}
	class TextObject {
		static void Main(string[] args){
			Three three = new Three();
			Console.WriteLine(three.sthree);  //=> 3
			Console.WriteLine(three.stwo);	  //=>2
			Console.WriteLine(three.sone);   //=>1
			// 不难看出虽然不能多继承，但是和 php ，java 样可以用继承链
			// 所以因为继承链的关系， three 有了 Two 和 One 成员
		}
	}

}

