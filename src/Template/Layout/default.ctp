<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?= $this->Html->meta('icon') ?>

    <!-- <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?> -->
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-light bg-dark" data-topbar role="navigation">    
        <h1 class="navbar-brand text-light"><?= $this->fetch('title') ?></h1>
        <div>
        <?php
            if($this->request->session()->read('Auth.User')) {
            // user is logged in, show logout..user menu etc
                echo $this->Html->link('Users', 
                                    ['action' => 'index'], 
                                    ['class' => 'px-2']);
                echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout')); 
            } else {
            // the user is not logged in
                echo $this->Html->link( 'Login', array('controller'=>'users', 'action'=>'login')); 
            }
            ?>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container clearfix">
        <p><?= $this->Flash->render() ?></p>
            <?= $this->fetch('content') ?>
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>
