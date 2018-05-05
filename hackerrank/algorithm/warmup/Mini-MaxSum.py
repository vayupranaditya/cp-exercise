#!/bin/python

import sys

arr = map(int, raw_input().strip().split(' '))
total=0
minimum=0
maximum=0
for i in arr:
    total=total+i
minimum=total-max(arr)
maximum=total-min(arr)
print minimum, maximum