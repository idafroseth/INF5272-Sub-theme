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

      <div id="head_banner logo_site" <?php if (!empty($page['logo_site'])): ?><?php print 'class="jumbotron header-custom bg-light-60 full-page' ?><?php endif; ?> style="padding:0;" ">
         <div class="container  <?php if (!empty($page['logo_site'])): ?> <?php print 'vertical-align'?> <?php endif; ?> style=padding:0;">
           <div class="row col-xs-12 col-md-12">
		<!--If logo content is defined, print it here-->
                 <?php if (!empty($page['logo_site'])): ?>
                     	<?php print render($page['logo_site']); ?>
                 <?php endif; ?>
	 </div>
    	</div>
     </div> 

<div class="main-container bgdark <?php print $container_class; ?>">
   <div class="row">
   </div>

 <div class="row center extra-space-row-order">
    <div class="col-xs-12" style="padding:30px;">
          <div class="teaser-row" >
            <div class="col-xs-12 col-sm-4">
                <div class="teaser2" style="margin-bottom: 20px;"><a href="sok/">
                  <i class="material-icons" style="font-size:100px;">search</i>
                  <h3 class="text-teaser" style="text-transform: uppercase">Søk</h3>
                 </a> <p style="padding:0px 40px">Finn turer nær deg eller i en spesifikt område. Min topptur åpner har en rik søkemotor som gjør det mulig å finne turer ut i fra dine preferanser.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="teaser2" style="margin-bottom: 20px;"> <a href="events/">
		  <i class="material-icons" style="font-size:100px;">share</i>
  <h3 class="text-teaser" style="text-transform: uppercase">Sosialiser</h3>
	</a>	<p style="padding:0px 40px">Min ToppTur gjør det mulig å treffe andre mennesker med samme interesse. Siden muliggjør opprettelse av fellesturer i form av eventer.</p>
 	       </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="teaser2" style="margin-bottom: 20px;"> 
<a href="kartsok/">
                  <i class="material-icons" style="font-size:100px;">map</i>
                  <h3 class="text-teaser" style="text-transform: uppercase">Kart</h3>
		</a><p style="padding:0px 40px;">Min ToppTur gjør alle turer tilgjengelig i kart. Det er mulig å finne turer som er i nærheten av deg og se på GPS track av turen.</p>
                </div>
            </div>
         </div>
    </div>
  </div>
</div>


<?php if (!empty($page['full_width'])) :?>
     <div id="ukens-tur" class="jumbotron">
        <div class="container">
	<?php print render($page['full_width']); ?>
	 	       	
	</div>
     </div>
<?php endif;?>	
	
<div class="bgdark module">
	<div class="container">
		<div class="row">
                      <div class="col-sm-6 col-md-3 m-b-md-20" style="padding-top:40px;">
                                                <div class="counter-item">
                                                        <div class="counter-title font-alt">
    <i class="material-icons" style="font-size:100px; ">terrain</i>
                                                                <h5 class="font-alt counter-number" data-number="68"><span></span></h5>
                                                                Fjellområder
                                                        </div>
                                                </div>
                                        </div>
			<div class="col-sm-6 col-md-3 m-b-md-20" style="padding-top:40px;">
				<div class="counter-item">
					<div class="counter-title font-alt">
                                        <i class="material-icons" style="font-size:100px;">explore</i>						
		                        <h5 class="font-alt counter-number" data-number="
<?php
  $turer = db_query("SELECT count(nid) FROM {node} WHERE (node.type IN ('tur'))")->fetchField();
  print $turer;
?>"><span></span></h5>
								Turer
							</div>
						</div>
					</div>
				<div class="col-sm-6 col-md-3 m-b-md-20" style="padding-top:40px;">
						<div class="counter-item">
							<div class="counter-title font-alt">
								<i class="material-icons" style="font-size:100px;">tag_faces</i>
								<h5 class="font-alt counter-number" data-number="
