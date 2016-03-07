<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<nav id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="<?php print $container_class; ?>">
    <div class="navbar-header">
      <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
        <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</nav>

      <div id="head_banner logo_site" <?php if (!empty($page['logo_site'])): ?><?php print 'class="jumbotron header-custom bg-light-60 full-page' ?><?php endif; ?> ">
         <div class="container  <?php if (!empty($page['logo_site'])): ?> <?php print 'vertical-align'?> <?php endif; ?> ">
           <div class="row col-xs-12 col-md-12">
                  <!--If banner is enabled, print the page title-->
	         <?php if (!empty($page['head_banner'])): ?>
		     <?php print render($page['head_banner']); ?>
       		     <h1> <?php print menu_get_active_title();?></h1>
		 <?php endif; ?>
		<!--If logo content is defined, print it here-->
                 <?php if (!empty($page['logo_site'])): ?>
                     	<?php print render($page['logo_site']); ?>
                 <?php endif; ?>
	 </div>
    	</div>
     </div> 

<div class="main-container <?php print $container_class; ?>">
   <div class="row">
   </div>

 <div class="row center extra-space-row-order">
    <div class="col-xs-12" style="padding:30px;">
          <div class="teaser-row" >
            <div class="col-xs-12 col-sm-4">
                <a class="teaser2" style="margin-bottom: 20px;" href="internettbestilling/">
                  <i class="material-icons" style="font-size:100px;">search</i>
                  <h3 class="text-teaser" style="text-transform: uppercase">Søk</h3>
                  <!--<p>Søk blandt mer enn 7000 turer</p>-->
                </a>
            </div>
            <div class="col-xs-12 col-sm-4">
                <a class="teaser2" style="margin-bottom: 20px;"  href="reseptbestilling/">
		  <i class="material-icons" style="font-size:100px;">share</i>
  <h3 class="text-teaser" style="text-transform: uppercase">Del</h3>
 	       </a>
            </div>
            <div class="col-xs-12 col-sm-4">
                <a class="teaser2" style="margin-bottom: 20px;"  href="andrehenvendelser/">
                  <i class="material-icons" style="font-size:100px;">add_circle</i>
                  <h3 class="text-teaser" style="text-transform: uppercase">Egne turer</h3>
                </a>
            </div>
         </div>
    </div>
  </div>


<!--  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
-->
</div>

<?php if (!empty($page['full_width'])) :?>
     <div id="ukens-tur" class="jumbotron">	
	<div class="container">
	<?php print render($page['full_width']); ?>
	</div>
     </div>
<?php endif;?>
<div class="row center">
 <H3 style="padding:150px;">Her kommer barometer på ant turer og brukere på nettstedet</H3>
</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="container_fluid custom_foot"> <!-- <?php print $container_class; ?>--!>
    <?php print render($page['footer']); ?>
    <?php print '</div>' ?>
  </footer>
<?php endif; ?>