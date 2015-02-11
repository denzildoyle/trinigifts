<body lang="en">
  <div id="container">
    
    <h3>Add Card</h3>
      <select>
        <option value="">Gift Card</option>
        <option value="">Loyalty Card</option>
        <option value="">Rechargebale Card</option>
        <option value="">Tri Card</option>
      </select>
      <!-- pass in card type -->
      <!-- pass in user id -->
      
      <div id="giftCard">
        <?= form_open('merchant/addCard/processGiftCard');?>

            <?= form_error('cardName'); ?> 
            <input name="cardName" type="text" value="<?= set_value('cardName');?>" placeholder="Card Name" />

            <?= form_error('amtScheme'); ?> 
            <input name="amtScheme" type="text" value="<?= set_value('amtScheme');?>" placeholder="Card Amount Scheme" />

            <?= form_error('minimumAmt'); ?> 
            <input name="minimumAmt" type="text" value="<?= set_value('minimumAmt');?>" placeholder="Minimum Amount" />
           
            <?= form_error('maximumAmt'); ?>
            <input name="maximumAmt" type="text" value="<?= set_value('maximumAmt');?>" placeholder="Maximum Amount" />
            
            <?= form_error('descrition'); ?> 
            <textarea name="descrition" placeholder="descrition"><?= set_value('Descrition');?></textarea> 

            <?= form_error('expiryDate'); ?>
            <input name="expiryDate" type="text" value="<?= set_value('expiryDate');?>" placeholder="Expiry Date dd/mm/yy" /> 
            
            <?= form_error('expiryTime'); ?> 
            <input name="expiryTime" type="text" value="<?= set_value('expiryTime');?>" placeholder="Expiry Time" />

            <?= form_error('achive'); ?>
            <label>Achive Card<input name="achive" value="achive" type="checkbox" ></label><br>

            <input name="submit" value="Sign Up" type="submit"/>

        <?= form_close();?>
      </div>


      <div id="loyaltyCard">
        <?= form_open('merchant/addCard/processLoyaltyCard');?>
            
            <?= form_error('cardName'); ?> 
            <input name="cardName" type="text" value="<?= set_value('cardName');?>" placeholder="Card Name" />

            <?= form_error('pointsScheme'); ?> 
            <input name="pointsScheme" type="text" value="<?= set_value('pointsScheme');?>" placeholder="Card Points Scheme" />

            <?= form_error('startPoints'); ?> 
            <input name="startPoints" type="text" value="<?= set_value('startPoints');?>" placeholder="Starting Points" />
           
            <?= form_error('descrition'); ?> 
            <input name="descrition" type="text" value="<?= set_value('descrition');?>" placeholder="Descrition" />

            <?= form_error('expiryDate'); ?>
            <input name="expiryDate" type="text" value="<?= set_value('expiryDate');?>" placeholder="Expiry Date" /> 
            
            <?= form_error('achive'); ?>
            <label>Achive Card<input name="achive" value="achive" type="checkbox" ></label><br>  

            <input name="submit" value="Sign Up" type="submit"/>

        <?= form_close();?>
      </div>


      <div id="rechargeableCard">
        <?= form_open('merchant/addUser/processRechargeableCard');?>

            <?= form_error('cardName'); ?> 
            <input name="cardName" type="text" value="<?= set_value('cardName');?>" placeholder="Card Name" />

            <?= form_error('amtScheme'); ?> 
            <input name="amtScheme" type="text" value="<?= set_value('amtScheme');?>" placeholder="Card Amount Scheme" />

            <?= form_error('minimumAmt'); ?> 
            <input name="minimumAmt" type="text" value="<?= set_value('minimumAmt');?>" placeholder="Minimum Amount" />
           
            <?= form_error('maximumAmt'); ?>
            <input name="maximumAmt" type="text" value="<?= set_value('maximumAmt');?>" placeholder="Maximum Amount" />
            
            <?= form_error('descrition'); ?> 
            <textarea name="descrition" placeholder="descrition"><?= set_value('Descrition');?></textarea> 

            <?= form_error('expiryDate'); ?>
            <input name="expiryDate" type="text" value="<?= set_value('expiryDate');?>" placeholder="Expiry Date dd/mm/yy" /> 
            
            <?= form_error('expiryTime'); ?> 
            <input name="expiryTime" type="text" value="<?= set_value('expiryTime');?>" placeholder="Expiry Time" />

            <?= form_error('achive'); ?>
            <label>Achive Card<input name="achive" value="achive" type="checkbox" ></label><br>
           
            <input name="submit" value="Sign Up" type="submit"/>

        <?= form_close();?>
      </div>
  </div>