<table width="100%" cellpadding="2" cellspacing="2">
    <tr>
        <th width="20"></th>
        <th><?= $paginator->sort( 'Title', 'Event.title' ) ?></th>
        <th><?= $paginator->sort( 'Exp. date', 'Event.exp_date' ) ?></th>
        <th>Location</th>
        <th><?= $paginator->sort( 'URL', 'Event.url' ) ?></th>
        <th width="50px">Operations</th>
    </tr>
<?php foreach( $this->data as $key => $row ): ?>
    <tr class="row-<?= $key % 2 == 0 ? 'a' : 'b' ?>" id="row_<?= $row['Event']['id']?>">
        <td><?= $form->input( "Event.{$row['Event']['id']}.complete", array( 'label'=>'', 'class'=>'complete', 'value'=>$row['Event']['id'], 'type'=>'checkbox' ) ) ?></td>
        <td><?= $row['Event']['title'] ?></td>
        <td
<?php
    if ( strtotime( $row['Event']['exp_date'] ) < time() ):
        echo ' style="color:#f00" ';
    endif; ?>
        ><?= $time->niceShort( $row['Event']['exp_date'] ) ?></td>
        <td><?= $this->Html->link($row['Location']['title'], '/locations/info/' . $row['Location']['id'], array('class' => 'location_info')) ?></td>
        <td><?= $this->Html->link($row['Event']['url'], $row['Event']['url'], array('target' => '_blank')) ?></td>
        <td>
            <?= $this->Html->link('edit', '/events/edit/' . $row['Event']['id']); ?>
            <?= $this->Html->link('del', '/events/delete/' . $row['Event']['id'], array('class' => 'delete')) ?>
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?= $this->element( 'pagination' ) ?>
