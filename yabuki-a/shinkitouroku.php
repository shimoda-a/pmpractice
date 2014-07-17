<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title> 初回登録画面</title>
    </head>
    <body>
    <center>
   <h1>
           初回登録画面   
        </h1>
        <br>
        
<p>名前とパスワードを入力し、  <br>
所属している研究室を選択して下さい。
</p>

        <div>
       
            <form method="post" action="adduser.php">
                <CENTER>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名前<input type="text"size="30" name="example1" value="" ><br>
                    
                    <CENTER>
         &nbsp;&nbsp;&nbsp;パスワード<input type="password" name="example3"size="30" value="" pattern="[A-Za-z0-9]{1,36}" required ><br>
                    <br>
                    <CENTER>
                      &nbsp;所属研究室

<select style="width: 215px" name="example2" ><br />>

 <option value=""selected></option>

<option value="1">堀内研究室</option><br>

<option value="2">竹本研究室</option><br>

<option value="3">矢吹研究室</option><br>

<option value="4">下田研究室</option><br>

<option value="5">田隈研究室</option><br>

<option value="6">五百井研究室</option><br>

<option value="7">久保研究室</option><br>

<option value="8">新井研究室</option><br>

<option value="9">武田研究室</option><br>

<option value="10">下村研究室</option><br>

<option value="11">鴻巣研究室</option><br>

<option value="12">遠山研究室</option><br>

<option value="13">加藤研究室</option><br>

<option value="14">谷本研究室</option><br>
   
<br />

</select>
