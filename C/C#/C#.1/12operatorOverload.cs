using System;
namespace TestOOAPP {
	class Box {
		public int length;
		public int width;

		public static Box operator+ (Box b1, Box b2){
			Box box = new Box();
			box.length = b1.length + b2.length;
			box.width = b1.width + b2.width;
			return box;
		}
	}

	class TestOO{
		static void Main(string[] args){
			int sum;
			Box b1 = new Box();
			Box b2 = new Box();
			Box b3 = new Box();
			b1.length = 10;
			b1.width = 100;
			b2.length = 20;
			b2.width = 200;

			sum = b1 + b2;
			Console.WriteLine(sum);
		}
	}

}


