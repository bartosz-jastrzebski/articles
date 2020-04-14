<h1>Login</h1>
<?php
echo $this->Form->create();
echo '<div class="form-group"><label for="email">Email</label>';
echo $this->Form->control('email', ['label' => false, 'class' => 'form-control']);
echo '</div>';
echo '<div class="form-group"><label for="password">Password</label>';
echo $this->Form->control('password', ['label' => false, 'class' => 'form-control']);
echo '</div>';
echo $this->Form->button('Login');
echo $this->Form->end(); 
?>