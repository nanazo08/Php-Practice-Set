# Link for Part2 Github 
## https://github.com/nanazo08/Word-Frequency-counter

# Php_Practice_Sets_JUANZO

## Question 1: What is the output of **print_r($person);**?

    print_r('Hello');
    print_r([1,2,3]);

    class Person {
        public $name;
        public $age;
    }

    $person = new Person();
    $person->name = "Alice";
    $person->age = 25;

    print_r($person);

## Output:

    HelloArray
    (
        [0] => 1
        [1] => 2
        [2] => 3
    )
    Person Object
    (
        [name] => Alice
        [age] => 25
    )


## Question 2: What is the output of **var_dump($person);**?

    print_r('Hello');
    print_r([1,2,3]);

    class Person {
        public $name;
        public $age;
    }

    $person = new Person();
    $person->name = "Alice";
    $person->age = 25;

    $var_dump($person);

## Output:

    HelloArray
    (
        [0] => 1
        [1] => 2
        [2] => 3
    )
    object(Person)#1 (2) {
    ["name"]=>
    string(5) "Alice"
    ["age"]=>
    int(25)
    }


## Question 3: What is the output of **var_dump($cashOnHand);**?

    $name = 'Brad';
    $age = 40;
    $hasKids = true;
    $cashOnHand = 10.5;

    var_dump($cashOnHand);

## Output:

    float(10.5)

## Question 4: What character is used to concatenate strings?

    echo "$name is $age years old\n";
    echo "{$name} is {$age} years old\n";
    echo "<h3>" . $name . " is " . $age . " years old</h3>\n";

## Output:

    echo "The dot (.) operator is used to concatenate strings.\n"

## Question 5: What is the output of **echo HOST;**?

    define("HOST", "localhost");
    define("USER", "root");

    echo HOST;

## Output:

    localhost


## Question 6: How will you define in PHP the variable PI with valuw 3.1416?

    define("PI", 3.1416);
    echo "PI is defined as: " . PI ;

## Output:

    3.1416

## Question 7: What is the output of **echo $numbers[3] + $numbers[4];**?

    $colors = ["red", "green", "blue"];
    echo $colors[0];
    $numbers = [1, 2, 3, 4, 5];

    echo $numbers[3] + $numbers[4];

## Output:

    red9

## Question 8: What is the output of **echo $color[3];**?

    $colors = ["red", "green", "blue"];
    echo $colors[3];

## Output:

    Warning: Undefined array key 3

## Question 9: What are the keys in $person array?

    $person = [
        "first_name" => "John";
        "last_name" => "Doe";
        "age" => 30
    ];

    echo $person["first_name"];

## Output:

    John

## Question 10: In PHP, how will you change the green into white in $colors array?

    $colors = [
        1 => 'red',
        2 => 'green',
        3 => 'blue'
    ];

    $color[2] = "white";

    print_r($colors);

## Output:

    Array
    (
        [1] => red
        [2] => white
        [3] => blue
    )

## Question 11: What is the output of **echo $hex['red'];**?

   $hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f'
    ];

    echo $hex['red'];

## Output:

    #f00

## Question 12: What is the output of **echo $matrix[1][2];**?

    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    echo $matrix[1][2];

## Output:

    6

## Question 13: What is the output of **echo $people[0]['first_name'];**?

   $person1 = [
    'first_name' => 'Maeve',
    'last_name' => 'Reid',
    'email' => 'reid@gmail.com'
    ];

    $people = [
        $person1,
        [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@gmail.com'   
        ],
        [
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane@gmail.com'   
        ],
    ];

    echo $people[0]['first_name'];

## Output:

    Maeve

## Question 14: What is the output of **echo $people[2]['email'];**?

       $person1 = [
    'first_name' => 'Maeve',
    'last_name' => 'Reid',
    'email' => 'reid@gmail.com'
    ];

    $people = [
        $person1,
        [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@gmail.com'   
        ],
        [
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane@gmail.com'   
        ],
    ];

    echo $people[2]['email'];

## Output:

    jane@gmail.com

## Question 15: What is the output of **var_dump($chunkedArray);**?

    $fruits = ['apple', 'banana', 'orange'];

    echo count($fruits) . "\n";
    
    echo in_array('banana', $fruits) ? 'true' : 'false';

    $fruits[] = 'grape';
    array_push($fruits, 'mango', 'raspberry');
    array_unshift($fruits, 'kiwi'); 
    
    array_pop($fruits); 
    array_shift($fruits); 

    unset($fruits[2]); 
    
    $chunkedArray = array_chunk($fruits, 2);
    
    var_dump($chunkedArray);

## Output:

    truearray(2) {
    [0]=>
    array(2) {
        [0]=>
        string(5) "apple"
        [1]=>
        string(6) "banana"
    }
    [1]=>
    array(2) {
        [0]=>
        string(5) "grape"
        [1]=>
        string(5) "mango"
    }
    }
