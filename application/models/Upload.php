<?php

namespace application\models;

use application\core\Model;

class Upload extends Model
{

    public function getUsersDataFromCSV($tempFile)
    {
        $usersData = array();
        $file = fopen($tempFile, 'r');
        while (($result = fgetcsv($file)) !== false) {
            $usersData[] = $result;
        }
        fclose($file);
        //take away table headers from users array
        array_shift($usersData);

        return $usersData;
    }
    
    public function getTableHeadersFromCsv($tempFile)
    {
        $file = fopen($tempFile, 'r');
        // the first row of csv file is table headers
        $headers = fgetcsv($file);
        fclose($file);
        
        return $headers !== NULL ? $headers : false;
    }

    public function save($users = [])
    {
        $sql = "INSERT INTO users (UID, name, age, email, phone, gender) VALUES (:UID, :name, :age, :email, :phone, :gender) ON DUPLICATE KEY UPDATE name = VALUES(name), age = VALUES(age), email = VALUES(email), phone = VALUES(phone), gender = VALUES(gender)";
        $stmt = $this->db->prepare($sql);
        if (!empty($users)) {
            foreach ($users as $user) {
                $stmt->execute([
                    'UID'    => $user[0],
                    'name'   => $user[1],
                    'age'    => $user[2],
                    'email'  => $user[3],
                    'phone'  => $user[4],
                    'gender' => $user[5],
                ]);
            }

            return $stmt;
        }

        return false;
    }
}