<?= $form->create( 'Location', array('url' => '/locations/edit', 'method' => 'POST')); ?>
<?= $form->input( 'Location.id', array( 'type'=>'hidden' ) ); ?>
<?= $form->input( 'Location.title', array( 'label'=>'Title' ) ); ?>
<?= $form->input( 'Location.address1', array( 'label'=>'Address', 'rows'=>3 ) ); ?>
<?= $form->input( 'Location.city', array( 'label'=>'City' ) ); ?>
<?= $form->input( 'Location.state', array( 'label'=>'State', 'options'=>$address->us_states ) ); ?>
<?= $form->input( 'Location.zip', array( 'label'=>'Zip' ) ); ?>
<div class="footer-row">
    <?= $this->Html->link('cancel', '/locations') ?>
    <button type="submit">Update location</button>
</div>
<?= $form->end() ?>
