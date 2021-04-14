<?php

namespace Imones;

use PDO;
use PDOException;

class Company {
    protected $pdo;
    private $name;
    private $code;
    private $pvm_code;
    private $address;
    private $phone;
    private $email;
    private $activity;
    private $owner;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function createCompany($company){
        $this->name = $company ['name'];
        $this->code = $company ['code'];
        $this->pvm_code = $company ['pvm_code'];
        $this->address = $company ['address'];
        $this->phone = $company ['phone'];
        $this->email = $company ['email'];
        $this->activity = $company ['activity'];
        $this->owner = $company ['owner'];

        $this->insertCompany();
        
    }

    public function insertCompany(){
        try {
            $query = "INSERT INTO `imones` (`name`, `code`, `pvm_code`, `address`, `phone`, `email`, `activity`, `owner`)
             VALUES (:name, :code, :pvm_code, :address, :phone, :email, :activity, :owner)";
             $stmt = $this->pdo->prepare($query);
             $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);   
             $stmt->bindParam(':code', $this->code, PDO::PARAM_STR);
             $stmt->bindParam(':pvm_code', $this->pvm_code, PDO::PARAM_STR);
             $stmt->bindParam(':address', $this->address, PDO::PARAM_STR);
             $stmt->bindParam(':phone', $this->phone, PDO::PARAM_STR);
             $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
             $stmt->bindParam(':activity', $this->activity, PDO::PARAM_STR);
             $stmt->bindParam(':owner', $this->owner, PDO::PARAM_STR);

             $stmt->execute();

             header('Location: /');           
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}

    public function AllCompanies($pageNr){
        echo 'PageNr:'. $pageNr;
        $stmt = $this->pdo->prepare('SELECT * FROM imones LIMIT 6 OFFSET ' . ($pageNr -1) * 6);

        $stmt->execute();

        return $stmt->FetchAll(PDO::FETCH_ASSOC);
    }

    public function ViewCompany($id) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM imones WHERE `id` = :id");
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function deleteCompany($id) {
    try {
        $stmt = $this->pdo->prepare("DELETE FROM imones WHERE `id` = :id");
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        header('Location:/');      
    } catch(PDOException $ex) {
        echo $ex->getMessage();
    }
    }

    public function searchCompany($searchString) {
        try {
            $search = '%'.$searchString['search'].'%';
            $stmt = $this->pdo->prepare("SELECT * FROM imones WHERE `name` LIKE :searchString OR `code`
            LIKE :searchString");
            $stmt->bindValue(":searchString", $search, PDO::PARAM_STR);
            $stmt->execute();
            
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if($result == []) {
                echo "Rezultatu nerasta";
            }else {
                header('Location:/imone/'.$result['id']);
            }

        } catch(PDOException $ex) {
            echo $ex->getMessage();
    }
  
}
public function editCompany($id, $FormData) {
    try{
        $query = "UPDATE `imones` SET `name` = :name, `code` = :code, `pvm_code` = :pvm_code, `address` = :address,  `phone` = :phone, `email` = :email, `activity` = :activity, `owner` = :owner WHERE `id` = :id ";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id , PDO::PARAM_INT);
        $stmt->bindParam(':name', $FormData['name'], PDO::PARAM_STR); 
        $stmt->bindParam(':code', $FormData['code'], PDO::PARAM_STR); 
        $stmt->bindParam(':pvm_code', $FormData['pvm_code'], PDO::PARAM_STR); 
        $stmt->bindParam(':address', $FormData['address'], PDO::PARAM_STR); 
        $stmt->bindParam(':phone', $FormData['phone'], PDO::PARAM_STR); 
        $stmt->bindParam(':email', $FormData['email'], PDO::PARAM_STR); 
        $stmt->bindParam(':activity', $FormData['activity'], PDO::PARAM_STR); 
        $stmt->bindParam(':owner', $FormData['owner'], PDO::PARAM_STR); 

        $stmt->execute();
        header('Location:/');
    } catch(PDOException $ex) {
        echo $ex->getMessage();
    }
}



}