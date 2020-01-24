<!DOCTYPE html>
<html>
    <head>
<style type="text/css">
    *{font-family:Arial;font-size:12px;}
    body{margin:0px 71px 71px 71px;}
    table{font-size:12px;padding-top:2px;padding-bottom:2px;width: 100%;border-collapse:collapse}
    td{border: 1px solid #000;height: 17px;}
    td.fundo{background-color:#BBB;height: 12px;}
    h1{text-align: center;font-size:18px;margin:0px;font-family:Arial;}
    p{margin:10px 0px 0px 0px;font-family:Arial;}
    .col07{width:7%}.col10{width:10%;}.col20{width:20%;}.col30{width:30%;}.col33{width:33%;}.col40{width:40%;}
    .col50{width:50%;}.col60{width:60%;}.col70{width:70%;}.col80{width:80%;}.col90{width:90%;}.col99{width:99%;}
    .memo{height: 100px;text-align: justify; white-space: normal; padding: 5px 10px 5px 10px;vertical-align: text-top;}
    .img_left {margin:0px; opacity: 0.5;}
    .img_right{margin:0px; opacity: 0.5;width:220px;}
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
        h1{font-size:18px;}
        h2,h3{font-size:11px;}
    }
    div.onepage {page-break-after: always;}
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
                <th class="borda_SEM"><img src="min_faz.png" class="img_left"></th>
                <th class="borda_SEM"><img src="rec_fed.jpg" class="img_right"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2" class="col99 borda_SEM" >
                    
                    <h1>ANEXO V</h1>
                    <h1>REQUERIMENTO DE PRORROGAÇÃO DO REPETRO-SPED (RPR)</h1>
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
                    <p>2. INFORMAÇÕES SOBRE O PEDIDO</p>
                    <table>
                        <tr>
                            <td class="fundo col33" align="center">Nº do processo administrativo</td>
                            <td class="fundo col33" align="center">Fundamentação do pedido (indicação do dispositivo normativo)</td>
                            <td class="fundo col33" align="center">Data final solicitada (dd-mm-aaaa)</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    
                    <p>3. FINALIDADE DO REQUERIMENTO</p>
                    <table>
                        <tr>
                            <td style="line-height: 30px;">
                            <?php echo $box?>Prorrogação de prazo de bem principal (IN RFB 1.781/17, art. 21)</br>
                            <?php echo $box?>Mudança de Finalidade (IN RFB 1.781/17, art. 22)</br>
                            <?php echo $box_checked?>Nova admissão por Substituição de Beneficiário (IN RFB 1.781/17, art. 24, I)
                            </td>
                        </tr>
                    </table>
                    <p>4. FINALIDADE DA PRORROGAÇÃO (na hipótese do art. 21 da IN RFB 1.781/17)</p>
                    <table>
                        <tr><td colspan="2" class="borda_TS_LS_RS"><?php echo $box?>Formalização de aditivo contratual de importação temporária (art. 21, § 3º)</td></tr>
                        <tr><td colspan="2" class="borda_LS_RS"><?php echo $box?>Novo contrato de importação temporária (art. 21, § 3º)</td></tr>
                        <tr><td colspan="2" class="borda_LS_RS"><?php echo $box?>Mudança de proprietário no exterior (art. 21, § 3º)</td></tr>
                        <tr><td colspan="2" class="borda_LS_RS"><?php echo $box?>Formalização de aditivo contratual de prestação de serviços sem alteração de finalidade (art. 21, § 4º)</td></tr>
                        <tr><td colspan="2" class="borda_LS_RS"><?php echo $box?>Formalização de novo contrato de prestação de serviços sem alteração de finalidade (art. 21, § 4º)</td></tr>
                        <tr><td colspan="2" class="borda_LS_RS"><?php echo $box?>Formalização de aditivo contratual de afretamento por tempo sem alteração de finalidade (art. 21, § 4º)</td></tr>
                        <tr><td colspan="2" class="borda_LS_RS"><?php echo $box?>Formalização de novo contrato de afretamento por tempo sem alteração de finalidade (art. 21, § 4º)</td></tr>
                        <tr><td colspan="2" class="borda_LS_RS"><?php echo $box?>Mudança de enquadramento de pagamento proporcional para dispensa de pagamento proporcional (art. 21, § 5º)</td></tr>
                        <tr><td colspan="2" class="borda_BS_LS_RS"><?php echo $box?>Mudança de enquadramento de dispensa de pagamento proporcional para pagamento proporcional (art. 21, § 6º)</td></tr>
                    </table>
                     
                    <p>5. DADOS DA HABILITAÇÃO (IN RFB 1.781/17, art. 14, VII) (Dispensado para Repetro-Sped com pagamento proporcional)</p>
                    <table>
                        <tr>
                            <td class="fundo col40">Número do processo administrativo da Habilitação</td>
                            <td class="fundo col30">Data de início da Habilitação</td>
                            <td class="fundo">Data de término da Habilitação</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    
                    <p>6. INFORMAÇÕES SOBRE A IMPORTAÇÃO DO BEM PRINCIPAL</p>
                    <table>
                        <tr>
                            <td class="fundo col50" align="center">Número do processo administrativo da Habilitação</td>
                            <td class="fundo col50" align="center">Data de início da Habilitação</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        
                        </tr>
                    </table>
                    
                    <p>7. DADOS DO CONTRATO DE IMPORTAÇÃO (IN RFB 1.781/17, art. 14, § 1º, inciso V)</p>
                    <table>
                        <tr>
                            <td class="fundo col40">N° do contrato / aditivo</td>
                            <td class="fundo col30">Data de início do contrato</td>
                            <td class="fundo">Data de término do contrato</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="fundo">Nome da empresa estrangeira proprietária do bem</td>
                            <td class="fundo" colspan="2">Endereço completo da empresa estrangeira</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td class="fundo col50 borda_BS_LS_RS" align="center">
                                            Valor total das contraprestações do contrato de importação,
                                            ajustados a valor presente pela taxa Libor em R$ (Reais)
                                            (IN 1.781/17, art. 3º, § 4º, inciso I)
                            </td>
                            <td class="fundo col50 borda_BS_LS_RS" align="center">
                                            Valor total dos bens admitidos em R$ (Reais)
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    <div class="onepage"></div>
                    <table>
                        <tr>
                            <td class="fundo" colspan="3" align="center">Informações Complementares</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="borda_TS_LS_RS">
                            <?php echo $box?>A Operadora é a responsável pelo pagamento das parcelas relativas à locação, cessão, disponibilização, arrendamento ou afretamento a casco nu do bem?
                            <?php echo $box?> Sim    <?php echo $box?> Não
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="borda_BS_LS_RS">
                            <?php echo $box?>A Declaração de Importação está sendo registrada pela Operadora ou por Conta e Ordem desta?
                            <?php echo $box?> Sim    <?php echo $box?> Não
                            </td>
                        </tr>
                    </table>
            
                    
                    <p>8. DADOS DO CONTRATO DE AFRETAMENTO POR TEMPO OU DE SERVIÇOS (IN RFB 1.781/17, art. 14, § 2º)</p>
                    <table>
                        <tr>
                            <td class="fundo col33">Número do processo administrativo dos contratos, aditivos, anexos e outros (IN 1.781/17, art. 14, VII)</td>
                            <td class="fundo col33">Data de início do contrato</td>
                            <td class="fundo">Data de término do contrato</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="fundo">Valor total do afretamento (R$)</td>
                            <td class="fundo">Valor total da prestação de serviços (R$)</td>
                            <td class="fundo">Valor total de outras parcelas R$)</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="fundo" colspan="3">Informações Complementares</td>
                        </tr>
                        <tr>
                            <td colspan="3"  class="borda_TS_LS_RS">
                                 <?php echo $box?>Este contrato de prestação de serviços é por empreitada global consoante o artigo 10, § 4º, inciso III, alínea ?b? da IN RFB 1.781/17?
                                 <?php echo $box?> Sim    <?php echo $box?> Não</li>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"  class="borda_BS_LS_RS">
                                <?php echo $box?>O beneficiário possui algum contrato de prestação de serviços que não seja por empreitada global sendo utilizado atualmente em Repetro ou Repetro-Sped?
                                <?php echo $box?> Sim    <?php echo $box?> Não</li>
                            </td>
                        </tr>
                    </table>
                    <p>9. RELAÇÃO DE BENS (Colunas B e C: informação obrigatória somente para Contratos diferentes de Empreitada Global)</p>
                    <table>
                        <tr>
                            <td class="fundo col07">Nº Seq</td>
                            <td class="fundo col33">A - Descrição dos bens</td>
                            <td class="fundo col20">B - Número Individualizador do Bem</td>
                            <td class="fundo col20">C - Valor Unitário (R$) Mensal da Locação do Bem</td>
                            <td class="fundo col20">D - Valor Unitário (R$) do Bem</td>
                        </tr>
                        <?php for ($l=0; $l<7; $l++){ ?>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td class="fundo">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="fundo" colspan="2">TOTAL ACUMULADO</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    <p>10. OUTRAS OBSERVAÇÕES RELEVANTES</p>
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
                    <p>11. IDENTIFICAÇÃO DO RESPONSÁVEL / REPRESENTANTE LEGAL</p>
                    <table>
                        <tr>
                            <td class="fundo col50">Nome do signatário</td>
                            <td class="fundo col50">CPF</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="fundo">Correio eletrônico (e-mail)</td>
                            <td class="fundo">Telefones de contato</td>
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
                    <p>Declaro que as informações acima são verdadeiras e completas, caso contrário estou ciente de que
                        estarei sujeito às penalidades previstas na legislação criminal e tributária, relativas à falsidade
                        ideológica (art. 299 do Decreto nº 2.848, de 7 de dezembro de 1940 - Código Penal) e ao crime
                        contra a ordem tributária (art. 1º da Lei nº 8.137, de 27 de dezembro de 1990).</p>
                    
                        <p>12. ASSINATURA DA REQUERENTE / LOCAL E DATA</p>
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