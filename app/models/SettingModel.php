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
}
