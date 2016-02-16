<?php require_once("./common/config.php"); ?>
<?php include("./front/header.php"); ?>

<?php

    if(isset($_POST['submit'])){
        $error = "";
        $nickname       =   escape_string($_POST['nickname']);
        $password       =   escape_string($_POST['password']);
        $username_shi   =   escape_string($_POST['username_shi']);
        $username_mei   =   escape_string($_POST['username_mei']);
        $email          =   escape_string($_POST['email']);
        $adr            =   escape_string($_POST['adr']);
        $tel            =   escape_string($_POST['tel']);
        $birth_year     =   escape_string($_POST['birth_year']);
        $birth_mon      =   escape_string($_POST['birth_mon']);
        $birth_day      =   escape_string($_POST['birth_day']);
        $sex            =   escape_string($_POST['sex']);
        $user_photo             =   escape_string($_FILES['file']['name']);
        $image_temp_location    =   stripslashes(escape_string($_FILES['file']['tmp_name']));
        $create_date    =   date("Y-m-d");
        $create_time    =   date("H:i:s");

        move_uploaded_file($image_temp_location, UPLOAD_DIRECTORY . DS . $user_photo);

        // Nicknameチェック------------------------------------------------------------
        // ①半角英数字
        if(!mb_ereg_match('^[0-9|A-z]+$', $nickname)){
            $error .= "ニックネームは半角英数字で入力してください<br>";            
        } else {
            // ②長さが4～10文字
            if(mb_strlen($nickname) < 4 || mb_strlen($nickname) > 10){
                $error .= "ニックネームは半角4～10文字で入力してください<br>";
            } else {
                // DB参照しニックネーム照合--------------------------------------------
                $query = query("SELECT * FROM users WHERE nickname ='{$nickname}' ");
                confirm($query);

                $rowcount = mysqli_num_rows($query);
                if($rowcount > 0){
                    $error .= "ニックネームは重複してた、新しいニックネームを入力して下さい<br>";
                }           
            }
        }

        // パスワードチェック----------------------------------------------------------
        // ①半角英数記号
        if(!mb_ereg_match('^[!-z]+$', $password)){
            $error .= "パスワードは半角英数記号で入力してください<br>";
        } else {
            // ②長さが8～16文字
            if(mb_strlen($password) < 8 || mb_strlen($password) > 16){
                $error .= "パスワードは半角8～16文字で入力してください<br>";
            }
        }               

        // 氏チェック------------------------------------------------------------
        $wk_fname = mb_ereg_replace("　","", $username_shi);         // 全角ブランク削除
        $wk_fname = mb_ereg_replace(" ","", $wk_fname);             // 半角ブランク削除
        if($wk_fname == ""){
            $error .= "氏を入力してください<br>";
        }

        // 名チェック------------------------------------------------------------
        $wk_lname = mb_ereg_replace("　","", $username_mei);         // 全角ブランク削除
        $wk_lname = mb_ereg_replace(" ","", $wk_lname);             // 半角ブランク削除
        if($wk_lname == ""){
            $error .= "名を入力してください<br>";
        }

        // メールチェック----------------------------------------------------------
        if(!mb_ereg_match('^([0-9|A-z\-\_\.]+)@([0-9|a-z]+\.[a-z]{2,3}(\.[a-z]{2})?)+$', $email)){
            $error .= "メールを入力してください<br>";
        }

        // 住所チェック----------------------------------------------------------
        $wk_adr = mb_ereg_replace("　","", $adr);                    // 全角ブランク削除
        if($wk_adr == ""){
            $error .= "住所を入力してください<br>";
        }

        // 電話チェック----------------------------------------------------------
        // ①半角数字
        if(!mb_ereg_match('^[0-9]+$', $tel)){
            $error .= "電話は半角数字で入力してください（ハイフン不要）<br>";
        } else {
            // ②長さが9～11文字
            if(mb_strlen($tel) < 9 || mb_strlen($tel) > 11){
                $error .= "電話は半角数字9～11文字で入力してください<br>";
            }
        }

        // 生年月日チェック-------------------------------------------------------
        if(!mb_ereg_match('^[0-9]+$', $birth_year) || !mb_ereg_match('^[0-9]+$', $birth_mon) || !mb_ereg_match('^[0-9]+$', $birth_day)){
            $error .= "生年月日を入力してください<br><br>";
        }

        // 性別チェック----------------------------------------------------------
        $wk_sex = array("","");
        $en_sex = "";
        if(!isset($sex)){
            $error .= "性別を指定してください<br>";
        } else {
            if($sex == "1"){
                $wk_sex[0] = "checked";
                $en_sex = "男";            
            }
            if($sex == "2"){
                $wk_sex[1] = "checked";
                $en_sex = "女"; 
            }
        }

        set_message($error);      
    }
