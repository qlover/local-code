using System;

struct Money{
	public string name;
	public string much;
}
// 定义自己的结构体
public class TestStruct {
	public static void Main(string[] args){
		// 声明自己的数组结构
		Money m1;
		Money m2;

		m1.name = "人民币";
		m1.much = "100";
		m2.name = "美元";
		m2.much = "1000";
		Console.WriteLine(m1.name+" "+m1.much);
		Console.WriteLine(m2.name+" "+m2.much);
	}
}