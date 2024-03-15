# Database connection error

## Database connection shows successfull from command line but show error in browser.

Browser error:
```
Error including: mysqli_sql_exception: Access denied for user 'root'@'localhost' (using password: NO) in /Applications/XAMPP/xamppfiles/htdocs/php-crud/students/database.php:8 Stack trace: #0 /Applications/XAMPP/xamppfiles/htdocs/php-crud/students/database.php(8): mysqli->__construct('localhost', 'root', Object(SensitiveParameterValue), 'php_project') #1 /Applications/XAMPP/xamppfiles/htdocs/php-crud/students/index.php(4): include('/Applications/X...') #2 /Applications/XAMPP/xamppfiles/htdocs/php-crud/index.php(5): include('/Applications/X...') #3 {main}Hello world
```

This error is showing database password incorrect error even though the password is correct and runs successful from terminal.

<br>
<br>

## phpmyadmin is not getting opened; throws error

```

Welcome to phpMyAdmin

Error
MySQL said: <Documentation>

Cannot connect: invalid settings.
 mysqli::real_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: NO)
 phpMyAdmin tried to connect to the MySQL server, and the server rejected the connection. You should check the host, username and password in your configuration and make sure that they correspond to the information given by the administrator of the MySQL server.

```

throws the same password no eror.

<br>
<br>

## Retrieving DB data gets successful when ran from terminal

Code from "students/index.php" file : 

```php
$sql = "SELECT * FROM users";

$data = $connection->query($sql);

if($data->num_rows>0){
    while($element=$data->fetch_assoc()){
        print_r($element);
    }
}
```

This prints :

```
Array
(
    [id] => 10
    [name] => Nayan Dada
    [email] => nayan@dada.nk
)
Array
(
    [id] => 11
    [name] => Prashant Gautam
    [email] => prashant@techenthusiast.com
)
Array
(
    [id] => 12
    [name] => Mukesh Ambani
    [email] => biharimukesh@gmail.com
)
Array
(
    [id] => 13
    [name] => chipin chattarai
    [email] => chipin@bipin.com
)
Array
(
    [id] => 14
    [name] => Rajesh Baitha
    [email] => rajesh@rajendra.com
)
Array
(
    [id] => 15
    [name] => hero dada
    [email] => hero@dada
)
Array
(
    [id] => 16
    [name] => wow wow
    [email] => wow@wow
)
Array
(
    [id] => 17
    [name] => nayan khanal
    [email] => nk@nk
)
```

this output.

### xampp is running at 3038 port instead of 3036. When i try to change the port is doesnot allow saying:

```
Cannot bind to port 3036.It is probably taken by another application or you don't have enough priviliges.
```