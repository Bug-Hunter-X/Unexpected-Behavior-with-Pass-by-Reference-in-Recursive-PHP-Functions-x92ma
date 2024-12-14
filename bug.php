```php
function processData(array $data): array {
  foreach ($data as &$value) {
    if (is_array($value)) {
      $value = processData($value); // Recursive call
    }
  }
  return $data;
}

$data = [1, 2, [3, 4, [5, 6]]];
$result = processData($data);
print_r($result);
```