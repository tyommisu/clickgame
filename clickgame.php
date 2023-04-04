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
    
    
    //プレイ順番のカウント
    if(isset($_POST['player_turn'])){
        $player_turn = $_POST['player_turn'];
        $player_turn += 1;
    } else {
        $player_turn = 1;
    }
    
    //動作確認用
    echo "順番:".$player_turn;
 
    //ラジオボタンでクリック
    echo '<form action="clickgame.php" method="post">';
    
        if( $player_turn %2 == 1 ){
            //player1の入力
            echo "プレイヤー1の番です<br>";
            echo '<label><input type="radio" name="player1_action" value="up">↑</label>';
            echo '<label><input type="radio" name="player1_action" value="left">←</label>';
            echo '<label><input type="radio" name="player1_action" value="right">→</label>';
            echo '<label><input type="radio" name="player1_action" value="down">↓</label>';
            echo '<input type="hidden" name="player1_count" value="'.$player1_count.'">';
            echo '<input type="hidden" name="player2_count" value="'.$player2_count.'">';
            echo '<input type="hidden" name="player_turn" value="'.$player_turn.'">';
            echo '<input type="submit" value="プレイヤー1を移動">';
        } else {   
            //player2の入力
            echo "プレイヤー2の番です<br>";
            echo '<label><input type="radio" name="player2_action" value="up">↑</label>';
            echo '<label><input type="radio" name="player2_action" value="left">←</label>';
            echo '<label><input type="radio" name="player2_action" value="right">→</label>';
            echo '<label><input type="radio" name="player2_action" value="down">↓</label>';
            echo '<input type="hidden" name="player1_count" value="'.$player1_count.'">';
            echo '<input type="hidden" name="player2_count" value="'.$player2_count.'">';
            echo '<input type="hidden" name="player_turn" value="'.$player_turn.'">';
            echo '<input type="submit" value="プレイヤー2を移動">';
        }
        
    echo '</form>';
    
    //動作確認用
    echo "1:".$player1_count."<br>";
    echo "2:".$player2_count."<br>";
    
    //プレイヤーの入力エラー判定
    $player_ary_err = array(0,1,2,3,10,11,12,13,20,21,22,23,30,31,32,33); 
    
    $player1_ary_err_flag = in_array($player1_count, $player_ary_err);
    $player2_ary_err_flag = in_array($player2_count, $player_ary_err);
    
    //同じ値じゃなかったらTRUE　（エンカウントしてたらFALSE）
    $player_encnt_flag = ($player1_count != $player2_count);
    
    //すべてTRUEだったらTRUE、1つでもFALSEがあればFALSE＋文言表示
 
    $errer_flag = ($player_encnt_flag && $player1_ary_err_flag && $player2_ary_err_flag );
        if(isset($errer_flag)){
            if($errer_flag == FALSE){
            //動作確認用
            echo "エラーフラグが立っています<br>";
            }
        }

    
    if($player1_count == 33){
        echo "プレイヤー1の勝利！";
        echo '<br><a href="clickgame.php">もう1回遊ぶ</a><br>';
    } else if ($player2_count == 0){
        echo "プレイヤー2の勝利！";
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