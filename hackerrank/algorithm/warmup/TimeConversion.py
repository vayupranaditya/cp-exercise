#!/bin/python
from datetime import datetime
import sys


time = raw_input().strip()
#start here!
waktu=datetime.strptime(time, "%I:%M:%S%p")
print waktu.strftime("%H:%M:%S")