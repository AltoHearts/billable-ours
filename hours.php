<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>  
	<h1>Enter Hours</h1>
	<p><em>Pay calculator for agency billable hours</em></p>

<?php
if(isset($_POST['hours'])){

    $hours = (int)$_POST['hours'];

    $rate = $_POST['rate'];
    
    $pay = $hours * $rate;
    
    echo '<p>You input <b>' . $hours . '</b> hours at a rate of <b>$' . $rate . '</b> and your pay is <b>$' . $pay . '</b></p>
    <p><a href="">Enter More Hours</a></p>';
    
    
}else{
   echo '
   <h3>Please enter your billable hours and hourly rate</h3>
   <div class="row">
	<div class="col-sm-6">
	<form role="form" action="" method="post">
		<div class="form-group">
			<label for="nm">Billable Hours</label>
			<input type="text" class="form-control" id="nm" name="hours" autofocus required>
		</div>
		<div class="form-group">
			<label for="pw">Hourly Rate</label>
			<input type="text" class="form-control" id="pw" name="rate" required>
		</div>
		<div class="form-group">
			<button type="submit" value="Show Pay" class="btn btn-primary">Show Pay</button>
		</div>
	</form>
	</div>
    <div class="col-sm-6"></div>
</div><!-- / row --> 
   '; 
}

?>

    <!-- footer starts here -->    
<?php include 'includes/footer.php';?>
