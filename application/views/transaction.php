<html>

<head>
	<title>Checkout</title>
</head>

<body>

	<h1>Transaction action</h1>
	<form action="<?php echo site_url() ?>transaction/process" method="POST">
		<p>
			<label>Order id</label>
			<input value="" size="20" type="text" name="order_id" autocomplete="off" />
		</p>
		<p>
			<label>Action</label><br />
			<input type="radio" name="action" value="status">Get Status<br>
			<input type="radio" name="action" value="approve">Approve<br>
			<input type="radio" name="action" value="cancel">Cancel<br>
			<input type="radio" name="action" value="expire">Expire<br>
		</p>
		<button class="submit-button" type="submit">Submit Payment</button>
	</form>
	<p class="footer"><a href="<?php echo base_url() ?>">KEMBALI</a> | Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</body>

</html>