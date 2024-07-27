<?php
$Name=$_post['name'];
$serialNO=$_post['serialno'];
$Age=$_post['age'];
$WEIGHT=$_post['weight'];
$GENERATICDATA=$_post['generaticdata'];
$BLOODGROUP=$_post['blood group'];
$PHONENUMBER=$_post['phoneno'];
?>
//database connection
$conn = new mysqli('locahost','root','','test')
if($conn->connect_error){
    die(connection failed:',$conn->connec_error);
}else{
    $stmt = $conn->prepare("insert into hospital managmet(name,serialno,age,weight,generaticdata,bloodgroup,phoneno)")
      values(?,?,?,?,?,?,?)"){
        $stmt->bind_param("sssssssi",$name,$serialno,$age,$weight,$generation,$bloodgroup,$phoneno);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();
      }
}
?>
