<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <p>Please enter url to perform a check:</p>
            <input type="text" placeholder="url to check" name="url" value="<?= isset($_GET['url']) ? $_GET['url'] : null ?>"/>
            <input type="submit" />
        </form>
        <br />
        <br />
        <?php include(__DIR__ . DIRECTORY_SEPARATOR . 'checker_index.php') ?>
    </body>
</html>
