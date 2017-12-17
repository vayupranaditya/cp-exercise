#!/bin/python

import sys


n = int(raw_input().strip())
a = []
for a_i in xrange(n):
    a_temp = map(int,raw_input().strip().split(' '))
    a.append(a_temp)
#start here!
primary=0
secondary=0
for aa in range(0,n):
    primary=primary+a[aa][aa]
for bb in range(0,n):
    secondary=secondary+a[bb][n-1-bb]
print abs(primary-secondary)