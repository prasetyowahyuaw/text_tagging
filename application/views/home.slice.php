@extends('master.layout')
@section('title','Home')
@section('body')
    <!-- Topbar -->
    <header class="topbar topbar-expand-lg topbar-secondary topbar-inverse">
        <div class="container">
            <div class="topbar-left">
                <span class="topbar-btn topbar-menu-toggler"><i>&#9776;</i></span>
                <div class="topbar-brand">
                    <a href="{{url('/home')}}"><img src="{{url('assets/img/logo_tagging.png')}}" alt=""></a>
                </div>
                <div class="topbar-divider d-none d-md-block"></div>
                <nav class="topbar-navigation">
                    <ul class="menu">
                        <li class="menu-item active">
                            <a class="menu-link" href="{{url('/home')}}">
                                <span class="title">Home</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="{{url('/tagging')}}">
                                <span class="title">Tagging</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="topbar-right">
                <ul class="topbar-btns">
                    <li class="dropdown">
                        <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="{{url('assets/img/avatar/1.jpg')}}" alt="..."></span>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="ti-power-off"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- END Topbar -->

    <!-- Main container -->
    <main>

        <header class="header header-inverse">
            <div class="container">
                <div class="header-info">
                    <div class="left">
                        <br>
                        <h2 class="header-title"><strong>Home Dashboard</strong> <small class="subtitle">Ringkasan dari proses tagging yang dilakukan</small></h2>
                    </div>
                </div>
            </div>
        </header>
        <!--/.header -->

        <div class="main-content">
            <div class="container">
                <div class="row">

                    <div class="col-6 col-lg-3">
                        <div class="card shadow-1">
                            <div class="card-body">
                                <div class="flexbox">
                                    <h5>Tweet Ter-Tagg</h5>
                                </div>
                                <div class="text-center my-2">
                                    <div class="fs-60 fw-400 text-info">100</div>
                                    <span class="fw-400 text-muted">Tweet</span>
                                </div>
                            </div>
                            <div class="card-body bg-lighter fw-400 py-12">
                                <span class="text-muted mr-1">Target:</span>
                                <span class="text-dark">20.000</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3">
                        <div class="card shadow-1">
                            <div class="card-body">
                                <div class="flexbox">
                                    <h5>Orang Men-Tagg</h5>
                                </div>
                                <div class="text-center my-2">
                                    <div class="fs-60 fw-400 text-danger">15</div>
                                    <span class="fw-400 text-muted">Orang</span>
                                </div>
                            </div>
                            <div class="card-body bg-lighter fw-400 py-12">
                                <span class="text-muted mr-1">Target:</span>
                                <span class="text-dark">50</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3">
                        <div class="card shadow-1">
                            <div class="card-body">
                                <div class="flexbox">
                                    <h5>Topik</h5>
                                </div>
                                <div class="text-center my-2">
                                    <div class="fs-60 fw-400 text-primary">82</div>
                                    <span class="fw-400 text-muted">Topik</span>
                                </div>
                            </div>
                            <div class="card-body bg-lighter fw-400 py-12">
                                <span class="text-muted mr-1">target :</span>
                                <span class="text-dark">50</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3">
                        <div class="card shadow-1">
                            <div class="card-body">
                                <div class="flexbox">
                                    <h5>Tweet Sarkastik</h5>
                                </div>
                                <div class="text-center my-2">
                                    <div class="fs-60 fw-400 text-dark">39</div>
                                    <span class="fw-400 text-muted">tweet</span>
                                </div>
                            </div>
                            <div class="card-body bg-lighter fw-400 py-12">
                                <span class="text-muted mr-1">Target :</span>
                                <span class="text-dark">10</span>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><strong>Label</strong> Per Topik</h5>
                        <select class="form-control form-control-sm" data-provide="selectpicker" data-width="140">
                            <option>Today</option>
                            <option>Yesterday</option>
                            <option>Last week</option>
                            <option>Last month</option>
                        </select>
                    </div>

                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td><a class="hover-info" href="#">Topik A</a></td>
                                <td><strong>50</strong> Twit Tagged by <strong>5</strong> People</td>
                                <td class="text-danger w-90px">10</td>                          
                                <td class="text-warning w-90px">10</td>
                                <td class="text-muted w-90px">10</td>
                                <td class="text-primary w-90px">10</td>
                                <td class="text-success w-90px">10</td>
                            </tr>
                            <tr>
                                <td><a class="hover-info" href="#">Topik B</a></td>
                                <td><strong>50</strong> Twit Tagged by <strong>5</strong> People</td>
                                <td class="text-danger w-90px">10</td>                          
                                <td class="text-warning w-90px">10</td>
                                <td class="text-muted w-90px">10</td>
                                <td class="text-primary w-90px">10</td>
                                <td class="text-success w-90px">10</td>
                            </tr>
                            <tr>
                                <td><a class="hover-info" href="#">Topik C</a></td>
                                <td><strong>50</strong> Twit Tagged by <strong>5</strong> People</td>
                                <td class="text-danger w-90px">10</td>                          
                                <td class="text-warning w-90px">10</td>
                                <td class="text-muted w-90px">10</td>
                                <td class="text-primary w-90px">10</td>
                                <td class="text-success w-90px">10</td>
                            </tr>                                  
                        </tbody>
                    </table>
                </div>

            </div>
        </div>


        <!-- Footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-center text-sm-left">Text Tagging Application</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->

    </main>
@endsection