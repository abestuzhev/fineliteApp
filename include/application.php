
<?//require_once 'db.php'?>


<?
$con = mysqli_connect('localhost', 'root', '', 'fineliteApp');
$data = $_POST;
$data_category = $data['category'];
$data_price = intval($data['price']);

var_dump($data);





$sql_category_add = "INSERT INTO app (category, price) VALUES ('$data_category ', '$data_price ')";


$result = mysqli_query($con, $sql_category_add);

if(!$result){
    $error = mysqli_error($con);
    print_r("Ошибка MySQL: " . $error);
}



//exit();

?>
<pre>

<?var_dump($data);?>
</pre>
