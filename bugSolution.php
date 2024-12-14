```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $value) {
    if (is_array($value)) {
      $newData[] = processData($value); // Recursive call on a copy
    } else {
      $newData[] = $value;
    }
  }
  return $newData;
}

$data = [1, 2, [3, 4, [5, 6]]];
$result = processData($data);
print_r($result);
```