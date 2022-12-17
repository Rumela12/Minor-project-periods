<?php
    include './includes/common.php';
	if(!isset($_SESSION['email_id'])){
        header('location:Login.php');
    }
?>
<html>
    <head>
        <!-- <link href="track.css" rel="stylesheet"> -->
        <title>Track your period</title>
        <script src="https://kit.fontawesome.com/ff0e7d4c8a.js" crossorigin="anonymous"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="track.js"></script> -->
<script type="text/javascript">
	$(document).ready(function(){
		var html = '<tr><td><input class="form-control" type="date" name="p_date[]" required=""></td><td><input class="btn btn-danger" type="button" name="remove" id="remove" value="Remove"></td></tr>';
		
		var max = 5;
		var x = 1;

		$("#add_more").click(function(){
			if(x<=max){
				$("#table_field").append(html);
				x++;
			}
		});
		$("#table_field").on('click','#remove',function(){
			$(this).closest('tr').remove();
			x--;
		});
	});
</script>
    </head>
    <body>
	<?php
        include './includes/navbar.php';
        // include './includes/check-if-added.php';
        ?>
		<div style="background-image: url(img/login.jpg);">
        <div class="container" >
			<form class="insert-form" id="insert_form" method="post" action="">
				<hr>
				<h1 class="text-center">Period Prediction</h1>
				<p class="text-center" style="color: red;">The more dates you have the more accourate our Prediction will be!</p>
				<p class="text-center" style="color: red;">Start with the most recent one and so on.</p>
				<hr>
				<div class="input-field">
					<table class="table table-bordered" id="table_field">
						<tr>
							<th>When did you have your periods?</th>
							<!-- <th>How many days did it go on for?</th> -->
							<th>Add or Remove</th>
						</tr>
						<?php
							$user_id = $_SESSION['user_id'];
							$email_id = $_SESSION['email_id'];
							if(isset($_POST['save'])){
								$p_date = $_POST['p_date'];

								foreach($p_date as $key => $value){
									$query = "INSERT INTO dates(u_id, email, p_date) VALUES('".$user_id."','".$email_id."','".$value."')";
									$result = mysqli_query($con, $query);
								}
							}
						?>
						<tr>
							<td><input class="form-control" type="date" name="p_date[]" required=""></td>
							<!-- <td><input class="form-control" type="number" name="p_day[]" required=""></td> -->
							<td><input class="btn btn-warning" type="button" name="add" id="add_more" value="Add"></td>
						</tr>
					</table>
					<center>
						<input class="btn btn-success" type="submit" name="save" id="save" value="Save Data"/>
					</center>
				</div>
			</form>

			<?php 
			$select = "SELECT * FROM dates WHERE u_id = '".$user_id."' ORDER BY id DESC";
			$result = mysqli_query($con, $select);
			if (mysqli_fetch_array($result)>=1){
				?>
				<table class="table table-striped text-center" style="width: 50%;margin-left: auto; margin-right: auto;">
				<hr>
				<h1 class="text-center">Period Log</h1>
				<!-- <p class="text-center">The more dates you have the more accourate our Prediction will be!</p> -->
				<!-- <p class="text-center">Start with the most recent one and so on.</p> -->
				<hr>
                <tr>
					<th>When did you have your periods?</th>
					<!-- <th>How many days did it go on for?</th> -->
					<!-- <th>Add or Remove</th> -->
				</tr>
                <?php
                    
                    while ($row = mysqli_fetch_array($result)){ ?>


                <tr>
                    <td><?php echo $row['p_date']; ?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
			<center>
				<input class="btn btn-success" type="submit" name="save" id="save" onclick="location.href='view.php'" value="View Predicted Results"/>
				<!-- <input class="btn btn-success" type="submit" name="delete" id="delete" onclick="<?php

				?>" value="Delete your Data"/> -->
				<hr>
			</center>
		</div>
<?php			}
			?>
			
			</div>
    </body>
</html>