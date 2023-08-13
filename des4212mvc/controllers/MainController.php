<?php

require_once 'models/mainModel.php';
require_once 'views/mainView.php';

class MainController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new MainModel();
        $this->view = new MainView();
    }

    public function showPersonData() {
        $personData = $this->model->getPersonData();
        $this->view->render($personData);
    }
}

?>
