<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('sweetalert::alert')
        <!-- Navbar -->
        @include('layout.inc.nav')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layout.inc.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Blank Page</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">@yield('title')</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        @yield('content')
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
    <script>
        $('#tambah-row').click(function() {
            let tbody = $("tbody");
            let no = tbody.find("tr").length + 1,
                penerbit = $('#nama_penerbit').val(),
                judul_buku = $("#buku_id").find("option:selected").text();
            let newRow = "<tr>";
            newRow += "<td>" + no + "</td>"
            newRow += "<td>" + judul_buku + "</td>"
            newRow += "<td>" + penerbit + "</td>"
            newRow += "<td><button type='button' class='btn btn-danger btn-sm hapus-row'>Remove</button></td>";
            newRow += "</tr>"
            tbody.append(newRow);

            $('.hapus-row').click(function() {
                $(this).closest('tr').remove();
            })
        });

        $('#category_id').change(function() {
            //let id = document.getElementsById('category_id').value;
            //let category_name = document.getElementsById('category_id').text;
            let category_id = $(this).val(),
                option = "";
            console.log(category_id);
            let category_name = $(this).find('option:select').text();

            $.ajax({
                type: "get",
                dataType: "json",
                url: "/getBuku/" + category_id,
                success: function(data) {
                    option += "<option value=''>Pilih Judul Buku</option>";
                    $.each(data.data, function(index, value) {
                        $('#nama_penerbit').val(value.penerbit);
                        //console.log(value)
                        option += "<option value=" + value.id + ">" + value.judul + "</option>";
                    });
                    //console.log(option);
                    $('#buku_id').html(option);

                }
            });

        });
    </script>
</body>

</html>
