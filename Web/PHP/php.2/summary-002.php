<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>
<?php

/*
百钱鸡问题
已知：公鸡5元一只，母鸡3元一只，小鸡一元3只，现用100元钱买了100买了100只公鸡
问题：公鸡母鸡小鸡各几只？----请考虑尽可能高效的方法


分析：

	假设1只公鸡，1只母鸡，1只小鸡，算算：总数和总价，发现不对！
	假设1只公鸡，1只母鸡，2只小鸡，算算：总数和总价，发现不对！
	假设1只公鸡，1只母鸡，3只小鸡，算算：总数和总价，发现不对！
	......
	假设1只公鸡，2只母鸡，1只小鸡，算算：总数和总价，发现不对！
	假设1只公鸡，2只母鸡，2只小鸡，算算：总数和总价，发现不对！
	假设1只公鸡，2只母鸡，3只小鸡，算算：总数和总价，发现不对！
	............
	假设2只公鸡，1只母鸡，1只小鸡，算算：总数和总价，发现不对！
	假设2只公鸡，1只母鸡，2只小鸡，算算：总数和总价，发现不对！
	......................
	假设100只公鸡，100只母鸡，100只小鸡，算算：总数和总价，发现不对！
	//也就是做了所有假设的问题，但是还是没有答案
	//这就叫穷举思路，也叫穷举思想，它适合于这种场合的问题
		问题的答案可能没有很直接的逻辑推理结论
		但可以将所有可能答案都罗列出来并且具有一定的规律
*/

//原始思路，就是穷举的思路
$c = 0 ;
for($gongji = 0; $gongji <=100; ++$gongji){
	for($muji = 0; $muji <= 100; ++$muji){
		for($xiaoji = 0; $xiaoji <= 100; ++$xiaoji){
			$shuliang = $gongji + $muji + $xiaoji;
			$zongjia = $gongji*5 + $muji*3 + $xiaoji/3;
			if( $shuliang == 100 && $zongjia == 100){
				echo "<br />公鸡为：$gongji,母鸡为：$muji,小鸡为：$xiaoji";
			}
			++$c;   //进行计算的次数
		}
	}
}
echo "<br />总计算次数：$c<br />";


//优化1：
$c = 0 ;
for($gongji = 0; $gongji <=100/5; ++$gongji){//考试公鸡的价格
	for($muji = 0; $muji <= 100/3; ++$muji){//考虑母鸡的价格
		//for($xiaoji = 0; $xiaoji <= 100; ++$xiaoji){
			//$shuliang = $gongji + $muji + $xiaoji;
			//因为只要公鸡母鸡数量知道了就可以知道小鸡的数量了
			$xiaoji = 100 - $gongji - $muji;
			$zongjia = $gongji*5 + $muji*3 + $xiaoji/3;
			if( $zongjia == 100){
				echo "<br />公鸡为：$gongji,母鸡为：$muji,小鸡为：$xiaoji";
			}
			++$c;   //进行计算的次数
		//}
	}
}
echo "<br />总计算次数：$c<br />";


//优化2：
$c = 0 ;
for($gongji = 0; $gongji <=100/5; ++$gongji){//考试公鸡的价格
	for($muji = 0; $muji <= (100-$gongji*5)/3; ++$muji){//考虑母鸡的价格，以及公鸡所花掉的钱
		//for($xiaoji = 0; $xiaoji <= 100; ++$xiaoji){
			//$shuliang = $gongji + $muji + $xiaoji;
			//因为只要公鸡母鸡数量知道了就可以知道小鸡的数量了
			$xiaoji = 100 - $gongji - $muji;
			$zongjia = $gongji*5 + $muji*3 + $xiaoji/3;
			if( $zongjia == 100){
				echo "<br />公鸡为：$gongji,母鸡为：$muji,小鸡为：$xiaoji";
			}
			++$c;   //进行计算的次数
		//}
	}
}
echo "<br />总计算次数：$c<br />";


//优化3：
$c = 0 ;
for($gongji = 0; $gongji <=100/5; ++$gongji){//考试公鸡的价格
	for($muji = 0; $muji <= (100-$gongji*5)/3; ++$muji){//考虑母鸡的价格，以及公鸡所花掉的钱
		//for($xiaoji = 0; $xiaoji <= 100; ++$xiaoji){
			//$shuliang = $gongji + $muji + $xiaoji;
			//因为只要公鸡母鸡数量知道了就可以知道小鸡的数量了
			$xiaoji = 100 - $gongji - $muji;
			if( $xiaoji % 3 != 0) continue;  //因为小鸡一元3 只，考虑小鸡数量应该是3的位数，价钱才能取整，因为，如果不是3的位数的知，取出来的钱将会有小数，并且公鸡和母鸡的钱肯定是整数，所以如果小鸡有小数，那么就不可能会有100元
			$zongjia = $gongji*5 + $muji*3 + $xiaoji/3;
			if( $zongjia == 100){
				echo "<br />公鸡为：$gongji,母鸡为：$muji,小鸡为：$xiaoji";
			}
			++$c;   //进行计算的次数
		//}
	}
}
echo "<br />总计算次数：$c<br />";


echo "<h1>这已经是接近于最优了，并且这种穷举的方法是将可能的答案算出来，并不是完整的答案</h1>";

?>
<script>




</script>


</body>

</html>














