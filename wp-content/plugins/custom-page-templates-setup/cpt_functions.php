<?php
/**
 * Description: Plugin functions.
 */

class cpt_functions {

    public function cpt_get_files() {

        $templates = array();

        $directory = wp_upload_dir()['basedir'] . CPT_UPLOAD_SUBDIR;
        
        if( is_dir( $directory ) ) {

            $template_files = scandir( $directory );

            foreach( $template_files as $file ) {
                if( $file != '.' && $file != '..' ) {
                    $templates[] = $file;
                }
            }
        }
        
        return $templates;

    }

}

?>