#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'matrixRotation' function below.
#
# The function accepts following parameters:
#  1. 2D_INTEGER_ARRAY matrix
#  2. INTEGER r
#

def matrixRotation(matrix, r):
    oneDimensionArrs = []
    
    # Transform to 1d arr
    for layerNum in range(0, len(matrix) // 2):
        oneDimensionArrs.append(collectToRight(matrix, layerNum) +
            collectDown(matrix, layerNum) +
            collectToLeft(matrix, layerNum) +
            collectUp(matrix, layerNum)
        )
    
    # Shift
    shiftedOneDArray = []
    for arr in oneDimensionArrs:
        shiftStep = r % len(arr)
        shiftedOneDArray.append(arr[shiftStep:] + arr[:shiftStep])
    
    # Transform back
    result = []
    for i in range(len(matrix)):
        result.append([])
        for j in range(len(matrix[i])):
            result[i].append(None)
    
    for layerNum in range(0, len(matrix) // 2):
        fillToRight(shiftedOneDArray, layerNum, result)
        fillDown(shiftedOneDArray, layerNum, result)
        fillToLeft(shiftedOneDArray, layerNum, result)
        fillUp(shiftedOneDArray, layerNum, result)
    
    for row in result:
        for elem in row:
            print(elem, end=' ')
        print()
    
    
def collectToRight(matrix, layerNum):
    arr = []
    for j in range(layerNum, len(matrix[layerNum]) - layerNum - 1):
        arr.append(matrix[layerNum][j])
    return arr

def collectDown(matrix, layerNum):
    arr = []
    for i in range(layerNum, len(matrix) - layerNum - 1):
        arr.append(matrix[i][len(matrix[i]) - layerNum - 1])
    return arr

def collectToLeft(matrix, layerNum):
    arr = []
    for j in range(len(matrix[layerNum]) - layerNum - 1, layerNum, -1):
        arr.append(matrix[len(matrix) - layerNum - 1][j])
    return arr
    
def collectUp(matrix, layerNum):
    arr = []
    for i in range(len(matrix) - layerNum - 1, layerNum, -1):
        arr.append(matrix[i][layerNum])
    return arr

def fillToRight(shiftedArrs, layerNum, newArr):
    for j in range(layerNum, len(newArr[0]) - layerNum - 1):
        newArr[layerNum][j] = shiftedArrs[layerNum].pop(0)
    return newArr

def fillDown(shiftedArrs, layerNum, newArr):
    for i in range(layerNum, len(newArr) - layerNum - 1):
        newArr[i][len(newArr[0]) - layerNum - 1] = shiftedArrs[layerNum].pop(0)
    return newArr

def fillToLeft(shiftedArrs, layerNum, newArr):
    for j in range(len(newArr[layerNum]) - layerNum - 1, layerNum, -1):
        newArr[len(newArr) - layerNum - 1][j] = shiftedArrs[layerNum].pop(0)
    return newArr

def fillUp(shiftedArrs, layerNum, newArr):
    for i in range(len(newArr) - layerNum - 1, layerNum, -1):
        newArr[i][layerNum] = shiftedArrs[layerNum].pop(0)
    return newArr

if __name__ == '__main__':
    first_multiple_input = input().rstrip().split()

    m = int(first_multiple_input[0])

    n = int(first_multiple_input[1])

    r = int(first_multiple_input[2])

    matrix = []

    for _ in range(m):
        matrix.append(list(map(int, input().rstrip().split())))

    matrixRotation(matrix, r)
