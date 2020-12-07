<?php

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.localhost/template-site-routes/");
/**
 * SITE
 */
define("CONF_SITE_NAME", "Title");
define("CONF_SITE_TITLE", "Sub Title");
define("CONF_SITE_DESC",    "    Descrição do site.");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "site.com.br");
define("CONF_SITE_ADDR_STREET", "Endereço");
define("CONF_SITE_ADDR_NUMBER", "3");
define("CONF_SITE_ADDR_COMPLEMENT", "");
define("CONF_SITE_ADDR_CITY", "Cidade");
define("CONF_SITE_ADDR_STATE", "SP");
define("CONF_SITE_ADDR_ZIPCODE", "15");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "veno");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");


/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@");
define("CONF_SOCIAL_FACEBOOK_APP", "6");
define("CONF_SOCIAL_FACEBOOK_PAGE", "u");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "r");
define("CONF_SOCIAL_GOOGLE_PAGE", "1");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "1");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "instagram");


/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.sendgrid.net");
define("CONF_MAIL_PORT", "000");
define("CONF_MAIL_USER", "apikey");
define("CONF_MAIL_PASS", "*************************");
define("CONF_MAIL_SENDER", ["name" => "Contato ", "address" => "contato do e-mail"]);
define("CONF_MAIL_SUPPORT", "contato do e-mail");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");