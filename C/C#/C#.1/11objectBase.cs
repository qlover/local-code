using System;
namespace TestObjectBaseAPP{
	
	class Human {
		public string name = "人类";

		public string getName(){
			return name;
		}

	}

	class Man  {
		string name;
		public Man(){
			this.name = "男人";
		}
	}
	class Woman : Human {

	}

	class TestObjectBase{
		static void Main(string[] args){

			Human h = new Human();
			Man m = new Man();
			Woman w = new Woman();
			Console.WriteLine(h.getName());
			// Console.WriteLine(m.getName());


		}
	}



}