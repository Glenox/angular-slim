<?php
namespace App\Services;

use \PDO;
use \PDOException;

class StorageService {
    private $pdo;
    public function __construct() {
        require('database.php');
        $config = [
            'db_host' => $database_host,
            'db_name' => $database_name,
            'db_user' => $database_user,
            'db_pass' => $database_password
        ];
        $this->pdo = new PDO(
            "mysql:host={$config['db_host']};dbname={$config['db_name']}",
            $config['db_user'], $config['db_pass']
        );
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    public function query($query, $params=[]) {
        $result = [
            'data' => null,
        ];

        try {
            $stmt = $this->pdo->prepare($query);

            $stmt->execute($params);

            while ($content = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
                
                $result['data'] = $content;
                
            }
        } catch (PDOException $e) {
            $result['error'] = true;
            $result['message'] = $e->getMessage();
        }

        return $result;
    }
}