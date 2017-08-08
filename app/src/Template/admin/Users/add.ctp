<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user,['role'=>'form']) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <div class="form-group input-group">
            <?php echo $this->Form->control('username',['class'=>'form-control','type'=>'text','required'=>false,'label'=>'Email']); ?>
        </div>
        <div class="form-group input-group">
            <?php echo $this->Form->control('password',['class'=>'form-control','type'=>'password','label'=>'Pass']); ?>
        </div>
        <div class="form-group input-group">
            <?php echo $this->Form->control('level',['class'=>'form-control']); ?>
        </div>
        <div class="">
            <label>
                <?php echo $this->Form->control('publish',['type'=>'checkbox']); ?>
            </label>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default']) ?>
    <?= $this->Form->end() ?>
</div>