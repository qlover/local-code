// using 关键字用于在程序中包含 System 命名空间。
// 一个程序一般有多个 using 语句
using System;
// 声明一个命名空间
namespace HelloWorldClass{
	// 声明一个类
	class HelloWorld{
		// 类似 java 的主函数，这是固定的写法
		static void Main(string[] args){
			// 将信息输出在控制台上
			// 切记是区分大小写的
			Console.WriteLine("hello C sharp"); // 而且必须以 分号 结束
			// WriteLine 是一个定义在 System 命名空间中的 Console 类的一个方法
			Console.ReadKey();
			// 是针对 VS.NET 用户的。这使得程序会等待一个按键的动作
			// 防止程序从 Visual Studio .NET 启动时屏幕会快速运行并关闭
		}
	}
	
}
/**
 * csc 01helloworld.cs 这个是编译过程
 * 然后会产生一个 .exe 文件，这个是可执行文件
 * 这个过程和 gcc 类似
 */
