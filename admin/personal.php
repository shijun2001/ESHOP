<?php
    $user_photo = display_image($row['user_photo']);
    update_users();
?>

<div class="col-md-12">
    <div class="row">
        <h1 class="page-header">
            <i class="fa fa-fw fa-leaf"></i>個人情報
        </h1>
        <h5 class="text-center bg-warning text-danger"><?php display_message_success(); ?></h5>       
    </div>
    <div class="col-md-1">
        <img width="200" src="../<?php echo $user_photo; ?>" alt="">
    </div>
<?php
    $html = '
    <div class="col-md-11">
        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="col-sm-9 col-sm-offset-2"> 

                <div class="form-group bottom-space">
                    <label class="col-sm-3 control-label" for="nickname">ニックネーム:</label>
                    <div class="col-sm-9">
                        <input type="text" name="nickname" class="form-control" placeholder="4~10桁以内英数字" value="%s" readonly>
                    </div>              
                </div>
                <div class="form-group bottom-space">
                    <label class="col-sm-3 control-label" for="password">パスワード:</label>
                    <div class="col-sm-9">
                        <input type="text" name="password" class="form-control" placeholder="8~16桁以内英数字と符号" value="%s">
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
                        <input type="text" name="email" class="form-control" placeholder="会員IDとなります" value="%s" readonly>
                    </div>
                </div>
                <div class="form-group bottom-space">
                    <label class="col-sm-3 control-label" for="adr">住所:</label>
                    <div class="col-sm-9">
                        <input type="text" name="adr" class="form-control" value="%s">
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
                        <div class="col-sm-3 birth">
                            <input type="number" min="1" max="12" name="birth_mon" class="form-control" value="%s">
                        </div>                  
                        <label class="col-sm-1 control-label birth-label" for="birth_mon">月</label>                    
                        <div class="col-sm-3 birth">                
                            <input type="number" min="1" max="31" name="birth_day" class="form-control" value="%s">   
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
                       <label>
                          <input type="radio" name="sex" value="2" %s>女
                       </label>
                    </div>
                </div>                

                <div class="form-group bottom-space">
                    <label class="col-sm-3 control-label" for="sex">写真:</label>
                    <div class="col-sm-9">
                        <input type="file" name="file">  
                    </div>                
                </div>

                <div class="form-group bottom-space">
                    <div class="col-sm-6  col-sm-offset-9">
                        <input type="submit" name="update_user" class="btn btn-primary" value="更新">&nbsp;&nbsp;&nbsp;
                        <a href="index.php?personal" class="btn btn-warning">取消</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
        ';

    if(isset($_SESSION['nickname'])){
        $query = query("SELECT * FROM users WHERE nickname = '{$nickname}'");
        confirm($query);
        $row = fetch_array($query);
        if($row['sex'] == "男"){
            $wk_sex[0] = "checked";
            $wk_sex[1] = "";
        }else{
            $wk_sex[0] = "";
            $wk_sex[1] = "checked";
        }
        printf($html,$row['nickname'],$row['password'],
            $row['username_shi'],$row['username_mei'],
            $row['email'],$row['adr'],
            $row['tel'],$row['birth_year'],
            $row['birth_mon'],$row['birth_day'],
            $wk_sex[0],$wk_sex[1]
        );
    }

?>
    
</div><!-- col-md-12 -->