#!/bin/python

import sys

def solve(grades):
    # Complete this function
    for aa in grades:
        if aa>=38:
            if aa%5>=3:
                aa=aa-(aa%5)+5
        print aa
    
n = int(raw_input().strip())
grades = []
grades_i = 0
for grades_i in xrange(n):
    grades_t = int(raw_input().strip())
    grades.append(grades_t)
result = solve(grades)
print "\n".join(map(str, result))