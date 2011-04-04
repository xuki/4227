
<?php

if (isset($error)) {
  echo '<div class="error">'.$error.'</div>';
}

?>

<div class="users form">
  <?php 
echo $this->Form->create('User', array(
  'action' => 'login'
  ));
?>
<fieldset>
  <legend><?php __('Login'); ?></legend>
  <?php
  echo $this->Form->input('username');
  echo $this->Form->input('password', array(
    'type' => 'password',
    'value' => ''
  ));
  ?>
</fieldset>
<?php echo $this->Form->end(__('Login', true));?>
</div>