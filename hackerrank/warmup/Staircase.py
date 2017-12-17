#!/bin/python

import sys


n = int(raw_input().strip())
#start here!
for i in range(0,n):
    for j in range(n-i,1,-1):
        sys.stdout.write(" ")
    for k in range(0,i+1):
        sys.stdout.write("#")
    print;