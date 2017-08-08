<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="users form">
<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <div class="form-group input-group">
            <?php echo $this->Form->control('username',['class'=>'form-control','type'=>'text','required'=>false,'label'=>'Email']); ?>
        </div>
        <div class="form-group input-group">
            <?php echo $this->Form->control('password',['class'=>'form-control','type'=>'password','label'=>'Pass']); ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Login'),['class'=>'btn btn-default']); ?>
    <?= $this->Form->end() ?>
</div>
