<?php
    require_once "start.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv='Content-Type' content="text/html; charset=utf-8">
	<title>Р Е З У Л Ь Т А Т Ы П О И С К А</title>
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
                <td class="stat1" ><div class="article">
                    <?php 
                    require_once "blocks/search_result.php";
                    ?>
                </div>
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
    <!--<tr>	
        <td colspan="2"><hr color="black"/></td>
    </tr> -->
    <tr>
    <?php 
        require_once "blocks/footer.php";
    ?>
    </tr>
	</table>
	</body>
</html>