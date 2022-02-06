<head>
    <title><?php echo file_get_contents('【必ず見てください】この掲示板の名前.txt'); ?></title>
<body>
    <form action = "write.php" method = "POST">
        <p>
            <font size="4">あなたの名前</font>
        </p>
        <input type = "text" width = "700" name ="name"><br/>
        <p>
            <font size="4">内容</font>
        </p>
        <textarea name="lore" cols="50" rows="5"></textarea><br>
        <p>
            <input type = "submit" value ="送信">
        </p>
    </form>
    <?php echo file_get_contents('text.php'); ?>
</body>
