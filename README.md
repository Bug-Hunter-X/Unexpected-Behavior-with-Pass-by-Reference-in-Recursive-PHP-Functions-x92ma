# PHP Recursive Function Pass-by-Reference Issue

This repository demonstrates a potential issue with using pass-by-reference in recursive PHP functions. The `processData` function recursively processes an array, modifying its elements. While seemingly straightforward, the pass-by-reference behavior can lead to unintended side effects if not understood and handled properly.

## Bug Description
The recursive function `processData` uses pass-by-reference (`&$value`). When it processes nested arrays, the modification of elements within nested arrays affects the original array in unexpected ways. This can lead to subtle bugs and difficult-to-debug issues, particularly when dealing with complex data structures.

## Solution
The solution addresses the issue by avoiding direct modification of the original array.  Instead, it creates a copy of the processed array before returning it.