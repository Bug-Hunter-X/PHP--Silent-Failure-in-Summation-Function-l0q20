function calculateSum($numbers) {
  if (!is_array($numbers)) {
    return 0; // Handle non-array input
  }

  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      //Incorrect Handling of Non-Numeric values
      //Should throw an exception or return an error message
      $sum += 0; //Silently ignores non-numeric values
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 'a', 4, 5];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Output: Sum: 15