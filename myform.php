<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h1><?php esc_attr_e( 'Heading', 'wp_admin_style' ); ?></h1>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h2 class="hndle"><span><?php esc_attr_e( 'Welcome to our CSV page', 'wp_admin_style' ); ?></span>
						</h2>

						<div class="inside">
							<p><?php esc_attr_e( 'Click on create CSV to download the CSV file containing only titles for the What-is category ', 'wp_admin_style' ); ?></p>

							
							<form id="my_form" name="my_form" action="alex-csv-exporter.php" method="POST">
							
								
										<select name="category_name" id="category_name">
										<option selected="selected" value="0" type="hidden">Select Category</option>
										<?php 	

										$categories=get_categories(array( 'parent' => $parent_id ));

												foreach ($categories as $child) {
											    echo "<option value=".$child->cat_ID.">$child->cat_name</option>";
											}
											    ?>
										
									</select>
									<br/>
									<!--<p>Select your option</p>
									<label>Title</label>
									<input type="checkbox" value="1" name="title" <?php //checked( $value, '1', TRUE ); ?> /><br>
									<br/><br/>
									<label>Content</label>
									<input type="checkbox" value="1" name="content" <?php //checked( $value, '1', TRUE ); ?> /><br>
									<br/><br/>
									<label>Featured Image</label>
									<input type="checkbox" value="1" name="ftimg" <?php //checked( $value, '1', TRUE ); ?> /><br>
									<br/><br/>-->
								<input class="button-primary" type="submit" name="create_csv" value="<?php esc_attr_e( 'Create CSV' ); ?>" />
							</form>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h2 class="hndle"><span><?php esc_attr_e(
									'About Plugin', 'wp_admin_style'
								); ?></span></h2>

						<div class="inside">
						<!--<h2><?php //esc_attr_e( 'Title CSV Exporter', 'wp_admin_style' ); ?></h2>-->
							<p><?php esc_attr_e( 'This plugin collects the titles of all posts under the selected category and generates a csv download file.', 'wp_admin_style' ); ?></p>
							<img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAd7AAAAJDI4YWI2Y2RjLTFlZDgtNDU2Ni1hMTMwLTI1MWM2MzE3ZjVlNw.jpg" style="width: 58%; margin-left: 3em;" />

						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->

