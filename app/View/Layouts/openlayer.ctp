<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
        <?php echo $this->Html->css('bootstrap.min'); ?>
        <?php echo $this->Html->css('bootstrap-responsive.min'); ?>
        <?php echo $this->Html->script('bootstrap.min'); ?>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->Html->css('http://openlayers.org/dev/theme/default/style.css');
		echo $this->Html->css('http://openlayers.org/dev/examples/style.css');
		echo $this->Html->script('http://openlayers.org/dev/OpenLayers.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>

</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Running Kingdom</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#">FEED</a></li>
              <li class="active"><a href="#about">MAP</a></li>
              <li><a href="#contact">ABOUT</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

	<div id="container" class="container" align="center">
		<div class="hero-unit">
		    <h1>Running Kingdom Map</h1>
		</div>

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
