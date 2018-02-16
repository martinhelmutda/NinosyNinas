<<<<<<< HEAD:Gestor/gallery.html
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/manager.css" rel="stylesheet">
        <link href="vendor/simple-sidebar/css/simple-sidebar.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Saira+Condensed|Yanone+Kaffeesatz|Exo:800|Jaldi:700|Source+Sans+Pro:300" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

        <title>TEST</title>
    </head>
<body class="bg-dark">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mt-2">
        <a class="navbar-brand" href="#menu-toggle" id="menu-toggle">Niños y Niñas <i id="menu-toggle-dir" class="fas fa-caret-left"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Cerrar Sesión <i class="fas fa-sign-out-alt fa-fw"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="py-2"></div>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="bg-dark">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#"><div class="container-fluid"><img src="images/logo.png" class="img img-fluid" alt=""></div></a>
                </li>
                <li>
                    <a href="index.html"><i class="fas fa-tachometer-alt mr-4 fa-fw"></i>Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-id-card mr-4 fa-fw"></i>Donadores</a>
                </li>
                <li>
                    <a href="news.html"><i class="far fa-newspaper mr-4 fa-fw"></i>Noticias</a>
                </li>
                <li>
                    <a href="events.html"><i class="far fa-calendar-alt mr-4 fa-fw"></i>Eventos</a>
                </li>
                <li>
                    <a href="gallery.html" class="active"><i class="fas fa-images mr-4 fa-fw"></i>Galería</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-user-circle mr-4 fa-fw"></i>Usuarios</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
=======
<?php
include("html/partials/_header.html")?>
>>>>>>> 7f39897f854b08525852a61864dc12089a85e63e:Gestor/gallery.php

        <!-- Page Content -->
        <div id="page-content-wrapper" class="shadow">
            <div class="container-fluid">
                <h1>Galería Multimedia</h1>

                <div class="container-fluid py-4 px-4">
                    <div class="row">
                        <div class="col-lg-9">
                            <div id="archivos" class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col mt-2">
                                            <i class="fas fa-fw fa-images"></i> Archivos
                                        </div>
                                        <div class="col">
                                            <div class="float-right">
                                                <button onclick="showDelete()" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar selección"><i class="fas fa-trash-alt"></i></button>
                                                <button onclick="showAdd()" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="right" title="Agregar nuevo archivo"><i class="fas fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body" id="gestor-galeria">
                                    <div class="row">
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="show-image">
                                                <a href="javascript:preview();"><img src="gallery/1.jpg" class="img img-thumbnail"></a>
                                                <input class="select form-check-input shadow" type="checkbox" value="">
                                                <button onclick="showDelete()" class="delete btn btn-danger shadow"><i class='fas fa-trash-alt'></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer small text-muted">Actualizado hace 5 minutos</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- Example Notifications Card-->
                            <div class="card mb-3">
                              <div class="card-header">
                                <i class="fas fa-history"></i> Reciente</div>
                              <div class="list-group list-group-flush small">
                                <a class="list-group-item list-group-item-action" href="#">
                                  <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                      <strong>Juan Pablo</strong> agrego una nueva imagen.
                                      <div class="text-muted smaller">Hoy a las 5:43 PM - Hace 5 minutos</div>
                                    </div>
                                  </div>
                                </a>
                                <a class="list-group-item list-group-item-action" href="#">
                                  <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                      <strong>Samantha King</strong> agrego una nueva imagen.
                                      <div class="text-muted smaller">Hoy a las 4:37 PM - Hace 1 minutos</div>
                                    </div>
                                  </div>
                                </a>
                                <a class="list-group-item list-group-item-action" href="#">
                                  <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                      <strong>Jeffery Wellings</strong> agrego una nueva imagen.
                                      <div class="text-muted smaller">Hoy a las 4:31 PM - Hace 1 minutos</div>
                                    </div>
                                  </div>
                                </a>
                                <a class="list-group-item list-group-item-action" href="#">
                                  <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                      <i class="fa fa-code-fork"></i>
                                      <strong>Monica Dennis</strong> agrego una nueva imagen.
                                      <div class="text-muted smaller">Hoy a las 3:54 PM - Hace 2 minutos</div>
                                    </div>
                                  </div>
                                </a>
                              </div>
                              <div class="card-footer small text-muted">Actualizado hace 5 minutos</div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>



            <!-- /#page-content-wrapper -->
            <footer class="bg-light mt-4">
                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="text-muted">Hecho con el editor <strong>Brackets</strong> - <a href="http://brackets.io/">http://brackets.io/</a></span>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3 text-right align-self-end">
                            Por <strong>Juan Pablo Pino</strong>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>
    <!-- /#wrapper -->

    <div id="preview" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-images"></i> 00000001.jpg</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img img-fluid" src="gallery/1.jpg">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="delete" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-bell"></i> Alerta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Seguro que quieres eliminar?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="add" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-images"></i> Agregar imagen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button onclick="performClick('theFile');" class="btn btn-outline-secondary" type="button">Buscar</button>
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                    <input type="file" id="theFile" class="sr-only">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Subir</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>




    <!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/simple-sidebar/js/simple-sidebar-toggle.js"></script>
	<script src="vendor/chart.js/js/Chart.bundle.js"></script>
    <script src="js/tooltips.js"></script>
    <script src="js/modals.js"></script>

</body>

</html>
