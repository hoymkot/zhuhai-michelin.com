<?php get_header(); ?>

<?php 
function the_slug() {
    $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name'];
    return $slug; 
}

$slug = the_slug();
if (strcmp($slug,"contact_us-html") == 0) {
    get_template_part("pages/contact_us");

}; 

if (strcmp($slug,"home-html") == 0) {
    get_template_part("pages/home");

}; 


if (strcmp($slug,"products-html") == 0) {
    get_template_part("pages/products");

}; 

if (strcmp($slug,"services-html") == 0) {
    get_template_part("pages/services");

}; 
if (strcmp($slug,"tyre-services-html") == 0) {
    get_template_part("pages/tyre-services");

}; 

if (strcmp($slug,"information-html") == 0) {
    get_template_part("pages/information");

}; 

if (strcmp($slug,"introduction-html") == 0) {
    get_template_part("pages/introduction");

}; 

?>
<?php get_footer(); ?>
