
ul.nav>li*5>a
<ul class="nav">
    <li><a href=""></a></li>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
</ul>


table.tbl1>tr*3>td*5>
<br><br>



<?php
/**
 * Created by PhpStorm.
 * User: 晓明
 * Date: 2017/3/22
 * Time: 13:14
 */

define("Marvin","betterman",true);
echo marvin;
echo "<br>";

function foo($arg1 = '', $arg2 = '') {
    echo "arg1: $arg1\n";
    echo "<br>";
    echo "arg2: $arg2\n";
    echo "<br>";
}
foo('hello','world');
foo('hello','world','yes');
foo( );

for($counter = 1; $counter <= 6; $counter++)        //循环6次
{
    print("<B>counter is $counter</B><BR>\n");  //打印6次
}

$x=5;
$y=3;
$z=$x+$y;
echo $z;
$username="wangtao";
echo $username;


$x1=5;
$y1=10;

function myTest()
{
    global $x1,$y1;
    $y1=$x1+$y1;
    echo marvin;
    echo "<br>";
}

myTest();
echo $y1; // 输出 15
echo "<br>";

for ($i = 6; $i<15;$i++)
{
    echo $i;
}
echo "<br>";

$txt1="hello world";
$txt2="I love u";
$txt3="1+1";
$result=1+1;
echo $txt1." ! ".$txt2."<br>";
echo $txt3."=".$result;

echo "<br>";
echo strlen("yes i am ");
echo "<br>";


echo strpos("you are better man","er");
echo "<br>";

$a1="you";
$b1=$a1."haha";
$a1.=" get out!";
echo $b1;
echo "<br>";
echo $a1;
echo "<br>";


// PHP 5.3+ 版本写法
$test = 'fast';
$username = $test ?: 'nobody';
$dsf=$test ?: 'sdf';
echo $dsf,PHP_EOL;
echo $username, PHP_EOL;

$m=date("h");
if ($m<"5")
{
    print "morning!";
    echo "<br>".$m;
}
else
{
    print "no";
}

echo "<br>";

$likecolor="red";
switch ($likecolor)
{
    case "red":
        echo "yeah red,你喜欢的是红色";
        break;
    case "blue":
        echo "it's blue";
        break;
    case "white":
        echo "it's white";
        break;
    default:
        echo "you like nothing!";
}
echo "<br>";

$cars=array("buick","BMW","TOYOTO","Benz","Audi");
rsort($cars);
print_r($cars);
echo "<br>";
echo $cars[3];
echo "<br>";
for ($j=0;$j<count($cars);$j++)
{
    echo "第".$j."辆车是".$cars[$j];
    echo "<br>";
}

//关联数组
$age=array("marvin"=>"35","Bobo"=>"22","jack"=>"44");
echo "Bobo的年龄是：".$age['Bobo'];
echo "<br>";
foreach ($age as $x=>$x_value){
    echo "key=".$x.",value=".$x_value;
    echo "<br>";
}

$m=3;
$n=5;
function addtion()
{
    $GLOBALS['z']=$GLOBALS['m']+$GLOBALS['n'];
}
addtion();
echo $GLOBALS['z'];
ECHO "<BR>";

echo $_SERVER['PHP_SELF'];
ECHO "<BR>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";

$f=1;
do{
    $f++;
    echo $f;
}
while($f<5);

echo "<br>";
echo "这是第".__LINE__."行";
echo "<br>";
echo "该文件的路径是：".__FILE__;
echo "<br>";

class test {
    function _print() {
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ ;
    }
}
$t = new test();
$t->_print();
echo "<br>";

setcookie("username","marvin",time()+3600);
echo "<br>";
if (isset($_COOKIE["username"]))
{
    echo "欢迎".$_COOKIE["username"]."光临<br>";
}
else {echo "普通访客。<br>";}


session_start();
if (isset($_SESSION["views"]))
{
    $_SESSION["views"]=$_SESSION["views"]+1;
}
else{
    $_SESSION["views"]=1;
}
echo "浏览量：".$_SESSION["views"]."<br>";
//unset($_SESSION["views"]);
//session_destroy();

$int="d223";
if (!filter_var($int,FILTER_VALIDATE_INT))
{
    ECHO "不是一个合法的整数！";
}
else
{
    echo "是个整数！";
}
echo "<br>";

$jarr=array('a'=>1,'b'=>2,'c'=>3);
echo  json_encode($jarr);
echo "<br>";

class Emp {
    public $name = "";
    public $hobbies  = "";
    public $birthdate = "";
}

$e = new Emp();
$e->name = "sachin";
$e->hobbies  = "sports";
$e->birthdate = "8/5/1974 12:20:03 p";
echo json_encode($e);
echo "<br>";

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
var_dump(json_decode($json));
var_dump(json_decode($json),true);



$servername = "localhost";
$username = "marvin";
$password = "wescom";
$dbname = "cooii";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('yu', 'xiaoming', 'yuxiaoming@cooii.cc')";
    //使用 exec() ，没有结果返回
    $conn->exec($sql);


    // 开始事务，多任务处理
/*   $conn->beginTransaction();
    // SQL 语句
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) 
    VALUES ('John', 'Doe', 'john@example.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) 
    VALUES ('Mary', 'Moe', 'mary@example.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) 
    VALUES ('Julie', 'Dooley', 'julie@example.com')");

    // 提交事务
    $conn->commit();*/

    echo "新记录插入成功";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}




//显示数据表所有记录到网页的表格上
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Reg date</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM MyGuests");
    $stmt->execute();

    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
    $dsn = null;
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";


$con=mysqli_connect("localhost","marvin","wescom","cooii");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

//mysqli_query($con,"UPDATE Myguests SET lastname='huang' WHERE id=4 ");
mysqli_query($con,"delete from Myguests  WHERE id=3 ");

mysqli_close($con);

//phpinfo();
date_default_timezone_set('PRC');
die(date('Y-m-d H:i:s'));




























?>
<br><br>
