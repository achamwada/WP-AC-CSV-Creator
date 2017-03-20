<?php
/*
Plugin Name: WP Alex CSV Exporter
Plugin URI: http://www.progressivemediagroup.com/
Description: Exports posts under a specific category to a CSV file.
Version: 1.0.0
Author: Alex
*/

function func_loader(){

	add_options_page( "CSV Exporter", "What is CSV", "edit_posts", "csv_post_exporter", "csvExporter" );
}

add_action( 'admin_menu', 'func_loader' );


function csvExporter(){

	if(!current_user_can("edit_posts")){
		wp_die("Can not view this page");

	}else{
		require_once "myform.php";
	}

}


if(isset($_POST["category_name"])){
$uploads = wp_upload_dir();
$upload_path = $uploads['baseurl'];


					$cat_id = $_POST["category_name"];
					$title = $_POST["title"];
					$content = $_POST["content"];

					$args = array( 'posts_per_page' => -1,  'category' => $cat_id );

					$myposts = get_posts( $args );


					foreach ( $myposts as $post ) : setup_postdata( $post );
						$my_title = get_the_title();    
						$whatis_owner = str_replace(',', '' , get_post_meta( $post->ID, 'whatis_owner', true ));
						$whatis_year = str_replace(',', '' , get_post_meta( $post->ID, 'whatis_year', true ));
						


						$collecTs .=$my_title."\r\n";
					endforeach; 

					wp_reset_postdata();

					echo $collecTs;


					$list = explode("-", $collecTs);
					
					header('Content-type: text/csv');
					header('Content-Disposition: attachment; filename="what_is.csv"');

					foreach ($list as $line) {
					  $shtml=fputcsv($fh, explode(',',$line));
					}
					
					//fclose($fh);

					exit();

				}

?>