<?php
  $members = db_query("SELECT count(uid) FROM {users}")->fetchField();
  print $members;
?>"><span></span></h5>
								Innloggede Brukere
							</div>
						</div>
					</div>
                                <div class="col-sm-6 col-md-3 m-b-md-20" style="padding-top:40px;">
                                                <div class="counter-item">
                                                        <div class="counter-title font-alt">
                                                                <i class="fa fa-calendar" style="font-size:95px; padding-bottom:10px;"></i>
	                                                                <h5 class="font-alt counter-number" data-number="<?php
  $trip = db_query("SELECT count(uid) FROM {node} WHERE (node.type IN ('event'))")->fetchField();
  print $trip;
?>"><span></span></h5>
                                                                Fellesturer
                                                        </div>
                                                </div>
                                        </div>
				</div>
			</div>
		</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="container_fluid custom_foot"> <!-- <?php print $container_class; ?>--!>
<div class="container pad" >
                 <div class="row center" style=" z-index:5; color:rgb(130,130,130);">
                    <h2>Prosjektgruppen</h2>
                    <h3>Denne nettsiden er et resultat av et skoleprosjekt i faget INF5272 ved Universitet i Oslo</h3>
                 </div>
		<div class="row blue center" style="z-index:5; color:rgb(255,255,255);">

	    		<div class="col-sm-3">
                                    <img src="" alt="..." class="img-rounded">
                                    <div class="caption font-alt">
                                       <h3>Svein</h3>
                                       <p>...</p>
                                    </div>
                        </div>
	    		<div class="col-sm-3">
                                    <img src="" alt="..." class="img-rounded">
                                    <div class="caption font-alt">
                                       <h3>Tannaz</h3>
                                       <p>...</p>
                                    </div>
                        </div>
	    		<div class="col-sm-3">
                                    <img src="" alt="..." class="img-rounded">
                                    <div class="caption font-alt">
                                       <h3>Isis</h3>
                                       <p>...</p>
                                    </div>
                        </div>
	    		<div class="col-sm-3">
                                    <img src="" alt="..." class="img-rounded">
                                    <div class="caption font-alt">
                                       <h3>Ida Marie</h3>
                                       <p>...</p>
                                    </div>
                        </div>
	    		</div>
          </div>
</div>
    <?php print render($page['footer']); ?>
    <?php print '</div>' ?>
  </footer>
<?php endif; ?>

<script type="text/javascript">
/*
 * jQuery.appear
 * https://github.com/bas2k/jquery.appear/
 * http://code.google.com/p/jquery-appear/
 *
 * Copyright (c) 2009 Michael Hixson
 * Copyright (c) 2012 Alexander Brovikov
 * Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php)
 */
