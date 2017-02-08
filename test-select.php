<?php



echo "begin database";
$link = mysqli_connect($endpoint,"controller","ilovebunnies","itmo544db") or die("Error " . mysqli_error($link));

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$link->real_query("SELECT * FROM items");
$res = $link->use_result();

echo "Result set order...\n";
while ($row = $res->fetch_assoc()) {
    echo " id = " . $row['id'] . "\n";
    echo " phone = " . $row['phone'] . "\n";
    echo " email = " . $row['email'] . "\n";
    echo " s3finishedurl = " . $row['s3finishedurl'] . "\n";            
}


$link->close();

?>