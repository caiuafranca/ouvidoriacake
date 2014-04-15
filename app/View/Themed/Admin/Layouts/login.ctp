<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<?php echo $this->Html->docType('html5'); ?>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->fetch('meta');

        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('login');
        echo $this->Html->css('core');

        echo $this->fetch('css');

        echo $this->Html->script('libs/jquery-1.10.2.min');
        echo $this->Html->script('libs/bootstrap.min');
        echo $this->Html->script('functions');

        echo $this->fetch('script');
        ?>
    </head>

    <body>

        <div id="main-container">


            <div id="content" class="container jumbotron">
                <?php echo $this->fetch('content'); ?>
            </div><!-- /#header .container -->

            <div id="footer" class="container">
                <?php 
                	//echo $this->element('sql_dump');
                  ?>
            </div><!-- /#footer .container -->

        </div><!-- /#main-container -->

    </body>

</html>