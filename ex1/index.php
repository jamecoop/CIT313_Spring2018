<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 1</title>
</head>

<body>

<!-- Use a require or include for the document header and footer.  These document should reside in a separate includes folder.-->
<?php
    include('includes/header.inc.php');


//Create an array that assigns your specific preferences to these keys:  your name, favorite color, favorite movie, favorite book, favorite website-->


    $myArray = array('$myName' => 'James', '$favColor' => 'Red', '$favMovie' => 'MacGruber', '$favBook' => 'Fire and Fury', '$favWebsite' => 'reddit.com');



// Get the value of your name out of the array and print it to the screen in a an <h1> tag.-->

    $bigName = $myArray['$myName'];
    echo "<h1>$bigName</h1>";


//Create a function that uses a loop to return every value in the array EXCEPT your name in a unordered list (<ul>) to the screen-->

    foreach($myArray as $item) {
        if ( $item == "James" )
            continue;
        echo "<ul><li>$item<br></li></ul>";
    }
//Print the results of the function to the screen.-->


// include footer
    include('includes/footer.inc.php');
?>

</body>

</html>