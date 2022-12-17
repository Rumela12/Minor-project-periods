<?php
    include './includes/common.php';
	if(!isset($_SESSION['email_id'])){
        header('location:Login.php');
    }
    $user_id = $_SESSION['user_id'];
	$email_id = $_SESSION['email_id'];
    $pr_date = 0;
    $select = "SELECT * FROM dates WHERE u_id = '".$user_id."' ORDER BY id DESC";
    $result1 = mysqli_query($con, $select);
    $row_count = mysqli_num_rows($result1);
    // echo $row_count;
    while ($row = mysqli_fetch_array($result1)){
        $mydates[] = $row['p_date'];
    }
        for($i=0;$i<$row_count;$i++){
            $mydate[$i] = strtotime($mydates[$i]);
        }
        for($i=0;$i<$row_count-1;$i++){
            $interval[] = (($mydate[($i+1)] - $mydate[$i])/60/60/24);
            // echo $interval[$i];
        }

        $pr_date = array_sum($interval);
        $days_bw = (int)($pr_date/$row_count);
        // echo $days_bw;
        // echo date('Y-m-d',strtotime(end($mydate)));
        $last_date = date('y-m-d', $mydate[$row_count-1]);
        $prediction = date('Y-m-d', strtotime($last_date. ' + '."$days_bw".' days'));
        $pr_prediction = date('Y-m-d', strtotime($prediction. ' - 1 days'));
        // echo $pr_prediction;
        $nxt_prediction = date('Y-m-d', strtotime($prediction. ' + 1 days'));
        // echo $nxt_prediction;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracker</title>
    <script src="https://kit.fontawesome.com/ff0e7d4c8a.js" crossorigin="anonymous"></script>
    <style>
      #container {
        text-align: center;
        padding: 100px;
        background-image: url('images/result.jpg');

      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
</head>
<body>
    <?php
        include './includes/navbar.php';
    ?>
<div id="container">
    <div class="card">
      <div>
      <i class="fa-solid fa-calendar-days"></i>
      </div>
        <h1>Predicted Dates</h1> 
        <p><?php echo"$pr_prediction"; ?></p>
        <p><?php echo"$prediction"; ?></p>
        <p><?php echo"$nxt_prediction"; ?></p>
    </br>
        <p style="color: #9ABC66;">Return to <a href="home.php">Home page!</a></p>
      </div>
      </div>
    
</body>
</html>
