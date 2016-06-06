<?php 


// Function for creating Widegets
function create_widget($name, $id, $description) {
 
    register_sidebar(array(
        'name' => __( $name ),    
        'id' => $id,
        'description' => __( $description ),
        'before_widget' => '<div id="'.$id.'" class="widget %1$s %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
 
}
 
// Create the actual widgets
create_widget("Header", "uptop", "Displays in the header of the site, above the title");

?>