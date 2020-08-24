<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Template_Site
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() . "/favicon.png"; ?>"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
function getNav($menu, &$result) {
	$result .= '<ul>';
	foreach ($menu as $v) {
		//$result .= "<li><a class='bit-btn my-2' href='{$v->url}'>{$v->title}</a></li>  ";
		$result .= "<li class='nav-item '><a href='{$v->url}' class='nav-link menu-btn text-lg-left text-xl-center text-right'>{$v->title}</a></li> ";
		if (isset($v->wpse_children)) {
			getNav($v->wpse_children, $result);
		}
	}
	$result .= '</ul>';
}
// step 2: call wpse_nav_menu_2_tree to build a tree of nav
$mItem = wpse_nav_menu_2_tree('Homemenu');
$results = '';
getNav($mItem, $results);
?>
<!-- <nav id="colorlib-main-nav" role="navigation">
<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle  active"><i></i></a>
		<div class="  colorlib-table">
				<div class="row">
					<div class="col-md-12">
						<ul>
						<?php echo $results; ?>
						</ul>
					</div>
				</div>
			 
			</div>
		</div>
</nav> -->





 <!-- navigation -->
 <div class="navigation-menu" id="overlayNavigation">
      <div class="navigation-bg one"></div>
      <div class="navigation-bg two"> </div>  
      <div class="container-fluid h-100">
	 
        <div class="row h-100">
		 
          <div class="col-lg-4 col-xl-3 col-12 col-md-6  ml-auto navigation-wrapper">
		  
            <div class="nav-inner inner-menu">
			
              <ul class="list-inline">
			  <?php echo $results; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>






