<?php

    if (isset($_POST['player1_count'])){
        $player1_count = $_POST['player1_count'];
        
        if(isset($_POST['player1_action'])){
        
            if ($_POST['player1_action'] == "up"){
                $player1_count -= 10 ;
            } else if ($_POST['player1_action'] == "left"){
                $player1_count -= 1 ;
            } else if ($_POST['player1_action'] == "right"){
                $player1_count += 1 ;
            } else if ($_POST['player1_action'] == "down"){
                $player1_count += 10;
            } 
        }
        
    } else {
        $player1_count = 0;
    }
    
    
    if (isset($_POST['player2_count'])){
        $player2_count = $_POST['player2_count'];
        
        if(isset($_POST['player2_action'])){
            if ($_POST['player2_action'] == "up"){
                $player2_count -= 10 ;
            } else if ($_POST['player2_action'] == "left"){
                $player2_count -= 1 ;
            } else if ($_POST['player2_action'] == "right"){
                $player2_count += 1 ;
            } else if ($_POST['player2_action'] == "down"){
                $player2_count += 10;
            }
        }
        
    } else {
        $player2_count = 33;
    }
    
    
    
    //ラジオボタンでクリック
    echo '<form action="clickgame.php" method="post">';
        //player1の入力
        echo '<label><input type="radio" name="player1_action" value="up">↑</label>';
        echo '<label><input type="radio" name="player1_action" value="left">←</label>';
        echo '<label><input type="radio" name="player1_action" value="right">→</label>';
        echo '<label><input type="radio" name="player1_action" value="down">↓</label>';
        echo '<input type="hidden" name="player1_count" value="'.$player1_count.'">';
        echo '<input type="hidden" name="player2_count" value="'.$player2_count.'">';
        echo '<input type="submit" value="プレイヤー1を移動">';
        //player2の入力
        echo '<label><input type="radio" name="player2_action" value="up">↑</label>';
        echo '<label><input type="radio" name="player2_action" value="left">←</label>';
        echo '<label><input type="radio" name="player2_action" value="right">→</label>';
        echo '<label><input type="radio" name="player2_action" value="down">↓</label>';
        echo '<input type="hidden" name="player1_count" value="'.$player1_count.'">';
        echo '<input type="hidden" name="player2_count" value="'.$player2_count.'">';
        echo '<input type="submit" value="プレイヤー2を移動">';
    echo '</form>';
    
    echo "1:".$player1_count."<br>";
    echo "2:".$player2_count."<br>";
    
//     if($player1_count == $player2_count){
//         $back = "<scriptjavascript:history.back()";
//         echo $back;
//         $alert = "<script type ='text/javascript'>alert('選びなおしてください');</script>";
//         echo $alert;
//     }

    if($player1_count == 33){
        $player1_finish = TRUE ;
        $flag_finish = true;
    } else if ($player2_count == 0){
        $player2_finish = TRUE ;
        $flag_finish = true;
    }
    
    if(isset($flag_finish)){
    
        if($player1_finish == TRUE){
            echo "プレイヤー1の勝利！";
        } else if ($player2_finish == TRUE){
            echo "プレイヤー2の勝利！";
        }
        echo '<br><a href="clickgame.php">もう1回遊ぶ</a><br>';
    }
    
    //1段目の表示
    if($player1_count == 0){
        echo "<img src=\"img/player1_c1.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 0){
        echo "<img src=\"img/player2_c1.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_c1.jpg\" height=130px  width=130px >";
    }
    
    if($player1_count == 1){
        echo "<img src=\"img/player1_t1.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 1){
        echo "<img src=\"img/player2_t1.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
    }
    
    if($player1_count == 2){
        echo "<img src=\"img/player1_t1.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 2){
        echo "<img src=\"img/player2_t1.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_t1.jpg\" height=130px  width=130px >";
    }
    
    if($player1_count == 3){
        echo "<img src=\"img/player1_c2.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 3){
        echo "<img src=\"img/player2_c2.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_c2.jpg\" height=130px  width=130px >";
    }
    
    echo "<br>";
    
    //2段目の表示
    if($player1_count == 10){
        echo "<img src=\"img/player1_t4.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 10){
        echo "<img src=\"img/player2_t4.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
    }
    if($player1_count == 11){
        echo "<img src=\"img/player1_cross.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 11){
        echo "<img src=\"img/player2_cross.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
    }
    if($player1_count == 12){
        echo "<img src=\"img/player1_cross.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 12){
        echo "<img src=\"img/player2_cross.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
    }
    if($player1_count == 13){
        echo "<img src=\"img/player1_t2.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 13){
        echo "<img src=\"img/player2_t2.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px >";
    }
    
    echo "<br>";
    
    //3段目の表示
    if($player1_count == 20){
        echo "<img src=\"img/player1_t4.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 20){
        echo "<img src=\"img/player2_t4.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_t4.jpg\" height=130px  width=130px >";
    }
    if($player1_count == 21){
        echo "<img src=\"img/player1_cross.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 21){
        echo "<img src=\"img/player2_cross.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
    }
    if($player1_count == 22){
        echo "<img src=\"img/player1_cross.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 22){
        echo "<img src=\"img/player2_cross.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_cross.jpg\" height=130px  width=130px >";
    }
    if($player1_count == 23){
        echo "<img src=\"img/player1_t2.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 23){
        echo "<img src=\"img/player2_t2.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_t2.jpg\" height=130px  width=130px >";
    }
    
    echo "<br>";
    
    //4段目の表示
    if($player1_count == 30){
        echo "<img src=\"img/player1_c4.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 30){
        echo "<img src=\"img/player2_c4.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_c4.jpg\" height=130px  width=130px >";
    }
    
    if($player1_count == 31){
        echo "<img src=\"img/player1_t3.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 31){
        echo "<img src=\"img/player2_t3.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
    }
    
    if($player1_count == 32){
        echo "<img src=\"img/player1_t3.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 32){
        echo "<img src=\"img/player2_t3.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_t3.jpg\" height=130px  width=130px >";
    }
    
    if($player1_count == 33){
        echo "<img src=\"img/player1_c3.jpg\" height=130px  width=130px >";
    } else if ($player2_count == 33){
        echo "<img src=\"img/player2_c3.jpg\" height=130px  width=130px >";
    } else {
        echo "<img src=\"img/road_c3.jpg\" height=130px  width=130px >";
    }
    
    echo '<br><a href="clickgame.php">リスタート</a>';
    
    
    
    echo "<br>";
    
?>