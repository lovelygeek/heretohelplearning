<?php @include 'captcha.php'; //DO NOT EDIT ABOVE THIS LINE! However, if you are NOT using image verification, please REMOVE this line. ?>


<?php
/*
  ==============================================================================================
  NL-PHPMail 2.2.2 � 2005-2008 Amelie M.
  Original concept by Sasha (2002-2005), http://nothing-less.net.
  ==============================================================================================
*/

// You may start editing the form here.

?>
<?php include("header.php"); ?>

	<div id="wideCol">
		<h1>Contact Us</h1>
		<form method="post" action="nlphpmail.php" class="contactForm">
		<input type="hidden" name="subject" id="subject" value="From HereToHelpLearning.com" />
			<p class="name">
				<input type="text" name="name" id="name" size="40" />
				<label for="name">Name</label>
			</p>

			<p class="email">
				<input type="text" name="email" id="email" size="40" />
				<label for="email">Email</label>
			</p>

			<p class="web">
				<input type="text" name="url" id="url" value="http://" size="40" />
				<label for="web">Website</label>
			</p>

			<p class="comments">
				<textarea name="comments" id="comments" cols="40" rows="3"></textarea>
			</p>

			<p class="captcha">
				<label for="verifyimage">Enter the letters and numbers you see on this image into the box below<br /> 
				(if you cannot see the image, please let me know):</label>
				<img src="verify.png" alt="CAPTCHA Image - if you cannot see this, please contact me for advice" /><br />
				<input type="text" name="verifyimage" id="verifyimage" maxlength="5" />
			</p>

			<p class="submit">
				<input type="submit" name="submit" id="submit" value="Send" size="30" />
				<input type="reset" name="reset" id="reset" value="Clear" size="30" />
			</p>
		</form>
		<!--<p><a href="http://codegrrl.com/" title="NL-PHPMail from CodeGrrl.com">Powered by NL-PHPMail 2.2.2</a></p>-->
	</div><!--#wideCol-->

	<aside id="narrowCol">

		<h2>How to Reach Us</h2>
		<img src="img/ranchomora.jpg" width="240" height="161" alt="Our Home" class="dropshadow" /><br />
		<address>
		5877 Green Valley Road<br />
		Placerville, CA 95667 
		</address>

		<p><img src="img/adobe.png" alt="pdf" /> <a href="/files/directions.pdf">Download directions to our house &raquo;</a></p>

		<p>
		<img src="img/mobile.png" alt="cell phone" /> (530) 409-8545<br />
		<img src="img/email.png" alt="email" /> beth[at]heretohelplearning.com 
		</p>

		<p>
		<a href="http://www.flickr.com/photos/here_to_help_learning/"><img src="img/flickr.png" alt="Flickr" /></a>
		<a href="http://www.facebook.com/heretohelplearning"><img src="img/facebook2.png" alt="Facebook" /></a>
		</p>
	</aside><!--#narrowCol-->

<?php include("footer.php"); ?>