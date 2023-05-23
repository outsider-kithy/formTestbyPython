<?php
    //データがindex.phpからPOSTされてきたら
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $postal_code = $_POST["postal_code"];
        $pref = $_POST["pref"];
        $city = $_POST["city"];
        $address = $_POST["address"];
        $building = $_POST["building"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $birthyear = $_POST["birthyear"];
        $birthmonth = $_POST["birthmonth"];
        $birthday = $_POST["birthday"];
        $opinion = $_POST["opinion"];
    }
    //このページ内でsubmitボタンが押されたら
    if(isset($_POST["send"])){
        mb_language("ja");
		mb_internal_encoding("UTF-8");
        $mailTo = "送信したいメールアドレス";
        $mailFrom = "送信元とするメールアドレス";
        $subject = "新着のお問合せ";
        $contents = "";
        $contents .= sprintf("氏名:%s %s\n", $first_name, $last_name);
        $contents .= sprintf("郵便番号:%s\n", $postal_code);
        $contents .= sprintf("住所:%s\n", $pref.$city.$address.$building);
        $contents .= sprintf("電話番号:%s\n", $tel);
        $contents .= sprintf("メールアドレス:%s\n", $email);
        $birth = $birthyear.$birthmonth."月".$birthday."日";
        $contents .= sprintf("生年月日:%s\n", $birth);
        $contents .= sprintf("ご意見:%s\n", $opinion);

        //指定したアドレスにメールを送信
        try{
            mb_send_mail($mailTo, $subject, $contents, $mailFrom);
            header("location:thanks.php");
        }catch(Exception $e){
            echo "メールを送信できませんでした";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>入力内容の確認</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <h1>入力内容の確認</h1>
            <form method="POST" action="confirm.php">
                <table>
                    <tbody>
                        <tr>
                            <th>姓</th>
                            <td>
                                <?php echo $first_name; ?>
                                <input type="hidden" name="first_name" value="<?php echo $first_name; ?>">
                            </td>
                        </tr>

                        <tr>
                            <th>名</th>
                            <td>
                                <?php echo $last_name; ?>
                                <input type="hidden" name="last_name" value="<?php echo $last_name; ?>">
                            </td>
                        </tr>

                        <tr>
                            <th>郵便番号</th>
                            <td>
                                <?php echo $postal_code; ?>
                                <input type="hidden" name="postal_code" value="<?php echo $postal_code; ?>">
                            </td>
                        </tr>

                        <tr>
                            <th>都道府県</th>
                            <td>
                                <?php echo $pref; ?>
                                <input type="hidden" name="pref" value="<?php echo $pref; ?>">
                            </td>
                        </tr>

                        <tr>
                            <th>市区町村</th>
                            <td>
                                <?php echo $city; ?>
                                <input type="hidden" name="city" value="<?php echo $city; ?>">
                            </td>
                        </tr>

                        <tr>
                            <th>丁目・番地</th>
                            <td>
                                <?php echo $address; ?>
                                <input type="hidden" name="address" value="<?php echo $address; ?>">
                            </td>
                        </tr>

                        <tr>
                            <th>建物名・部屋番号</th>
                            <td>
                                <?php echo $building; ?>
                                <input type="hidden" name="building" value="<?php echo $building; ?>">
                            </td>
                        </tr>

                        <tr>
                            <th>電話番号</th>
                            <td>
                                <?php echo $tel; ?>
                                <input type="hidden" name="tel" value="<?php echo $tel; ?>">
                            </td>
                        </tr>

                        <tr>
                            <th>メールアドレス</th>
                            <td>
                                <?php echo $email; ?>
                                <input type="hidden" name="email" value="<?php echo $email; ?>">
                            </td>
                        </tr>

                        <tr>
                            <th>生年月日</th>
                            <td class="w4">
                                <?php echo $birthyear; ?>
                                <input type="hidden" name="birthyear" value="<?php echo $birthyear; ?>">
                            </td>
                            <td class="w3">
                                <?php echo $birthmonth; ?>月
                                <input type="hidden" name="birthmonth" value="<?php echo $birthmonth; ?>">
                            </td>
                            <td class="w3">
                                <?php echo $birthday; ?>日
                                <input type="hidden" name="birthday" value="<?php echo $birthday; ?>">
                            </td>
                        </tr>

                        <tr>
                            <th>ご意見</th>
                            <td>
                                <?php echo $opinion; ?>
                                <input type="hidden" name="opinion" value="<?php echo $opinion; ?>" >
                            </td>
                        </tr>
                    </tbody>
                </table>

                <input type="submit" name="send" value="この内容で送信する">
            </form>
        </main>
    </body>
</html>