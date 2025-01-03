function calculateSum($numbers) {
  if (!is_array($numbers)) {
    return 0; // Handle non-array input
  }

  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      //Improved Handling of Non-Numeric values
      throw new InvalidArgumentException('Non-numeric value encountered in array.');
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 'a', 4, 5];
try {
  $sum = calculateSum($numbers);
  echo "Sum: " . $sum;
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage();
} 