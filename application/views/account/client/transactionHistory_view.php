<body lang="en">
	
		<div id="container">
			<h1>Transaction History</h1>
			<h3>Gift Card</h3>
			<!-- temporary formatting  -->
			<?php if(isset($giftCardsTrans)) : foreach($giftCardsTrans as $row) : ?>
				<p><label>Card Number:</label>  <?= $row->CardNum;?> </p>
				<p><label>Card Amount:</label> <?= $row->cardAmount;?> </p>
				<p><label>Trans Amount:</label> : <?= $row->transAmount?> </p>
				<p><label>New Amount:</label>  <?= $row->newAmount;?> </p>
				<p><label>Tranaction Date:</label> <?= $row->transDate;?> </p>
				<!-- __convert to 12h time -->
				
			<?php endforeach; ?>
			<?php else : ?>	
				<h2>No Giftcard Transactions</h2>
			<?php endif; ?>

<hr>
			<h3>Loyalty Card</h3>
			<?php if(isset($loyaltyCardsTrans)) : foreach($loyaltyCardsTrans as $row) : ?>
				<p><label>Card Number:</label>  <?= $row->CardNum;?> </p>
				<p><label>PreciousPoints:</label> <?= $row->previousPoints;?> </p>
				<p><label>Trans Amount:</label> : <?= $row->transAmount?> </p>
				<p><label>Points Earned:</label>  <?= $row->pointsEarned;?> </p>
				<p><label>TotalPoints:</label> <?= $row->totalPoints;?> </p>
				<p><label>Trans Date:</label> <?= $row->transDate;?> </p>
				<!-- __convert to 12h time -->
				
			<?php endforeach; ?>
			<?php else : ?>	
				<h2>No Loyalty Card Transactions</h2>
			<?php endif; ?>
<hr>
			<h3>Recharge Card</h3>
			<?php if(isset($rechargeCardsTrans)) : foreach($rechargeCardsTrans as $row) : ?>
				<p><label>Card Number:</label>  <?= $row->CardNum;?> </p>
				<p><label>Card Amount:</label> <?= $row->cardAmount;?> </p>
				<p><label>Trans Amount:</label> : <?= $row->transAmount?> </p>
				<p><label>New Amount:</label>  <?= $row->newAmount;?> </p>
				<p><label>Tranaction Date:</label> <?= $row->transDate;?> </p>
				<!-- __convert to 12h time -->
				
			<?php endforeach; ?>
			<?php else : ?>	
				<h2>No Rechargeable Card Transactions</h2>
			<?php endif; ?>
		</div>