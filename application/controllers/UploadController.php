<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\validation\CsvFileValidation;
use application\lib\validation\exceptions\CsvException;

class UploadController extends Controller
{
    public function importViewAction()
    {
        $this->view->render('upload/import');
    }

    public function importCsvAction()
    {
        $file = $_FILES['csvfile']['tmp_name'];
        $validation = new CsvFileValidation();
        try {
            $validation->validateCsv($file);
        } catch (CsvException $e) {
            $message = [
                'errors' => $e->getMessage(),
            ];
            $this->view->render('upload/import', $message);

            return false;
        }
        $usersData = $this->model->getUsersDataFromCSV($file);
        $this->model->save($usersData );
        $this->view->redirect('/results');
    }
}