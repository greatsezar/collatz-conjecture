# Collatz Conjecture (3x+1 Problem) Implementation

PHP implementation of the famous unsolved mathematical problem.

## Features
- Calculates the sequence for any positive integer
- Tracks:
  - Full sequence
  - Maximum value reached
  - Total iterations

## Usage
```php
$result = collatz(5);
echo json_encode($result, JSON_PRETTY_PRINT);
