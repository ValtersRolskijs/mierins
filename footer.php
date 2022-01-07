<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

$work_hours    = get_field('work_hours', 'options');
$contacts      = get_field('contacts', 'options');
$location_link = 'http://maps.google.com/?q=' . $contacts['location'];
$phone_img     = get_svg_icon( 'phone-solid' );
$email_img     = get_svg_icon( 'envelope-solid' );
$location_img  = get_svg_icon( 'map-marker-alt-solid' );
 ?>
					
				<footer class="footer" role="contentinfo">
					
					<div class="inner-footer grid-x grid-margin-x grid-padding-x">

						<div class="footer__main small-12 medium-12 large-12 cell">
                            <div class="container">
                                <div class="grid-x grid-padding-x">
                                    <div class="small-12 medium-6 large-4 cell">
                                        <h3 class="footer-title"><?php echo esc_html__( 'Kontakti', 'mierins' ); ?></h3>
                                        <ul class="contacts">
                                            <?php if ( $contacts['phones'] ): ?>
                                                <?php foreach ( $contacts['phones'] as $phone ) : ?>
                                                    <li class="phone"><?php echo $phone_img; ?><?php echo esc_html( $phone['name'] ); ?>: <a href="tel:<?php echo esc_attr( $phone['phone'] ); ?>"><?php echo esc_attr( $phone['phone'] ); ?></a></li>
                                                <?php endforeach; ?>
                                                <?php if ( $contacts['email'] ): ?>
                                                    <li class="email"><?php echo $email_img; ?><?php esc_html_e( 'E-pasts', 'mierins' ); ?>: <a href="mailto:<?php esc_attr( $contacts['email'] ); ?>"><?php echo esc_html( $contacts['email'] ); ?></a></li>
                                                <?php endif; ?>
                                                <?php if ( $contacts['location'] ): ?>
                                                    <li class="location"><?php echo $location_img; ?><?php esc_html_e( 'Addrese', 'mierins' ); ?>: <a href="<?php echo esc_url( $location_link ); ?>" target="_blank"><?php echo esc_html( $contacts['location'] ); ?></a></li>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <div class="work-hours small-12 medium-6 large-4 cell">
                                        <h3 class="footer-title"><?php echo esc_html__( 'Darba laiki', 'mierins' ); ?></h3>
                                        <?php if ( $work_hours ) : ?>
                                            <div class="grid-x">
                                                <?php foreach ( $work_hours as $item ): ?>
                                                    <div class="small-6">
                                                        <?php echo esc_html( $item['day'] ); ?>
                                                    </div>
                                                    <div class="small-6">
                                                        <?php echo esc_html( $item['hours'] ); ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                    <div class="small-12 medium-6 large-4 cell">
                                        <h3 class="footer-title"><?php echo esc_html__( 'Noderīgi', 'mierins' ); ?></h3>
                                        <nav role="navigation">
                                            <?php joints_footer_links(); ?>
                                        </nav>
                                    </div>
                                </div>
                            </div>
	    				</div>

						<div class="footer__bottom small-12 medium-12 large-12 cell">
							<p class="container source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
						</div>

					</div> <!-- end #inner-footer -->
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->