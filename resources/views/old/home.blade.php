@extends('layouts.app')

@section('content')
    @include('includes.menu')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">26 Novas Mensagens!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">Ver detalhes</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">11 Novas Tarefas!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">Ver detalhes</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">123 Novos Orçamentos!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">Ver detalhes</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-support"></i>
                            </div>
                            <div class="mr-5">14 Cancelametos!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">Ver detalhes</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Area Chart Example-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-area-chart"></i> Orçamentos Mesal</div>
                <div class="card-body">
                    <canvas id="myAreaChart" width="100%" height="30"></canvas>
                </div>
                <div class="card-footer small text-muted"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Example Bar Chart Card-->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-bar-chart"></i> Adesões Por Mês</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8 my-auto">
                                    <canvas id="myBarChart" width="100" height="50"></canvas>
                                </div>
                                <div class="col-sm-4 text-center my-auto">
                                    <div class="h4 mb-0 text-primary">345</div>
                                    <div class="small text-muted">Ativas</div>
                                    <hr>
                                    <div class="h4 mb-0 text-warning">28</div>
                                    <div class="small text-muted">Pendentes</div>
                                    <hr>
                                    <div class="h4 mb-0 text-success">12</div>
                                    <div class="small text-muted">Canceladas</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>

                    <!-- /Card Columns-->
                </div>
            </div>

        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © SiForme 2018</small>
                </div>
            </div>
        </footer>

        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
