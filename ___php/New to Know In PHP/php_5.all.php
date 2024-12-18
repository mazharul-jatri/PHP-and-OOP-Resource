<?php

// 🚀 PHP 5.0 (Released: July 13, 2004)

// Key Features:

// 1) Object-Oriented Programming (OOP)
//    * Full OOP support including classes, objects, and methods.
class User
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        echo "Hello, " . $this->name;
    }
}

$user = new User("John");
$user->greet();  // Outputs: Hello, John



// 2) PHP Data Objects (PDO)
//    * Introduced PDO to provide a consistent API for database interaction.
$pdo = new PDO('mysql:host=localhost;dbname=testdb', 'username', 'password');
$stmt = $pdo->query('SELECT * FROM users');
while ($row = $stmt->fetch()) {
    echo $row['name'];  // Outputs user names from the database.
}



// 3) Exception Handling
//    * PHP 5 introduced try-catch blocks for exception handling.
try {
    throw new Exception("An error occurred!");
} catch (Exception $e) {
    echo $e->getMessage();  // Outputs: An error occurred!
}



// 4) Improved XML Support
//    * SimpleXML extension was introduced for easier XML manipulation.
$xml = simplexml_load_string('<root><name>John</name></root>');
echo $xml->name;  // Outputs: John



// 5) Improved Performance (Zend Engine 2)
//    * Major performance improvements and memory management.
echo "PHP 5 is faster and more memory-efficient!";




// 🚀 PHP 5.1 (Released: November 24, 2005)

// Key Features:

// 1) **PDO Support** for more databases.
//    * Expanded PDO support for more database systems.
$pdo = new PDO('pgsql:host=localhost;dbname=testdb', 'username', 'password');
$stmt = $pdo->query('SELECT * FROM users');
while ($row = $stmt->fetch()) {
    echo $row['name'];  // Outputs user names from PostgreSQL database.
}



// 2) **DateTime Class**
//    * New DateTime class for easier date manipulation.
$date = new DateTime('2024-12-18');
echo $date->format('Y-m-d');  // Outputs: 2024-12-18



// 🚀 PHP 5.2 (Released: November 2, 2006)

// Key Features:

// 1) **Filter Extension**
//    * New filter extension for input validation and sanitization.
$email = "test@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid email address";  // Outputs: Valid email address
} else {
    echo "Invalid email address";
}



// 2) **JSON Support**
//    * Introduced JSON extension for easy JSON encoding and decoding.
$json = json_encode(['name' => 'John', 'age' => 30]);
echo $json;  // Outputs: {"name":"John","age":30}



// 🚀 PHP 5.3 (Released: June 30, 2009)

// Key Features:

// 1) **Namespaces**
//    * Introduced namespaces to organize code and avoid name conflicts.
namespace MyApp;

class User {
    public function greet() {
        echo "Hello from MyApp namespace!";
    }
}

$user = new User();
$user->greet();  // Outputs: Hello from MyApp namespace!



// 2) **Late Static Bindings**
//    * Allows methods to refer to the class they were called from, instead of the class they were defined in.
class Base {
    public static function test() {
        echo "Base class method";
    }
}

class Derived extends Base {
    public static function test() {
        echo "Derived class method";
    }
}

Derived::test();  // Outputs: Derived class method



// 🚀 PHP 5.4 (Released: March 1, 2012)

// Key Features:

// 1) **Short Array Syntax**
//    * Introduced the short array syntax `[]` instead of `array()`.
$array = [1, 2, 3, 4];
print_r($array);  // Outputs: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )



// 2) **Traits**
//    * Introduced traits to share functionality between classes.
trait Greet {
    public function greet() {
        echo "Hello, world!";
    }
}

class User {
    use Greet;
}

$user = new User();
$user->greet();  // Outputs: Hello, world!



// 🚀 PHP 5.5 (Released: June 20, 2013)

// Key Features:

// 1) **Generators**
//    * Introduced generators for creating iterators.
function getNumbers() {
    yield 1;
    yield 2;
    yield 3;
}

foreach (getNumbers() as $number) {
    echo $number . ' ';  // Outputs: 1 2 3
}



// 2) **Password Hashing API**
//    * Introduced `password_hash()` and `password_verify()` for secure password storage.
$password = password_hash('my_secure_password', PASSWORD_DEFAULT);
echo $password;  // Outputs the hashed password



// 🚀 PHP 5.6 (Released: August 28, 2014)

// Key Features:

// 1) **Exponentiation Operator**
//    * Introduced the `**` operator for exponentiation.
echo 2 ** 3;  // Outputs: 8



// 2) **Argument Unpacking**
//    * Introduced argument unpacking with `...`.
function sum(...$numbers) {
    return array_sum($numbers);
}

echo sum(1, 2, 3);  // Outputs: 6



// 3) **Use of `self` and `parent` for static type hints**
//    * You can now use `self` and `parent` in method type declarations.
class ParentClass {
    public static function hello(): self {
        return new self();
    }
}

class ChildClass extends ParentClass {
}

$child = ChildClass::hello();
var_dump($child);  // Outputs: object(ChildClass)#1 (0) {}

// End of PHP 5.x series
?>
