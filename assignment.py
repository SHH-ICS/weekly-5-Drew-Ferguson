try:
    iterations = int(input().strip())
    if iterations <= 0:
        raise ValueError

    pi = 0
    sign = 1

    for i in range(iterations):
        pi += sign * 4 / (2 * i + 1)
        sign *= -1

    print(pi) 

except (ValueError, TypeError):
    print("Error: Invalid input. Please enter a positive integer.")
