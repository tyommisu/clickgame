<html>
	
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
    
    
    //ラジオボタンでクリック
    echo '<form action="clickgame.php" method="post">';
    echo '<label><input type="radio" name="action" value="up">↑</label>';
    echo '<label><input type="radio" name="action" value="left">←</label>';
    echo '<label><input type="radio" name="action" value="right">→</label>';
    echo '<label><input type="radio" name="action" value="down">↓</label>';
    echo '<input type="hidden" name="count" value="'.$count.'">';
    echo '<input type="submit" value="移動する">';
    echo '</form>';
    
    if($count == 0){
        echo "<img src=\"img/point_c1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_c2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_c3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_goal.jpg\" height=130px  width=130px ><br>";
        
    } else if($count == 1) {
        echo "<img src=\"img/road_c1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/point_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_c2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_c3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_goal.jpg\" height=130px  width=130px ><br>";
        
    } else if($count == 2) {
        echo "<img src=\"img/road_c1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/point_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_c2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_c3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_goal.jpg\" height=130px  width=130px ><br>";
        
    }else if($count == 3) {
        echo "<img src=\"img/road_c1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/point_c2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_c3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_goal.jpg\" height=130px  width=130px ><br>";
        
    } else if($count == 10) {
        echo "<img src=\"img/road_c1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_c2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/point_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_c3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_goal.jpg\" height=130px  width=130px ><br>";
        
    } else if($count == 11) {
        echo "<img src=\"img/road_c1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_c2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/point_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_c3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_goal.jpg\" height=130px  width=130px ><br>";
        
    } else if($count == 12) {
        echo "<img src=\"img/road_c1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_c2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/point_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_c3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_goal.jpg\" height=130px  width=130px ><br>";
        
    }else if($count == 13) {
        echo "<img src=\"img/road_c1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_c2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/point_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_c3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_goal.jpg\" height=130px  width=130px ><br>";
        
    }else if($count == 20) {
        echo "<img src=\"img/road_c1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_c2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/point_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_c3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_goal.jpg\" height=130px  width=130px ><br>";
        
    }else if($count == 21) {
        echo "<img src=\"img/road_c1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_c2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/point_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_c3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_goal.jpg\" height=130px  width=130px ><br>";
        
    }else if($count == 22) {
        echo "<img src=\"img/road_c1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_c2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/point_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_c3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_goal.jpg\" height=130px  width=130px ><br>";
        
    }else if($count == 23) {
        echo "<img src=\"img/road_c1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_c2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/point_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_c3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_goal.jpg\" height=130px  width=130px ><br>";
        
    }else if($count == 30) {
        echo "<img src=\"img/road_c1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_c2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/point_c3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_goal.jpg\" height=130px  width=130px ><br>";
        
    }else if($count == 31) {
        echo "<img src=\"img/road_c1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_c2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_c3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/point_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_goal.jpg\" height=130px  width=130px ><br>";
        
    }else if($count == 32) {
        echo "<img src=\"img/road_c1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_c2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px ><br>";
        echo "<img src=\"img/road_c3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/point_t3.jpg\" height=130px  width=130px >";
        echo "<img src=\"img/road_goal.jpg\" height=130px  width=130px ><br>";
        
    }else if($count == 33) {

        echo "ゴール！";
        echo '<br><a href="clickgame.php">もう1回遊ぶ</a>';
        
    } else {
        echo '<a href="javascript:history.back()">やり直そう！</a><br>';
    }

    ?>

</html>
