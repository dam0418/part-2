<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=""UTF-8">
    <meta name=""viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$x = "GENG nam nay vo dich CKTG";
// Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
echo "Dộ dài chuỗi:". strlen($x),"<br>";
//Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
echo "Số từ:". str_word_count($x),"<br>";
//Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
echo "Đảo ngược chuỗi:". strrev($x),"<br>";
//Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
echo 'Vị trí ký tự "c"'. strrpos($x, "c") ."<br>";
// Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
echo str_replace("GENG","Jeong Jihoon", $x);
echo "<br>";
//Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
$dam = "Đàm";
$ban = "Đ";
$damm = substr($dam,0,1);
$bann = substr($ban,0,1);
if ($damm == $bann) {
    echo "Chuỗi này bắt đầu bằng chuỗi con khác";
}
else{
    echo "Chuỗi này không bắt đầu bằng chuỗi con khác";
}
//Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
echo "Chữ hoa:". strtoupper($x), "<br>";
//Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
echo "Chữ thường:". strtolower($x),"<br>";
//Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
echo "Chuỗi 1 sau khi in hoa chữ cái đầu: ".ucwords($x).'<br>';
//Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
$y = ' photo pallete ';
    echo "Chuỗi '$y' sau khi bỏ khoảng trắng ở đầu và cuối chuỗi: ".trim($y).'.'.'<br>';
//Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
echo "Chuỗi 1 sau khi loại bỏ ký tự đầu tiên: ".ltrim($x, 'B').'<br>';
//Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
echo "Chuỗi 1 sau khi loại bỏ ký tự cuối cùng: ".rtrim($x, 'h').'<br>';
//Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
echo "Chuỗi 1 sau khi tách: ";
    $arr = explode(" ", $x);
    print_r($arr);
    echo '<br>';
//Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
$data = ['Jeong', 'Ji', 'Hoon'];
    $t = implode(' ', $data);
    echo "Chuỗi sau khi nối các phần tử của 1 mảng: ".$t.'<br>';
//Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
echo "Chuỗi sau khi thêm 1 chuỗi vào đầu: ".str_pad($t, strlen($t." LCK GEN"), " LCK GEN", STR_PAD_LEFT).'<br>';
//Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
$check1 = 'Jeong';
$result1 = strrchr($x, $check1);
if ($result1 == $check1) {
    echo "Chuỗi '$check1' là chuỗi kết thúc trong chuỗi '$x'";
} else {
    echo "Chuỗi '$check1' không phải là chuỗi kết thúc trong chuỗi '$x'";
};
echo '<br>';
//Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
$check2 = 'Hoon';
    $result2 = strstr($x, $check2);
    if ($result2 == true) {
        echo "Chuỗi '$x' có chứa chuỗi '$check2'";
    } else {
        echo "Chuỗi '$x' không chứa chuỗi '$check2'";
    };
    echo '<br>';
//Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
$a = "GENG, HLE, 1.";   
    $check3 = "_";
    $result3 = preg_replace('/[^a-zA-Z0-9]/', $check3, $a);
    echo "Chuỗi '$a' sau khi replace: '$result3";
    echo '<br>';
//Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
$z = 18.7;
    if(is_int($z)){
        echo'Biến là kiểu số nguyên';
    }
    else{
        echo'Biến không phải số nguyên';
    }
//Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
$email = "bushigaoshisi@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email là email hợp lệ");
} else {
    echo("$email không phải là email hợp lệ");
};
echo '<br>';
?>
</body>
</html>