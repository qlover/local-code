


# sys.argv  在命令行接收用户输入的参数

import random
import string
import sys
 
similar_char = '0OoiI1LpP'
upper = ''.join(set(string.uppercase) - set(similar_char))
lower = ''.join(set(string.lowercase) - set(similar_char))
symbols = '!#$%&\*+,-./:;=?@^_`~'
numbers = '123456789'
 
group = (upper, lower, symbols, numbers)
 
def getpass(lenth=8):
    pw = [random.choice(i) for i in group]
    con = ''.join(group)
    for i in range(lenth-len(pw)):
        pw.append(random.choice(con))
        random.shuffle(pw)
    return ''.join(pw)
 
 
genpass = getpass(int(sys.argv[1]))
print(genpass)

