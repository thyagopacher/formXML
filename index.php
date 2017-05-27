<?php
$areas = array('Ações do Inmetro', 'Assessoria de Imprensa', 'Comercio Exterior', 'Elogio', 'Informação',
    'Patrocínios/Parcerias/Doações', 'Pró-Campo', 'Produtor Rural', 'Reclamação',
    'Representação Comercial', 'Solicitação', 'Sugestões');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
                text-align: center;
                background: rgba(237, 28, 36, 0.81);
                border: 0;
            }

            .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover{
                background-color: #be0c0c;
            }

            .navbar-inverse .navbar-nav>li>a{
                color: white;
            }

            /* Add a gray background color and some padding to the footer */
            footer {
                background-color: rgba(237, 28, 36, 0.81);
                padding: 25px;
                color: white;
            }
            footer li a{
                color: white;
            }
            footer li{
                list-style-type: none;
            }
            footer span{
                font-weight: bold;
                color: #f18309;                
            }
            .btn-default{
                background: #f18309;
                color: white;
            }

            .quadroDiv{
                border-bottom: 1px solid rgba(128,128,128,.58);
                padding-bottom: 45px;
                padding-top: 45px;
            }
            .quadroDivFinal{
                margin-top: 25px;
            }
            input, select, textarea{
                background: #F1F1F1 !important;
                text-transform: uppercase;
            }
            .form-group p{
                font-size: 12px;
                text-align: left;
            }
        </style>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="myNavbar">
                    <div class="col-md-3"></div>
                    <ul class="col-md-6 nav navbar-nav">
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/quem-somos">A Piracanjuba</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtos">Produtos</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/receitas">Receitas</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/dicas-de-nutricao">Dicas de Nutrição</a></li>
                        <li class="active"><a href="#">Fale conosco</a></li>
                    </ul>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </nav>

        <div class="jumbotron">
            <div class="container text-center">
                <h1>Fale Conosco</h1>
                <p>Gostamos de fazer bem o que te faz bem</p>
            </div>
        </div>

        <div class="jumbotron">
            <div class="container text-center">
                <h2>Serviço de Atendimento ao Consumidor</h2>
                <p>Telefone para contato</p>
                <h3>0800 722 1718</h3>
                <p>
                    De segunda a sexta feita das 08h às 18h, exceto feriados e finais de semana.
                </p>
            </div>
        </div>

        <div class="container-fluid bg-3 text-center">
            <p>
                Está com dúvidas? Tem alguma sugestão?<br>
                Fale Conosco! Se preferir, fique à vontade em consultar o nosso perguntas frequentes.<br><br>
                Os dados assinalados com * são de preenchimento obrigatório.<br>
            </p>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="EnviaContato.php" method="post" name="fcontato" id="fcontato">
                        <div class="col-md-12 quadroDiv">
                            <div class="col-md-2"></div>
                            <div class="form-group col-md-8">
                                <!--                                <label for="area">Área</label>-->
                                <select class="form-control" name="area" id="area" required>
                                    <option value="">Assunto</option>
                                    <?php
                                    foreach ($areas as $key => $area) {
                                        echo '<option value="', $area, '">', $area, '</option>';
                                    }
                                    ?>
                                </select>
                            </div>  
                            <div class="col-md-2"></div>
                        </div>

                        <div class="col-md-12 quadroDiv">
                            <div class="form-group col-md-9">
                                <label for="nome">Nome</label>
                                <input type="nome" class="form-control" name="nome" id="nome" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="sexo">Sexo</label>
                                <select name="sexo" class="form-control" name="sexo" id="sexo">
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nascimento">Dt. Nascimento</label>
                                <input type="date" class="form-control" name="nascimento" id="nascimento">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="estadocivil">Estado Civil</label>
                                <select name="estadocivil" class="form-control" name="estadocivil" id="estadocivil">
                                    <option value="Casado(a)">Casado(a)</option>
                                    <option value="Solteiro(a)">Solteiro(a)</option>
                                    <option value="Separado(a)">Separado(a)</option>
                                    <option value="Divorciado(a)">Divorciado(a)</option>
                                    <option value="Viuvo(a)">Viuvo(a)</option>
                                    <option value="Outros">Outros</option>
                                </select>
                            </div>                        
                            <div class="form-group col-md-4">
                                <label for="cpf">CPF</label>
                                <input type="cpf" class="form-control cpf" name="cpf" id="cpf">
                            </div>                            
                        </div>

                        <div class="col-md-12 quadroDiv">
                            <div class="form-group col-md-6">
                                <label for="celular">Celular</label>
                                <input type="celular" class="form-control celular" name="celular" id="celular">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telefone">Fixo</label>
                                <input type="text" class="form-control telefone" name="telefone" id="telefone">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="email">E-mail:</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>                               
                        </div>

                        <div class="col-md-12 quadroDiv">
                            <div class="form-group col-md-3">
                                <label for="cep">Cep</label>
                                <input type="text" class="form-control cep" name="cep" id="cep" maxlength="8">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" name="endereco" id="endereco">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="numero">Número</label>
                                <input type="text" class="form-control" name="numero" id="numero" maxlength="10">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="complemento">Complemento</label>
                                <input type="text" class="form-control" name="complemento" id="complemento">
                            </div>                        
                            <div class="form-group col-md-6">
                                <label for="bairro">Bairro</label>
                                <input type="text" class="form-control" name="bairro" id="bairro">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" name="cidade" id="cidade">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control" name="estado" id="estado">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="pais">Pais</label>
                                <input type="text" class="form-control" name="pais" id="pais">
                            </div>                            
                        </div>
                        <div class="col-md-12 quadroDiv produto">
                            <div class="form-group produto col-md-6">
                                <label for="produto">Produto</label>
                                <select class="form-control" name="produto" id="produto">
                                    <option value="">* Produto:</option>
                                    <option value="Bebidas com cereais">Bebidas com cereais</option>
                                    <option value="Composto lácteo">Composto lácteo</option>
                                    <option value="Creme de leite">Creme de leite</option>
                                    <option value="Creme de Leite Bate Chantilly">Creme de Leite Bate Chantilly</option>
                                    <option value="Leite Condensado">Leite Condensado</option>
                                    <option value="Leite em pó">Leite em pó</option>
                                    <option value="Leites UHT">Leites UHT</option>
                                    <option value="Pirakids">Pirakids</option>
                                    <option value="Produtos Zero Lactose">Produtos Zero Lactose</option>
                                    <option value="Refrigerados">Refrigerados</option>
                                </select>
                            </div>
                            <div class="form-group produto col-md-3">
                                <label for="datafabricacao">Data de fabricação</label>
                                <input type="date" class="form-control" name="datafabricacao" id="datafabricacao">
                            </div>
                            <div class="form-group produto col-md-3">
                                <label for="datavalidade">Data de validade</label>
                                <input type="date" class="form-control" name="datavalidade" id="datavalidade">
                            </div>
                            <div class="form-group produto col-md-12">
                                <label for="lote">Lote</label>
                                <input type="text" class="form-control" name="lote" id="lote">
                            </div>                            
                        </div>

                        <div class="col-md-12 quadroDivFinal">
                            <div class="form-group col-md-12">
                                <label for="assunto">Assunto</label>
                                <input type="text" class="form-control" name="assunto" id="assunto">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="assunto">Mensagem</label>
                                <textarea class="form-control" name="mensagem" id="mensagem"></textarea>
                            </div>   
                            <div class="checkbox">
                              <label><input type="checkbox" name="autorizacao" id="autorizacao" value="ON">Sim, quero receber informações da Pìracanjuba</label>
                            </div>                            
                            <div class="form-group col-md-12">
                                <label for="arquivo">Arquivo</label>
                                <input type="file" class="form-control" name="arquivo" id="arquivo">
                                <p>* Tamanho máximo: 2MB. Tipos de imagens permitidas: JPG, PNG e GIF.</p>
                            </div>                                
                        </div>
                        <div class="col-md-12">
                            <div class="g-recaptcha" data-sitekey="6LeXJwoUAAAAABAZDVCn3BajnKvyMqD2pDZIWak3"></div>
                            <button type="submit" id="btEnviar" class="btn btn-default">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div><br>

        <br><br>

        <footer class="container-fluid text-center">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br//a-piracanjuba/quem-somos"><span>A Piracanjuba</span></a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/a-piracanjuba/quem-somos">Quem Somos</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/a-piracanjuba/quem-somos#tab1">Missão</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/a-piracanjuba/quem-somos#tab2">Visão</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/a-piracanjuba/quem-somos#tab3">Valores</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/a-piracanjuba/quem-somos#timeline">Linha do Tempo</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/a-piracanjuba/unidades-fabris">Unidades</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/a-piracanjuba/caminho-do-leite">Caminho do Leite</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/representantes?releaseSearch=&amp;uf=#insideContent">Representantes</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/a-piracanjuba/faq">FAQ</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/a-piracanjuba/releases">Releases</a></li>
                        <li><a href="http://177.4.172.163/PortalDoCandidato/BuscaDeVaga.aspx">Trabalhe Conosco</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtos"><span>Produtos</span></a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtos/quinoa-linha%C3%A7a-e-chia---banana-200ml-654">Bebidas com Cereais</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtos/composto-l%C3%A1cteo-200g-443">Composto Lácteo</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtos/creme-de-leite-200g-480">Creme de Leite</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtos/leite-condensado-270g-494">Leite Condensado</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtos/leite-em-p%C3%B3-desnatado-200g-546">Leite em Pó</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtos/leite-especial-uht-desnatado-fonte-de-fibras-507">Leite Especial</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtos/leite-longa-vida-desnatado-com-tampa-1l-634">Leite Longa Vida</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtos/manteiga-com-sal-100g-613">Manteigas</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtos/pirakids-crescer-1l-629">Pirakids</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtos/leite-aromatizado-pirakids-school---baunilha-633">Pirakids School</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtos/queijo-de-coalho-651">Queijos</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtos/requeij%C3%A3o-cremoso-com-amido-400g-621">Requeijão</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtos/creme-de-leite-zero-lactose-200g-606">Zero Lactose</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtor-de-leite/politica-leiteira"><span>Produtor de Leite</span></a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/produtor-de-leite/politica-leiteira">Política Leiteira</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/equipe-de-compra-de-leite">Compra de Leite</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/qualidade-do-leite">Qualidade do Leite</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/piracanjuba-pro-campo">Piracanjuba Pró-Campo</a></li>
                        <li><a href="http://adm.piracanjuba.containerdigital.com.br/lei-12669">Lei 12669</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">Copyright 2016 © - Todos os direitos reservados.</div>
            </div>
        </footer>

        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.min.js"></script>
        <script>
            /**
             * verifica área da reclamação e ativa ou não os atributos de produto
             * */
            function verificaArea() {
                if ($("#area").val() == "Reclamação") {
                    $(".produto").show();
                } else {
                    $(".produto").hide();
                }
            }
            
            /**
             * validação de cpf 
             * */
            function validaCPF(strCPF) {
                strCPF = strCPF.replace('.', '').replace('-', '');
                var Soma;
                var Resto;
                Soma = 0;
                if (strCPF == "00000000000")
                    return false;

                for (i = 1; i <= 9; i++)
                    Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
                Resto = (Soma * 10) % 11;

                if ((Resto == 10) || (Resto == 11))
                    Resto = 0;
                if (Resto != parseInt(strCPF.substring(9, 10)))
                    return false;

                Soma = 0;
                for (i = 1; i <= 10; i++)
                    Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
                Resto = (Soma * 10) % 11;

                if ((Resto == 10) || (Resto == 11))
                    Resto = 0;
                if (Resto != parseInt(strCPF.substring(10, 11)))
                    return false;
                return true;
            }

            verificaArea();

            $(function () {
                $("#cpf").change(function () {
                    validaCPF($("#cpf").val());
                });
                $("#cpf").blur(function () {
                    validaCPF($("#cpf").val());
                });
                $("#area").change(function () {
                    verificaArea();
                });
                $(".cep").blur(function () {
                    $.ajax({
                        url: "BuscaCep.php",
                        type: "POST",
                        data: {cep: $(".cep").val()},
                        dataType: 'json',
                        success: function (data, textStatus, jqXHR) {
                            $("#endereco").val(data.tipologradouro + ' ' + data.logradouro);
                            $("#cidade").val(data.cidade);
                            $("#estado").val(data.uf);
                            $("#bairro").val(data.bairro);
                            if (data.cidade != "") {
                                $("#pais").val("Brasil");
                            } else {
                                alert("CEP não encontrado...");
                                $("#pais").val("");
                            }
                        }, error: function (jqXHR, textStatus, errorThrown) {
                            swal("Erro ao excluir", "Erro causado por:" + errorThrown, "error");
                        }
                    });
                });

                if (!Modernizr.inputtypes.date) {
                    if ($("input[type=date]").length) {
                        $("input[type=date]").datepicker({
                            dateFormat: 'dd/mm/yy',
                            dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
                            dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
                            dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
                            monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                            monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                            nextText: 'Próximo',
                            prevText: 'Anterior',
                            maxDate: new Date(2099, 12, 30)
                        });
                        $('input[type=date]').mask("99/99/9999");
                    }
                } else if (Modernizr.inputtypes.date) {
                    $('input[type=date]').attr('max', "2099-12-30");
                }

                if ($("#cpf").length) {
                    $('#cpf').mask("999.999.999-99");
                }
                if ($(".celular").length) {
                    $('.celular').mask("(99)99999-9999");
                }
                if ($(".telefone").length) {
                    $('.telefone').mask("(99)9999-9999");
                }


                var bar = $('.bar');
                var percent = $('.percent');
                var status = $('#status');

                $("#fcontato").submit(function () {
                    $(".progress").css("visibility", "visible");
                });

                $('#fcontato').ajaxForm({
                    beforeSend: function () {
                        status.empty();
                        var percentVal = '0%';
                        bar.width(percentVal);
                        percent.html(percentVal);
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentVal = percentComplete + '%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                    },
                    success: function () {
                        var percentVal = '100%';
                        bar.width(percentVal);
                        percent.html(percentVal);
                    },
                    complete: function (xhr) {
                        var data = JSON.parse(xhr.responseText);
                        if (data.situacao == true) {
                            alert(data.mensagem);
                        } else if (data.situacao === false) {
                            alert(data.mensagem);
                        }
                    }
                });

            });
        </script>
    </body>
</html>

