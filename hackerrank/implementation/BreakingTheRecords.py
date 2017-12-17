#!/bin/python

import sys

def getRecord(s):
    # Complete this function
    lowest=s[0]
    highest=s[0]
    newhigh=0
    fail=0
    for aa in s:
        if aa>highest:
            highest=aa
            newhigh+=1
        elif aa<lowest:
                lowest=aa
                fail+=1
    print newhigh, fail

n = int(raw_input().strip())
s = map(int, raw_input().strip().split(' '))
result = getRecord(s)
print " ".join(map(str, result))