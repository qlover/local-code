#!/usr/bin/python3

def add(a, b):
	return a + b

def sum( a, *vartuple ):
	sum = a
	for x in vartuple:
		sum += x
	return sum
