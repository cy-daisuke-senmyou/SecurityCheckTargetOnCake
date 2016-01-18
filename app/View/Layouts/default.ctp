<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>SecurityCheckTarget</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->
  <?php //echo $this->Html->css('default/bootstrap.min'); ?>
  <?php echo $this->Html->css('bootstrap-default.min'); ?>
  <?php echo $this->Html->css('bootstrap-responsive.min'); ?>

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <style>
    #content {
      margin: 0 auto;
      width: 400px;
    }
    .footer {
      padding-top: 50px;
    }
  </style>

  <?php
  echo $this->fetch('meta');
  echo $this->fetch('css');
  ?>
</head>
<body>
	<div id="container">
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
  </div>
  <div class="footer">
    <div class="container">
      <p class="text-muted text-center">&copy; 1998-2014 CYBIRD Co.,Ltd<br/>All Rights Reserved.</p>
    </div>
	</div>
  <!-- Le javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <?php echo $this->Html->script('bootstrap.min'); ?>
  <?php echo $this->fetch('script'); ?>
</body>
</html>
