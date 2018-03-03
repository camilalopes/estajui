<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/estajui/scripts/controllers/TC.php";

function underlineString($tamanho, $string) {
    $formatada = substr($string, 0, $tamanho);

    $formatada = $formatada . str_repeat(' ', $tamanho - strlen($formatada));
    return $formatada;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <link rel="stylesheet" href="base.min.css"/>
        <link rel="stylesheet" href="fancy.min.css"/>
        <link rel="stylesheet" href="main.css"/>
        <script src="compatibility.min.js"></script>
        <script src="theViewer.min.js"></script>
        <script>
            try {
                theViewer.defaultViewer = new theViewer.Viewer({});
            } catch (e) {
            }
        </script>
        <title></title>
    </head>
    <body>
        <div id="sidebar">
            <div id="outline">
            </div>
        </div>
        <div id="page-container">
            <div id="pf1" class="pf w0 h0" data-page-no="1">
                <div class="pc pc1 w0 h0">
                    <img class="bi x0 y0 w1 h1" alt="" src="bg1.png"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">Ministério da Educação </div>
                    <div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">Secretaria de Educação Profissional e Tecnológica </div>
                    <div class="t m0 x3 h2 y3 ff1 fs0 fc0 sc0 ls0 ws0">Instituto Federal do Norte de Minas Gerais <span class="ff2">–</span> IFNMG 
                    </div>
                    <div class="t m0 x4 h2 y4 ff3 fs0 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x5 h3 y5 ff4 fs1 fc0 sc0 ls0 ws0">TERMO DE COMPROMISSO DE ESTÁGIO OBRI<span class="_ _0"></span>GATÓRIO 
                    </div>
                    <div class="t m0 x4 h4 y6 ff1 fs2 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h4 y7 ff1 fs2 fc0 sc0 ls0 ws0">Neste ato as partes a seguir nome<span class="_ _0"></span>adas:  
                    </div>
                    <div class="t m0 x6 h5 y8 ff4 fs3 fc0 sc0 ls0 ws0">ESTAGIÁRIO </div>
                    <div class="t m0 x6 h6 y9 ff4 fs2 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h6 ya ff4 fs2 fc0 sc0 ls0 ws0">Nome: <span class="underline"><?php echo underlineString(97, $estagio->getaluno()->getnome()); ?></span>
                    </div>
                    <div class="t m0 x6 h6 yb ff4 fs2 fc0 sc0 ls0 ws0">RG:<span class="underline"><?php echo underlineString(25, $estagio->getaluno()->getrg_numformatado()); ?></span> CPF:<span class="underline"><?php echo underlineString(28, $estagio->getaluno()->getcpfformatado()); ?></span> D<span class="_ _0"></span>ata de nascimento: <span class="underline"><?php echo underlineString(25, $estagio->getaluno()->getdata_nasc()); ?></span></div>
                    <div class="t m0 x6 h6 yc ff4 fs2 fc0 sc0 ls0 ws0">Endereço (rua/av.):<span class="underline"><?php echo underlineString(64, $estagio->getaluno()->getendereco()->getlogradouro()); ?></span> N º: <span class="underline"><?php echo underlineString(7, $estagio->getaluno()->getendereco()->getnumero()); ?></span> Aptº: <span class="underline"><?php echo underlineString(8, $estagio->getaluno()->getendereco()->getcomplemento()); ?></span> </div>
                    <div class="t m0 x6 h6 yd ff4 fs2 fc0 sc0 ls0 ws0">Bairro:<span class="underline"><?php echo underlineString(43, $estagio->getaluno()->getendereco()->getbairro()); ?></span> Cidade:<span class="underline"><?php echo underlineString(30, $estagio->getaluno()->getendereco()->getcidade()); ?></span> Estado:<span class="underline"><?php echo underlineString(11, $estagio->getaluno()->getendereco()->getuf()); ?></span></div>
                    <div class="t m0 x6 h6 ye ff4 fs2 fc0 sc0 ls0 ws0">CEP: <span class="underline"><?php echo underlineString(22, $estagio->getaluno()->getendereco()->getcep()); ?></span> Telefone Fixo: <span class="underline"><?php echo underlineString(28, $estagio->getaluno()->gettelefone()); ?></span> Cel<span class="_ _0"></span>ular: <span class="underline"><?php echo underlineString(29, $estagio->getaluno()->getcelular()); ?></span></div>
                    <div class="t m0 x6 h6 yf ff4 fs2 fc0 sc0 ls0 ws0">Curso:<span class="underline"><?php echo underlineString(53, $estagio->getmatricula()->getoferta()->getcurso()->getnome()); ?></span> Série:<span class="underline"><?php echo underlineString(7, $estagio->getserie()); ?></span> Mó<span class="_ _0"></span>dulo:<span class="underline"><?php echo underlineString(9, $estagio->getmodulo()); ?></span> Período:<span class="underline"><?php echo underlineString(10, $estagio->getperiodo()); ?></span></div>
                    <div class="t m0 x6 h6 y10 ff4 fs2 fc0 sc0 ls0 ws0">*Aluno (a) integralizou a carga horária d<span class="_ _0"></span>o curso:<span class="ff1"> <span class="ff5">Se<span class="_ _0"></span>mestre/Ano de Integrali<span class="_ _0"></span>zação<span class="ls3">:<span class="underline"><?php echo underlineString(7, $estagio->getsemestre()); ?></span>/<span class="underline"><?php echo underlineString(9, $estagio->getano()); ?></span>  </span> <span class="_ _0"></span> </span></span></div>
                    <div class="t m0 x6 h7 y11 ff6 fs4 fc0 sc0 ls0 ws0">*Concluiu com <span class="_ _0"></span>aproveitamento todas <span class="_ _0"></span>as <span class="_ _0"></span>disciplinas/módulos que <span class="_ _0"></span>integram <span class="_ _0"></span>a <span class="_ _0"></span>estrutura <span class="_ _0"></span>curricular do <span class="_ _0"></span>curso, <span class="_ _0"></span>excluindo<span class="_ _0"></span>-se <span class="_ _0"></span>estágios <span class="_ _0"></span>e <span class="_ _0"></span>defesas de <span class="_ _0"></span>TCC, <span class="_ _0"></span>entre <span class="_ _0"></span>outras <span class="_ _0"></span>atividades </div>
                    <div class="t m0 x6 h7 y12 ff6 fs4 fc0 sc0 ls0 ws0">que não pressuponham a pr<span class="_ _1"></span>esença regular do alu<span class="_ _1"></span>no nas dependências da <span class="_ _1"></span>instituição. </div>
                    <div class="t m0 x6 h8 y13 ff1 fs4 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h5 y14 ff4 fs3 fc0 sc0 ls0 ws0">CONCEDENTE </div>
                    <div class="t m0 x6 h4 y15 ff1 fs2 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h6 y16 ff4 fs2 fc0 sc0 ls0 ws0">Nome ou Razão Social: <span class="ff1">______<span class="_ _0"></span>______________________<span class="_ _0"></span>_________________<span class="_ _0"></span>______________________<span class="_ _0"></span>_____________________<span class="_ _0"></span><span class="ls1">___</span> </span></div>
                    <div class="t m0 x6 h6 y17 ff4 fs2 fc0 sc0 ls0 ws0">Endereço (rua/av.):<span class="ff1">__________<span class="_ _0"></span>______________<span class="_ _0"></span>________________<span class="ls1">___</span>___<span class="_ _0"></span>____________________ <span class="_ _0"></span></span>N º: <span class="ff1">___________ </span>Sala:<span class="_ _0"></span><span class="ff1">_________ </span></div>
                    <div class="t m0 x6 h6 y18 ff4 fs2 fc0 sc0 ls0 ws0">Bairro:<span class="ff1"> ____________________<span class="_ _0"></span>__________________<span class="_ _0"></span><span class="ls1">___</span></span>Cidade:<span class="ff1"> ___________<span class="_ _0"></span>______________________<span class="_ _0"></span>___ </span>Estado:<span class="ff1"> _______<span class="_ _0"></span>______ </span></div>
                    <div class="t m0 x6 h6 y19 ff4 fs2 fc0 sc0 ls0 ws0">CEP:<span class="ff1">__________________<span class="_ _0"></span>______ </span>Telefone(s):<span class="ff1">__<span class="ls1">_______<span class="_ _0"></span></span>__________________<span class="_ _0"></span>______________________<span class="_ _0"></span>_____________________<span class="_ _0"></span><span class="ls1">__</span> </span></div>
                    <div class="t m0 x6 h6 y1a ff4 fs2 fc0 sc0 ls0 ws0">CNPJ:<span class="ff1"> ____________________<span class="_ _0"></span>__________________________<span class="_ _0"></span>__________________________<span class="_ _0"></span>______________________<span class="_ _0"></span>___________<span class="_ _0"></span> </span></div>
                    <div class="t m0 x6 h6 y1b ff4 fs2 fc0 sc0 ls0 ws0">N° Registro:<span class="ff1">________________<span class="_ _0"></span>____________________<span class="_ _0"></span><span class="ls1">_ </span></span>Conselho de Fiscalização:<span class="ff1"> <span class="_ _0"></span>_________________<span class="_ _0"></span>_______________________<span class="_ _0"></span> </span></div>
                    <div class="t m0 x6 h4 y1c ff1 fs2 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h5 y1d ff4 fs3 fc0 sc0 ls0 ws0">INSTITUIÇÃO DE ENSINO </div>
                    <div class="t m0 x6 h6 y1e ff4 fs2 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h6 y1f ff4 fs2 fc0 sc0 ls0 ws0">Razão Social: Instituto Federal de Edu<span class="_ _0"></span>cação, Ciência e Tecnologia N<span class="_ _0"></span>orte de Minas Gerais<span class="_ _0"></span><span class="ff1"> <span class="ff2">–</span> <span class="ff5 ls4">Ca<span class="ls0">mpus</span></span> ____________________<span class="_ _0"></span>______ </span></div>
                    <div class="t m0 x6 h6 y20 ff4 fs2 fc0 sc0 ls0 ws0">Endereço:<span class="ff1"> _____________<span class="_ _0"></span>_________________<span class="_ _0"></span>__________________________<span class="_ _0"></span>__________________________<span class="_ _0"></span>____________________<span class="_ _0"></span> </span></div>
                    <div class="t m0 x6 h6 y21 ff4 fs2 fc0 sc0 ls0 ws0">Cidade:<span class="ff1"> _________________<span class="_ _0"></span>____________________ <span class="_ _0"></span></span>Estado:<span class="ff1"> <span class="ls5">MG</span> </span>CEP<span class="ff1">: _____<span class="_ _0"></span>__________<span class="ls1">___ </span></span>Telefon<span class="ls2">e:</span><span class="ff1"> (       ) _________<span class="_ _0"></span>_______<span class="ls1">___</span> </span></div>
                    <div class="t m0 x6 h6 y22 ff4 fs2 fc0 sc0 ls0 ws0">CNPJ<span class="ff5">(do Campus)<span class="ff7">:<span class="ff1"> ___________<span class="_ _0"></span>______________________<span class="_ _0"></span>___________  </span></span></span></div>
                    <div class="t m0 x6 h4 y23 ff1 fs2 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h6 y24 ff1 fs2 fc0 sc0 ls0 ws0">Celebram entre si este <span class="_ _0"></span><span class="ff4">TERMO DE COMPROMISSO DE EST<span class="_ _0"></span>ÁGIO</span> convencionando as<span class="_ _0"></span> cláusulas e condições segui<span class="_ _0"></span>ntes: </div>
                    <div class="t m0 x6 h4 y25 ff1 fs2 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h6 y26 ff4 fs2 fc0 sc0 ls0 ws0">Art. <span class="_ _2"></span>1º <span class="_ _2"></span><span class="ff1">Este <span class="_ _2"></span></span>TERMO <span class="_ _2"></span>DE <span class="_ _3"> </span>COMPROMISSO <span class="_ _2"></span>DE <span class="_ _2"></span>ESTÁGIO<span class="_ _0"></span><span class="ff1"> <span class="_ _2"></span>reger-<span class="ls6">se</span>-á <span class="_ _2"></span>pela <span class="_ _2"> </span>dispos<span class="_ _0"></span>ição <span class="_ _2"></span>da <span class="_ _2"></span>Lei <span class="_ _2"></span>Nº <span class="_ _2"> </span>1<span class="_ _0"></span>1.788, <span class="_ _2"></span>de <span class="_ _2"></span>25 <span class="_ _2"></span>de <span class="_ _2"> </span>s<span class="_ _0"></span>etembro <span class="_ _2"></span>de <span class="_ _2"></span>2008, <span class="_ _2"></span>e </span></div>
                    <div class="t m0 x6 h4 y27 ff1 fs2 fc0 sc0 ls0 ws0">explicitará <span class="_ _0"></span>o <span class="_ _4"></span>estágio <span class="_ _0"></span>como <span class="_ _4"></span>estraté<span class="_ _0"></span>gia <span class="_ _0"></span>de <span class="_ _0"></span>c<span class="_ _0"></span>omplementação <span class="_ _4"></span>do <span class="_ _0"></span>process<span class="_ _0"></span>o <span class="_ _0"></span>de <span class="_ _0"></span>ens<span class="_ _0"></span>ino-aprendi<span class="_ _0"></span>zagem, <span class="_ _0"></span>b<span class="_ _0"></span>em <span class="_ _0"></span>como <span class="_ _4"></span>estabelecerá <span class="_ _0"></span>as<span class="_ _0"></span> <span class="_ _0"></span>condições <span class="_ _4"></span>de </div>
                    <div class="t m0 x6 h6 y28 ff1 fs2 fc0 sc0 ls0 ws0">sua realização.<span class="ff4"> </span></div>
                    <div class="t m0 x6 h6 y29 ff4 fs2 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h6 y2a ff4 fs2 fc0 sc0 ls0 ws0">Art. 2º <span class="ff1">Fica acertado entre as part<span class="_ _0"></span>es que:</span> </div>
                    <div class="t m0 x6 h6 y2b ff4 fs2 fc0 sc0 ls0 ws0">a) as atividades principais desen<span class="_ _0"></span>volvidas no estágio serão:<span class="_ _0"></span> </div>
                    <div class="t m0 x6 h4 y2c ff1 fs2 fc0 sc0 ls1 ws0">_________________________________<span class="_ _0"></span><span class="ls0">___________________<span class="_ _0"></span>__________________________<span class="_ _0"></span>__________________________<span class="_ _0"></span>_______</span></div>
                    <div class="t m0 x6 h4 y2d ff1 fs2 fc0 sc0 ls1 ws0">___________________________________<span class="_ _0"></span>__________________________<span class="_ _0"></span>______________________________<span class="_ _0"></span>____________________</div>
                    <div class="t m0 x6 h4 y2e ff1 fs2 fc0 sc0 ls1 ws0">___________________________________<span class="_ _0"></span>__________________________<span class="_ _0"></span>______<span class="ls0">___________<span class="_ _0"></span>__________________________<span class="_ _0"></span>_______</span></div>
                    <div class="t m0 x6 h4 y2f ff1 fs2 fc0 sc0 ls1 ws0">___________________________________<span class="_ _0"></span>__________________________<span class="_ _0"></span>______________________________<span class="_ _0"></span>____________________</div>
                    <div class="t m0 x6 h4 y30 ff1 fs2 fc0 sc0 ls1 ws0">___________________________________<span class="_ _0"></span>__________________________<span class="_ _0"></span>______________________________<span class="_ _0"></span>__________<span class="ls0">___<span class="_ _0"></span>_______ </span></div>
                    <div class="t m0 x6 h6 y31 ff4 fs2 fc0 sc0 ls0 ws0">b) a jornada de estágio será cumprid<span class="_ _0"></span>a (diariamente) nos horários de<span class="_ _0"></span>: </div>
                    <div class="t m0 x6 h4 y32 ff1 fs2 fc0 sc0 ls0 ws0"> <span class="ls1">___________h às ___________h e das _______<span class="_ _0"></span>____h às ___________h, totalizando ______<span class="_ _0"></span>____h semanais;<span class="_ _0"></span></span> </div>
                    <div class="t m0 x6 h6 y33 ff4 fs2 fc0 sc0 ls0 ws0">c) o estágio será <span class="_ _0"></span>oferecido<span class="ff1"> (  <span class="_ _0"></span> ) sem ( <span class="_ _0"></span>  ) com remuneração <span class="_ _0"></span> no valor de <span class="_ _0"></span>R$ <span class="ls1">___________ <span class="_ _0"></span>(___________________________<span class="_ _0"></span>___________ </span></span></div>
                    <div class="t m0 x6 h4 y34 ff1 fs2 fc0 sc0 ls1 ws0">___________________________________<span class="_ _0"></span>__________________________<span class="_ _0"></span>_____________________), <span class="_ _5"></span> <span class="_ _5"></span>bem <span class="_ _4"></span>como <span class="_ _5"></span>auxilio <span class="_ _5"></span><span class="ls0">- <span class="_ _5"></span>transporte <span class="_ _5"></span>no </span></div>
                    <div class="t m0 x6 h4 y35 ff1 fs2 fc0 sc0 ls0 ws0">valor de R$  ( _______________<span class="_ _0"></span>______________________<span class="_ _0"></span>_______________________<span class="_ _0"></span>__________<span class="_ _0"></span>_____________________<span class="_ _0"></span>________); </div>
                    <div class="t m0 x6 h6 y36 ff4 fs2 fc0 sc0 ls0 ws0">d) <span class="_ _5"></span>o <span class="_ _2"></span>presente <span class="_ _2"></span>TERMO <span class="_ _2"></span>DE <span class="_ _5"></span>CO<span class="_ _0"></span>MPROMISSO <span class="_ _2"></span>DE <span class="_ _2"></span>ESTÁGIO <span class="_ _5"></span>terá <span class="_ _2"></span>validade <span class="_ _2"></span>de<span class="_ _0"></span><span class="ff1"> <span class="_ _2"></span>______/_______/________ <span class="_ _2"></span>a <span class="_ _2"></span>______/_______/____<span class="_ _0"></span>____, </span></div>
                    <div class="t m0 x6 h4 y37 ff1 fs2 fc0 sc0 ls0 ws0">que poderá <span class="_ _0"></span>ser <span class="_ _0"></span>eventual<span class="_ _0"></span>mente prorroga<span class="_ _0"></span>do ou<span class="_ _0"></span> mod<span class="_ _0"></span>ificado <span class="_ _0"></span>por docu<span class="_ _0"></span>mento compl<span class="_ _0"></span>ementar, d<span class="_ _0"></span>esde <span class="_ _0"></span>que qual<span class="_ _0"></span>quer <span class="_ _0"></span>das pa<span class="_ _0"></span>rte<span class="_ _0"></span>s <span class="_ _0"></span>peça <span class="_ _0"></span>rescisão, p<span class="_ _0"></span>or </div>
                    <div class="t m0 x6 h4 y38 ff1 fs2 fc0 sc0 ls0 ws0">escrito, com 5 dias de antecedên<span class="_ _0"></span>cia.  </div>
                </div>
                <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
            </div>
            <div id="pf2" class="pf w0 h0" data-page-no="2">
                <div class="pc pc2 w0 h0">
                    <img class="bi x0 y0 w1 h1" alt="" src="bg2.png"/>
                    <div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">Ministério da Educação </div>
                    <div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">Secretaria de Educação Profissional e Tecnológica </div>
                    <div class="t m0 x3 h2 y3 ff1 fs0 fc0 sc0 ls0 ws0">Instituto Federal do Norte de Minas Gerais <span class="ff2">–</span> IFNMG </div>
                    <div class="t m0 x4 h2 y4 ff3 fs0 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h6 y39 ff4 fs2 fc0 sc0 ls0 ws0">Art.3º <span class="_ _0"></span><span class="ff1">A <span class="_ _4"></span>CONCEDENTE <span class="_ _0"></span>de<span class="_ _0"></span>signa <span class="_ _0"></span>o(a) <span class="_ _4"></span>Sr.(a) <span class="_ _0"></span>____<span class="_ _0"></span>_____________________<span class="_ _0"></span>__________________<span class="_ _0"></span>______________________<span class="_ _0"></span>__________, </span></div>
                    <div class="t m0 x6 h6 y3a ff1 fs2 fc0 sc0 ls0 ws0">cargo <span class="_ _2"></span>_________________<span class="_ _0"></span>_____________<span class="_ _0"></span>__________________<span class="_ _0"></span><span class="ls1">______________, <span class="_ _2"> </span>para <span class="_ _3"> </span>atuar</span> <span class="_ _2"></span>como <span class="_ _3"> </span><span class="ff4">SUPERVISOR <span class="_ _2"></span> <span class="_ _3"> </span>DO <span class="_ _5"></span>ES<span class="_ _0"></span>TÁGIO</span> <span class="_ _3"> </span>e <span class="_ _2"></span>o </div>
                    <div class="t m0 x6 h4 y3b ff1 fs2 fc0 sc0 ls0 ws0">Instituto <span class="_ _4"></span>Federal <span class="_ _5"></span>de <span class="_ _0"></span>Educ<span class="_ _0"></span>ação, <span class="_ _4"></span>Ciência <span class="_ _5"></span>e <span class="_ _0"></span>Tecnol<span class="_ _0"></span>ogia <span class="_ _4"></span>Norte <span class="_ _4"></span>de <span class="_ _5"></span>Minas <span class="_ _4"></span>Gerais <span class="_ _5"></span><span class="ff2">–</span> <span class="_ _4"></span>Campus__________________<span class="_ _0"></span>______________, <span class="_ _4"></span>de<span class="_ _0"></span>signa <span class="_ _4"></span>o </div>
                    <div class="t m0 x6 h6 y3c ff1 fs2 fc0 sc0 ls0 ws0">(a) Prof.(a) _________________________<span class="_ _0"></span>______________<span class="_ _0"></span>_________________<span class="_ _0"></span>______, para atuar como <span class="_ _0"></span><span class="ff4">ORIENTADOR  DO ESTÁGIO<span class="_ _0"></span></span>. </div>
                    <div class="t m0 x6 h6 y3d ff4 fs2 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h6 y3e ff4 fs2 fc0 sc0 ls0 ws0">Art. 4º <span class="ff1">Constituem-se motiv<span class="_ _0"></span>os para a </span>INTERRUPÇÃO <span class="_ _0"></span>AUTOMÁTICA<span class="ff1"> do presente <span class="_ _0"></span></span>TERMO DE COMPROMISS<span class="_ _0"></span>O DE ESTÁGIO<span class="ff1">: </span></div>
                    <div class="t m0 x6 h4 y3f ff1 fs2 fc0 sc0 ls0 ws0">a) conclusão do curso, trancamento de m<span class="_ _0"></span>atrícula ou abandono do c<span class="_ _0"></span>urso; </div>
                    <div class="t m0 x6 h6 y40 ff1 fs2 fc0 sc0 ls0 ws0">b) o não cumprimento do convenc<span class="_ _0"></span>ionado neste <span class="ff4">TERMO DE <span class="_ _0"></span>COMPROMISSO DE ES<span class="_ _0"></span>TÁGIO</span>. </div>
                    <div class="t m0 x4 h2 y41 ff3 fs0 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h6 y42 ff4 fs2 fc0 sc0 ls0 ws0">Art. <span class="_ _4"></span>5º<span class="_ _0"></span> <span class="_ _5"></span><span class="ff1">Na <span class="_ _4"></span>vigên<span class="_ _0"></span>cia <span class="_ _5"></span>do <span class="_ _4"></span>presente <span class="_ _5"></span></span>TERMO <span class="_ _5"></span>DE <span class="_ _5"></span>COMPROMISSO <span class="_ _5"></span>DE <span class="_ _5"></span>ESTÁGIO<span class="ff1">, <span class="_ _5"></span>o <span class="_ _4"></span></span>EST<span class="_ _0"></span>AGIÁRIO<span class="ff1"> <span class="_ _5"></span>estará <span class="_ _4"></span>incluído <span class="_ _5"></span>na <span class="_ _5"></span>cobertura <span class="_ _4"></span>d<span class="_ _0"></span>o <span class="_ _5"></span></span>SEGURO </div>
                    <div class="t m0 x6 h6 y43 ff4 fs2 fc0 sc0 ls0 ws0">CONTRA ACIDENTES PESSO<span class="_ _0"></span>AIS<span class="ff1">, proporcionada pela:  </span></div>
                    <div class="t m0 x6 h4 y44 ff1 fs2 fc0 sc0 ls0 ws0">APÓLICE nº:_________________________<span class="_ _0"></span>_________________________<span class="_ _0"></span>____________<span class="_ _0"></span>_______________<span class="_ _0"></span>________________________<span class="_ _0"></span> </div>
                    <div class="t m0 x6 h4 y45 ff1 fs2 fc0 sc0 ls0 ws0">SEGURADORA:______________________<span class="_ _0"></span>_________________<span class="_ _0"></span>__________________________<span class="_ _0"></span>__________________________<span class="_ _0"></span>_______ <span class="_ _0"></span> </div>
                    <div class="t m0 x6 h6 y46 ff4 fs2 fc0 sc0 ls0 ws0">Art. 6º<span class="_ _0"></span> <span class="_ _0"></span><span class="ff1">Assim <span class="_ _0"></span>materializado, <span class="_ _0"></span>documentado <span class="_ _0"></span>e<span class="_ _0"></span> <span class="_ _0"></span>caracterizado, <span class="_ _0"></span>o <span class="_ _0"></span>presente <span class="_ _0"></span>estágio, <span class="_ _0"></span>nã<span class="_ _0"></span>o <span class="_ _0"></span>acarretará <span class="_ _0"></span>vínculo <span class="_ _0"></span>empr<span class="_ _0"></span>egat<span class="_ _0"></span>ício, <span class="_ _0"></span>de <span class="_ _0"></span>qualquer <span class="_ _0"></span>natureza,<span class="_ _0"></span> </span></div>
                    <div class="t m0 x6 h6 y47 ff1 fs2 fc0 sc0 ls0 ws0">entre <span class="ff4">o ESTAGIARIO</span> <span class="ls1">e a </span><span class="ff4">CONC<span class="_ _0"></span>EDENTE</span> nos termos do que dispõem o<span class="_ _0"></span> Art. 3°da Lei Nº 11.788, de 25 de s<span class="_ _0"></span>etembro de 2008.<span class="_ _0"></span> </div>
                    <div class="t m0 x6 h6 y48 ff4 fs2 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h6 y49 ff4 fs2 fc0 sc0 ls0 ws0">Art. 7º <span class="ff1">No desenvolvimento do estágio ora com<span class="_ _0"></span>promissado, caberá à <span class="_ _0"></span></span>INSTITUIÇÃO DE ENSINO<span class="ff1">:<span class="_ _0"></span> </span></div>
                    <div class="t m0 x6 h6 y4a ff1 fs2 fc0 sc0 ls0 ws0">a) exigir do <span class="ff4">ESTAGIÁ<span class="ls7">RIO</span></span> a apre<span class="_ _0"></span>sentação periódica, em prazo nã<span class="_ _0"></span>o superior a 6 (seis) meses, de re<span class="_ _0"></span>latório das atividades;<span class="_ _0"></span> </div>
                    <div class="t m0 x6 h6 y4b ff1 fs2 fc0 sc0 ls0 ws0">b)  comunicar <span class="_ _6"> </span>à  parte<span class="_ _0"></span> <span class="_ _6"> </span><span class="ff4">CONCEDENTE</span>  do <span class="_ _6"> </span>estágio, <span class="_ _6"> </span>por  meio <span class="_ _6"> </span>do <span class="_ _6"> </span><span class="ff4">ESTAGIÁRIO</span>,  as <span class="_ _6"> </span>datas  de <span class="_ _6"> </span>realização <span class="_ _6"> </span>de  avaliações <span class="_ _6"> </span>escolares  ou </div>
                    <div class="t m0 x6 h4 y4c ff1 fs2 fc0 sc0 ls0 ws0">acadêmicas.  </div>
                    <div class="t m0 x6 h4 y4d ff1 fs2 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h6 y4e ff4 fs2 fc0 sc0 ls0 ws0">Art. 8º <span class="ff1">No desenvolviment<span class="_ _0"></span>o do estágio ora compromissado, caberá à <span class="_ _0"></span></span>CONCEDENTE<span class="_ _0"></span><span class="ff1">:</span> </div>
                    <div class="t m0 x6 h6 y4f ff1 fs2 fc0 sc0 ls0 ws0">a) proporcionar ao <span class="ff4">EST<span class="_ _0"></span>AGIÁRIO</span> atividades de aprendizado soc<span class="_ _0"></span>ial, profissional e cultural, compatíveis<span class="_ _0"></span> com o seu curso;<span class="_ _0"></span> </div>
                    <div class="t m0 x6 h6 y50 ff1 fs2 fc0 sc0 ls0 ws0">b) <span class="_ _5"></span>enviar <span class="_ _5"></span>à <span class="_ _2"></span><span class="ff4">INSTITUIÇÃ<span class="_ _0"></span>O <span class="_ _5"></span>DE <span class="_ _5"></span>E<span class="_ _0"></span>NSINO</span>, <span class="_ _5"></span>com<span class="_ _0"></span> <span class="_ _5"></span>periodici<span class="_ _0"></span>dade <span class="_ _5"></span>mínima <span class="_ _2"></span>de <span class="_ _5"></span>6 <span class="_ _2"></span>(seis) <span class="_ _5"></span>meses, <span class="_ _2"></span>relató<span class="_ _0"></span>rio <span class="_ _5"></span>das <span class="_ _2"></span>atividades, <span class="_ _5"></span>com <span class="_ _2"></span>vista <span class="_ _5"></span>obrigat<span class="_ _0"></span>ória <span class="_ _5"></span>ao </div>
                    <div class="t m0 x6 h6 y51 ff4 fs2 fc0 sc0 ls0 ws0">ESTAGIÁRIO<span class="ff1">; </span></div>
                    <div class="t m0 x6 h4 y52 ff1 fs2 fc0 sc0 ls0 ws0">c) fornecer certificado ou declaração de Es<span class="_ _0"></span>tágio constando o período, a c<span class="_ _0"></span>arga horária em que as atividades foram des<span class="_ _0"></span>envolvida<span class="_ _0"></span><span class="ls6">s;</span> </div>
                    <div class="t m0 x6 h4 y53 ff1 fs2 fc0 sc0 ls0 ws0">d) manter a disposição da fisc<span class="_ _0"></span>alização documentos que comprove<span class="_ _0"></span>m a relação de e<span class="_ _0"></span>stágio; </div>
                    <div class="t m0 x6 h4 y54 ff1 fs2 fc0 sc0 ls0 ws0">e) conceder <span class="_ _0"></span>ao estagiário, <span class="_ _0"></span>sempre <span class="_ _0"></span>que o <span class="_ _0"></span>estágio tenha <span class="_ _0"></span>duração ig<span class="_ _0"></span>ual ou <span class="_ _0"></span>superior a <span class="_ _0"></span>1 (um) ano, <span class="_ _0"></span>período <span class="_ _0"></span>de recesso <span class="_ _0"></span>de 30 <span class="_ _0"></span>(trint<span class="_ _0"></span>a) di<span class="_ _0"></span>as, a <span class="_ _0"></span>ser </div>
                    <div class="t m0 x6 h4 y55 ff1 fs2 fc0 sc0 ls0 ws0">gozado preferencialmente durant<span class="_ _0"></span>e o período de suas férias es<span class="_ _0"></span>colares. </div>
                    <div class="t m0 x6 h6 y56 ff4 fs2 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h6 y57 ff4 fs2 fc0 sc0 ls0 ws0">Art. <span class="ff1 ls1">9º<span class="ls0"> No desenvolvimento do e<span class="_ _0"></span>stágio ora compromissado, caberá ao <span class="_ _0"></span></span></span>ESTAGIÁRIO<span class="ff1">:</span> </div>
                    <div class="t m0 x6 h4 y58 ff1 fs2 fc0 sc0 ls0 ws0">a) cumprir com todo o empenho <span class="_ _0"></span>e interesse toda a programação e<span class="_ _0"></span>stabelecida para o estágio;<span class="_ _0"></span> </div>
                    <div class="t m0 x6 h6 y59 ff1 fs2 fc0 sc0 ls0 ws0">b) <span class="_ _7"> </span>cumprir <span class="_ _7"> </span>as <span class="_ _7"> </span>normas <span class="_ _7"> </span>e <span class="_ _8"> </span>regulamentos <span class="_ _7"> </span>da <span class="_ _8"> </span><span class="ff4">CONCEDENTE</span>, <span class="_ _8"> </span>quando <span class="_ _7"> </span>lhe <span class="_ _7"> </span>forem <span class="_ _7"> </span>informados.<span class="_ _0"></span> <span class="_ _7"> </span>Pela <span class="_ _7"> </span>inobservância <span class="_ _7"> </span>des<span class="_ _0"></span>sas <span class="_ _7"> </span>normas <span class="_ _7"> </span>e </div>
                    <div class="t m0 x6 h6 y5a ff1 fs2 fc0 sc0 ls0 ws0">regulamentos, o <span class="ff4">EST<span class="_ _0"></span>AGIÁRIO</span> poderá responder por perdas e dano<span class="_ _0"></span>s; </div>
                    <div class="t m0 x6 h6 y5b ff1 fs2 fc0 sc0 ls0 ws0">c) elaborar e entregar relatório das<span class="_ _0"></span> atividades à <span class="ff4">CONCEDE<span class="_ _0"></span>NTE</span>, quando esta o exigir;<span class="_ _0"></span> </div>
                    <div class="t m0 x6 h6 y5c ff1 fs2 fc0 sc0 ls0 ws0">d) apresentar relatório das atividades<span class="_ _0"></span> periodicamente à <span class="ff4">INSTI<span class="_ _0"></span>TUIÇÃO DE ENSINO</span>,<span class="_ _0"></span> em prazo não superior a 6 (sei<span class="_ _0"></span>s) meses; </div>
                    <div class="t m0 x6 h4 y5d ff1 fs2 fc0 sc0 ls0 ws0"> </div>
                    <div class="t m0 x6 h6 y5e ff4 fs2 fc0 sc0 ls0 ws0">Art. <span class="_ _0"></span>10 <span class="_ _4"></span><span class="ff1">De <span class="_ _4"></span>comum <span class="_ _4"></span>acordo, <span class="_ _4"></span>as <span class="_ _4"></span>partes <span class="_ _4"></span>elegem <span class="_ _4"></span>o <span class="_ _4"></span>foro <span class="_ _4"></span>da <span class="_ _4"></span>Justiça <span class="_ _4"></span>Federal <span class="_ _4"></span>da <span class="_ _4"></span>Seção <span class="_ _4"></span>Judiciária <span class="_ _4"></span>de <span class="_ _4"></span>Minas <span class="_ _4"></span>Gerais <span class="_ _4"></span>da <span class="_ _4"></span>cidade <span class="_ _4"></span>de <span class="_ _0"></span>Montes<span class="_ _0"></span> <span class="_ _4"></span>Claros, </span></div>
                    <div class="t m0 x6 h6 y5f ff1 fs2 fc0 sc0 ls0 ws0">renunciando, <span class="_ _0"></span>desde <span class="_ _0"></span>l<span class="_ _0"></span>ogo, <span class="_ _0"></span>a <span class="_ _0"></span>qualquer <span class="_ _0"></span>outro, <span class="_ _4"></span>por <span class="_ _0"></span>mais <span class="_ _0"></span>privilegiado <span class="_ _4"></span>que <span class="_ _0"></span>seja, <span class="_ _0"></span>para <span class="_ _0"></span>dirimi<span class="_ _0"></span>r <span class="_ _0"></span>qualquer <span class="_ _0"></span>questão <span class="_ _0"></span>que <span class="_ _4"></span>se <span class="_ _0"></span>ori<span class="_ _0"></span>ginar <span class="_ _0"></span>deste <span class="_ _4"></span><span class="ff4">TERMO <span class="_ _0"></span>DE </span></div>
                    <div class="t m0 x6 h6 y60 ff4 fs2 fc0 sc0 ls0 ws0">COMPROMISSO DE ESTÁGIO<span class="ff1"> <span class="_ _0"></span><span class="ls1">e que não possa ser resolvida amigavelmente.<span class="_ _0"></span></span> </span></div>
                    <div class="t m0 x6 h6 y61 ff1 fs2 fc0 sc0 ls0 ws0">E, <span class="_ _2"></span>por <span class="_ _3"> </span>estarem <span class="_ _2"> </span>de <span class="_ _3"> </span>inteiro <span class="_ _2"> </span>e <span class="_ _3"> </span>comum <span class="_ _3"> </span>acordo <span class="_ _2"></span>com <span class="_ _3"> </span>as <span class="_ _2"> </span>condi<span class="_ _0"></span>ções <span class="_ _2"> </span>e <span class="_ _3"> </span>dizeres <span class="_ _2"> </span>des<span class="_ _0"></span>te <span class="_ _3"> </span><span class="ff4">TERMO <span class="_ _3"> </span>DE <span class="_ _2"></span>COMPROMISS<span class="_ _0"></span>O <span class="_ _2"></span>DE <span class="_ _3"> </span>ESTÁGIO</span>, <span class="_ _3"> </span>as <span class="_ _2"></span>partes </div>
                    <div class="t m0 x6 h4 y62 ff1 fs2 fc0 sc0 ls0 ws0">assinam em 03 (três) vias de i<span class="_ _0"></span>gual teor e forma. </div>
                    <div class="t m0 x7 h4 y63 ff1 fs2 fc0 sc0 ls1 ws0">___________________________________<span class="_ _0"></span>________________ (MG.), ________ <span class="_ _0"></span>de ________________________de _______<span class="_ _0"></span>____.<span class="ls0"> </span></div>
                    <div class="t m0 x4 h4 y64 ff1 fs2 fc0 sc0 ls0 ws0"> </div>
                    <div class="c x4 y65 w2 h9">
                        <div class="t m0 x8 h6 y66 ff4 fs2 fc0 sc0 ls0 ws0">Nome: </div>
                    </div>
                    <div class="c x4 y65 w2 ha">
                        <div class="t m0 x9 h6 y67 ff4 fs2 fc0 sc0 ls0 ws0">CONCEDENTE </div>
                        <div class="t m0 xa h6 y68 ff4 fs2 fc0 sc0 ls0 ws0">(Carimbo) </div>
                    </div>
                    <div class="c xb y65 w3 h9">
                        <div class="t m0 x8 h6 y66 ff4 fs2 fc0 sc0 ls0 ws0"> </div>
                    </div>
                    <div class="c xc y65 w4 h9">
                        <div class="t m0 x8 h6 y66 ff4 fs2 fc0 sc0 ls0 ws0">Instituto Federal de Educação, <span class="_ _0"></span>Ciência e Tecnologia do </div>
                        <div class="t m0 x8 h6 y67 ff4 fs2 fc0 sc0 ls0 ws0">Norte de Minas Gerais <span class="ff8">–</span> <span class="ff7">Cam<span class="_ _0"></span>pus <span class="ff1 ls1">_____________________<span class="_ _0"></span></span></span> </div>
                    </div>
                    <div class="c xc y65 w4 ha">
                        <div class="t m0 xd h6 y68 ff4 fs2 fc0 sc0 ls0 ws0">INSTITUIÇÃO<span class="fs5"> </span><span class="ls4">DE</span><span class="fs5"> </span>ENSINO </div>
                        <div class="t m0 xa h6 y69 ff4 fs2 fc0 sc0 ls0 ws0">(Carimbo) </div>
                        <div class="t m0 xe h6 y6a ff4 fs2 fc0 sc0 ls0 ws0"> </div>
                    </div>
                    <div class="c x4 y6b w2 hb">
                        <div class="t m0 x8 h4 y6c ff1 fs2 fc0 sc0 ls0 ws0"> <span class="_ _9"> </span> </div>
                    </div>
                    <div class="c xb y6b w3 hb">
                        <div class="t m0 x8 h6 y6c ff4 fs2 fc0 sc0 ls0 ws0"> </div>
                    </div>
                    <div class="c xc y6b w4 hb">
                        <div class="t m0 xe h6 y6c ff4 fs2 fc0 sc0 ls0 ws0"> </div>
                    </div>
                    <div class="c x4 y6d w2 hc">
                        <div class="t m0 x8 h6 y6e ff4 fs2 fc0 sc0 ls0 ws0">Nome: </div>
                        <div class="t m0 xf h6 y6f ff4 fs2 fc0 sc0 ls0 ws0">ESTAGIÁRIO </div>
                    </div>
                    <div class="c xb y6d w3 hc">
                        <div class="t m0 x8 h6 y6e ff4 fs2 fc0 sc0 ls0 ws0"> </div>
                    </div>
                    <div class="c xc y6d w4 hc">
                        <div class="t m0 x8 h6 y6e ff4 fs2 fc0 sc0 ls0 ws0">Nome: </div>
                        <div class="t m0 x10 h6 y6f ff4 fs2 fc0 sc0 ls0 ws0">PAI ou RESPONSÁVEL </div>
                        <div class="t m0 x8 h6 y70 ff4 fs2 fc0 sc0 ls7 ws0">RG<span class="ff1 ls0">:__________<span class="ls1">_____________<span class="_ _0"></span>_______________________<span class="_ _0"></span></span> </span></div>
                        <div class="t m0 x8 h4 y71 ff1 fs2 fc0 sc0 ls0 ws0"> </div>
                        <div class="t m0 x8 h6 y72 ff4 fs2 fc0 sc0 ls0 ws0">Orgão Emissor: <span class="ff1 ls1">______________________<span class="_ _0"></span>______________<span class="_ _0"></span></span> </div>
                    </div>
                    <div class="t m0 x4 h2 y73 ff1 fs0 fc0 sc0 ls0 ws0"> </div>
                </div>
                <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
            </div>
        </div>
        <div class="loading-indicator">
        </div>
    </body>
</html>