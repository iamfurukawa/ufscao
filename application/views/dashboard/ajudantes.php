<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Ajudantes</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url('assets/css/font-face.css') ?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="<?= base_url('vendor/mdi-font/css/material-design-iconic-font.min.css') ?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Vendor CSS-->
    <link href="<?= base_url('vendor/animsition/animsition.min.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/wow/animate.css')?>" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/slick/slick.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/select2/select2.min.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/perfect-scrollbar/perfect-scrollbar.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/vector-map/jqvmap.min.css')?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets/css/theme.css')?>" rel="stylesheet" media="all">
  
    <link href="<?= base_url('assets/css/my_style.css')?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR - sidebar when large-->
        <aside class="menu-sidebar2">
            <div class="logo dft-dark d-flex justify-content-center">
                <a href="#">
                    <img width="100px" src="<?= base_url('assets/images/icon/logo-white.png')?>" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar2">
                <div class="account2">
                    <h4 class="name"><?=$this->session->userdata('nome_login')?></h4>
                    <a href="<?=base_url("index.php/dashboard/logout")?>">Logout</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="" href="<?=base_url("index.php/dashboard")?>">
                                <i class="fas fa-tachometer-alt"></i>Resumo
                            </a>
                        </li>
                        <li class="active has-sub">
                            <a class="" href="<?=base_url("index.php/dashboard/ajudantes")?>">
                                <i class="fas fa-user-friends"></i>Ajudantes
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="" href="<?=base_url("index.php/dashboard/adote")?>">
                                <i class="fas fa-heart"></i>Solicitações
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="" href="<?=base_url("index.php/dashboard/dog")?>">
                                <i class="menu-icon fas fa-dog"></i>Cachorros
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="" href="<?=base_url("index.php/dashboard/eventos")?>">
                                <i class="fas fa-calendar"></i>Eventos
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="" href="<?=base_url("index.php/dashboard/parceiros")?>">
                                <i class="fas fa-handshake"></i>Parceiros
                            </a>
                        </li>
                        <?php if($this->session->userdata('nv_login')=="1"){?>
                        <li class="has-sub">
                            <a class="" href="<?=base_url("index.php/dashboard/user_list/")?>">
                                <i class="zmdi zmdi-account"></i>Usuários
                            </a>
                        </li>
                        <?php }?>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2 dft-color">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-lg-none d-flex justify-content-center">
                                <a href="#">
                                    <img width="100px" src="<?= base_url('assets/images/icon/logo-white.png')?>" alt="CoolAdmin" />
                                </a>
                            </div>
                            
                            <!-- BARS -->
                            <div class="header-button2">
                                <!-- OPTIONS - clicked bars when large -->
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="fa fa-bars"></i>
                                </div>
                            </div>
                            <!-- END OF BARS -->
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- HIDDEN SIDEBAR - sidebar when small -->
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo d-flex justify-content-center">
                    <a href="#">
                        <img width="100px" src="<?= base_url('assets/images/icon/logo-white.png')?>" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <h4 class="name"><?=$this->session->userdata('nome_login')?></h4>
                        <a href="<?=base_url("index.php/dashboard/logout")?>">Logout</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="has-sub">
                                <a class="" href="<?=base_url("index.php/dashboard")?>">
                                    <i class="fas fa-tachometer-alt"></i>Resumo
                                </a>
                            </li>
                            <li class="active has-sub">
                                <a class="" href="<?=base_url("index.php/dashboard/ajudantes")?>">
                                    <i class="fas fa-user-friends"></i>Ajudantes
                                </a>
                            </li>
                            <li class="has-sub">
                                <a class="" href="<?=base_url("index.php/dashboard/adote")?>">
                                    <i class="fas fa-heart"></i>Solicitações
                                </a>
                            </li>
                            <li class="has-sub">
                                <a class="" href="<?=base_url("index.php/dashboard/dog")?>">
                                    <i class="menu-icon fas fa-dog"></i>Cachorros
                                </a>
                            </li>
                            <li class="has-sub">
                                <a class="" href="<?=base_url("index.php/dashboard/eventos")?>">
                                    <i class="fas fa-calendar"></i>Eventos
                                </a>
                            </li>
                            <li class="has-sub">
                                <a class="" href="<?=base_url("index.php/dashboard/parceiros")?>">
                                    <i class="fas fa-handshake"></i>Parceiros
                                </a>
                            </li>
                            <?php if($this->session->userdata('nv_login')=="1"){?>
                            <li class="has-sub">
                                <a class="" href="<?=base_url("index.php/dashboard/user_list/")?>">
                                    <i class="zmdi zmdi-account"></i>Usuários
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- CONTENT -->
            <section class="mt-5">
                <div class="col-md-12 d-flex justify-content-center mb-3 pt-lg-5 pt-xl-5" id="filters">
                    <div class="dropdown mb-2">
                        <button class="btn dft-orange dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownMenuButton">Filtros</button>
                        <div class="dropdown-menu p-2 js-dropdown" aria-labelledby="dropdownMenuButton">
                            <div class="form-check">                        
                                <input type="checkbox" class="form-check-input" id="check1" name="car" value="carona">
                                <label class="form-check-label" for="check1">Carona</label>
                            </div>
                            <div class="form-check">                        
                                <input type="checkbox" class="form-check-input" id="check2" name="lar-tmp" value="lar">
                                <label class="form-check-label" for="check2">Lar Temporário</label>
                            </div>
                            <div class="form-check">                        
                                <input type="checkbox" class="form-check-input" id="check3" name="divulg" value="divulgacao">
                                <label class="form-check-label" for="check3">Divulgação</label>
                            </div>
                            <div class="form-check">                        
                                <input type="checkbox" class="form-check-input" id="check4" name="doa" value="doacao">
                                <label class="form-check-label" for="check4">Doação</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-10 input-group">
                        <input id="str" type="text" class="form-control" placeholder="Digite o nome de um ajudante">  
                    </div>
                </div>
                <div class="col-md-12 mx-auto">
                <!-- Table -->
                <div class="container">
                    <!-- Thead -->
                    <div class="d-flex flex-row py-3 rounded-top dft-orange" id="thead" style="color: black;">
                        <div class="col-sm-6 col-md-4"><b>Nome</b></div>
                        <div class="col-sm-5 col-md-7"><b>Contato</b></div>
                    </div>
                    <!-- Rows -->
                    <span id="rows">
                    </span>
                </div> <!-- container -->
            </div>
            </section>
            <!-- END OF CONTENT -->

        </div>

    </div>
        
    
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-2 d-flex flex-row justify-content-between">
                    <h5 class="modal-title" id="modalLabel">Deletar Ajudante</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Esta é uma mudança irreversível. Deseja realmente deletar este ajudante?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <a type="button" class="btn btn-danger" id="del">Sim</a>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Jquery JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- Vendor JS       -->
    <script src="<?= base_url('vendor/slick/slick.min.js')?>">
    </script>
    <script src="<?= base_url('vendor/wow/wow.min.js')?>"></script>
    <script src="<?= base_url('vendor/animsition/animsition.min.js')?>"></script>
    <script src="<?= base_url('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')?>">
    </script>
    <script src="<?= base_url('vendor/counter-up/jquery.waypoints.min.js')?>"></script>
    <script src="<?= base_url('vendor/counter-up/jquery.counterup.min.js')?>">
    </script>
    <script src="<?= base_url('vendor/circle-progress/circle-progress.min.js')?>"></script>
    <script src="<?= base_url('vendor/perfect-scrollbar/perfect-scrollbar.js')?>"></script>
    <script src="<?= base_url('vendor/chartjs/Chart.bundle.min.js')?>"></script>
    <script src="<?= base_url('vendor/select2/select2.min.js')?>">
    </script>
    <script src="<?= base_url('vendor/vector-map/jquery.vmap.js')?>"></script>
    <script src="<?= base_url('vendor/vector-map/jquery.vmap.min.js')?>"></script>
    <script src="<?= base_url('vendor/vector-map/jquery.vmap.sampledata.js')?>"></script>
    <script src="<?= base_url('vendor/vector-map/jquery.vmap.world.js')?>"></script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/js/main.js')?>"></script>
    
       <script>
            $("#str").on("paste keyup", function() {
                $("#rows").empty();
                $.each(data_storage,function(index, value){
                   nome = value.nome_ajud;
                   if (nome.toLowerCase().indexOf($("#str").val().toLowerCase()) >= 0){
                       id = value.id_ajud;    
                       obs = value.obs_ajud;
                       outro_ajud = value.outro_ajud == "" ? "" : "-"+value.outro_ajud+"<br>";
                       contato = value.contato_ajud;
                       carona = value.carona_ajud == 1 ? "-Carona<br>" : "";
                       divulg = value.divulg_ajud == 1 ? "-Divulgação<br>" : "";
                       doacao = value.doacao_ajud == 1 ? "-Doação<br>" : "";
                       lar = value.lar_temp_ajud == 1 ? "-Lar temporário<br>" : "";
                       $("#rows").append('<div class="card mb-0 rounded-0"><a onclick="change(this);" class="d-flex flex-row justify-content-between py-3 card-header" data-toggle="collapse" href="#collapse-'+id+'" aria-expanded="false" aria-controls="collapse-'+id+'" style="color: black;"><div class="col-sm-6 col-md-4">'+nome+'</div><div class="col-sm-5 col-md-7 contact">'+contato+'</div><div class=""><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up" style="display: none;"></i></div></a><div class="collapse fade" id="collapse-'+id+'"><div class="d-flex card-body"><div class="col-sm-12 contact mb-2" style="display: none;"><h5 class="mb-1">Contato:</h5><p>'+contato+'</p></div><div class="col-sm-5 col-md-5 mb-2"><h5 class="mb-1">Pode ajudar com:</h5><p>'+carona+lar+divulg+doacao+outro_ajud+'</p></div><div class="col-sm-5 col-md-5"><h5 class="mb-1">Observações:</h5><p>'+obs+'</p></div><div class="justify-content-end col-sm-2 col-md-2 mt-2" data-toggle="tooltip" data-placement="right" title="Deletar Ajudante"><button data-href="<?=base_url("index.php/dashboard/helpers_del/")?>'+id+'" class="btn-sm btn-danger" id="'+id+'" data-toggle="modal" data-target="#modal">Apagar</button></div></div></div></div>');
                   }
                });
                
            });
           
            $('#modal').on('show.bs.modal', function(e) {
                $(this).find('#del').attr('href', $(e.relatedTarget).data('href'));
            });
            data_storage = '';
            //Função de troca de ícone
            function change(elem){
//                 $(elem).find('i').toggle();
                if(!$(elem).siblings('.collapse').hasClass('show')) {
                    $(elem).find('i').removeClass('fa-chevron-down');
                    $(elem).find('i').addClass('fa-chevron-up');
                } else {
                    $(elem).find('i').addClass('fa-chevron-down');
                    $(elem).find('i').removeClass('fa-chevron-up');
                }
            };

            //Função de arrumar card
            $(document).ready(function(){
                 $.ajax({
                    type:'POST',
                    data:{},
                    dataType: 'json',
                    url:"<?=base_url('index.php/dashboard/ajaxAjudantes')?>",
                    success: function(data){
                      data_storage = data;
                      console.log(data);
                      print(3,3,3,3); 
                    },
                    error: function(data){
                        console.log(data.responseText + "ERROR!");
                    }
                });

                //Para dispositivos maiores, configura organização dos elementos de acordo com a redução da largura
                $(window).resize(function() {
                    if ($(window).width() < 500) {
                        $($("#thead > div")[1]).css("display", "none");
                        $(".card-header .contact").css("display", "none");
                        $(".card-body .contact").css("display", "block");
                        $(".card .collapse .card-body").css("flex-direction", "column");
                        $("#filters").css("flex-direction", "column");
                    } else {
                        $($("#thead > div")[1]).css("display", "block");
                        $(".card-header .contact").css("display", "block");
                        $(".card-body .contact").css("display", "none");
                        $(".card .collapse .card-body").css("flex-direction", "row");
                        $("#filters").css("flex-direction", "row");
                    }
                });
            });
           
           $("input[type=checkbox]").on('click', function(){
               var carona = 0, divulg = 0, doacao = 0, lar = 0;
               $("input:checked").each(function(){
                    var val = $(this).attr('value');
                    switch(val) {
                        case 'carona':
                            carona = 1;
                            break;
                        case 'lar':
                            lar = 1;
                            break;
                        case 'divulgacao':
                            divulg = 1;
                            break;
                        case 'doacao':
                            doacao = 1;
                            break;
                    }
               });
               if (!(carona || divulg || doacao || lar))
                   print(3, 3, 3, 3);
               else
                   print(carona, divulg, doacao, lar);
           });
        
            function print(carona, divulg, doacao, lar){
                $("#rows").empty();
                if(data_storage.length == 0){
                    $("#rows").append('<div class="alert alert-danger h4">Nenhum registro encontrado...</div>');
//                     $('#rows').addClass("alert alert-danger");
                } else {
                    if(carona == 3 && divulg == 3 && doacao == 3 && lar == 3)
                        $.each(data_storage,function(index, value){
                           id = value.id_ajud;
                           nome = value.nome_ajud;
                           obs = value.obs_ajud;
                           outro_ajud = value.outro_ajud == "" ? "" : "-"+value.outro_ajud+"<br>";
                           contato = value.contato_ajud;
                           carona = value.carona_ajud == 1 ? "-Carona<br>" : "";
                           divulg = value.divulg_ajud == 1 ? "-Divulgação<br>" : "";
                           doacao = value.doacao_ajud == 1 ? "-Doação<br>" : "";
                           lar = value.lar_temp_ajud == 1 ? "-Lar temporário<br>" : "";
                           $("#rows").append('<div class="card mb-0 rounded-0"><a onclick="change(this);" class="d-flex flex-row justify-content-between py-3 card-header" data-toggle="collapse" href="#collapse-'+id+'" aria-expanded="false" aria-controls="collapse-'+id+'" style="color: black;"><div class="col-sm-6 col-md-4">'+nome+'</div><div class="col-sm-5 col-md-7 contact">'+contato+'</div><div class=""><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up" style="display: none;"></i></div></a><div class="collapse fade" id="collapse-'+id+'"><div class="d-flex card-body"><div class="col-sm-12 contact mb-2" style="display: none;"><h5 class="mb-1">Contato:</h5><p>'+contato+'</p></div><div class="col-sm-5 col-md-5 mb-2"><h5 class="mb-1">Pode ajudar com:</h5><p>'+carona+lar+divulg+doacao+outro_ajud+'</p></div><div class="col-sm-5 col-md-5"><h5 class="mb-1">Observações:</h5><p>'+obs+'</p></div><div class="justify-content-end col-sm-2 col-md-2 mt-2" data-toggle="tooltip" data-placement="right" title="Deletar Ajudante"><button data-href="<?=base_url("index.php/dashboard/helpers_del/")?>'+id+'" class="btn-sm btn-danger" id="'+id+'" data-toggle="modal" data-target="#modal">Apagar</button></div></div></div></div>');
                        });
                    else {
                        $.each(data_storage,function(index, value){
                           if((carona == 1 && value.carona_ajud == 1) || (divulg == 1 && value.divulg_ajud == 1) || (doacao == 1 && value.doacao_ajud == 1) || (lar == 1 && value.lar_temp_ajud == 1)){
                                   id = value.id_ajud;
                                   nome = value.nome_ajud;
                                   obs = value.obs_ajud;
                                   outro_ajud = value.outro_ajud == "" ? "" : "-"+value.outro_ajud+"<br>";
                                   contato = value.contato_ajud;
                                   carona_p = value.carona_ajud == 1 ? "-Carona<br>" : "";
                                   divulg_p = value.divulg_ajud == 1 ? "-Divulgação<br>" : "";
                                   doacao_p = value.doacao_ajud == 1 ? "-Doação<br>" : "";
                                   lar_p = value.lar_temp_ajud == 1 ? "-Lar temporário<br>" : "";
                                   $("#rows").append('<div class="card mb-0 rounded-0"><a onclick="change(this);" class="d-flex flex-row justify-content-between py-3 card-header" data-toggle="collapse" href="#collapse-'+id+'" aria-expanded="false" aria-controls="collapse-'+id+'" style="color: black;"><div class="col-sm-6 col-md-4">'+nome+'</div><div class="col-sm-5 col-md-7 contact">'+contato+'</div><div class=""><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up" style="display: none;"></i></div></a><div class="collapse fade" id="collapse-'+id+'"><div class="d-flex card-body"><div class="col-sm-12 contact mb-2" style="display: none;"><h5 class="mb-1">Contato:</h5><p>'+contato+'</p></div><div class="col-md-5 mb-2"><h5 class="mb-1">Pode ajudar com:</h5><p>'+carona_p+lar_p+divulg_p+doacao_p+outro_ajud+'</p></div><div class="col-md-7"><h5 class="mb-1">Observações:</h5><p>'+obs+'</p></div></div></div></div>');
                           }
                        })
                    };
                    
                    //Para dispositivos pequenos, configura organização de elementos
                    if ($(window).width() < 500) {
                        $($("#thead > div")[1]).css("display", "none");
                        $(".contact").toggle();
                        $(".card .collapse .card-body").css("flex-direction", "column");
                        $("#filters").css("flex-direction", "column");
                    }
                }
            }
        </script>
    
    
</body>

</html>
<!-- end document-->