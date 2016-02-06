<div id="sidebar">
    <p>Hello. My name is <b>Antoinette Janus</b>. I'm a developer and designer based in Washington, D.C.</p>
    <ul>
       <?php 
       $args = array(
            'authors'      => '',
            'child_of'     => 0,
            'date_format'  => get_option('date_format'),
            'depth'        => 0,
            'echo'         => 1,
            'exclude'      => '',
            'include'      => '',
            'link_after'   => '<span>&nbsp;&raquo;</span>',
            'link_before'  => '',
            'post_type'    => 'page',
            'post_status'  => 'publish',
            'show_date'    => '',
            'sort_column'  => 'menu_order, post_title',
            'sort_order'   => '',
            'title_li'     => '', 
            'walker'       => new Walker_Page
        );
       wp_list_pages($args);
       ?> 
    </ul>
</div>