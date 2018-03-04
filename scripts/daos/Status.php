<?php

/**
 * Description of Status
 *
 * @author gabriel Lucas
 */
class Status {
    
    private $_codigo;
    private $_descricao;
    private $_usuarios_alvo;
    
    public function __construct($_codigo, $_descricao, $_usuarios_alvo) {
        $this->_codigo = $_codigo;
        $this->_descricao = $_descricao;
        $this->_usuarios_alvo = $_usuarios_alvo;
    }
    
    public function getcodigo() {
        return $this->_codigo;
    }

    public function getdescricao() {
        return $this->_descricao;
    }

    public function setcodigo($_codigo) {
        $this->_codigo = $_codigo;
        return $this;
    }

    public function setdescricao($_descricao) {
        $this->_descricao = $_descricao;
        return $this;
    }
    public function get_usuarios_alvo() {
        return $this->_usuarios_alvo;
    }

    public function set_usuarios_alvo($_usuarios_alvo) {
        $this->_usuarios_alvo = $_usuarios_alvo;
        return $this;
    }



}
