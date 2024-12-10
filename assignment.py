import sys

try:
    iterations = int(sys.stdin.readline())
    if iterations <= 0:
        raise ValueError("Iterations must be a positive integer")

    pi = 0
    sign = 1
    denominator = 1

    for _ in range(iterations):
        pi += sign * 4 / denominator
        sign *= -1
        denominator += 2

    print(round(pi, 4))

except ValueError as e:
    print(e)