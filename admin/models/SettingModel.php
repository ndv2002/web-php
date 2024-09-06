<?php
require_once(BASE_PATH  . 'lib/BaseModel.php');

class SettingModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getSetting()
    {
        $sql = "SELECT * FROM `website_settings` WHERE `id` = 1";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }
    public function changeSetting($site_title, $logo_url, $favicon_url, $meta_description, $meta_keywords, $contact_email, $contact_phone, $contact_address)
    {
        $sql = "UPDATE `website_settings` SET  `site_title` = '$site_title', `logo_url` = '$logo_url', `favicon_url` = '$favicon_url', `meta_description` = '$meta_description', `meta_keywords` = '$meta_keywords', `contact_email` = '$contact_email', `contact_address` = '$contact_address', `contact_phone` = '$contact_phone' WHERE `website_settings`.`id` = 1; ";

        $this->conn->query($sql);
    }
}
