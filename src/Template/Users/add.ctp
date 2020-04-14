<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<nav>
    <h3 class="navbar-brand"><?= __('Actions:') ?></h3>
    <?= $this->Html->link(__('List Users'), 
                          ['action' => 'index'], 
                          ['class' => 'px-2']) ?>
    <?= $this->Html->link(__('List Articles'), 
                          ['controller' => 'Articles', 'action' => 'index'], 
                          ['class' => 'px-2']) ?>
    <?= $this->Html->link(__('New Article'), 
                          ['controller' => 'Articles', 'action' => 'add'],  
                          ['class' => 'px-2']) ?>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo '<div class="form-group"><label for="email">Email</label>';
            echo $this->Form->control('email', ['label' => false, 'class' => 'form-control']);
            echo '</div>';
            echo '<div class="form-group"><label for="password">Password</label>';
            echo $this->Form->control('password', ['label' => false, 'class' => 'form-control']);
            echo '</div>';
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
