try:
    # Read number of iterations
    iterations = int(input().strip())

    # Check for invalid input (negative or non-integer)
    if iterations < 0:
        raise ValueError("Iterations cannot be negative.")

    # Leibniz formula for calculating pi
    pi = 0
    sign = 1

    # Loop through iterations
    for i in range(iterations):
        pi += sign * 4 / (2 * i + 1)
        sign *= -1  # Alternate the sign for each term

    # Print the result
    print(pi)

except (ValueError, TypeError) as e:
    # Handle invalid input errors
    print(f"Error: Invalid input. Please enter a positive integer or 0. ({e})")
