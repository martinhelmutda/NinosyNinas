<<<<<<< HEAD:Gestor/index.html
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
                    <a href="#" class="active"><i class="fas fa-tachometer-alt mr-4 fa-fw"></i>Dashboard</a>
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
                    <a href="gallery.html"><i class="fas fa-images mr-4 fa-fw"></i>Galería</a>
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
>>>>>>> 7f39897f854b08525852a61864dc12089a85e63e:Gestor/index.php

        <!-- Page Content -->
        <div id="page-content-wrapper" class="shadow">
            <div class="container-fluid">
                <h1>Dashboard</h1>

                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-comments"></i>
                                </div>
                                <div class="mr-5"><span class="badge badge-dark">9</span> Nuevos Comentarios!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Ver Detalles</span>
                                <span class="float-right"><i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-id-card"></i>
                                </div>
                                <div class="mr-5"><span class="badge badge-dark">10</span> Donadores por validar!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Ver Detalles</span>
                                <span class="float-right"><i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="far fa-newspaper"></i>
                                </div>
                                <div class="mr-5"><span class="badge badge-dark">5</span> Noticias nuevas!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Ver Detalles</span>
                                <span class="float-right"><i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="mr-5"><span class="badge badge-dark">2</span> Eventos este mes!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Ver Detalles</span>
                                <span class="float-right"><i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Area Chart Example-->
                <div class="card mb-3">
                  <div class="card-header">

                      <i class="fas fa-fw fa-id-card"></i>Donadores Registrados</div>
                  <div class="card-body">
                    <canvas id="myAreaChart" width="100%" height="30"></canvas>
                  </div>
                  <div class="card-footer small text-muted">Actualizado hace 5 minutos</div>
                </div>
                <div class="row">
                  <div class="col-lg-8">
                    <!-- Example Bar Chart Card-->
                    <div class="card mb-3">
                      <div class="card-header">
                        <i class="fas fa-chart-line"></i> Visitas al sitio</div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-8 my-auto">
                            <canvas id="myBarChart" width="100" height="50"></canvas>
                          </div>
                          <div class="col-sm-4 text-center my-auto">
                            <div class="h4 mb-0 text-primary">10230</div>
                            <div class="small text-muted">Visitas Anuales</div>
                            <hr>
                            <div class="h4 mb-0 text-warning">3074</div>
                            <div class="small text-muted">Visitas del Trimestre</div>
                            <hr>
                            <div class="h4 mb-0 text-success">1403</div>
                            <div class="small text-muted">Visitas del Mes</div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer small text-muted">Actualizado hace 5 minutos</div>
                    </div>
                    <!-- Card Columns Example Social Feed-->
                    <div class="mb-0 mt-4">
                      <i class="fa fa-newspaper-o"></i> News Feed</div>
                    <hr class="mt-2">
                    <div class="card-columns">
                      <!-- Example Social Card-->
                      <div class="card mb-3">
                        <a href="#">
                          <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=610" alt="">
                        </a>
                        <div class="card-body">
                          <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                          <p class="card-text small">These waves are looking pretty good today!
                            <a href="#">#surfsup</a>
                          </p>
                        </div>
                        <hr class="my-0">
                        <div class="card-body py-2 small">
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-comment"></i>Comment</a>
                          <a class="d-inline-block" href="#">
                            <i class="fa fa-fw fa-share"></i>Share</a>
                        </div>
                        <hr class="my-0">
                        <div class="card-body small bg-faded">
                          <div class="media">
                            <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                            <div class="media-body">
                              <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>Very nice! I wish I was there! That looks amazing!
                              <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                  <a href="#">Like</a>
                                </li>
                                <li class="list-inline-item">·</li>
                                <li class="list-inline-item">
                                  <a href="#">Reply</a>
                                </li>
                              </ul>
                              <div class="media mt-3">
                                <a class="d-flex pr-3" href="#">
                                  <img src="http://placehold.it/45x45" alt="">
                                </a>
                                <div class="media-body">
                                  <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>Next time for sure!
                                  <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                      <a href="#">Like</a>
                                    </li>
                                    <li class="list-inline-item">·</li>
                                    <li class="list-inline-item">
                                      <a href="#">Reply</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer small text-muted">Posted 32 mins ago</div>
                      </div>
                      <!-- Example Social Card-->
                      <div class="card mb-3">
                        <a href="#">
                          <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=180" alt="">
                        </a>
                        <div class="card-body">
                          <h6 class="card-title mb-1"><a href="#">John Smith</a></h6>
                          <p class="card-text small">Another day at the office...
                            <a href="#">#workinghardorhardlyworking</a>
                          </p>
                        </div>
                        <hr class="my-0">
                        <div class="card-body py-2 small">
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-comment"></i>Comment</a>
                          <a class="d-inline-block" href="#">
                            <i class="fa fa-fw fa-share"></i>Share</a>
                        </div>
                        <hr class="my-0">
                        <div class="card-body small bg-faded">
                          <div class="media">
                            <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                            <div class="media-body">
                              <h6 class="mt-0 mb-1"><a href="#">Jessy Lucas</a></h6>Where did you get that camera?! I want one!
                              <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                  <a href="#">Like</a>
                                </li>
                                <li class="list-inline-item">·</li>
                                <li class="list-inline-item">
                                  <a href="#">Reply</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer small text-muted">Posted 46 mins ago</div>
                      </div>
                      <!-- Example Social Card-->
                      <div class="card mb-3">
                        <a href="#">
                          <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=281" alt="">
                        </a>
                        <div class="card-body">
                          <h6 class="card-title mb-1"><a href="#">Jeffery Wellings</a></h6>
                          <p class="card-text small">Nice shot from the skate park!
                            <a href="#">#kickflip</a>
                            <a href="#">#holdmybeer</a>
                            <a href="#">#igotthis</a>
                          </p>
                        </div>
                        <hr class="my-0">
                        <div class="card-body py-2 small">
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-comment"></i>Comment</a>
                          <a class="d-inline-block" href="#">
                            <i class="fa fa-fw fa-share"></i>Share</a>
                        </div>
                        <div class="card-footer small text-muted">Posted 1 hr ago</div>
                      </div>
                      <!-- Example Social Card-->
                      <div class="card mb-3">
                        <a href="#">
                          <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=185" alt="">
                        </a>
                        <div class="card-body">
                          <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                          <p class="card-text small">It's hot, and I might be lost...
                            <a href="#">#desert</a>
                            <a href="#">#water</a>
                            <a href="#">#anyonehavesomewater</a>
                            <a href="#">#noreally</a>
                            <a href="#">#thirsty</a>
                            <a href="#">#dehydration</a>
                          </p>
                        </div>
                        <hr class="my-0">
                        <div class="card-body py-2 small">
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-comment"></i>Comment</a>
                          <a class="d-inline-block" href="#">
                            <i class="fa fa-fw fa-share"></i>Share</a>
                        </div>
                        <hr class="my-0">
                        <div class="card-body small bg-faded">
                          <div class="media">
                            <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                            <div class="media-body">
                              <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>The oasis is a mile that way, or is that just a mirage?
                              <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                  <a href="#">Like</a>
                                </li>
                                <li class="list-inline-item">·</li>
                                <li class="list-inline-item">
                                  <a href="#">Reply</a>
                                </li>
                              </ul>
                              <div class="media mt-3">
                                <a class="d-flex pr-3" href="#">
                                  <img src="http://placehold.it/45x45" alt="">
                                </a>
                                <div class="media-body">
                                  <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>
                                  <img class="img-fluid w-100 mb-1" src="https://unsplash.it/700/450?image=789" alt="">I'm saved, I found a cactus. How do I open this thing?
                                  <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                      <a href="#">Like</a>
                                    </li>
                                    <li class="list-inline-item">·</li>
                                    <li class="list-inline-item">
                                      <a href="#">Reply</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer small text-muted">Posted yesterday</div>
                      </div>
                    </div>
                    <!-- /Card Columns-->
                  </div>
                  <div class="col-lg-4">
                    <!-- Example Pie Chart Card-->
                    <div class="card mb-3">
                      <div class="card-header">
                        <i class="far fa-money-bill-alt"></i> Donadores por metodo de pago</div>
                      <div class="card-body">
                        <canvas id="myPieChart" width="100%" height="100"></canvas>
                      </div>
                      <div class="card-footer small text-muted">Actualizado hace 5 minutos</div>
                    </div>
                    <!-- Example Notifications Card-->
                    <div class="card mb-3">
                      <div class="card-header">
                        <i class="fas fa-history"></i> Reciente</div>
                      <div class="list-group list-group-flush small">
                        <a class="list-group-item list-group-item-action" href="#">
                          <div class="media">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                            <div class="media-body">
                              <strong>Juan Pablo</strong> publico el nuevo articulo
                              <strong>"Salud en la infancia"</strong>.
                              <div class="text-muted smaller">Hoy a las 5:43 PM - Hace 5 minutos</div>
                            </div>
                          </div>
                        </a>
                        <a class="list-group-item list-group-item-action" href="#">
                          <div class="media">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                            <div class="media-body">
                              <strong>Samantha King</strong> escribio un comentario!
                              <div class="text-muted smaller">Hoy a las 4:37 PM - Hace 1 minutos</div>
                            </div>
                          </div>
                        </a>
                        <a class="list-group-item list-group-item-action" href="#">
                          <div class="media">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                            <div class="media-body">
                              <strong>Jeffery Wellings</strong> quiere ser un donador recurrente!
                              <div class="text-muted smaller">Hoy a las 4:31 PM - Hace 1 minutos</div>
                            </div>
                          </div>
                        </a>
                        <a class="list-group-item list-group-item-action" href="#">
                          <div class="media">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                            <div class="media-body">
                              <i class="fa fa-code-fork"></i>
                              <strong>Monica Dennis</strong>forked the
                              <strong>startbootstrap-sb-admin</strong>repository on
                              <strong>GitHub</strong>.
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

    <!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/simple-sidebar/js/simple-sidebar-toggle.js"></script>
	<script src="vendor/chart.js/js/Chart.bundle.js"></script>
	<script src="js/sb-admin-charts.js"></script>

</body>

</html>
