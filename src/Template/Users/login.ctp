<div class="container pt-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Login') ?></legend>
                <?php
                echo $this->Form->control('email');
                echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Login')) ?>
            <?= $this->Html->link(__('Register'), ['controller' => 'Users', 'action' => 'register']) ?>
            <?= $this->Form->end() ?>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

