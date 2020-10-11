<?php

// this will produce notice if the $_GET is empty array
// $usr_name = $_GET['name'];
$product = $_GET['product'];

$usr_name = $_GET['name'] ?? 'Guest';


//the same but looong way
// if (isset($_GET['name'])) {
//     $usr_name = $_GET['name'];
// } else {
//     $usr_name = 'Guest';
// };

// $parts = parse_url('http://www.example.com?foo=bar');
// var_dump($parts);

$parts = parse_url($_SERVER['REQUEST_URI']);
var_dump($parts);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request in PHP</title>
</head>
<body>
<h1>Requests in PHP</h1>
<h2>Hello, <?= $usr_name ?></h2>
<h2>I will show your product: <?= $product ?></h2>
<?php

var_dump($_GET);

var_dump($_POST);
var_dump($_SERVER);

?>
    
</body>
</html>