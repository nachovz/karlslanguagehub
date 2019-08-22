<?php
 $queried_object = get_queried_object();
 var_dump( $queried_object );


$categories = get_categories( array(
    'orderby' => 'name',
    'parent'  => 4
) );
 
foreach ( $categories as $category ) {
    printf( '<a href="%1$s">%2$s</a><br />',
        esc_url( get_category_link( $category->term_id ) ),
        esc_html( $category->name )
    );
}
?>