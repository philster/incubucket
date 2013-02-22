<?= $form->create( 'User', array('url' => '/users/login', 'method' => 'POST')); ?>
<?= $form->input( 'User.email', array( 'label'=>'Email' ) ); ?>
<?= $form->input( 'User.password', array( 'label'=>'Password', 'type'=>'password' ) ); ?>
<div class="footer-row">
    <div style="float:left;margin-top:10px">
        <?= $this->Html->link('Restore password', '/users/restorepassword') ?>&nbsp;|&nbsp;<?= $this->Html->link('Re-send activation email', '/users/resend') ?>
    </div>
    <button type="submit">Sign-in</button>
</div>
<?= $form->end(); ?>
