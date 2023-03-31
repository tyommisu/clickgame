<html>
	
<!--	画像でクリック-->
<!-- 	<input type="image" src="img/up.png" height=35px  width=35px name="up" ><br> -->
<!-- 	<input type="image" src="img/left.png" height=35px  width=35px name="left" >  -->
<!-- 	<input type="image" src="img/right.png" height=35px  width=35px name="right" ><br>  -->
<!-- 	<input type="image" src="img/down.png" height=35px  width=35px name="down" >  -->
	
<!--	//ボタンタグでクリック-->
<!--	<button type="button" onclick="down()" name="down">↓</button>-->
	
	
    <?php
    
    if (isset($_POST['count'])){
        $count = $_POST['count'];
        
        if ($_POST['action'] == "up"){
            $count -= 10 ;
        } else if ($_POST['action'] == "left"){
            $count -= 1 ;
        } else if ($_POST['action'] == "right"){
            $count += 1 ;
        } else if ($_POST['action'] == "down"){
            $count += 10;
        } 
        
    } else {
        $count = 0;
    }
    
        
    
    echo "<br>".$count."<br>";
    
    
    
    //ラジオボタンでクリック
    echo '<form action="clickgame3.php" method="post">';
    echo '<label><input type="radio" name="action" value="up">↑</label>';
    echo '<label><input type="radio" name="action" value="left">←</label>';
    echo '<label><input type="radio" name="action" value="right">→</label>';
    echo '<label><input type="radio" name="action" value="down">↓</label>';
    echo '<input type="hidden" name="count" value="'.$count.'">';
    echo '<input type="submit">';
    echo '</form>';
    
    
    
    if($count == 0){
        echo "<img src=\"img/monster.png\" alt=\"モンスター\">";
        echo "<img src=\"img/number2.png\" alt=\"2番目の画像\"><br>";
        echo "<img src=\"img/number3.png\" alt=\"3番目の画像\">";
        echo "<img src=\"img/number4.png\" alt=\"4番目の画像\"><br>";
        
    } else if($count == 1) {
        echo "<img src=\"img/number1.png\" alt=\"1番目の画像\">";
        echo "<img src=\"img/monster.png\" alt=\"モンスター\"><br>";
        echo "<img src=\"img/number3.png\" alt=\"3番目の画像\">";
        echo "<img src=\"img/number4.png\" alt=\"4番目の画像\"><br>";
        
    } else if($count == 10) {
        echo "<img src=\"img/number1.png\" alt=\"1番目の画像\">";
        echo "<img src=\"img/number2.png\" alt=\"2番目の画像\"><br>";
        echo "<img src=\"img/monster.png\" alt=\"モンスター\">";
        echo "<img src=\"img/number4.png\" alt=\"4番目の画像\"><br>";
        
    } else if($count == 11) {
//         echo "<img src=\"img/number1.png\" alt=\"1番目の画像\">";
//         echo "<img src=\"img/number2.png\" alt=\"2番目の画像\"><br>";
//         echo "<img src=\"img/number3.png\" alt=\"3番目の画像\">";
//         echo "<img src=\"img/monster.png\" alt=\"モンスター\"><br>";
        echo "ゴール！";
        echo '<br><a href="clickgame3.php">もう1回遊ぶ</a>';
        
    } else {
        echo '<a href="javascript:history.back()">やり直そう！</a><br>';
    }

    ?>

</html>
