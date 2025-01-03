# PHP: Silent Failure in Summation Function
This repository demonstrates a common, yet subtle, error in PHP: the silent failure of a function when encountering unexpected input. The `calculateSum` function attempts to sum an array of numbers; however, it fails to handle non-numeric input gracefully. Instead of raising an error or providing informative feedback, it silently ignores non-numeric values, leading to incorrect results and potentially masking bugs. 

The `bug.php` file contains the erroneous implementation, while `bugSolution.php` shows a corrected version that addresses the issue.
