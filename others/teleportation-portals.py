def d(a, b):
    if (a < b):
        return int(max(D[a:b]))
    elif (b < a):
        return int(max(D[b:a]))
    else:
        return 0

T = int(input())
for Ti in range(T):
    (N, P1, P2) = (int(x) for x in input().split())
    A = [int(x) for x in input().split()]

    AOrdered = A.copy()
    AOrdered.extend([P1, P2])
    AOrdered = list(set(AOrdered))

    D = []
    for i in range(len(AOrdered) - 1):
        D.append(AOrdered[i+1] - AOrdered[i])

    for Ai in A:
        AIndex = AOrdered.index(Ai)
        P1Index = AOrdered.index(P1)
        P2Index= AOrdered.index(P2)
        print(min(d(P1Index, AIndex), d(P2Index, AIndex)), end = ' ')
    print()
