<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
$filepath = realpath (dirname(__FILE__));
include_once($filepath."/class.Connection.php");
$xml=simplexml_load_file("test.xml");        



$con=new Connection();
$con->open();


 foreach ($xml as $row) {
    $ReligionKey=$row->ReligionKey;
    $Key=$row->Key;
    $Value=$row->Value;
    $sql="INSERT INTO `db_matrimony`.`master_caste` (`ReligioinID`, `ID`, `Value`) VALUES ('".$ReligionKey."', '".$Key."', '".$Value."');;";
    echo $sql.'<br/>';
    $result=  mysql_query($sql) or die(mysql_error());
}

$con->close();
echo 'Successfully Inserted';

?>
    </body>
</html>
