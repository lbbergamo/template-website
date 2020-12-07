<?php

namespace Source\App;

use Source\Core\Controller;


/**
 * Class Web
 *
 * @author Leandro Bergamo <contato@leandrobergamo.dev>
 * @package Source\App
 */
class Web extends Controller
{
    /**
     * Web constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    /**
     * SITE HOME
     */
    public function home(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("index", [
            "head" => $head,
            "video" => "lDZGl9Wdc7Y",
            "blog" => "test"
        ]);
    }
}