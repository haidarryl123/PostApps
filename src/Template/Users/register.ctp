<div class="container pt-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Register') ?></legend>
                <?php
                echo $this->Form->control('email');
                echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Html->link(__('Login'), ['controller' => 'Users', 'action' => 'login']) ?>
            <?= $this->Form->end() ?>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>


