<?php $username = 'Akash';

//single line comments

/* multiple
line comments */

// variables
$x = null;

// storage/datatype
$a = 'string';    // string
$b = 3434;        // integer
$c = '3434';     // integer as string
$d = true;        // boolean

$e = '';          // empty
$f = null;        // null

$arr1 = [322,'String','music',true];   // index-value pair array
$arr2 = array(322,'String','music',true);

echo $arr1[2];

$arr3 = ['Rollno'=>'344', 'name'=>'Aakash','age'=> 24];  //key-value pair array
echo $arr3['name'];

// input / output
echo 'Hello', 'My', 'name', 'is','Akash';
$var = print('Hello'. 'My'. 'name'. 'is'.'Akash');

//operators
        // arithmatic operators => +,-,*,/,%.++,--
        // comparison operators => >,<,>=,<=,==,===,!=
        // logical operators => &&, ||, !
        // assignment operators => =,+=,-=,*=,/=
        // conditional operator => condition ? true statements : false stamtements;

// branching - if statement, if...else statement, if...else if...else statement, switch...case
if($age>=18) {
    echo "Age greater than or equal to 18";
}

if($age>=18) {
    echo "Eligible to drive";
} else {
    echo "Not eligible to drive";
}

if($age>=18 && $ll=true)
{
    echo "Eligible to drive";
}
else if($age>=18 && $ll!=true) {
    echo "Eligible to apply for learners";
}
else if($age<18) {
    echo "Age not compatible";
}
else {
    echo "Issue with the application";
}

$grade = 'A+';
Switch($grade) {
    case 'A+':
        print("MArks between 95 and 100 in total");
        break;
    case 'A':
        print("MArks between 85 and 95 in total");
        break;
    case 'B+':
        print("Marks between 70 and 85 in total");
        break;
     case 'B':
        print("Marks between 70 and 85 in total");
        break;
     case 'C':
        print("Marks between 70 and 85 in total");
        break;
    
    case 'D':
        print("Marks between 70 and 85 in total");
        break;
    case 'F':
        print("Marks between 70 and 85 in total");
        break;
    default:
         print("Grade not readable");
    
}


// looping => while loop, for loop, do...while loop

$i=100;
while($i>=0) {
    if($i%2==0) {
        print($i);
    }
    $i--;
}

$i=1000;
do {
    if($i%2==0) {
        print($i);
    }
    $i++;
}
while($i<=100); 


for($i=100; $i>=0;$i==) {
    if($i%2==0) print($i);
}
// functions
    function myfunc($param1,$param2) {
        return $param1*$param2;    
    } 

    
?>


<html>
    <head>
        <title>PHP Tutorial</title>
    </head>
    <body>
        <h3>Hello <?php echo $username ?></h3>
    </body>
</html>