(function($) {
    $.fn.appear = function(fn, options) {

        var settings = $.extend({

            //arbitrary data to pass to fn
            data: undefined,

            //call fn only on the first appear?
            one: true,

            // X & Y accuracy
            accX: 0,
            accY: 0

        }, options);

        return this.each(function() {

            var t = $(this);

            //whether the element is currently visible
            t.appeared = false;

            if (!fn) {

                //trigger the custom event
                t.trigger('appear', settings.data);
                return;
            }

            var w = $(window);

            //fires the appear event when appropriate
            var check = function() {

                //is the element hidden?
                if (!t.is(':visible')) {

                    //it became hidden
                    t.appeared = false;
                    return;
                }

                //is the element inside the visible window?
                var a = w.scrollLeft();
                var b = w.scrollTop();
                var o = t.offset();
                var x = o.left;
                var y = o.top;

                var ax = settings.accX;
                var ay = settings.accY;
                var th = t.height();
                var wh = w.height();
                var tw = t.width();
                var ww = w.width();

                if (y + th + ay >= b &&
                    y <= b + wh + ay &&
                    x + tw + ax >= a &&
                    x <= a + ww + ax) {

                    //trigger the custom event
                    if (!t.appeared) t.trigger('appear', settings.data);

                } else {

                    //it scrolled out of view
                    t.appeared = false;
                }
            };

            //create a modified fn with some additional logic
            var modifiedFn = function() {

                //mark the element as visible
                t.appeared = true;

                //is this supposed to happen only once?
                if (settings.one) {

                    //remove the check
                    w.unbind('scroll', check);
                    var i = $.inArray(check, $.fn.appear.checks);
                    if (i >= 0) $.fn.appear.checks.splice(i, 1);
                }

                //trigger the original fn
                fn.apply(this, arguments);
            };

            //bind the modified fn to the element
            if (settings.one) t.one('appear', settings.data, modifiedFn);
            else t.bind('appear', settings.data, modifiedFn);

            //check whenever the window scrolls
            w.scroll(check);

            //check whenever the dom changes
            $.fn.appear.checks.push(check);

            //check now
            (check)();
        });
    };

    //keep a queue of appearance checks
    $.extend($.fn.appear, {

        checks: [],
        timeout: null,

        //process the queue
        checkAll: function() {
            var length = $.fn.appear.checks.length;
            if (length > 0) while (length--) ($.fn.appear.checks[length])();
        },

        //check the queue asynchronously
        run: function() {
            if ($.fn.appear.timeout) clearTimeout($.fn.appear.timeout);
            $.fn.appear.timeout = setTimeout($.fn.appear.checkAll, 20);
        }
    });

    //run checks when these methods are called
    $.each(['append', 'prepend', 'after', 'before', 'attr',
        'removeAttr', 'addClass', 'removeClass', 'toggleClass',
        'remove', 'css', 'show', 'hide'], function(i, n) {
        var old = $.fn[n];
        if (old) {
            $.fn[n] = function() {
                var r = old.apply(this, arguments);
                $.fn.appear.run();
                return r;
            }
        }
    });

})(jQuery);



















(function($) {
    $.fn.countTo = function(options) {
        // merge the default plugin settings with the custom options
        options = $.extend({}, $.fn.countTo.defaults, options || {});

        // how many times to update the value, and how much to increment the value on each update
        var loops = Math.ceil(options.speed / options.refreshInterval),
            increment = (options.to - options.from) / loops;

        return $(this).each(function() {
            var _this = this,
                loopCount = 0,
                value = options.from,
                interval = setInterval(updateTimer, options.refreshInterval);

            function updateTimer() {
                value += increment;
                loopCount++;
                $(_this).html(value.toFixed(options.decimals));

                if (typeof(options.onUpdate) == 'function') {
                    options.onUpdate.call(_this, value);
                }

                if (loopCount >= loops) {
                    clearInterval(interval);
                    value = options.to;

                    if (typeof(options.onComplete) == 'function') {
                        options.onComplete.call(_this, value);
                    }
                }
            }
        });
    };

    $.fn.countTo.defaults = {
        from: 0,  // the number the element should start at
        to: 100,  // the number the element should end at
        speed: 1000,  // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,  // the number of decimal places to show
        onUpdate: null,  // callback method for every time the element is updated,
        onComplete: null,  // callback method for when the element finishes updating
    };
})(jQuery);
</script>
<script type="text/javascript">
(function($){

	"use strict";

	/* ---------------------------------------------- /*
	 * Preloader
	/* ---------------------------------------------- */

	$(window).load(function() {
		$('.loader').fadeOut();
		$('.page-loader').delay(350).fadeOut('slow');
	});

	$(document).ready(function() {
		$('.counter-item').each(function(i) {
			$(this).appear(function() {
				var number = $(this).find('.counter-number').data('number');
				$(this).find('.counter-number span').countTo({from: 0, to: number, speed: 1200, refreshInterval: 30});
			});
		});

	});

})(jQuery);

</script>


