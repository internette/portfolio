<div id="sidebar">
    <h3><span>Intro</span></h3>
    <h1>My name is <span class="pink">Antoinette Janus</span>
    <br/>Welcome to my portfolio.
    </h1>
    <ul>
       <?php 
       $args = array(
            'authors'      => '',
            'child_of'     => 0,
            'date_format'  => get_option('date_format'),
            'depth'        => 0,
            'echo'         => 1,
            'exclude'      => $post->ID,
            'include'      => '',
            'link_after'   => '<span>&nbsp;&raquo;</span>',
            'link_before'  => '<li>',
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
    <div id="piece-details">
      <div id="page-slider"></div>
      <p>On the right:</p>
      <p id="piece-name"></p>
      <p id="piece-description"></p>
    </div>
</div>