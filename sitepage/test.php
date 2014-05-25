<?php

	if($_POST)
	{
		echo "works";
		print_r ($_POST['other']);
	}

?>




<div class="col-md-3 footer-col">
	<form role="form" name="other" method="POST">
	  <div class="form-group">
	    <label for="newsletterEmail">Newsletter</label>
	    <input type="text" class="form-control" id="newsletter" placeholder="Ennnter " name="other">
	  </div>
	  <button type="submit" class="btn btn-default" name="other">Submit</button>
	</form>
</div>
				


<div class="col-md-3 footer-col">
	<form role="form" method="POST">
	  <div class="form-group">
	    <label for="newsletterEmail">Newsletter</label>
	    <input type="text" class="form-control" id="newsletter" placeholder="Enter " name="other">
	  </div>
	  <button type="submit" class="btn btn-default" name="newsletter">Submit</button>
	</form>
</div>
