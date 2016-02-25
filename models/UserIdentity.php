<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use app\models\science;

/**
 * Description of UserIdentity
 *
 * @author Yut
 */
class UserIdentity extends CUserIdentity {

    public function authenticate() {
        $conexao = Yii::app()->db;
        $consulta = "select utilizador,password from utilizador ";
        $consulta.="where utilizador='" . $this->username . "' and ";
        $consulta.="password='" . $this->password . "'";

        $resultado = $conexao->createCommand($consulta)->query();

        $resultado->bindColumn(1, $this->username);
        $resultado->bindColumn(2, $this->password);

        while ($resultado->read() !== false) {
            $this->errorCode = self::ERROR_NONE;
            return !$this->errorCode;
        }
    }

    //put your code here
}

?>