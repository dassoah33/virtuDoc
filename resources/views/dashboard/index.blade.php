@extends('layouts.layout-guest')

@section('content')
                    <!-- start page title -->
                    <div class="py-3 py-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="page-title mb-0">Dashboard</h4>
                            </div>
                            <div class="col-lg-6">
                               <div class="d-none d-lg-block">
                                <ol class="breadcrumb m-0 float-end">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Virtu Bank</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                               </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <h5 class="card-title mb-0">Nombre d'utilisateurs</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                25
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-muted"><i class="fa fa-user text-estiam" style="font-size: 25px;"></i></span>
                                        </div>
                                    </div>

                                    {{-- <div class="progress shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                                        </div>
                                    </div> --}}
                                </div>
                                <!--end card body-->
                            </div><!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <h5 class="card-title mb-0">Nombre de virements</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                40
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-muted">
                                                <i class="mdi mdi-cash-plus text-estiam" style="font-size: 25px;"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div><!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        {{-- <span class="badge badge-soft-primary float-end">Per Month</span> --}}
                                        <h5 class="card-title mb-0">Revenus</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                8 000 €
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-muted"> <i class="mdi mdi-cash text-estiam" style="font-size: 25px;"></i></span>
                                        </div>
                                    </div>

                                </div>
                                <!--end card body-->
                            </div>
                            <!--end card-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-end">Aujourd'hui</span>
                                        <h5 class="card-title mb-0">Nombre de connexion</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                2
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-muted"><i class="mdi mdi-arrow-down text-danger" style="font-size:25px;"></i></span>
                                        </div>
                                    </div>

                                </div>
                                <!--end card body-->
                            </div><!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->


                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Utilisateurs</h4>
                                    <p class="card-subtitle mb-4">Nombre d'utilisateurs par année</p>
                                    <div id="morris-bar-example" class="morris-chart"></div>
                                </div> <!--end card body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        {{-- <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Stock</h4>
                                    <p class="card-subtitle mb-4">Recent Stock</p>

                                    <div class="text-center">
                                        <input data-plugin="knob" data-width="165" data-height="165" data-linecap=round
                                            data-fgColor="#7a08c2" value="95" data-skin="tron" data-angleOffset="180"
                                            data-readOnly=true data-thickness=".15" />
                                        <h5 class="text-muted mt-3">Total sales made today</h5>


                                        <p class="text-muted w-75 mx-auto sp-line-2">Traditional heading
                                            elements are
                                            designed to work best in the meat of your page content.</p>

                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                <h4><i class="fas fa-arrow-up text-success me-1"></i>$7.8k</h4>

                                            </div>
                                            <div class="col-6">
                                                <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                <h4><i class="fas fa-arrow-down text-danger me-1"></i>$1.4k</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div> <!--end card body-->
                            </div> <!-- end card-->
                        </div> --}}
                        <!-- end col -->

                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Transactions sur l'année 2024</h4>
                                            {{-- <p class="card-subtitle mb-4">Transaction period from 21 July to 25 Aug</p> --}}
                                            <h3>7841.12 €<span class="badge badge-soft-success float-end">+7.5%</span>
                                            </h3>
                                        </div>
                                    </div> <!-- end row -->

                                    <div id="sparkline1" class="mt-3"></div>
                                </div>
                                <!--end card body-->
                            </div>
                            <!--end card-->

                        </div><!-- end col -->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end position-relative">
                                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="dropdown-item">Action</a></li>
                                            <li><a href="#" class="dropdown-item">Another action</a></li>
                                            <li><a href="#" class="dropdown-item">Something else here</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="card-title d-inline-block">Total Revenue</h4>

                                    <div id="morris-line-example" class="morris-chart" style="height: 290px;"></div>

                                    <div class="row text-center mt-4">
                                        <div class="col-6">
                                            <h4>7841.12 €</h4>
                                            <p class="text-muted mb-0">Total Revenue</p>
                                        </div>
                                        {{-- <div class="col-6">
                                            <h4>17</h4>
                                            <p class="text-muted mb-0">Open Compaign</p>
                                        </div> --}}
                                    </div>

                                </div>
                                <!--end card body-->

                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Derniers utilisateurs</h4>
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Nom et prénom</th>
                                                    <th>Email</th>
                                                    <th>Localisation</th>
                                                    <th>Date d'inscription</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="table-user"
                                                            class="mr-2 avatar-xs rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Paul J. Friend</a>
                                                    </td>
                                                    <td>
                                                        pauljfrnd@jourrapide.com
                                                    </td>
                                                    <td>
                                                        New York
                                                    </td>
                                                    <td>
                                                        07/07/2018
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="table-user"
                                                            class="mr-2 avatar-xs rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Bryan J. Luellen</a>
                                                    </td>
                                                    <td>
                                                        bryuellen@dayrep.com
                                                    </td>
                                                    <td>
                                                        New York
                                                    </td>
                                                    <td>
                                                        09/12/2018
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-8.jpg" alt="table-user"
                                                            class="mr-2 avatar-xs rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Kathryn S.
                                                            Collier</a>
                                                    </td>

                                                    <td>
                                                        collier@jourrapide.com
                                                    </td>
                                                    <td>
                                                        Canada
                                                    </td>
                                                    <td>
                                                        06/30/2018
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="table-user"
                                                            class="mr-2 avatar-xs rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Timothy Kauper</a>
                                                    </td>

                                                    <td>
                                                        thykauper@rhyta.com
                                                    </td>
                                                    <td>
                                                        Denmark
                                                    </td>
                                                    <td>
                                                        09/08/2018
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="table-user"
                                                            class="mr-2 avatar-xs rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Zara Raws</a>
                                                    </td>

                                                    <td>
                                                        austin@dayrep.com
                                                    </td>
                                                    <td>
                                                        Germany
                                                    </td>
                                                    <td>
                                                        07/15/2018
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!--end card body-->

                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->

                    </div>
                    <!--end row-->
@endsection