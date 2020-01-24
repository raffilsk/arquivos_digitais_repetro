<!DOCTYPE html>
<html>
    <head>
<style type="text/css">
    *{font-family:Arial;font-size:12px;}
    body{margin:0px 71px 71px 71px;}
    table{font-size:12px;padding-top:2px;padding-bottom:2px;width: 100%;border-collapse:collapse}
    td{border: 1px solid #000;height: 20px;}
    td.fundo{background-color:#BBB;height: 12px;}
    h1{text-align: center;font-size:18px;margin:0px;font-family:Arial;}
    p{margin:10px 0px 0px 0px;font-family:Arial;}
    .col07{width:7%}.col10{width:10%;}.col20{width:20%;}.col30{width:30%;}.col33{width:33%;}.col40{width:40%;}
    .col50{width:50%;}.col60{width:60%;}.col70{width:70%;}.col80{width:80%;}.col90{width:90%;}.col99{width:99%;}
    .memo{height: 100px;text-align: justify; white-space: normal; padding: 5px 10px 5px 10px;vertical-align: text-top;}
    .img_left {margin:0px; opacity: 0.5;}
    .img_right{margin:0px; opacity: 0.5; width:220px;}
    .borda_SEM{border: 0px solid red;}
    .borda_TS {
        border-top-width: 1px;
        border-top-style: solid;
        border-top-color: #000000;
        border-bottom-width: 0px;
        border-left-width: 0px;
        border-right-width: 0px;
    }
    .borda_BS {
        border-bottom-width: 1px;
        border-bottom-style: solid;
        border-bottom-color: #000000;
        border-top-width: 0px;
        border-left-width: 0px;
        border-right-width: 0px;
    }
    .borda_TS_BS {
        border-top-width: 1px;
        border-top-style: solid;
        border-top-color: #000000;
        border-bottom-width: 1px;
        border-bottom-style: solid;
        border-bottom-color: #000000;
        border-left-width: 0px;
        border-right-width: 0px;
    }
    .borda_TS_BS_LS {
        border-top-style: solid;
        border-top-width: 1px;
        border-top-color: #000000;
        border-bottom-width: 1px;
        border-bottom-style: solid;
        border-bottom-color: #000000;
        border-left-width: 1px;
        border-left-style: solid;
        border-left-color: #000000;
        border-right-width: 0px;
    }
    .borda_TS_BS_RS {
        border-top-style: solid;
        border-top-width: 1px;
        border-top-color: #000000;
        border-bottom-width: 1px;
        border-bottom-style: solid;
        border-bottom-color: #000000;
        border-right-style: solid;
        border-right-width: 1px;
        border-right-color: #000000;
        border-left-width: 0px;
    }
    .borda_TS_LS {
        border-top-style: solid;
        border-top-width: 1px;
        border-top-color: #000000;
        border-left-width: 1px;
        border-left-style: solid;
        border-left-color: #000000;
        border-bottom-width: 0px;
        border-right-width: 0px;
    }
    .borda_TS_RS {
        border-top-style: solid;
        border-top-width: 1px;
        border-top-color: #000000;
        border-right-style: solid;
        border-right-width: 1px;
        border-right-color: #000000;
        border-bottom-width: 0px;
        border-left-width: 0px;
    }
    .borda_TS_LS_RS {
        border-top-style: solid;
        border-top-width: 1px;
        border-top-color: #000000;
        border-left-width: 1px;
        border-left-style: solid;
        border-left-color: #000000;
        border-right-style: solid;
        border-right-width: 1px;
        border-right-color: #000000;
        border-bottom-width: 0px;
    }
    .borda_BS_LS {
        border-bottom-width: 1px;
        border-bottom-style: solid;
        border-bottom-color: #000000;
        border-left-width: 1px;
        border-left-style: solid;
        border-left-color: #000000;
        border-top-width: 0px;
        border-right-width: 0px;
    }
    .borda_BS_RS {
        border-bottom-width: 1px;
        border-bottom-style: solid;
        border-bottom-color: #000000;
        border-right-style: solid;
        border-right-width: 1px;
        border-right-color: #000000;
        border-top-width: 0px;
        border-left-width: 0px;
    }
    .borda_BS_LS_RS {
        border-bottom-width: 1px;
        border-bottom-style: solid;
        border-bottom-color: #000000;
        border-left-width: 1px;
        border-left-style: solid;
        border-left-color: #000000;
        border-right-style: solid;
        border-right-width: 1px;
        border-right-color: #000000;
        border-top-width: 0px;
    }
    .borda_LS {
        border-left-width: 1px;
        border-left-style: solid;
        border-left-color: #000000;
        border-top-width: 0px;
        border-bottom-width: 0px;
        border-right-width: 0px;
    }
    .borda_RS {
        border-right-style: solid;
        border-right-width: 1px;
        border-right-color: #000000;
        border-top-width: 0px;
        border-bottom-width: 0px;
        border-left-width: 0px;
    }
    .borda_LS_RS {
        border-left-width: 1px;
        border-left-style: solid;
        border-left-color: #000000;
        border-right-style: solid;
        border-right-width: 1px;
        border-right-color: #000000;
        border-top-width: 0px;
        border-bottom-width: 0px;
    }
    .borda_TS_BS_LS_RS {
        border-top-style: solid;
        border-top-width: 1px;
        border-top-color: #000000;
        border-bottom-width: 1px;
        border-bottom-style: solid;
        border-bottom-color: #000000;
        border-left-width: 1px;
        border-left-style: solid;
        border-left-color: #000000;
        border-right-style: solid;
        border-right-width: 1px;
        border-right-color: #000000;
    }
    @media print{   
        *{font-size:11px;}
        body{margin:0px auto;}
        table td{font-size:11px;white-space:normal}
        td{height: 30px;}
        h1{font-size:18px;}
        h2,h3{font-size:11px;}
    }
</style>
    </head>
<?php
     $box         = "<span style='font-size: medium;'>&#9744; </span>";
     $box_x       = "<span style='font-size: medium;'>&#9746; </span>";
     $box_checked = "<span style='font-size: medium;'>&#9745; </span>";
     function fn_space($x)
      {
        for($y=0; $y < $x; $y++){echo '&nbsp;';}
      }
?>
<body>
    <table>
        <thead>
            <tr>
                <th><img src="min_faz.png" class="img_left"></th>
                <th><img src="rec_fed.jpg" class="img_right"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2" class="col99 borda_SEM" >
                    <h1>ANEXO IX - TERMO DE RESPONSABILIDADE</h1>
                    <p>1. IDENTIFICAÇÃO DO BENEFICIÁRIO DO REGIME</p>
                    <table>
                        <tr>
                            <td class="fundo col70">Razão social</td>
                            <td class="fundo">CNPJ</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="fundo col70">Endereço</td>
                            <td class="fundo">Telefone</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    <p>2. IDENTIFICAÇÃO DO RESPONSÁVEL / REPRESENTANTE LEGAL</p>
                    <table>
                        <tr>
                            <td class="fundo col50" align="center">Nome do signatário</td>
                            <td class="fundo col50" align="center">CPF</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="fundo col50" align="center">Correio eletrônico (e-mail)</td>
                            <td class="fundo col50" align="center">Telefones de contato</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="fundo">Cargo do signatário</td>
                            <td class="fundo">Qualificação</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><?php               echo $box?>Responsável legal
                                <?php fn_space(10); echo $box;?>Representante
                            </td>
                        </tr>
                    </table>
                    <p>3. FINALIDADE DO REQUERIMENTO</p>
                    <table>
                        <tr>
                            <td class="fundo">Imposto de Importação (R$)</td>
                            <td class="fundo">IPI-Vinculado à Importação (R$)</td>
                            <td class="fundo">PIS/Pasep- Importação (R$)</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="fundo">Cofins-Importação (R$)</td>
                            <td class="fundo">AFRMM (R$) (importação pela via marítima)</td>
                            <td class="fundo">Total dos Tributos (R$)</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    <p>4. OUTRAS OBSERVAÇÕES RELEVANTES</p>
                    <table>
                        <tr>
                            <td class="memo">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap
                                            into electronic typesetting, remaining essentially unchanged. It was popularised
                                            in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                            and more recently with desktop publishing software like Aldus PageMaker including
                                            versions of Lorem Ipsum.
                            </td> 
                        </tr>         
                    </table>
                    <p>5. DECLARAÇÃO DO BENEFICIÁRIO DO REGIME</p>
                    <table>
                        <tr>
                            <td class="memo">Declaro que as informações acima são verdadeiras e completas, caso contrário estou
                            ciente de que estarei sujeito às penalidades previstas na legislação criminal e tributária, relativas
                            à falsidade ideológica (art. 299 do Decreto nº 2.848, de 7 de dezembro de 1940 - Código Penal) e ao
                            crime contra a ordem tributária (art. 1º da Lei nº 8.137, de 27 de dezembro de 1990).</br>
                            Declaro ainda assumir inteira responsabilidade pelo integral cumprimento das obrigações decorrentes da
                            aplicação do regime aduaneiro especial aos bens constantes da presente declaração de importação,
                            comprometendo-me a recolher aos cofres públicos o valor total dos tributos e contribuições federais
                            suspensos, em caso de descumprimento das regras estabelecidas para o regime.</br>        
                            Este termo de responsabilidade, que está subscrito pelo preposto/responsável legal responsável pela pessoa
                            jurídica beneficiária do regime, mediante mandato com cláusula específica para subscrevê-lo, e é válido
                            enquanto não extinto o regime aduaneiro especial e abrange o período de concessão inicial e todos os períodos
                            de prorrogação eventualmente obtidos.
                            </td> 
                        </tr>         
                    </table>
                    <p>6. ASSINATURA DA REQUERENTE / LOCAL E DATA</p>
                    <table>
                        <tr>
                                <td class="fundo col50">Assinatura do Responsável ou Representante Legal</td>
                                <td class="fundo col50">Local e Data</td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                        </tr>
                    </table>
                    <p>(Modelo aprovado pela Portaria Coana nº 40, de 25 de junho de 2018 – IN RFB nº 1.781/2017, art. 41, inciso I)</p>
                </td>
            </tr>
        </tbody>
    </table> 
</body>
</html>