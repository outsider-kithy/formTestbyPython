<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Seleniumでフォームを自動でテスト</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <h1>Seleniumでフォームを自動でテスト</h1>
            <form method="POST" action="confirm.php">
                <table>
                    <tbody>
                        <tr>
                            <th>姓</th>
                            <td>
                                <input type="text" name="first_name" value="" placeholder="山田" require>
                            </td>
                        </tr>

                        <tr>
                            <th>名</th>
                            <td>
                                <input type="text" name="last_name" value="" placeholder="太郎" require>
                            </td>
                        </tr>

                        <tr>
                            <th>郵便番号</th>
                            <td>
                                <input type="text" name="postal_code" value="" placeholder="123-4567">
                            </td>
                        </tr>

                        <tr>
                            <th>都道府県</th>
                            <td>
                                <select name="pref">
                                    <option value="" disabled selected>選択してください</option>
                                    <option value="北海道">北海道</option>
                                    <option value="青森県">青森県</option>
                                    <option value="秋田県">秋田県</option>
                                    <option value="岩手県">岩手県</option>
                                    <option value="宮城県">宮城県</option>
                                    <option value="山形県">山形県</option>
                                    <option value="福島県">福島県</option>
                                    <option value="東京都">東京都</option>
                                    <option value="神奈川県">神奈川県</option>
                                    <option value="千葉県">千葉県</option>
                                    <option value="埼玉県">埼玉県</option>
                                    <option value="栃木県">栃木県</option>
                                    <option value="群馬県">群馬県</option>
                                    <option value="茨城県">茨城県</option>
                                    <option value="新潟県">新潟県</option>
                                    <option value="富山県">富山県</option>
                                    <option value="石川県">石川県</option>
                                    <option value="福井県">福井県</option>
                                    <option value="山梨県">山梨県</option>
                                    <option value="長野県">長野県</option>
                                    <option value="岐阜県">岐阜県</option>
                                    <option value="静岡県">静岡県</option>
                                    <option value="愛知県">愛知県</option>
                                    <option value="三重県">三重県</option>
                                    <option value="滋賀県">滋賀県</option>
                                    <option value="京都府">京都府</option>
                                    <option value="大阪府">大阪府</option>
                                    <option value="兵庫県">兵庫県</option>
                                    <option value="奈良県">奈良県</option>
                                    <option value="和歌山県">和歌山県</option>
                                    <option value="鳥取県">鳥取県</option>
                                    <option value="島根県">島根県</option>
                                    <option value="岡山県">岡山県</option>
                                    <option value="広島県">広島県</option>
                                    <option value="山口県">山口県</option>
                                    <option value="徳島県">徳島県</option>
                                    <option value="香川県">香川県</option>
                                    <option value="愛媛県">愛媛県</option>
                                    <option value="高知県">高知県</option>
                                    <option value="福岡県">福岡県</option>
                                    <option value="佐賀県">佐賀県</option>
                                    <option value="長崎県">長崎県</option>
                                    <option value="大分県">大分県</option>
                                    <option value="熊本県">熊本県</option>
                                    <option value="宮崎県">宮崎県</option>
                                    <option value="鹿児島県">鹿児島県</option>
                                    <option value="沖縄県">沖縄県</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>市区町村</th>
                            <td>
                                <input type="text" name="city" value="" placeholder="港区芝公園">
                            </td>
                        </tr>

                        <tr>
                            <th>丁目・番地</th>
                            <td>
                                <input type="text" name="address" value="" placeholder="4丁目2-8">
                            </td>
                        </tr>

                        <tr>
                            <th>建物名・部屋番号</th>
                            <td>
                                <input type="text" name="building" value="" placeholder="〇〇コーポ 202号室">
                            </td>
                        </tr>

                        <tr>
                            <th>電話番号</th>
                            <td>
                                <input type="tel" name="tel" value="" placeholder="09000000000">
                            </td>
                        </tr>

                        <tr>
                            <th>メールアドレス</th>
                            <td>
                                <input type="email" name="email" value="" placeholder="example@mail.com" require>
                            </td>
                        </tr>

                        <tr>
                            <th>生年月日</th>
                            <td class="w4">
                                <select name="birthyear">
                                    <option value="" disabled selected>選択してください</option>
                                    <?php 
                                    for ($i=1900; $i<2024; $i++){
                                        echo "<option value='".$i."年'>".$i."年</option>\n";
                                    }
                                    ?>
                                </select>
                            </td>
                            <td class="w3">
                                <input type="text" name="birthmonth" value="" placeholder="1">月
                            </td>
                            <td class="w3">
                                <input type="text" name="birthday" value="" placeholder="1">日
                            </td>
                        </tr>
                        <tr>
                            <th>ご意見</th>
                            <td>
                                <textarea name="opinion" value="" maxlength="300" placeholder="300字以内でご記入ください"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <input type="submit" name="submit" value="入力内容の確認へ">
            </form>
        </main>
    </body>
</html>