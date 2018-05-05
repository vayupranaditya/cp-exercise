#!/bin/python

import sys

def getTotalX(a, b):
    # Complete this function
    totalx=0
    maxa=max(a)
    minb=min(b)
    for x in range (maxa,minb+1):
        for aa in a:
            if x%aa!=0:
                isallatrue=False
                break
            else:
                isallatrue=True
        for bb in b:
            if bb%x!=0:
                isallbtrue=False
                break
            else:
                isallbtrue=True
        if isallatrue and isallbtrue == True:
            totalx+=1
    return totalx
    
n, m = raw_input().strip().split(' ')
n, m = [int(n), int(m)]
a = map(int, raw_input().strip().split(' '))
b = map(int, raw_input().strip().split(' '))
total = getTotalX(a, b)
print(total)