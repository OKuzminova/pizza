<?php
  if (!empty($_POST["button_reg"])) {
      $email=htmlspecialchars($_POST["email"]);
      $password_1=htmlspecialchars($_POST["password_1"]);
      $password_2=htmlspecialchars($_POST["password_2"]);
      if (strlen($email)<3) $success=false;
        elseif (strlen($password_1) <3) $success=false;
        elseif ($password_1 != $password_2) $success=false;
        else $success=addUser($email,md5($password_1));
      if (!$success) $alert="Ошибка при регистрации пользователя!";
        else $alert="Вы успешно зарегистрировались!";
      include "alert.php";
      
    }
?>

<form name="reg" action="" method="post">
<table> <h3>Регистрация</h3>
   <tr>
       <td colspan="2">Зарегистрируйся прямо сейчас.<br>
        Это не займет много времени</td>
   </tr>
   <!-- <tr>
        <td><input type="text" name="email" placeholder="Имя"/></td>
        <td><input type="text" placeholder="Фамилия"/></td>
    </tr> -->
    <tr>
        <td colspan="2"><input type="text" name="email" placeholder="Номер мобильного телефона или Email" style="width:340px;"/></td>
    </tr>
    <tr>
        <td><input type="password" name="password_1" placeholder="Пароль"/></td>
        <td><input type="password" name="password_2" placeholder="Повторить пароль"/></td>
    </tr>
    <!-- <tr>
        <td><label><input type="radio">Женщина</label>
                </td>
        <td><label><input type="radio">Мужчина</label>
                            <label></td>
    </tr>-->
    <tr>
        <td colspan="2"><input type="submit" name="button_reg" class="new" value="Зарегистрироваться" style="width:300px;"></td>
    </tr>
</table>
</form>