#!D:\Environment\Python3\python

def print_sj(s='*'):
	for i in range(1,4):
		print(' '*(4-i),s*(2*i-1))
	for i in range(4,0,-1):
		print(' '*(4-i),s*(2*i-1))	

