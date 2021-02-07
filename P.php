<?php
class script{

public $con;

public function __construct(){

        $server = "lab6demo.cvpqg6bemcri.ap-south-1.rds.amazonaws.com";
        $user = "lab6demo";
        $pass = "lab6demo";
        $db = "lab6";


        $this->con = mysqli_connect($server,$user,$pass,$db) or die("unable to connect");
}

public function add($name,$price){
        $sql = "insert into Student(usn,name) values('".urlencode($name)."','".urlencode($price)."')";
        $res = mysqli_query($this->con,$sql) or die("Unable to perform operation");
        if($res){
                echo "Data added!";
        }else{
                echo "Operational failure!";
        }

}


public function getdata(){
        $sql = "select * from Student";
        $res = mysqli_query($this->con,$sql) or die("unable to fetch");
        $cp = mysqli_fetch_assoc($res);
//var_dump($cp);
        if(count($cp)){
                echo '
                <table>
                        <tr>
                                <th>USN</th>
                                <th>Name</th>
                        </tr>
                ';
                while($row = mysqli_fetch_array($res)){

                        echo '<tr>
                                <td>'.urldecode($row['usn']).'</td>
                                <td>'.urldecode($row['name']).'</td>
                        </tr>';
                }
                echo '
                        </table>
                        ';
        }else{
                echo "No data found!";
        }

}




}
?>


<html>
<head>
        <title>Cloud Computing RDS with PHP</title>
</head>
<body bgcolor="violet">

<form method="post">
<div align="center"><h1>Student details</h1>
<p>USN: <input type="text" name="bname"></p>
<p>Name: <input type="text" name="bprice"></p>
<p><input type="submit" name="sub"></p>
</div></form>
<?php
$script = new script();
if(isset($_POST['sub'])){
        //$script = new script();
        $script->add($_POST['bname'],$_POST['bprice']);
}
$script->getdata();


?>


</body>
</html>
