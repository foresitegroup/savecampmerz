<?
$PageTitle = "Contact";
include "header.php";
?>

<div id="rightcol">
  <a href="images/contact1.jpg" class="fancybox" rel="contact"><img src="images/contact1_thumb.jpg" alt="Evening Camp Fire at Camp Merz"></a><br>
  Evening Camp Fire at Camp Merz<br>
  <br>
  <a href="images/contact2.jpg" class="fancybox" rel="contact"><img src="images/contact2_thumb.jpg" alt="Trading Post Camp Merz 2006"></a><br>
  Trading Post Camp Merz 2006
</div>

<script type="text/javascript">
  <!--
  function checkform (form) {
    if (form.name.value == "") { alert('Name required.'); form.name.focus(); return false ; }
    if (form.email.value == "") { alert('E-mail required.'); form.email.focus(); return false ; }
    return true ;
  }
  //-->
</script>

<h1>Contact</h1>
<?php
if (isset($_POST['submit'])) {
  $SendTo = "jandb56@aol.com, francis@foresitegrp.com, mark@foresitegrp.com";
  $Subject = "From " . $_POST['name'];
  $From = "From: Contact Form <contactform@savecampmerz.org\r\n";
  $From .= "Reply-To: " . $_POST['email'] . "\r\n";

  $Message = "An Email has been sent by: " . $_POST['name'] . "\n";
  if (!empty($_POST['company'])) { $Message .= "Company: " . $_POST['company'] . "\n"; }
  $Message .= "Email: " . $_POST['email'] . "\n";
  if (!empty($_POST['street'])) { $Message .= "Street: " . $_POST['street'] . "\n"; }
  if (!empty($_POST['city'])) { $Message .= "City: " . $_POST['city'] . "\n"; }
  if (!empty($_POST['state'])) { $Message .= "State: " . $_POST['state'] . "\n"; }
  if (!empty($_POST['zip'])) { $Message .= "Zip: " . $_POST['zip'] . "\n"; }
  if (!empty($_POST['comment'])) { $Message .= "\n" . $_POST['name'] . " has made the following comment:\n" . $_POST['comment'] . "\n"; }

  $Message = stripslashes($Message);

  mail($SendTo, $Subject, $Message, $From);

  echo "<strong>Thank you.  Your information has been sent.</strong><br><br>";
} else {
?>
<h2>Contact SaveCampMerz</h2>
Please contact us if you have any questions, concerns  or information you would like to share. We are always open to ideas and information that will maintain and improve the quality of the Boy Scout traditions at Camp Merz in Chautauqua County.<br>
<br>

Fill in the below fields to receive information from SaveCampMerz.<br>
<br>

<form action="contact.php" method="post" onSubmit="return checkform(this)">
  *Contact Name <input name="name" id="contact" size="30"><br>
  Company/Organization <input name="company" id="company" size="30"><br>
  Street <input name="street" id="street" size="25"><br>
  City <input name="city" id="city"><br>
  State <input name="state" id="state"><br>
  Zip code <input name="zip" id="zip" size="8"><br>
  *Email Address <input name="email" id="email" size="30"><br>
  <br>
  
  Comments:<br>
  <textarea name="comment" COLS=35 ROWS=6></textarea><br>
	<input type="submit" name="submit" value="Click To Send Form" style="border: 1px solid #999; color:#f00;">
</form>

*Required fields for contact.<br>
<br>

Or please email us at <a href="mailto:jandb56@aol.com">info@savecampmerz.org</a><br>
<br>

Mail us at<br>
SaveCampMerz<br>
C/O Jim Butterfield<br>
9606 Watts Branch Dr.<br>
Rockville, MD 20850-3754<br>
<?php } ?>
<br>

Privacy Policy<br>
Information you provide to SaveCampMerz via this website will not be sold or traded to third party organizations, businesses and or individuals. We will only use this information to provide you (periodically) with progress and updated information about SaveCampMerz.<br>
<br>

If you wish not to be contacted by email please contact <a href="mailto:jandb56@aol.com">info@savecampmerz.org</a>

<? include "footer.php"; ?>