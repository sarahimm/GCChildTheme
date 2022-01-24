<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts');

/* Superheader */
add_action('wp_head', 'kcp_superheader',1);
function kcp_superheader(){
?>
	<div id="kcp_superheader">
		<div class="links">
			<a href="/student-resources">Students</a>
			<a href="/faculty-information">Faculty</a>
		</div>
	</div>
<?php
};

/* Describe what the code snippet does so you can remember later on */
add_action('wp_footer', 'kcp_footer');
function kcp_footer(){
?>
<div id="kcp-footer">
  <div class="col col1">
          <img src="http://35.85.213.9/wp-content/uploads/2022/01/KCstackedplurallogo.png" style="max-width: 200px;">
  </div>
    <div class="col col2">
      <h2>About</h2>
      <ul>
        <li><a href="/about-us">About us</a></li>
        <li><a href="/student-resources">Resources for Students</a></li>
        <li><a href="/faculty-information">Resources for Faculty</a></li>
      </ul>
    </div>
    <div class="col col3">
      <h2>Grants</h2>
      <ul>
        <li><a href="/the-grant">Information</a></li>
        <li><a href="/service-placements">Eligible Service Programs</a></li>
        <li><a href="/apply">Apply</a></li>
      </ul>
  </div>
    <div class="col col4">
      <h2>Contact</h2>
      <ul>
        <li><a href="">1234 Address Here<br>Spokane, WA 99251</a></li>
        <li><a href="">(###)###-####</a></li>
        <li><a href="">example@example.com</a></li>
        <li><a href="">@instagram-handle</a></li>
      </ul>          
  </div>
</div>
<div id="kcp-superfooter">
  	<p>
      &copy; 2022 Krista Colleagues Global Service Grants Program.
      <a href="/privacy-policy">Privacy Policy</a>
  </p>
</div>
<?php
};
