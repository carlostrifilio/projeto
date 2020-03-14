<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Charcutaria Artesanal</title>
    <link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
    include_once 'menu.php';
?>
    
    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="bg-imagem/bacon1.jpg" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="bg-imagem/picanhaparma.jpg" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="bg-imagem/salame1.jpeg" alt="Terceiro Slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>

        <!-- <h2 class='container '>Meus Cards</h2> -->
        <p style="text-align:center; font-size: x-large;">Produtos Principais</p>
        <article class="container card-deck m-auto">

            <div class="card " style="width: 18rem; ">
                <img src="bg-imagem/salame1.jpeg " class="card-img-top " width="380px " height="220px " alt="... ">
                <div class="card-body ">
                    <h5 class="card-title ">Salame</h5>
                    <p class="card-text ">Salame tradicional a base de carne bovina ou suína, sal, vinho e especiarias.
                        Passa por um processo de maturação e depois defumado a alta temperatura.</p>
                    <a href="# " class="btn btn-success float-right ">Clique aqui</a>
                </div>
            </div>
            <div class="card " style="width: 18rem; ">
                <img src="bg-imagem/bacon1.jpg " class="card-img-top " width="380px " height="220px " alt="... ">
                <div class="card-body ">
                    <h5 class="card-title ">Bacon Defumado</h5>
                    <p class="card-text ">Barriga do porco, com tempero suave de sal e especiarias. Após ser curtido por
                        2 dias passa pelo proceso de defumação. Pode ser fatiado e servido como acompanhamento para
                        antepastos.</p>
                    <a href="# " class="btn btn-success float-right ">Clique aqui</a>
                </div>
            </div>
            <div class="card " style="width: 18rem; ">
                <img src="bg-imagem/linguiça.jpg " class="card-img-top " width="380px " height="220px " alt="... ">
                <div class="card-body ">
                    <h5 class="card-title ">Linguiça</h5>
                    <p class="card-text ">Linguiça feita com carne bovina ou suína, com opção de tempero suave ou mais
                        picante.</p>
                    <a href="# " class="btn btn-success float-right ">Clique aqui</a>
                </div>
            </div>
        </article>
        <article id="containerForm " class='mt-3 container'>
            <!-- alterar o formulario para proxima aula -->

            <form><a name="cadastro"></a>
                <div class="form-row ">
                    <div class="form-group col-md-6 ">
                        <label for="inputNome ">Nome</label>
                        <input type="Nome " class="form-control " id="inputNome " placeholder="Nome ">
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="inputSobrenome ">Sobrenome</label>
                        <input type="Sobrenome " class="form-control " id="inputSobrenome " placeholder="Sobrenome ">
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group col-md-6 ">
                        <label for="inputEmail ">Email</label>
                        <input type= email class="form-control " id="inputEmail " placeholder="Email ">
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="inputSenha ">Senha</label>
                        <input type= password class="form-control " id="inputSenha " placeholder="Senha ">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="inputEndereço ">Endereço</label>
                    <input type="text " class="form-control " id="inputEndereço "
                        placeholder="rua, avenida, rodovia... ">
                </div>
                <div class="form-group ">
                    <label for="inputEndereço2 ">Endereço 2</label>
                    <input type="text " class="form-control " id="inputEndereço2 "
                        placeholder="rua, avenida, rodovia... ">
                </div>
                <div class="form-row ">
                    <div class="form-group col-md-6 ">
                        <label for="inputCidade ">Cidade</label>
                        <input type="text " class="form-control " id="inputCidade ">
                    </div>
                    <div class="form-group col-md-4 ">
                        <label for="inputEstado ">Estado</label>
                        <select id="inputEstado " class="form-control ">
                            <option selected>Escolha seu estado...</option>
                            <option>Acre</option>
                            <option>Alagoas</option>
                            <option>Amapá</option>
                            <option>Amazonas</option>
                            <option>Bahia</option>
                            <option>Ceará</option>
                            <option>Distrito Federal</option>
                            <option>Espírito Santo</option>
                            <option>Goiás</option>
                            <option>Maranhão</option>
                            <option>Mato Grosso</option>
                            <option>Mato Grosso do Sul</option>
                            <option>Minas Gerais</option>
                            <option>Pará</option>
                            <option>Paraíba</option>
                            <option>Paraná</option>
                            <option>Pernambuco</option>
                            <option>Piauí</option>
                            <option>Rio de Janeiro</option>
                            <option>Rio Grande do Norte</option>
                            <option>Rio Grande do Sul</option>
                            <option>Rondônia</option>
                            <option>Roraima</option>
                            <option>Santa Catarina</option>
                            <option>São Paulo</option>
                            <option>Sergipe</option>
                            <option>Tocantins</option>

                        </select>
                    </div>
                    <div class="form-group col-md-2 ">
                        <label for="inputCep ">Cep</label>
                        <input type="text " class="form-control " id="inputCep ">
                    </div>
                </div>
                <button type="submit " class="btn btn-primary my-3 mx-2 float-right ">Enviar</button>
                <button type="submit " class="btn btn-danger my-3 mx-2 float-right " data-toggle="modal "
                    data-target="#exampleModal ">Excluir</button>
            </form>
        </article>




        <!-- teste de colunas bootstrap -->
        <!-- <article id='exemplobootstrap'class="container my-5 bg-secondary ">
            <div class="row ">
                <section class="col-1 bg-primary "> col-1</section>
                <section class="col-2 bg-success ">col-2</section>
                <section class="col-3 bg-warning ">col-3</section>
                <section class="col-4 bg-danger "> col-4</section>
                <section class="col-8 bg-muted ">col-8</section>
                <section class="col-12 bg-warning ">col-12</section>

            </div>
        </article> -->
    </main>
    <?php
        include_once 'footer.php';
    ?>
</body>

</html>