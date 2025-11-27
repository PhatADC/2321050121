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
                    echo "is red! <br>";
                    break;
                case "blue":
                    echo "is blue <br>!";
                    break;
                default:
                    echo "no color! <br>";
                    break;    
            }

            // 9. for
            // for($i = 0; $i < 100; $i++){
            //     echo $i . "<br>";
            // }

            // 10. mang
            $mang = ["An",  "Nhat Anh", "Vu Anh"];
            print_r($mang);
            echo "<br>";
            
            // lay theo chi so
            echo $mang[1];
            echo "<br>";
            
            // dem do dai cua mang
            echo count($mang);
            echo "<br>";

            // thay doi phan tu trong mang
            $mang[0] = "Hai Anh";
            print_r($mang);
            echo "<br>";

            // xoa phan tu cua mang
            unset($mang[2]);
            print_r($mang);
            echo "<br>";

            // them phan tu cho mang
            $mang[] = "Luc";
            print_r($mang);
            echo "<br>";

            // 11. sap xep
            $mang2 = ["C", "B", "D", "A"];
            print_r($mang2);
            echo "<br>";

            // sap xep tang
            sort($mang2);
            print_r($mang2);
            echo "<br>";
            // sap xep giam
            rsort($mang2);
            print_r($mang2);
            echo "<br>";

            // ktra xem bien co ton tai khong
            $bienA = "Hello";
            isset($bienA); // true
            echo "<br>";
            isset($bienB); // false
            echo "<br>";

            // 12. ham
            # khong tham so
            function xinChao(){
                return "Hello";
            }
            echo xinChao();
            echo "<br>";

            # ham co tham so
            function xinChao2($ten){
                return "Hello " . $ten;
            }
            echo xinChao2("Phat");
        ?>
    </body>
</html>