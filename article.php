<?php
    require_once "start.php";
    $article = getArticle($_GET["id"]);
    $id = $article["id"];
    $title = $article["title"];
    $full_text = $article["full_text"];
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv='Content-Type' content="text/html; charset=utf-8">
	<title>С Т А Т Ь И</title>
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
                <td class="stat1">
                    <?php 
                    require_once "blocks/full_article.php";
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