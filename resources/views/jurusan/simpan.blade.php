@extends('utama')

@section('content')

 <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data Jurusan</h3>
                    </div>
                    <form action="{{url('jurusan')}}" method="POST" role="form">
                    {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" placeholder="Isi Jurusan"/>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="{{url('jurusan')}}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

