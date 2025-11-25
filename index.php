<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            // 1. Cu phap in ra man hinh
            echo "Hello World <br>";
            echo "PHP <br>";
            
            // 2. bien
            // cu phap: $ + ten bien = gia tri cua bien
            $ten = "Do Thanh Phat";
            $tuoi = 20;
            echo $ten;
            echo "<br>";

            // noi chuoi
            echo "Xin chao " . $ten . " " . $tuoi . " tuoi";
            echo "<br>";

            // 3. Hang
            define("soPi", "3.14");
            echo soPi . "<br>";

            // 4. Phan biet dau nhay "" va nhay ''
            echo '$ten' . "<br>";
            echo "$ten" . "<br>";

            // 5. Chuoi
            #5.1 Kiem tra do dai cua chuoi
            echo strlen($ten) . "<br>";

            #5.2 Dem so tu
            echo str_word_count($ten) . "<br>";

            #5.3 Tim kiem ki tu trong chuoi
            echo strpos($ten, "a") . "<br>";

            #5.4 Thay the ki tu trong chuoi
            echo str_replace("Phat", "FL", $ten) . "<br>";

            // 6. Toan tu
            $soThuNhat = 10;
            $soThuHai = 5;
            echo $soThuNhat + $soThuHai . "<br>";
            echo $soThuNhat - $soThuHai . "<br>";
            echo $soThuNhat * $soThuHai . "<br>";
            echo $soThuNhat / $soThuHai . "<br>";
            # += -= *= /=
            # so sanh == != > < >= <= ===

            // 7. Cau dieu kien
            // ktra tong cua so thu nhat va so thu hai
            $tong = $soThuNhat + $soThuHai;
            if($tong < 15){
                echo "Tong la " . $tong . " nho hon 15" . "<br>";
            }
            else if($tong == 15){
                echo "Tong la 15 <br>";
            }
            else{
                echo "Tong la " .$tong . " lon hon 15" . "<br>";
            }

            // 8. switch case
            $color = "red";
            switch($color){
                case "red":
                    echo "is red!";
                    break;
                case "blue":
                    echo "is blue!";
                    break;
                default:
                    echo "no color!";
                    break;    
            }

            // 9. for
            for($i = 0; $i < 100; $i++){
                echo $i . "<br>";
            }
        ?>
    </body>
</html>