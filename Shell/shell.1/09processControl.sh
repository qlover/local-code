#!/D/Git/bin/bash
#author:qlover

# if else

if test [1 == 2]
then	
	echo 'true'
else
	echo 'false'
fi

# for


for var in 1 2 3 4 5
do
	echo "the value is $var"
done


# while

int=1
while(( $int<=5 ))
do
    echo $int
    let "int++"
done


