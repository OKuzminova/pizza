<?php
    require_once "start.php";
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv='Content-Type' content="text/html; charset=utf-8">
	<title>Р Е Г И С Т Р А Ц И Я</title>
	<link rel="stylesheet" href="main.css" type="text/css"  />
</head>
<body>
    <table id="main" >
    <?php 
        require_once "blocks/top.php";
    ?>
    
    <tr> <!-- строка3 контент -->
        <td colspan="2">
            <table id="content" >
                <tr>
                <td class="stat">
                    <?php 
                    require_once "blocks/reg.php";
                    ?>
                </td>
                <td id="banners_240">
                    <?php 
                    require_once "blocks/banners_240.php";
                    ?>
                </td>
                </tr>
            </table>
        </td>
    </tr> <!-- конец контента -->
    <tr>
    <?php 
        require_once "blocks/footer.php";
    ?>
    </tr>
	</table>
	</body>
</html>