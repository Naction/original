<?php

// var_dump($_GET['date']);die;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/reset.css">
  <link rel="stylesheet" href="../reserve/reserve.css">

</head>

<body>

    <div id="formWrap">

        <div class="head">
            
        <h2>予約フォーム</h2>
        <p>下記フォームに必要事項を入力後、確定ボタンを押してください</p>

        </div>
        
        <form action="store.php" method="post">
            <table class="formTable">
              <tbody><tr>
                  <br>
                <th>ご予約日時</th>
                <td>
                
             <!-- <input type="hidden" name="reserv[date]" value="2020-2-18"><input type="hidden" name="reserv[time]" value="0"> -->
                  </td>
              </tr>

              <tr>
                <th>お名前</th>
                <td><input size="20" type="text" name="お名前">
                  ※必須</td>
              </tr>
              <tr>
                <th>電話番号（半角）</th>
                <td><input size="30" type="text" name="電話番号">※必須</td>
                </tr>
              <tr>
                <th>メールアドレス（半角）</th>
                <td><input size="30" type="text" name="メールアドレス">

                  </td>
                
              </tr>

           
            </tbody></table>
            <p align="center">
                <br>
              <input type="submit" value="　 確定 　">
              <input type="reset" value="リセット">
            </p>
            </form> 
       </div>
 


</body> 