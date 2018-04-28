    <table>
   <tr>
       <td colspan="2"><h2>Гостевая книга</h2></td>
   </tr>
   <tr>
       <td colspan="2">
        <form name="guestbook" action="" method="post">
            <table>
                <tr>
                    <td>Имя:</td>
                </tr>
                <tr>
                    <td><input type="text" name="name" size="25" placeholder="Имя" /></td>
                </tr>
                <tr>
                    <td>Комментарий:</td>
                </tr>
                <tr>
                    <td><textarea name="comment" rows="10" style="resize:none;"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="button_guestbook" value="Добавить" class="new"/></td>
                </tr>
                <tr>
        <td>
            <h2> Записи в гостевой книге </h2>
        </td>
    </tr>
    <tr>
        <td>
            <?php
        if(!empty($_POST["button_guestbook"])){
            $name=htmlspecialchars($_POST["name"]);
            $comment=htmlspecialchars($_POST["comment"]);
            if((strlen($name)<3)||(strlen($comment)<3))$success=false;
            else $success=addGuestBookComment($name,$comment);
            if(!$success){
            $alert="Ошибка при добавлении новой записи!";
            include "alert.php";
            }
        }
        $comments=getAllGuestBookComments();
            for($i=0;$i<count($comments);$i++){
            $name=$comments[$i]["name"];
            $comment=$comments[$i]["comment"];
            include "blocks/guestbook_comment.php";
            }

        ?>
        </td>
    </tr>
            </table>
        </form>
       </td>
   </tr>
    
</table>



 
