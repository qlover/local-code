#!/D/Git/bin/bash

var1="qlover"

echo "myName is $var1"

for skill in VB J Java; do
	echo "script is ${skill}Script"
done


str1="qlover"

echo "hello, ${str1} !" # hello, qlover

echo 'hello, ${str1} !' # hello, ${str1}


echo "str1 has ${#str1}" #=>6

echo "${str1:1:4}" #=> love

# find sub str
str2="I am a boy"
# find a or b first index
echo `expr index "$str2" ab`



