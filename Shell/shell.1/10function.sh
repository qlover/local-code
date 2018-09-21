#!/D/Git/bin/bash
#author:qlover


# 定义函数
function fun(){
	echo "a function"
}
# 调用函数
fun


function sum(){
	a=10
	b=20
	return $(($a+$b))
}
sum
echo $?  # $? 调用返回值


