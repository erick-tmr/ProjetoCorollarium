<?php
    require_once 'class/ViewConstructor.php';
    $constructor = ViewConstructor::getInstance();
    
    $cssFiles = ["css/bootstrap.min.css", "css/ie10-viewport-bug-workaround.css", "css/blog.css"];
    $jsFiles = ["js/jquery.min.js", "js/bootstrap.min.js", "js/ie10-viewport-bug-workaround.js"];
    
    $constructor->setPageTitle("Some Title Here!");
    
    $constructor->setCssFiles($cssFiles);
    $constructor->setJsFiles($jsFiles);
            
    $constructor->setHeaderTemplate("header.php");
    $constructor->setPageTemplate("page.php");
    $constructor->setFooterTemplate("footer.php");
    
    $constructor->render();