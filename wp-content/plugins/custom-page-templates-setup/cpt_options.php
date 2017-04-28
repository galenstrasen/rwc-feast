<?php
/**
 * Description: Setup wp-admin backend option page.
 */

class optionsPage {

	private static $instance;
	protected $plugin_slug;
	private $new_upload;
	private $new_del;
    public static function get_instance() {
            if( null == self::$instance ) {
                    self::$instance = new optionsPage();
            } 
            return self::$instance;
    }

	public function __construct() {

		add_action( 'admin_init', array( $this, 'cpt_settings_init' ) );
		add_action( 'admin_menu', array( $this, 'cpt_add_admin_menu' ) );
		
	}

	public function cpt_add_admin_menu() { 

		add_theme_page( 'Custom Page Templates', 'Custom Templates', 
			'manage_options', 'custom-page-templates', 
			array( $this, 'cpt_options_page' ) );

	}

	public function cpt_settings_init() {
		
		$cptFun = new cpt_functions();
		$templates = $cptFun->cpt_get_files();

		//Handle file uploads
		if( isset( $_FILES['customFile'] ) ) {

			$upload_files = array();
			foreach( $_FILES['customFile'] as $attribute => $elements ) {
				foreach( $elements as $index => $value ) {
					$upload_files[$index][$attribute] = $value;
				}
			}

			//Change the upload directory
			add_filter( 'upload_dir', array( $this, 'cpt_set_upload_dir' ) );

			$mime_types = array('php' => 'application/x-php' );
			$upload_overrides = array( 'test_form' => false, 
										'mimes' => $mime_types );

			foreach( $upload_files as $file ) {
				wp_handle_upload( $file, $upload_overrides );
				$this->new_upload[] = $file['name'];
			}

			//Reset upload directory
			remove_filter( 'upload_dir', array( $this, 'cpt_set_upload_dir' ) );

		}

		//Handle file deletion requests
		foreach( $templates as $t ) {
			if( isset( $_POST[str_replace( '.', '_', $t )] ) ) {
				$filename = wp_upload_dir()['basedir'] . CPT_UPLOAD_SUBDIR 
					. '/' . $t;
				unlink( $filename );
				//Record name of deleted file
				$new_del[] = $t;
			}
		}
		$this->new_del = isset( $new_del ) ? $new_del : '';

	}

	public function cpt_set_upload_dir( $upload ) {

		$upload['subdir'] = CPT_UPLOAD_SUBDIR;
		$upload['path'] = $upload['basedir'] . $upload['subdir'];
		$upload['url'] = $upload['baseurl'] . $upload['subdir'];
		return $upload;
	}


	public function cpt_options_page() { 

		$cptFun = new cpt_functions();
		$templates = $cptFun->cpt_get_files();
		?>

		<link rel="stylesheet" type="text/css" href="<?php echo 
			plugin_dir_url( __FILE__ ) . 'css/w3.css'; ?>">

		<?php
		//Display update banners if change made
		if( $this->new_upload != "" ) { ?>
			<div class="w3-container">
				<div class="w3-container w3-section w3-green">
					<span onclick="this.parentElement.style.display='none'" 
						class="w3-closebtn">&times;</span>
					<h3 style="color:white">Success!</h3>
					<p>You successfully uploaded <?php echo 
						implode(', ', $this->new_upload); ?>!</p>
				</div>
			</div>
		<?php
		}
		if( $this->new_del != "" ) { ?>
			<div class="w3-container">
				<div class="w3-container w3-section w3-red">
					<span onclick="this.parentElement.style.display='none'" 
						class="w3-closebtn">&times;</span>
					<h3 style="color:white">Success!</h3>
					<p>
						You successfully deleted <?php echo 
						implode(', ', $this->new_del);?>.
					</p>
					<p>
						Remember, pages whose custom templates have been 
						deleted will be set to the default template.
					</p>
				</div>
			</div>
		<?php
		}
		?>

		<div class="w3-container">
			<img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/logo.png" 
				style="width:250px;padding-top:10px">
			<h1>Custom Page Templates Setup</h1>
			<div class="w3-card-4">
				<div class="w3-container w3-blue">
					<h2 style="color:white">File Upload</h2>
				</div>
				<div class="w3-container">
					<form action="themes.php?page=custom-page-templates" 
						method="post" enctype="multipart/form-data">
						Choose a custom template file to upload:
						<input type='file' required multiple id='fileToUpload' 
							name='customFile[]'>
						<br>
						<input type='submit' 
							class="w3-btn w3-green w3-round-large" 
							value='Upload File' name="submit">
					</form>
				</div>
				<br>
			</div>

			<br>

			<div class="w3-card-4">
				<div class="w3-tooltip">
					<div class="w3-container w3-blue">
						<h2 style="color:white">
							Delete Templates
						</h2>
					</div>
					<?php
					if( count( $templates ) ) { ?>
						<form action="themes.php?page=custom-page-templates" 
							method="post" class="w3-container">
							
						<ul>
						<?php
						foreach( $templates as $t ) {
							echo '<li><input type="checkbox" class="w3-check" 
								id="' . $t . '" name="' 
								. str_replace( '.', '_', $t ) . '">'
								. '<label for="' . $t . '" class="w3-validate">'
								. $t . '</label></li>';
						}
						?>
						</ul>
						<input class="w3-btn w3-red w3-round-large" 
							type='submit' value='Delete Template Files' 
							name="submit">
						</form>
						<?php
					} else { ?>
						<div class="w3-tag w3-orange">
							No Custom Templates uploaded yet.
							Upload a template to get started!
						</div>
						<?php
					} ?>
					<br>
					<?php 
					if( count( $templates ) ) { ?>
						<div class="w3-text">
							<div class="w3-tag w3-red">
								Careful! NO UNDO OPTION!
							</div>
						</div>
						<?php 
					} ?>
				</div>
			</div>

			<br>

			<div class="w3-card-4">
				<div class="w3-container">
					<h3>Details</h3>
					<p>
						To get started, simply upload a custom page template and
						it should automatically be registered with Wordpress,
						<br>
						and thus it will be an option on the 'Edit Page' screen
						under 'Page Attributes'->'Template' as a drop-down
						option.
					</p>
					<p>
						Remember, pages whose custom templates have been 
						deleted will be set to the default template.
					</p>
					<p>Files Uploaded through this plugin will be found at:<br>
					<?php echo wp_upload_dir()['basedir'] . CPT_UPLOAD_SUBDIR 
						. '/'; ?></p>
					<p><a href="https://developer.wordpress.org/themes/template
						-files-section/page-template-files/page-templates/" 
						target="_blank"> 
						Quick reference to custom page templates</a>
					</p>
				</div>
			</div>
		</div>
		<?php

	}
			
}

$cpt_options = optionsPage::get_instance();

?>