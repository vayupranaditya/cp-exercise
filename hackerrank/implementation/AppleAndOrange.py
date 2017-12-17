#!/bin/python

import sys


s,t = raw_input().strip().split(' ')
s,t = [int(s),int(t)]
a,b = raw_input().strip().split(' ')
a,b = [int(a),int(b)]
m,n = raw_input().strip().split(' ')
m,n = [int(m),int(n)]
apple = map(int,raw_input().strip().split(' '))
orange = map(int,raw_input().strip().split(' '))
getapple=0
getorange=0
for mm in apple:
    if a+mm>=s and a+mm<=t:
        getapple+=1
for nn in orange:
    if b+nn>=s and b+nn<=t:
        getorange+=1
print getapple
print getorange