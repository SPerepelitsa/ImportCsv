<?php

namespace application\lib\validation;

use application\lib\validation\exceptions\CsvException;
use application\models\Upload;

class CsvFileValidation
{
    private const ALLOWED_SIZE = 1048576;
    private const CSV_MIMES = [
        'text/csv',
        'text/plain',
        'application/csv',
        'text/comma-separated-values',
        'application/vnd.ms-excel',
        'application/vnd.msexcel',
    ];
    private const DEFAULT_HEADERS = [
            'UID',
            'Name',
            'Age',
            'Email',
            'Phone',
            'Gender',
    ];

    private function isFileUploaded($file)
    {
        if (!file_exists($file)) {
            $errorMessage = "Choose сsv file to upload.";
            throw new CsvException($errorMessage);
        }

        return true;
    }

    private function checkFileExtension($file)
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $fileMime = finfo_file($finfo, $file);
        finfo_close($finfo);
        $errorMessage = "Please, upload valid file. Only CSV files allowed.";
        if (!in_array($fileMime, self::CSV_MIMES)) {
            throw new CsvException($errorMessage);
        }

        return true;
    }

    private function checkFileSize($file)
    {
        $errorMessage = "File size exceeds 1MB.";
        if (filesize($file) > self::ALLOWED_SIZE) {
            throw new CsvException($errorMessage);
        }

        return true;
    }

    private function checkFileStructure($file)
    {
        $errorMessage = "Uploaded file has wrong structure.";
        $upload = new Upload();
        if ($headers = $upload->getTableHeadersFromCsv($file)) {
            $receivedHeaders = $headers;
        } else {
            throw new CsvException($errorMessage);
        }
        $diff = array_diff(self::DEFAULT_HEADERS, $receivedHeaders);
        if (count($diff) > 0) {
            throw new CsvException($errorMessage);
        }

        return true;
    }

    public function validateCsv($file)
    {
        $this->isFileUploaded($file);
        $this->checkFileExtension($file);
        $this->checkFileSize($file);
        $this->checkFileStructure($file);
    }
}
