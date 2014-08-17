<?php
if(!empty($_POST))
{
echo 'insert into users (login, pass, email)  values("' . $_POST['login'] . '","' . $_POST['pass'] . '","' . $_POST['email'] . '")';
//$db = new PDO('mysql:host=localhost;dbname=vk;charset=utf8', 'root', '');
//$db->query('insert into users (login, email, pass) values("' . $_POST['login'] . '","' . $_POST['email'] . '","' . $_POST['pass'] . '")'
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<style>
body {background-color:#3D4C3D;}
 .imgPeople {
    float:right; margin: -270px  35px   0  0; <!-- Отступы вокруг картинки -->
   }
 
   .imgC1 {
    float:left; margin: -720px  0   0  300px;  
   }
   .imgC2 {
    float:right; margin: -720px   300px  0    0  ;  
   }
   .imgMan {
     float:left; margin: -460px  0 0   80px  ;  
	 width: 300px; 
	 height: 300px;
	}
</style>
<style type="text/css">
   .block { 
    position: fixed; 
    top: 23%;  
	left: 8%;
	}
   .block1 { 
    position: absolute; 
    top: 68%;  
	left: 12%;
	}
    DIV{font-size: 200%}
</style>
<head>
<title>Registration</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


</head>

<body>

<h1> <p align="center"> <font size="15" color="#CCFFCC" face="Arial"> The registration page </font> </p> </h1>
<fieldset >
<img src="img/go-home.png"height="25"width="25"><font color="#CCFFCC" > 
<a href="http://vk.com"> <font color="#CCFFCC" >Home</font></a>
<img src="img/info.png"height="25"width="25"><a href="http://vk.loc"><font color="#CCFFCC" >About us</font></a>
<img src="img/mail.png"height="25"width="25"><a href="http://vk.loc"><font color="#CCFFCC" >Contacts</font></a>
<img src="img/search.png"height="25"width="25"><a href="http://vk.loc"><font color="#CCFFCC" >Search</font></a>

</fieldset>
<form method="post">
<fieldset>

<table align="center" cellspacing="0.6" cellpadding="5" width="350" bgcolor="#516851" border="1" > <!-- Таблица -->

 <tr> <!-- 1-я строка таблицы-->
  <th> <font color="#CCFFCC" ><font color="#CCFFCC" >Login </font> </th> <!--создание ячейки-->
  <td><input type="text" name ="Login"></td>
 </tr><!--1 строка таблицы закончилась-->
 
 <tr> <!-- 2-я строка таблицы-->
  <th><font color="#CCFFCC" > Password </font></th>  
  <td><input type="password" name ="password"></td>
 </tr> 
 <tr> <!-- 3-я строка таблицы-->
  <th> <font color="#CCFFCC" >Repeat password </font> </th>  
  <td><input type="password" name ="password2"></td>
 </tr> 
<tr> <!-- 4-я строка-->
  <th><font color="#CCFFCC" > E-mail </font> </th>  
  <td><input type="text" name ="email"></td>
 </tr> 
 <tr> <!-- 5-я строка таблицы-->
  <th> <font color="#CCFFCC" >Name</font> </th>  
  <td><input type="text" name ="name"></td>
 </tr> 
 <tr> <!-- 6-я строка таблицы-->
  <th> <font color="#CCFFCC" >Family name </font> </th>  
  <td><input type="text" name ="Family name"></td>
 </tr> 
 <tr> <!-- 7-я строка таблицы-->
  <th> <font color="#CCFFCC" >Sex:</font>  </th>  
  <td><input type="radio" name ="sex" value = "1"> <font color="#CCFFCC" >male </font>
  <input type="radio" name ="sex" value = "2"><font color="#CCFFCC" >female</font></td>
 </tr> 
 <tr> <!-- 8-я строка таблицы-->
  <th> <font color="#CCFFCC" >Date of birth</font> </th>  
  <td><input type="number" name ="day" value="1"><font color="#CCFFCC" >dayB </font>
  <input type="number" name ="month" value="1"><font color="#CCFFCC" >monthB </font>
  <input type="number" name ="year" value="1980"><font color="#CCFFCC" >yearB</font></td>
 </tr> 
 <tr> <!-- 9-я строка таблицы-->
  <th><font color="#CCFFCC" > Phone </font></th>  
  <td><input type="text" name ="phone" value="+380"> </td>
 </tr>
 <tr> <th><font color="#CCFFCC" >Country</font></th>
    <td>
		<select> <!--разворачивающийся список-->
  <optgroup>
<option>Belarus</option>
<option>Russia</option>
<option>Ukraine</option>
<option>USA</option>
  </optgroup>
		</select> 
	</td>
 </tr>
</table> <!--конец таблицы-->
<p align="center"><font color="#CCFFCC" >  Agree with 
<a href="http://vk.loc/rules.php"> <font color="#CCFFCC" >site's rules</font></a>
</font><input type="checkbox" value = "1"> </p> 
<p align="center">  <button type="submit">Send</button></p>
<!--text
<div class="block">
Fill in the application
</div>
<div class="block1">
and join us!
</div>
-->
</fieldset>
<img  src="img/pep1.png" height="270" width="370" align="right" class="imgPeople">

<img  src="img/clipboard.png " height="60" width="60" align="left" class="imgC1"> 
<img  src="img/clipboard.png " height="60" width="60" align="right" class="imgC2"> 
</form>
<img  src="img/333.png " class="imgMan"> 
</body>

</html>


