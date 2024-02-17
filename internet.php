<?php
// Personal Information
$firstName = "Joy";
$lastName = "Osa-Daniels";
$phoneNumber = "07018093223";
$email = "naomiiidaniels@gmail.com";
$favoriteColor = "pink";

// Output
echo "Last Name: " . $lastName . "<br>";
echo "First Name: " . $firstName . "<br>";
echo "Phone Number: " . $phoneNumber . "<br>";
echo "Email: " . $email . "<br>";
echo "Favorite Color: " . $favoriteColor . "<br>";
?>



<br>
<?php
// Three string variables
$string1 = "I";
$string2 = "Will";
$string3 = "Succeed";

// Output all strings on a single line with spaces
echo $string1 . " " . $string2 . " " . $string3;
?>


<br>
<?php
$variableone = 10;
$result = $variableone * 45;
$result += 50;
$result *= 3.14;

echo "<p>The result is: $result</p>";
?>

<br>

<br>

 <?php
 printf("pi= %5.3f", M_PI). "<br>";
 printf("%d in binary is %b", 25, 25)."<br>";
 printf("The ASCII Value of %c is %x hex", 72, 72). "<br>";
 printf("%s owns %d computers", "Tom", 5). "<br>";
?>