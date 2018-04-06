<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 02.01.2018
 * Time: 18:51
 */

class Model extends MySQL {

    public function getFomatedPhone($phone) {
        $result = FALSE;
        if(is_string($phone)) {
            $result = '+' . $phone;
        }

        return $result;
    }
}