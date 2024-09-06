<?php

class BaseController
{
    protected $viewsPath = USER_PATH . 'views/'; // base path to views
    protected $folder; // subfolder of views
    protected $model;
    private $settingModel;
    public function render(string $view, array $data = [], string $layout = null)
    {
        // Set the full path to the view file
        $viewPath = $this->viewsPath . $this->getViewFolder() . '/' . $view . '.php';
        $this->model = $this->model('UserModel');
        // Check if the view file exists
        if (!file_exists($viewPath)) {
            return $this->showErrorPage();
        }

        // Extract the data into variables for the view
        extract($data);

        // Capture the output of the view
        ob_start();
        require $viewPath;
        $content = ob_get_clean();

        // If a layout is specified, render the content inside the layout
        $this->settingModel = $this->model('SettingModel');
        $setting = $this->settingModel->getSetting();
        if ($layout) {
            $this->renderLayout($layout, $content, $setting);
        } else {
            // Otherwise, use a default layout
            $this->renderLayout('layout', $content, $setting);
        }
    }

    protected function getViewFolder(): string
    {
        return $this->folder ?? '';
    }

    protected function renderLayout(string $layout, string $content, array $setting = [])
    {
        $layoutPath = $this->viewsPath . 'layouts/' . $layout . '.php';
        extract($setting);
        // Check if the layout file exists
        if (!file_exists($layoutPath)) {
            return $this->showErrorPage();
        }

        // Render the layout with the content
        require $layoutPath;
    }

    protected function showErrorPage()
    {
        header('HTTP/1.1 404 Not Found');
        require $this->viewsPath . 'error.php';
        exit();
    }
    protected function model($model)
    {
        require_once(USER_PATH . 'models/' . $model . '.php');
        return new $model();
    }
}