?>
                
<!-- Page Content -->
<div class="container">
    <header>
        <h1 class="text-center">新規登録</h1>
        <h5 class="text-center bg-warning text-danger"><?php display_message_danger(); ?></h5>
        <div class="col-sm-6 col-sm-offset-3">

<?php
    $html = '
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="form-group bottom-space">
                    <label class="col-sm-3 control-label" for="nickname">ニックネーム:</label>
                    <div class="col-sm-9">
                        <input type="text" name="nickname" class="form-control" placeholder="4~10桁以内英数字（※変更できません）" value="%s">
                    </div>              
                </div>
                <div class="form-group bottom-space">
                    <label class="col-sm-3 control-label" for="password">パスワード:</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" class="form-control" placeholder="8~16桁以内英数字と符号" value="%s">
                    </div>
                </div>
                <div class="form-group bottom-space">
                    <label class="col-sm-3 control-label" for="username_shi">氏:</label>
                    <div class="col-sm-9">
                        <input type="text" name="username_shi" class="form-control" placeholder="漢字で" value="%s">
                    </div>
                </div>
                <div class="form-group bottom-space">
                    <label class="col-sm-3 control-label" for="username_mei">名:</label>
                    <div class="col-sm-9">
                        <input type="text" name="username_mei" class="form-control" placeholder="漢字で" value="%s">
                    </div>
                </div>
                <div class="form-group bottom-space">
                    <label class="col-sm-3 control-label" for="email">メール:</label>
                    <div class="col-sm-9">
                        <input type="text" name="email" class="form-control" placeholder="会員IDとなります（※変更できません）" value="%s">
                    </div>
                </div>
                <div class="form-group bottom-space">
                    <label class="col-sm-3 control-label" for="adr">住所:</label>
                    <div class="col-sm-9">
                        <input type="text" name="adr" class="form-control" placeholder="英数字、漢字、符号で"　value="%s">
                    </div>
                </div>
                <div class="form-group bottom-space">
                    <label class="col-sm-3 control-label" for="tel">電話番号:</label>
                    <div class="col-sm-9">
                        <input type="text" name="tel" class="form-control" placeholder="9~11桁以内数字" value="%s">
                    </div>
                </div>
                <div class="form-group bottom-space row">
                    <label class="col-sm-3 control-label" for="birth">生年月日:</label>
                    <div class="col-sm-9">
                        <div class="col-sm-3 birth">
                            <input type="number" min="1900" max="2016" name="birth_year" class="form-control" placeholder="西暦" value="%s">
                        </div>                  
                        <label class="col-sm-1 control-label birth-label" for="birth_year">年</label>                
                        <div class="col-sm-2 birth">
                            <input type="number" min="1" max="12" name="birth_mon" class="form-control" placeholder="月" value="%s">
                        </div>                  
                        <label class="col-sm-1 control-label birth-label" for="birth_mon">月</label>                    
                        <div class="col-sm-2 birth">                
                            <input type="number" min="1" max="31" name="birth_day" class="form-control" placeholder="日" value="%s">   
                        </div>                 
                        <label class="col-sm-1 control-label birth-label" for="birth_day">日</label>
                    </div>
                </div>
                
                <div class="form-group bottom-space">
                    <label class="col-sm-3 control-label" for="sex">性別:</label>
                    <div class="radio col-sm-9">
                       <label>
                          <input type="radio" name="sex" value="1" %s>男
                       </label>
                       &nbsp;&nbsp;&nbsp;                   
                       <label>
                          <input type="radio" name="sex" value="2" %s>女
                       </label>
                    </div>
                </div>

                <div class="form-group bottom-space">
                    <label class="col-sm-3 control-label" for="user_photo">イメージ:</label>
                    <div class="col-sm-9">
                        <input type="file" name="file">
                    </div>       
                </div>

                <div class="form-group bottom-space">
                    <div class="col-xs-3 col-xs-offset-3">
                        <input type="submit" name="submit" value="サインイン" class="btn btn-primary">
                    </div>
                    <div class="col-xs-3">
                        <a href="login.php" class="btn"><u>ログイン</u></a>
                    </div>
                    <div class="col-xs-3">
                        <a href="index.php" class="btn"><u>キャンセル</u></a>
                    </div>
                </div>
            </form>
            ';
         

    if(!isset($_POST['submit'])){
        printf($html,"","","","","","","","","","","checked","");
    } else {
        if($error != ""){
            // 入力画面表示（エラー表示）
            printf($html,   
                            $_POST["nickname"], $_POST['password'],
                            $_POST['username_shi'], $_POST['username_mei'],
                            $_POST['email'], $_POST['adr'], 
                            $_POST['tel'], $_POST['birth_year'],
                            $_POST['birth_mon'], $_POST['birth_day'],
                            $wk_sex[0], $wk_sex[1]
            );
        }else{
            /*print "<div>";
                printf('<p><span>ニックネーム：</span>%s</p>', $_POST["nickname"]);
                printf('<p><span>パスワード：</span>%s</p>', $_POST['password']);
                printf('<p><span>氏　：</span>%s</p>', $_POST['username_shi']);
                printf('<p><span>名　：</span>%s</p>', $_POST['username_mei']);
                printf('<p><span>メール：</span>%s</p>', $_POST['email']);
                printf('<p><span>住所：</span>%s</p>', $_POST['adr']);
                printf('<p><span>電話：</span>%s</p>', $_POST['tel']);
                printf('<p><span>生年：</span>%s</p>', $_POST['birth_year']);
                printf('<p><span>月：</span>%s</p>', $_POST['birth_mon']);
                printf('<p><span>日：</span>%s</p>', $_POST['birth_day']);
                printf('<p><span>性別：</span>%s</p>', $_POST['sex']);
            print "</div>";*/

            $query = query("INSERT INTO users(
                                        nickname,
                                        password, 
                                        username_shi, 
                                        username_mei, 
                                        email, 
                                        adr, 
                                        tel,
                                        birth_year,
                                        birth_mon,
                                        birth_day,
                                        sex,
                                        user_photo,
                                        create_date,
                                        create_time
                                    ) 
                              VALUES(
                                        '{$_POST['nickname']}',
                                        '{$_POST['password']}', 
                                        '{$_POST['username_shi']}', 
                                        '{$_POST['username_mei']}', 
                                        '{$_POST['email']}', 
                                        '{$_POST['adr']}', 
                                        '{$_POST['tel']}',
                                        '{$_POST['birth_year']}',
                                        '{$_POST['birth_mon']}',
                                        '{$_POST['birth_day']}',
                                        '{$en_sex}',
                                        '{$user_photo}',
                                        '{$create_date}',
                                        '{$create_time}'                                      
                                    ) "
                            );
            confirm($query);
            db_free_close($query);
            set_message("新規登録成功");
            redirect("login.php");
        }
    }

?>


        </div>
    </header>
</div><!-- .container -->


<?php include("./front/footer.php"); ?>