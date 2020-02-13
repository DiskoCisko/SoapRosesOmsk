
$email = $_POST['email'];
$numb = $_POST['numb'];
$color = $_POST['color'];
$comm = $_POST['comm'];

$email = htmlspecialchars($email);
$numb = htmlspecialchars($numb);
$color = htmlspecialchars($color);
$comm = htmlspecialchars($comm);

$email = urldecode($email);
$numb = urldecode($numb);
$color = urldecode($color);
$comm = urldecode($comm);

$email = trim($email);
$numb = trim($numb);
$color = trim($color);
$comm = trim($comm);

echo $email;
echo "<br>";
echo $numb;
echo "<br>";
echo $color;
echo "<br>";
echo $comm;
