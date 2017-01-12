<?php
	session_start();
	include_once 'connect_to_mysql.php';
	include_once 'auth.php';

	
?>
<html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1">
	<title>The Underground</title>

	<!--Css files-->
	<link rel="stylesheet" href="css/normalize.css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/site.css">
	<link type="text/css" href="skin/jplayer.blue.monday.css" rel="stylesheet" />

	<!--JS Files -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
	<script src="js/site.js"></script>

</head>
<body>


<div class="wrapper">

	<?php include_once 'includes/header.php' ?>

	<section id="termsofuse">
		<h1 >The Underground Terms of Use</h1>
		<h2>Using Our Service</h2>
			<p>You must follow any policies made available to you within the Services.</p>

			<p>Don’t misuse our Services. For example, don’t interfere with our Services or try to access them using a method other than the interface and the instructions that we provide. You may use our Services only as permitted by law, including applicable export and re-export control laws and regulations. We may suspend or stop providing our Services to you if you do not comply with our terms or policies or if we are investigating suspected misconduct.
			</p>

			<p>
			Using our Services does not give you ownership of any intellectual property rights in our Services or the content you access. You may not use content from our Services unless you obtain permission from its owner or are otherwise permitted by law. These terms do not grant you the right to use any branding or logos used in our Services. Don’t remove, obscure, or alter any legal notices displayed in or along with our Services.
			</p>

			<p>
			Our Services display some content that is not The Underground's. This content is the sole responsibility of the entity that makes it available. We may review content to determine whether it is illegal or violates our policies, and we may remove or refuse to display content that we reasonably believe violates our policies or the law. But that does not necessarily mean that we review content, so please don’t assume that we do.
			</p>

			<p>
			In connection with your use of the Services, we may send you service announcements, administrative messages, and other information. You may opt out of some of those communications.
			</p>

			<p>
			Some of our Services are available on mobile devices. Do not use such Services in a way that distracts you and prevents you from obeying traffic or safety laws.
			</p>

		<h2>Privacy and Copyright Protection</h2>
			<p>
				The Underground's privacy policies explain how we treat your personal data and protect your privacy when you use our Services. By using our Services, you agree that Google can use such data in accordance with our privacy policies.
			</p>

			<p>
				We respond to notices of alleged copyright infringement and terminate accounts of repeat infringers according to the process set out in the U.S. Digital Millennium Copyright Act.
			</p>

			<p>
				We provide information to help copyright holders manage their intellectual property online. If you think somebody is violating your copyrights and want to notify us please contact us via email.
			</p>
		<h2>Your Content in our Services</h2>
			<p>
				Some of our Services allow you to upload, submit, store, send or receive content. You retain ownership of any intellectual property rights that you hold in that content. In short, what belongs to you stays yours.
			</p>
			<p>
				When you upload, submit, store, send or receive content to or through our Services, you give The Underground a worldwide license to use, host, store, reproduce, communicate, publish, publicly perform, publicly display and distribute such content. The rights you grant in this license are for the limited purpose of operating, promoting, and improving our Services, and to develop new ones. This license continues even if you stop using our Services
			</p>
		<h2>Liabilities for our Services</h2>
			<p>
				WHEN PERMITTED BY LAW, THE UNDEROUND, WILL NOT BE RESPONSIBLE FOR LOST PROFITS, REVENUES, OR DATA, FINANCIAL LOSSES OR INDIRECT, SPECIAL, CONSEQUENTIAL, EXEMPLARY, OR PUNITIVE DAMAGES.

				TO THE EXTENT PERMITTED BY LAW, THE TOTAL LIABILITY OF THE UNDERGROUND, AND ITS SUPPLIERS AND DISTRIBUTORS, FOR ANY CLAIMS UNDER THESE TERMS, INCLUDING FOR ANY IMPLIED WARRANTIES, IS LIMITED TO THE AMOUNT YOU PAID US TO USE THE SERVICES (OR, IF WE CHOOSE, TO SUPPLYING YOU THE SERVICES AGAIN).

				IN ALL CASES, THE UNDERGROUND, AND ITS SUPPLIERS AND DISTRIBUTORS, WILL NOT BE LIABLE FOR ANY LOSS OR DAMAGE THAT IS NOT REASONABLY FORESEEABLE.
			</p>
		<h2>About these Terms</h2>
			<p>
				We may modify these terms or any additional terms that apply to a Service to, for example, reflect changes to the law or changes to our Services. You should look at the terms regularly. We’ll post notice of modifications to these terms on this page. We’ll post notice of modified additional terms in the applicable Service. Changes will not apply retroactively and will become effective no sooner than fourteen days after they are posted. However, changes addressing new functions for a Service or changes made for legal reasons will be effective immediately. If you do not agree to the modified terms for a Service, you should discontinue your use of that Service.
			</p>
			<p>
				If there is a conflict between these terms and the additional terms, the additional terms will control for that conflict.
			</p>
			<p>
				These terms control the relationship between The Undergound and you. They do not create any third party beneficiary rights.
			</p>
			<p>
				If you do not comply with these terms, and we don’t take action right away, this doesn’t mean that we are giving up any rights that we may have (such as taking action in the future).
			</p>
			<p>
				If it turns out that a particular term is not enforceable, this will not affect any other terms.
			</p>
			<p>
				The laws of California, U.S.A., excluding California’s conflict of laws rules, will apply to any disputes arising out of or relating to these terms or the Services. All claims arising out of or relating to these terms or the Services will be litigated exclusively in the federal or state courts of Santa Clara County, California, USA, and you and The Underground consent to personal jurisdiction in those courts.
			</p>
						
		
	</section>
	<footer>
		<div class="footer">
			<ul class="col-md-3 footer-col">
				<h2>Sitemap</h2>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="chat/index.php">Chat</a></li>
				<li><a href="shop.html">Shop</a></li>
			</ul>
			<ul class="col-md-3 footer-col">
				<h2>Contact</h2>
				<li><a href="">Email</a></li>
				<li><a href="">Twitter</a></li>
				<li><a href="">Facebook</a></li>			
			</ul>
			<ul class="col-md-3 footer-col">
				<h2>Legal</h2>
				<li><a href="">Terms of Use</a></li>
				<li><a href="">Privacy</a></li>
			</ul>

			<div class="col-md-3 footer-col">
				<form role="form">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Newsletter</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</footer>

	<div class="subfooter">
		<div class="pull-left">
			&copy;The Underground All Rights Reserved
		</div>
		<div class="pull-right">Created By Donte Web Design</div>
	</div>


	<script src="js/bootstrap.js"></script><!-- Bootstrap Javascript -->
	
	</div>
</body>
</html>