```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    // Check if the value is numeric before adding it to sum
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately (e.g., log an error, skip the value, or throw an exception)
      error_log('Warning: Non-numeric value encountered: ' . $number);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; 
```