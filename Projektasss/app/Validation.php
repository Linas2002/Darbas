<?php

namespace Imones;

class Validation {
    static public function NewCompany($formData) {
        $klaidos = [];

        if(empty($formData['name'])) {
            $klaidos['name'] = "Prašome užpildyti pavadinimą";
        }
        else if(strlen($formData['name']) < 3) {
            $klaidos['name'] = "Pavadinimas negali būti trumpesnis nei 3 raides";
        }
        if(empty($formData['code'])) {
            $klaidos['code'] = "Prašome užpildyti kodą";
        }  
        if(empty($formData['pvm_code'])) {
            $klaidos['pvm_code'] = "Prašome užpildyti PVM kodą";
        }
        if(empty($formData['address'])) {
            $klaidos['address'] = "Prašome užpildyti adresą";
        }
        if(empty($formData['phone'])) {
            $klaidos['phone'] = "Prašome užpildyti Telefoną";
        } else {
            $sanitized_phone = filter_var($formData['phone'], FILTER_SANITIZE_NUMBER_INT);
            if(strlen($sanitized_phone) < 9 || strlen($sanitized_phone)  > 12) {
                $klaidos ['phone'] = "Tel. nr. turi būti tinkamas";
            }
        }
       
        if(empty($formData['email'])) {
            $klaidos['email'] = "Prašome užpildyti El. Paštą";
        }
        else if(!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
            $klaidos ['email'] = "El. Paštas turi būti tinkamas";
        }   
        if(empty($formData['activity'])) {
            $klaidos['activity'] = "Prašome užpildyti Veikla";
        }
        if(empty($formData['owner'])) {
            $klaidos['owner'] = "Prašome užpildyti Vadova";
        }              

       if(!empty($klaidos)) {
           return $klaidos;
       }   
    





    return 'Klaidų nerasta';
}
}