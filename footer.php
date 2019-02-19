<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package camper
 */

?>

	</div><!-- #content -->
	<footer class="container-fluid">
        <div class="footer-content">
            <div class="row center-xs">
                <div class="first-row">
                    <h5>
                        <?php the_custom_logo(); ?>
                    </h5>
                    <p><?php echo(get_bloginfo('description')); ?></p>
                </div>
            </div>
            <div class="row second-row">
                <div class="col-md-4">
                    <h3>
                        Contacts
                    </h3>
                    <div class="co-info">
                        <p>
                            Office:<a href="#"> Fifth Floor Royal Square</a><br />
                            Ngong Road, Nairobi Kenya. 
                        </p>
                        <p>
                            +254 712 456 789<br />
                            info@campstephen.com
                        </p>
                    </div><!-- .co-info -->
                </div><!-- .col-md-4 -->
                <div class="col-md-4">
                    <div class="co-links">
                        <h3>Company</h3>
                        <div class="footer-nav">
                            <?php
                                wp_nav_menu([
                                    'menu'      =>          'primary',
                                ]);
                            ?>
                        </div>
                    </div><!-- .co-links -->
                </div><!-- .col-md-4 -->
                <div class="col-md-4">
                    <div class="co-links">
                            <h3>Services</h3>
                            <div class="footer-nav">
                                <?php
                                    wp_nav_menu([
                                        'menu'      =>      'services',
                                    ]);
                                ?>
                            </div>
                    </div><!-- .co-links -->
                </div><!-- .col-md-4 -->
            </div><!-- .row -->
            <div class="row center-xs">
                <div class="bottom-section">
                    <p>
                        <?php echo(date('Y')); ?>
                        &copy; <a href="<?php echo(get_bloginfo('url')); ?>"><?php echo(get_bloginfo('site_name'));?></a>
                    </p>
                    <p><span class="theme_name">camper</span> Theme Developed by <a href="http://mwororokevin.com" target="_blank">Mwororo Kevin</a></p>
                </div><!-- .bottom-section -->
            </div><!-- .row center-xs -->
        </div><!-- .footer-container -->
    </footer><!-- .container-fluid -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
