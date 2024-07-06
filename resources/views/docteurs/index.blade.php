@extends('layouts.layout-guest')

@section('extra-css')
        <!-- third party css -->
        <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
        <!-- third party css end -->
@endsection

<style>
    .content-header {
        height: 100px;
        background: rgba(106, 27, 154, 0.15);
    }
</style>

@section('content')
<!-- start page title -->
<div class="content-header pt-5 ps-4">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="m-0">Liste des medecins</h2>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="px-3">
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            @foreach ($docteurs as $docteur)
            <div class="col-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div style="display: block; margin: auto; text-align: center;">
                            <img src="https://via.placeholder.com/200x200.png/000099?text=people+doctor+et" alt="" style="width: 50px; height: 50px; display: block; margin: auto;">
                        </div>
                        
                        <h5 class="text-center"><i class="fas fa-smile"></i> {{ $docteur->prenom }} {{ $docteur->nom }}</h5>

                        <h6 class="text-center"><i class="fas fa-stethoscope"></i> {{ $docteur->profession }}</h6>

                        <p class="text-center"><i class="fas fa-clock"></i> Exerce sa profession depuis {{ $docteur->duree_profession }} ans</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div> <!-- container -->
</div> <!-- content -->
@endsection

@section('extra-js')
        <!-- third party js -->
        <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#logs-table').DataTable({
                    language: {
                        url: "//cdn.datatables.net/plug-ins/1.10.25/i18n/French.json"
                    },
                    order: [[0, 'desc']] // Tri par défaut sur la première colonne (ID) en ordre décroissant
                });
            });
        </script>
@endsection
