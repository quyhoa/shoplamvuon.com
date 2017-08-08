<?php
/**
  * @var \App\View\AppView $this
  */
 $this->assign('title', 'Đăng bài post');
?>
<?= $this->Html->script('ckeditor/ckeditor.js') ?>
<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Add Post') ?></legend>
        <div class="form-group">
            <?php echo $this->Form->control('user_id', ['options' => $users,'class'=>'form-control','type'=>'hidden']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->control('title', ['class'=>'form-control']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->control('content', ['class'=>'form-control ckeditor','type'=>'textarea']); ?>
        </div>
        <div id="editor"></div>
        <div class="form-group">
            <?php echo $this->Form->control('tag', ['class'=>'form-control']); ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>