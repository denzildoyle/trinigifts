<body lang="en">
	<div id="container">
		<h3>My Recharge Card</h3>
		<!-- temporary formatting  -->
		<?php if(isset($rechargeCardsTrans)) : foreach($rechargeCardsTrans as $row) : ?>
			<p><label>Card Number:</label>  <?= $row->CardNum;?> </p>
			<p><label>Card Amount:</label> <?= $row->cardAmount;?> </p>
			<p><label>Trans Amount:</label> : <?= $row->transAmount?> </p>
			<p><label>New Amount:</label>  <?= $row->newAmount;?> </p>
			<p><label>Tranaction Date:</label> <?= $row->transDate;?> </p>
			<hr>
		<?php endforeach; ?>
		<?php else : ?>	
			<h2>No records were returned.</h2>
		<?php endif; ?>
	</div>

