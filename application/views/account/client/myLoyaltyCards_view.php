<body lang="en">
	<div id="container">
		<h3>My Loyalty Card</h3>
		<!-- __temporary formatting  -->
		<?php if(isset($loyaltyCardsTrans)) : foreach($loyaltyCardsTrans as $row) : ?>
			<p><label>Card Number:</label>  <?= $row->CardNum;?> </p>
			<p><label>PreciousPoints:</label> <?= $row->previousPoints;?> </p>
			<p><label>Trans Amount:</label> : <?= $row->transAmount?> </p>
			<p><label>Points Earned:</label>  <?= $row->pointsEarned;?> </p>
			<p><label>TotalPoints:</label> <?= $row->totalPoints;?> </p>
			<p><label>Trans Date:</label> <?= $row->transDate;?> </p>
			<!-- __convert to 12h time -->
			<hr>
		<?php endforeach; ?>
		<?php else : ?>	
			<h2>No records were returned.</h2>
		<?php endif; ?>
	</div>
