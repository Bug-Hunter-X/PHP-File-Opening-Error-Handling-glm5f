# PHP File Opening Error Handling

This repository demonstrates a common error in PHP file handling and its solution.

The `bug.php` file shows incorrect error handling when opening a file using `fopen()`.  The `bugSolution.php` file provides the corrected version with robust error checking.

## Bug
The original code fails to properly check the return value of `fopen()`. If the file doesn't exist, `fopen()` returns `false`, but the code proceeds as if the file was opened successfully, leading to potential errors.

## Solution
The corrected code explicitly checks if `fopen()` returned `false` before proceeding. If it did, an appropriate error message is displayed. This prevents unexpected behaviour and improves the robustness of the code.