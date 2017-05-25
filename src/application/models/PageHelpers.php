<?php
Class PageHelpers extends CI_Model {
    /**
     * Common stylesheets to be added into <head>.
     *
     * @param $adminView boolean For admin view.
     *
     * @return array List  of stylesheets.
     */
    public function getSharedStylesheets($adminView = false) {
        $sheets = array(
            'bootstrap.css',
            'font-awesome.min.css',
            'app.css',
        );
        if ($adminView === true) {
            $sheets[] = 'admin-style.css';
        } else {
            $sheets[] = 'style.css';
        }
        $sheets[] = 'responsive.css';
        $sheets[] = 'sb.css';
        return $sheets;
    }

    /**
     * Common Js files be added into before </body> tag.
     *
     * @param $adminView boolean For admin view.
     *
     * @return array List  of stylesheets.
     */
    public function getSharedJsFiles($adminView = false) {
        $files = array (
            'jquery.min.js',
            'bootstrap.js',
            'function.js',
        );
        return $files;
    }
}