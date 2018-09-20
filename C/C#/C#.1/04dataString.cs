using System;
namespace DataStringApp{
	class DataString{
		static void Main(string[] args){

			// 单引号并不是表示为字符串
			string str = "I am a boy";
			string str2 = @"C:\windows\stystem32\framework";

			Console.WriteLine(str);
			Console.WriteLine(str2);

			// 当然，借用 C# @ 的这个特性可以这样来操作
			string scripts = @"<script>
				console.log('hello,c#');
			</script>";
			Console.WriteLine(scripts);
		}
	}
}