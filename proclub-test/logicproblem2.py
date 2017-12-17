t=int(input())
for tx in range(0,t):
	nab=input().split(" ")
	n=int(nab[0])
	a=int(nab[1])
	b=int(nab[2])
	arr=input().split(" ")
	for nx in range(0,n-1):
		arr[nx]=int(arr[nx])
	length=[]
	length.insert(tx,0)
	for cn in range(0,n-1):
		nx=cn
		arrlength=0
		print(arr[cn])
