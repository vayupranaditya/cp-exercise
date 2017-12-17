#!/bin/python

import sys


x1,v1,x2,v2 = raw_input().strip().split(' ')
x1,v1,x2,v2 = [int(x1),int(v1),int(x2),int(v2)]
#start here!
for aa in range(0,999999):
    if x1+(aa*v1)==x2+(aa*v2):
        ifyes=True
        break
    else:
        ifyes=False
if ifyes==True:
    print "YES"
else:
    print "NO"