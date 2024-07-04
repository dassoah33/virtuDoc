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
            <h2 class="m-0">Logs des connexions</h2>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="px-3">
    <!-- Start Content-->
    <div class="container-fluid">
        <table id="logs-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date de connexion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($logs as $log)
                    <tr>
                        <td>#{{ $log->id }}</td>
                        <td>{{ \Carbon\Carbon::parse($log->date_de_connexion)->locale('fr')->isoFormat('dddd DD MMMM YYYY à HH:mm') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
