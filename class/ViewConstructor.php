<?php
class ViewConstructor {
    
    private static $instance = null;
    private $pageTitle = "Corollarium";
    private $cssFiles;
    private $jsFiles;
    private $templatesDir = "templates/";
    private $header;
    private $footer;
    private $page;

    private function ViewConstructor() {}
    
    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new ViewConstructor();
        }
        
        return self::$instance;
    }

    public function setPageTitle($title){
        $this->pageTitle = $title;
    }
    
    public function head(){
        if($this->header != null && file_exists($this->header)){
            include $this->header;
        }
    }
    
    public function setCssFiles($cssFiles){
        $this->cssFiles = $cssFiles;
    }

    public function setJsFiles($jsFiles){
        $this->jsFiles = $jsFiles;
    }

    public function getPageTitle(){
        return $this->pageTitle;
    }
    
    public function getCssFiles(){
        return $this->cssFiles;
    }
    
    public function getJsFiles(){
        return $this->jsFiles;
    }
    
    public function setHeaderTemplate($headerPath){
        if(file_exists($this->templatesDir.$headerPath)){
            $this->header = $this->templatesDir.$headerPath;
        }
    }
    
    public function setPageTemplate($pagePath){
        if(file_exists($this->templatesDir.$pagePath)){
            $this->page = $this->templatesDir.$pagePath;
        }
    }
    
    public function setFooterTemplate($footerPath){
        if(file_exists($this->templatesDir.$footerPath)){
            $this->footer = $this->templatesDir.$footerPath;
        }
    }
    
    public function getHeaderTemplate(){
        if($this->header != null && file_exists($this->header)){
            include $this->header;
        }
    }
    
    public function getPageTemplate(){
        if($this->page != null && file_exists($this->page)){
            include $this->page;    
        }
    }
    
    public function getFooterTemplate(){
        if($this->footer != null && file_exists($this->footer)){
            include $this->footer;
        }
    }
    
    public function render(){
        $this->getHeaderTemplate();
        $this->getPageTemplate();
        $this->getFooterTemplate();
    }
}