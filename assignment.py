import sys

try:
    iterations = int(sys.stdin.readline())
    pi = 0
    sign = 1
    denominator = 1

    for _ in range(iterations):
        pi += sign * 4 / denominator
        sign *= -1
        denominator += 2

    print(pi)

except ValueError:
    print("Invalid input")
