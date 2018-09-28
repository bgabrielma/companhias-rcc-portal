<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login — Gestão de companhias</title>

    <!-- Required CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/homepage-style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>
    <div class="global-wrapper">
        <aside class="nav-wrapper">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Gestão de Companhias</h3>
                </div>
                <ul class="list-unstyled components">
                    <li class="active"><a href=""><i class="fas fa-home"></i> Home</a></li>
                    <li><a href=""><i class="fas fa-lightbulb"></i> Liderança</a></li>
                    <li><a href=""><i class="fas fa-gavel"></i> Ministério</a></li>
                    <li><a href=""><i class="fas fa-users"></i> Membros</a></li>
                    <li><a href=""><i class="fas fa-chalkboard-teacher"></i> Aulas</a></li>
                    <li><a href=""><i class="fas fa-medal"></i> Gratificações</a></li>
                    <li><a href=""><i class="far fa-calendar-alt"></i> Eventos</a></li>
                    <li><a href=""><i class="fas fa-layer-group"></i> Projetos</a></li>
                    <li><a href=""><i class="fas fa-th-large"></i> Utilitários</a></li>
                    <li><a href=""><i class="far fa-question-circle"></i> Perguntas frequentes</a></li>
                </ul>
                <ul class="list-unstyled ABT">
                    <li><a href="#" class="copy" data-toggle="popover" data-trigger="focus" title="Copyright" data-content="&copy; 2018 Gestão de Companhias">Copyright</a></li>
                    <li><a href="#" class="copy" data-toggle="popover" data-trigger="focus" title="Copyright" data-content="Desenvolvido por: ,SrGabriel & .Wire.-">Desenvolvedores</a></li>
                </ul>
            </nav>
        </aside>
        <main class="content-wrapper">
            <div class="main-content">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-dark">
                            <i class="fas fa-align-left"></i>
                            <span>Menu</span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarContent">
                            <i class="fas fa-align-justify"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-search"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-bell"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-flag"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-ellipsis-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <h6>PAINEL</h6>
                <div class="row card-zone">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="media align-items-stretch">
                                <div class="card-icon rounded-left" style="background-color: #3f51b5">
                                    <i class="fas fa-calculator"></i>
                                </div>
                                <div class="card-info media-body" style="background-color: #311b92">
                                    <h6>Nova função</h6>
                                    <h5 class="mb-0">Calcular metas</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="media align-items-stretch">
                                <div class="card-icon rounded-left" style="background-color: #2196f3">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <div class="card-info media-body" style="background-color: #03a9f4">
                                    <h6>Nova função</h6>
                                    <h5 class="mb-0">Configurar companhia</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="media align-items-stretch">
                                 <div class="card-icon rounded-left" style="background-color: #7bac41">
                                    <i class="fas fa-wrench"></i>
                                </div>
                                <div class="card-info media-body" style="background-color: #8bc34a">
                                    <h6>Nova função</h6>
                                    <h5 class="mb-0">Alterar scripts</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="media align-items-stretch">
                                <div class="card-icon rounded-left" style="background-color: #ce1a57">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="card-info media-body" style="background-color: #e91e63">
                                    <h6>Nova função</h6>
                                    <h5 class="mb-0">Gerenciar membros</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-1">
                    <div class="col-lg-12 bg-light">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget turpis vel libero euismod venenatis non et neque. Curabitur vitae tellus id lacus pharetra blandit vestibulum nec orci. Sed velit mi, consectetur in tempor nec, cursus sit amet quam. Sed ut augue arcu. Morbi non egestas nisl, vel viverra magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent tristique purus sit amet lacus dictum iaculis.</p>

                        <p>Sed sit amet dui lacinia, tristique enim eget, tempus diam. In gravida molestie velit sit amet scelerisque. Aenean suscipit orci ut purus laoreet aliquet. Aenean ac eleifend metus. Mauris non nulla vel leo malesuada blandit. Proin sit amet tellus sit amet risus facilisis blandit. In a ultrices magna. Aenean hendrerit odio in enim vulputate consequat id ut lacus. Pellentesque vitae cursus odio. Morbi feugiat diam nibh, quis interdum mi fringilla nec. Integer ac mattis dolor. Fusce molestie, sapien ut venenatis sollicitudin, dui arcu ornare magna, ac luctus purus nisi at turpis.</p>
                    </div>
                </div>
            </div>
            <footer class="main-footer">
                <h6>Footer</h6>
            </footer>
        </main>
    </div>

    <!-- Required JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>

    <!-- Additional JS -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();
        });
    </script>

</body>
</html>
