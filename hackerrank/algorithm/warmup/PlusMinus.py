#!/bin/python

import sys


n = int(raw_input().strip())
arr = map(int,raw_input().strip().split(' '))
#start here!
positive=0
negative=0
zero=0
for i in arr:
    if i>0:
        positive+=1.0
    elif i<0:
        negative+=1.0
    else:
        zero+=1.0
pp=positive/n
nn=negative/n
zz=zero/n
print "%.6f" %pp
print "%.6f" %nn
print "%.6f" %zz