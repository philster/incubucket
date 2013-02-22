<div class="cpanel">
    Display as:
<?php if ( $view_mode == 'list' ): ?>
    <strong>List</strong>&nbsp;|&nbsp;<?= $this->Html->link('Calendar', '/events/setmode/calendar') ?>
<?php else: ?>
    <?= $this->Html->link('List', '/events/setmode/list') ?>&nbsp;|&nbsp;<strong>Calendar</strong>
<?php endif; ?>
    <?= $this->Html->link('Add event', '/events/add', array('style' => 'margin-left:15px')) ?>
</div>
<?php if ( !empty( $this->data ) || $view_mode == 'calendar' ): ?>
    <?= $this->element( "events/{$view_mode}" ); ?>
<?php else: ?>
        <div class="cmessage">You have no incomplete events.</div>
<?php endif; ?>
<div id="location_info_popup"></div>
