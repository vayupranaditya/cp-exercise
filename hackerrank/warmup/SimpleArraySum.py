#!/bin/python

import sys


n = int(raw_input().strip())
arr = map(int,raw_input().strip().split(' ')) #sampe sini code aslinya
stdout=0
for i in arr:
    stdout=stdout+i
print stdout