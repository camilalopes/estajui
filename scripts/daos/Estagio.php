<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/estajui/scripts/daos/Apolice.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estajui/scripts/daos/Supervisor.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estajui/scripts/daos/Empresa.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estajui/scripts/daos/Aluno.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estajui/scripts/daos/Funcionario.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estajui/scripts/daos/Matricula.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estajui/scripts/daos/PlanoDeEstagio.php';

/**
 * Description of Estagio
 *
 * @author gabriel Lucas
 */
class Estagio {

    private $_id;
    private $_aprovado;
    private $_obrigatorio;
    private $_apolice;
    private $_supervisor;
    private $_periodo;
    private $_serie;
    private $_modulo;
    private $_ano;
    private $_semestre;
    private $_dependencias;
    private $_justificativa;
    private $_endereco_tc;
    private $_endereco_pe;
    private $_horas_contabilizadas;
    private $_empresa;
    private $_aluno;
    private $_funcionario;
    private $_matricula;
    private $_status;
    private $_pe;

    public function __construct($_id, $_aprovado, $_obrigatorio, $_apolice, $_supervisor, $_periodo, $_serie, $_modulo, $_ano, $_semestre, $_dependencias, $_justificativa, $_endereco_tc, $_endereco_pe, $_empresa, $_aluno, $_funcionario, $_matricula, $_status, $_pe) {
        $this->_id = $_id;
        $this->_aprovado = $_aprovado;
        $this->_obrigatorio = $_obrigatorio;
        $this->_apolice = $_apolice;
        $this->_supervisor = $_supervisor;
        $this->_periodo = $_periodo;
        $this->_serie = $_serie;
        $this->_modulo = $_modulo;
        $this->_ano = $_ano;
        $this->_semestre = $_semestre;
        $this->_dependencias = $_dependencias;
        $this->_justificativa = $_justificativa;
        $this->_endereco_tc = $_endereco_tc;
        $this->_endereco_pe = $_endereco_pe;
        $this->_empresa = $_empresa;
        $this->_aluno = $_aluno;
        $this->_funcionario = $_funcionario;
        $this->_matricula = $_matricula;
        $this->_status = $_status;
        $this->_pe = $_pe;
    }

    public function gethoras_contabilizadas() {
        return $this->_horas_contabilizadas;
    }

    public function sethoras_contabilizadas($_horas_contabilizadas) {
        $this->_horas_contabilizadas = $_horas_contabilizadas;
        return $this;
    }

    public function getid() {
        return $this->_id;
    }

    public function getaprovado() {
        return $this->_aprovado;
    }

    public function getobrigatorio() {
        return $this->_obrigatorio;
    }

    public function getperiodo() {
        return $this->_periodo;
    }

    public function getserie() {
        return $this->_serie;
    }

    public function getmodulo() {
        return $this->_modulo;
    }

    public function getano() {
        return $this->_ano;
    }

    public function getsemestre() {
        return $this->_semestre;
    }

    public function getdependencias() {
        return $this->_dependencias;
    }

    public function getjustificativa() {
        return $this->_justificativa;
    }

    public function getendereco_tc() {
        return $this->_endereco_tc;
    }

    public function getendereco_pe() {
        return $this->_endereco_pe;
    }

    public function getempresa() {
        return $this->_empresa;
    }

    public function getaluno() {
        return $this->_aluno;
    }

    public function getfuncionario() {
        return $this->_funcionario;
    }

    public function getstatus() {
        return $this->_status;
    }

    public function getpe() {
        return $this->_pe;
    }

    public function getapolice() {
        return $this->_apolice;
    }

    public function getsupervisor() {
        return $this->_supervisor;
    }

    public function setid($_id) {
        $this->_id = $_id;
        return $this;
    }

    public function setaprovado($_aprovado) {
        $this->_aprovado = $_aprovado;
        return $this;
    }

    public function setobrigatorio($_obrigatorio) {
        $this->_obrigatorio = $_obrigatorio;
        return $this;
    }

    public function setperiodo($_periodo) {
        $this->_periodo = $_periodo;
        return $this;
    }

    public function setserie($_serie) {
        $this->_serie = $_serie;
        return $this;
    }

    public function setmodulo($_modulo) {
        $this->_modulo = $_modulo;
        return $this;
    }

    public function setano($_ano) {
        $this->_ano = $_ano;
        return $this;
    }

    public function setsemestre($_semestre) {
        $this->_semestre = $_semestre;
        return $this;
    }

    public function setdependencias($_dependencias) {
        $this->_dependencias = $_dependencias;
        return $this;
    }

    public function setjustificativa($_justificativa) {
        $this->_justificativa = $_justificativa;
        return $this;
    }

    public function setendereco_tc($_endereco_tc) {
        $this->_endereco_tc = $_endereco_tc;
        return $this;
    }

    public function setendereco_pe($_endereco_pe) {
        $this->_endereco_pe = $_endereco_pe;
        return $this;
    }

    public function setempresa($_empresa) {
        $this->_empresa = $_empresa;
        return $this;
    }

    public function setaluno($_aluno) {
        $this->_aluno = $_aluno;
        return $this;
    }

    public function setfuncionario($_funcionario) {
        $this->_funcionario = $_funcionario;
        return $this;
    }

    public function setstatus($_status) {
        $this->_status = $_status;
        return $this;
    }

    public function setpe($_pe) {
        $this->_pe = $_pe;
        return $this;
    }

    public function setapolice($_apolice) {
        $this->_apolice = $_apolice;
        return $this;
    }

    public function setsupervisor($_supervisor) {
        $this->_supervisor = $_supervisor;
        return $this;
    }

    public function getmatricula() {
        return $this->_matricula;
    }

    public function setmatricula($_matricula) {
        $this->_matricula = $_matricula;
        return $this;
    }

}
