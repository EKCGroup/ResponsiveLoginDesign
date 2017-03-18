<?php defined('C5_EXECUTE') or defined('BASEPATH') or die("Access Denied.");

Loader::element('theme/global/ResponsiveLoginDesign/layout/header');

    if (isset($is_codeigniter)) {

        $ci_content;

    } else {

        //Print Page Content
        print $innerContent;

        //Login Error Reporting
        Loader::element('system_errors', array('error' => $error));

    }

Loader::element('theme/global/ResponsiveLoginDesign/layout/footer');
?>