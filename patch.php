<?php 
class Database  {
    protected $db;
    protected $active_group = 'local';
    protected $link;

    function __construct(){
        $this->db['local'] = array(
            'dsn'   => '',
            'hostname' => 'localhost',//change host name
            'username' => 'root',		//change
            'password' => 'welcome',			//change
            'database' => 'AmexDB',//change
            'dbprefix' => '',
        );
        $this->db['serverskm'] = array(
            'dsn'   => '',
            'hostname' => '109.235.64.249',
            'username' => 'conserv_skm',
            'password' => 'P@ssw0rd',
            'database' => 'conserv_skm',
            'dbdriver' => 'mysqli',
            'dbprefix' => '',
        ); 
    
    $this->link = mysqli_connect($this->db[$this->active_group]['hostname'], $this->db[$this->active_group]['username'], $this->db[$this->active_group]['password'],$this->db[$this->active_group]['database']);
    
    }
    
	function query($query){
        $result=mysqli_query($this->link,$query);
        if($result){
            return $result;
        }else{
            return 0;
        }
    }

    function update($t,$w,$data){ //table_name,Where_condition,data_in_array
        $q2='';foreach($data as $k=>$v){ $q2.=$k.'= "'.$v.'" ';}$q2=rtrim($q2," ,");
        $query= "UPDATE $t SET $q2 WHERE $t.$w";
        $this->query($query);
        return true;
        //echo $query;
        }
    
	
function con(){
        if (!$this->link) {
            die('Could not connect: ' . mysqli_error());
            }
            echo 'Connected successfully';
    }
	
    function __destruct(){
        mysqli_close($this->link);
    }
}
?>

<?php
$q=[
   167,168,3020,4375,
   3662,
   148,958,129,4544,1114,
   1368,1492,
   1952,66,2069,192,139,3854,
   1235,4087,
   1567,127,71,
   82,
   3163,2257,
   1072,965,2767,3876,128,
   2644,1997,
   131,2245,3680,2045,1475

];


$obj=new Database();
foreach($q as $v){
    $w="'CardHolderID=$v'";
    $obj=new Database();
    $sql="UPDATE `CardHolder` SET `IsActive` = '0' WHERE `CardHolder`.`CardHolderID` = $v;";

    //echo $sql."<br>";
    $obj->query($sql);
}