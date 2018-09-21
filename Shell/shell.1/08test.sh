#!/D/Git/bin/bash
#author:qlover

a=100
b=200
if test $[a] -eq $[b]
then
	echo '两个数相等'
else
	echo '两个数不相等'
fi


result=$[a+b]
echo $result #=> 300



