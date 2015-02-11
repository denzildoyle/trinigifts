<body lang="en">
  <div id="container">
          <!-- __prompt user to enter password again as a safty measure -->
          <h3>Create Ad</h3>
          <p>Compleate Form to Create your ad</p>
          
          <div class="leftSection sidebyside"> <!-- all upload details on the left-->
            <?= form_open('buy/paypal');?>
              <p>upload pictuce here</p>
              <!-- <?= $error;?> -->
              <?= form_open_multipart('createAd/upload');?>
                <input type="file" name="userfile" size="20" />
                <!-- <input type="submit" value="upload" /> -->
              </form>

              <?= form_error('adDescription'); ?>

              <br>
              <label>Ad Description</label><br>
              <textarea rows="4" cols="50" placeholder="Enter optional application discription message (200 character limit)"></textarea>
              <br>

              <?= form_error('socialMessage'); ?>

              <br>
              <label>Social Message</label><br>
              <textarea rows="4" cols="50" placeholder="Enter optional social message (200 character limit)"></textarea>
            
              <!-- __If the user is not signed in take to signup page -->
              <input name="submit" value="done" type="submit"/>
            <?= form_close();?>
          </div>
          <div class="rightSection sidebyside">
            <h1>Preview Area</h1>
          </div>
          <div class="clear"></div>


        <img src="" onClick="openidClicked()" onMouseover"openidHover()" >
  </div>