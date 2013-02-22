<?php
    $logged_in_links = array(
        'news'          => '/news',
        'events'        => '/events',
        'locations'     => '/locations',
        'profile'       => '/users/profile',
        'logout'        => '/users/logout'
    );

    $logged_out_links = array(
        'login'                     => '/users/login',
        'registration'              => '/users/registration'
    );

    $links = ( isset( $User ) && !empty( $User ) ) ? $logged_in_links : $logged_out_links;
?>
<?php if ( isset( $User ) && !empty( $User ) && $User['role'] == 'admin' ): ?>
    <?= $this->Html->link('backend', '/admin/dashboard', array('style' => 'font-weight:bold;color: #ff0')) . '&nbsp;' ?>
<?php endif; ?>
<?php
    $i=0;
    foreach ( $links as $title => $url ):
        if ( strpos( $this->here, $url ) !== false  ):
?>
        <span class="active"><?= $title ?></span>
<?php   else: ?>
        <?= $this->Html->link($title, $url) ?>
<?php
        endif;
        echo '&nbsp;';
    endforeach;
?>

<?php if ( isset( $User ) && !empty( $User ) ): ?>
    <?= $this->Html->link(
        $this->Html->image('/img/rss.png', array('align' => 'top')),
        '/rss/' . $User['ac_code'] . '.rss', 
        array('escape' => false)) ?>
<?php endif; ?>
