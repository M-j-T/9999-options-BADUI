<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis" />
<meta name="keywords" content="キーワードその1,キーワードその2,キーワードその3,キーワードその4,キーワードその5" />
<meta name="description" content="ご自身のWebサイトの説明を記載します" />
<title>Website for improving BADUI</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
button.button3{
    /* 文字サイズを1.4emに指定 */
    font-size: 1.0em;

    /* 文字の太さをboldに指定 */
    font-weight: bold;

    /* 縦方向に10px、
     * 横方向に30pxの余白を指定 */
    padding: 10px 25px;

    /* 背景色を濃い青色に指定 */
    background-color: #248;

    /* 文字色を白色に指定 */
    color: #fff;

    /* ボーダーをなくす */
    border-style: none;
}
</style>
</head>
<script>
    //var result = confirm('Do you really want to cancel？');
</script>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>

<div id="container">
<!-- タイトル左上SEO用テキスト入力欄 -->
<h1></h1>
<div id="header">
<!-- ▼サイトのタイトル -->
<h2><a href="index.html">A Web page for DEMO</a></h2>

<!-- ▼ヘッダー右のテキストリンク -->
</div>
<br clear="all" class="clear" />
<div id="wrapper">


<td id="main">

<div class="contents">
<!-- ▼右の背景色付き見出し -->
<h3>Schedule for Meiji University year-end party</h3>
<div class="place">
<h4 style="color: dodgerblue;"><em>Date</em></h4>
<p>December 27,2016</p>
<h4 style="color: dodgerblue;"><em>Location</em></h4>
<p>Tokyo, Nakano Sun Plaza</p>
<h4 style="color: dodgerblue;"><em>Details</em></h4>
<p>The cost is 8000 yen per person. The price will be cheaper if the number of people increases.</p>
<p>Plase regist for participation by Friday this week</p>
</div>
<h3>Sign up</h3>
<div class="place">
<!--<p style="color:red;">An error has occurred! Please try again.</p>-->
<!-- ▼見出し下のテキスト-->
<form action="" method="GET">
    <br>
	<p>Name</p>
    <input type="text" name="sValue" class="example_form_added">&nbsp;&nbsp;&nbsp;<input type="text" name="sValue" class="example_form_added">
    <br>
    <br>
    <p>Gender</p>
    <input type="radio" name="example" value="サンプル">Male
    <input type="radio" name="example" value="サンプル">Female
    <br>
    <br>
    <br>
    <p>Date of Birth</p>
    <input type="text" name="sValue" class="example_form_added">
    <br>
    <br>
    <br>
    <p>Email address</p>
    <input type="text" name="sValue" class="example_form_added">
    <br>
    <br>
    <br>
    <p>Home Phone</p>
    <input type="text" name="sValue" class="example_form_added">
    <br>
    <br>
    <br>
    <br>
    <div align="center"><input type="submit" value="Reset"></div>
    <br>
    <br>
    <br>
    <input type="checkbox" name="riyu" value="1">Agree to the terms
    <br>
    <br>
    <tr id="user_policy_block" style="">
        <td colspan="3"><p>■The sample terms</p>
          <p> <textarea cols="65%" rows="7" readonly="readonly" style="font-size: 13px;">When using the Cinema City Web reservation (hereinafter referred to as "the service"), the CinemaCity Web  Booking Terms of Service (hereinafter referred to as the "Agreement") will apply.By using this service, we assume that you agree to the terms of this agreement.
            Users who disagree with all conditions will not use this service.
            Please be careful.
    </textarea></p></td>
    </tr>
     <br>
    <div align="center"><input type="submit" value="Sign up"></div>
    <br>
    <br>
    <br>
    <br>
    <h3>Please Enter Your Phone Number:</h3>
    <?php
    echo "<select name='phone1'>";
    for($i = 0; $i <= 999; $i++){
        if($i<10){
            echo "<option value=".$i.">00".$i."</option>";
        }else if($i<100){
            echo "<option value=".$i.">0".$i."</option>";
        }else{
            echo "<option value=".$i.">".$i."</option>";
        }
    }
    echo "</select>&nbsp-&nbsp";
    echo "<select name='phone2'>";
    for($i = 0; $i <= 999; $i++){
        if($i<10){
            echo "<option value=".$i.">00".$i."</option>";
        }else if($i<100){
            echo "<option value=".$i.">0".$i."</option>";
        }else{
            echo "<option value=".$i.">".$i."</option>";
        }
    }
    echo "</select>&nbsp-&nbsp";
    echo "<select name='phone3'>";
    for($i = 0; $i <= 9999; $i++){
        if($i<10){
            echo "<option value=".$i.">000".$i."</option>";
        }else if($i<100){
            echo "<option value=".$i.">00".$i."</option>";
        }else if($i<1000){
            echo "<option value=".$i.">0".$i."</option>";
        }else{
            echo "<option value=".$i.">".$i."</option>";
        }
    }
    echo "</select>";
    ?>
    <br>
    <br>
    <button class="button3" type="submit">Next</button>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</form>
</div>
<!-- ▼見出し下のテキスト -->
</tr>
</table>
</div>
</div>
<div id="copyright">
<!-- テンプレートのリンク表記ここから削除できません -->
 <br>
<br>
<a href="http://www.webmagic.jp" target="_blank"><span style="color:#ffffff;text-decoration:none">Base template by WEB MAGIC</span></a>.&nbsp;&nbsp;
<!-- テンプレートのリンク表記削除できません -->
<!--こちらはご自身のサイト名に変更してください↓ -->
</div>
</body>
</html>
