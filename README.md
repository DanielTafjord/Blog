# Ungkyrkja-Nettside

# TODO

John Ingve:

Daniel:
- Style index
- Account: upload and delete for images must be hidden from non-admins

# Using error class

<p>Add this</p>
```PHP
use Project\Error\error;
include('error.php');
```

```PHP
error::report('File name', 'Error message', 'Error type', 'IP', 'date');
```
<p>Example:</p>

```PHP
error::report($_SERVER['PHP_SELF'], 'Could not connect to database', 'Fatal', $_SERVER['REMOTE_ADDR'], date('Y-m-d h:i:sa'));
```
