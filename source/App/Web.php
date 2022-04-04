<?php

namespace Source\App;

use Source\Core\Controller;

/**
 * :: Class Web Controller ::
 */
class Web extends Controller{
    
    /**
     * :: Web constructor ::
     */
    public function __construct() {
        parent::__construct(__DIR__."/../../themes/".CONF_VIEW_THEME."/");
    }
    
    /**
     * :: Web | Home ::
     * 
     * @return void
     */
    public function home(): void{
        $head = $this->seo->render(
                CONF_SITE_NAME, 
                CONF_SITE_DESC, 
                url(), 
                theme("/assets/images/share.jpg"));
        echo $this->view->render("home",[
            "head" => $head
        ]);
    }
    
    /**
     * :: Web | Error ::
     * 
     * @return void
     */
    public function error(array $data): void{
        echo "<h1>Error</h1>";
        var_dump($data);
    }
}
