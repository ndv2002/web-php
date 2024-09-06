<?php
require_once(ADMIN_PATH . 'controllers/BaseController.php');
class SettingController extends BaseController
{
    private $settingModel;
    function __construct()
    {
        $this->folder = 'settings';
        $this->settingModel = $this->model('SettingModel');
    }
    public function home()
    {
        $setting = $this->settingModel->getSetting();
        $data = array(
            'setting' => $setting,
        );
        if (isset($_POST['save-setting'])) {
            $site_title = $_POST['site_title'];
            $logo_url = $_POST['logo_url'];
            $favicon_url = $_POST['favicon_url'];
            $meta_description = $_POST['meta_description'];
            $meta_keywords = $_POST['meta_keywords'];
            $contact_email = $_POST['contact_email'];
            $contact_phone = $_POST['contact_phone'];
            $contact_address = $_POST['contact_address'];
            $this->settingModel->changeSetting($site_title, $logo_url, $favicon_url, $meta_description, $meta_keywords, $contact_email, $contact_phone, $contact_address);
            if (!headers_sent()) {
                header('Location: /admin/setting/home');
            } else {
                echo '<script type="text/javascript">window.location.href="/admin/setting/home"</script>';
            }
        }
        $this->render('home', $data);
    }
}
