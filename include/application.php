
<?//require_once 'db.php'?>


<?
$con = mysqli_connect('localhost', 'root', '', 'fineliteApp');
$data = $_POST;
$data_category = $data['category'];
$data_price = intval($data['price']);
$data_date = date('Y-m-d H:i:s');






$sql_category_add = "INSERT INTO spending (category, date, price) VALUES ('$data_category','$data_date', '$data_price')";


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
