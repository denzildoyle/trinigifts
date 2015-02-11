<body lang="en">
	<div id="container">
		<h1>My Gift Card</h1>
		<!-- temporary formatting  -->
		<?php if(isset($giftCardsTrans)) : foreach($giftCardsTrans as $row) : ?>
			<p><label>Card Number:</label>  <?= $row->CardNum;?> </p>
			<p><label>Card Amount:</label> <?= $row->cardAmount;?> </p>
			<p><label>Trans Amount:</label> : <?= $row->transAmount?> </p>
			<p><label>New Amount:</label>  <?= $row->newAmount;?> </p>
			<p><label>Tranaction Date:</label> <?= $row->transDate;?> </p>
			<!-- __convert to 12h time -->
			<hr>
		<?php endforeach; ?>
		<?php else : ?>	
			<h2>No records were returned.</h2>
		<?php endif; ?>
	</div>
