#!usr/bin/python3


# os 库
import os
print( os.getcwd() ) # 返回当前工作目录

# 修改当前工作目录
os.chdir('d:/') 
print( os.getcwd() ) #=> 'd:\'
os.system('cls')   # 执行系统命令 cls


# glob 库
import glob
print( glob.glob('*.py'))







