@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Rombel</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Rombel</li>
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
                    <h3 class="card-title">Edit Rombel</h3>

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
                    <form action="{{ route('rombongan_belajars.update', $rombel->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="id">ID:</label>
                            <input type="text" name="id" value="{{ $rombel->id }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="kode">Kode:</label>
                            <input type="text" name="kode" value="{{ $rombel->kode }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="thn_masuk">Tahun Masuk:</label>
                            <input type="number" name="thn_masuk" value="{{ $rombel->thn_masuk }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="dosen_pa">Dosen PA:</label>
                            <input type="text" name="dosen_pa" value="{{ $rombel->dosen_pa }}"
                                class="form-control">
                        </div>

                        

                        

                        
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

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
</div>

@include('admin.footer')