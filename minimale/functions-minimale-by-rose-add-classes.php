<?php

/**
 * functions-tachyon-add-classes.php
 *
 **/

 check_direct();

/**
 * Finds specific html elements in the page and post content and adds appropriate Tachyons classes
 * Variables are prefixed with the theme slug to avoid conflicts with other themes and plugins
 */
 function blasphemy_by_rose_add_classes($blasphemy_by_rose_enter_content){

         $blasphemy_by_rose_content = mb_convert_encoding($blasphemy_by_rose_enter_content, 'HTML-ENTITIES', "UTF-8");
         $blasphemy_by_rose_document = new DOMDocument();
         libxml_use_internal_errors(true);
         if ( $blasphemy_by_rose_enter_content == "" ) {
           return;
         } else {
           $blasphemy_by_rose_document->loadHTML($blasphemy_by_rose_enter_content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

           /**
           * Add Tachyons classes to Image elements
           */
           $blasphemy_by_rose_imgs = $blasphemy_by_rose_document->getElementsByTagName('img');
           foreach ($blasphemy_by_rose_imgs as $blasphemy_by_rose_img) {
              $blasphemy_by_rose_img_classes = $blasphemy_by_rose_img->getAttribute('class');
              $blasphemy_by_rose_new_classes = $blasphemy_by_rose_img_classes.' mw-100 h-auto';
              $blasphemy_by_rose_img->setAttribute('class', $blasphemy_by_rose_new_classes);
           }

           /**
           * Add Tachyons classes to Figure elements
           */
           $blasphemy_by_rose_figures = $blasphemy_by_rose_document->getElementsByTagName('figure');
           foreach ($blasphemy_by_rose_figures as $blasphemy_by_rose_figure) {
              $blasphemy_by_rose_fig_classes = $blasphemy_by_rose_figure->getAttribute('class');
              $blasphemy_by_rose_new_fig_classes = $blasphemy_by_rose_fig_classes.' mw-100 h-auto';
              $blasphemy_by_rose_figure->setAttribute('class', $blasphemy_by_rose_new_fig_classes);
           }

           /**
           * Add Tachyons classes to style Tables elements
           * Tachyons classes are added before existing classes for easy cascading
           */
           $blasphemy_by_rose_tables = $blasphemy_by_rose_document->getElementsByTagName('table');
           foreach ($blasphemy_by_rose_tables as $blasphemy_by_rose_table) {
              $blasphemy_by_rose_table_classes = $blasphemy_by_rose_table->getAttribute('class');
              $blasphemy_by_rose_new_table_classes = 'collapse ba br2 b--black-10 pv2 ph3 '.$blasphemy_by_rose_table_classes;
              $blasphemy_by_rose_table->setAttribute('class', $blasphemy_by_rose_new_table_classes);
           }
           $blasphemy_by_rose_theaders = $blasphemy_by_rose_document->getElementsByTagName('thead');
           foreach ($blasphemy_by_rose_theaders as $blasphemy_by_rose_theader) {
              $blasphemy_by_rose_theader_classes = $blasphemy_by_rose_theader->getAttribute('class');
              $blasphemy_by_rose_new_theader_classes = 'pv2 ph3 tl f6 fw6 ttu bb b--black-10 '.$blasphemy_by_rose_theader_classes;
              $blasphemy_by_rose_theader->setAttribute('class', $blasphemy_by_rose_new_theader_classes);
           }
           $blasphemy_by_rose_theads = $blasphemy_by_rose_document->getElementsByTagName('th');
           foreach ($blasphemy_by_rose_theads as $blasphemy_by_rose_thead) {
              $blasphemy_by_rose_thead_classes = $blasphemy_by_rose_thead->getAttribute('class');
              $blasphemy_by_rose_new_thead_classes = 'pv2 ph3 tl f6 fw6 ttu '.$blasphemy_by_rose_thead_classes;
              $blasphemy_by_rose_thead->setAttribute('class', $blasphemy_by_rose_new_thead_classes);
           }
           $blasphemy_by_rose_trows = $blasphemy_by_rose_document->getElementsByTagName('tr');
           foreach ($blasphemy_by_rose_trows as $blasphemy_by_rose_trow) {
              $blasphemy_by_rose_trow_classes = $blasphemy_by_rose_trow->getAttribute('class');
              $blasphemy_by_rose_new_trow_classes = 'striped--light-gray '.$blasphemy_by_rose_trow_classes;
              $blasphemy_by_rose_trow->setAttribute('class', $blasphemy_by_rose_new_trow_classes);
           }
           $blasphemy_by_rose_tdivs = $blasphemy_by_rose_document->getElementsByTagName('td');
           foreach ($blasphemy_by_rose_tdivs as $blasphemy_by_rose_tdiv) {
              $blasphemy_by_rose_tdiv_classes = $blasphemy_by_rose_tdiv->getAttribute('class');
              $blasphemy_by_rose_new_tdiv_classes = 'pv2 ph3 f6 '.$blasphemy_by_rose_tdiv_classes;
              $blasphemy_by_rose_tdiv->setAttribute('class', $blasphemy_by_rose_new_tdiv_classes);
           }

           $blasphemy_by_rose_html = $blasphemy_by_rose_document->saveHTML();
           return $blasphemy_by_rose_html;
         }
 }
 add_filter('the_content', 'blasphemy_by_rose_add_classes');

?>
