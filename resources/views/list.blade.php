@extends('template.home')
@section('script')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
@endsection
@section('content')
    @if(session()->has('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('sukses') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Input</h6>
    </div>
    <div class="card-body">
        <div class="overflow-auto">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>\(a\)</th>
                        <th>\(b\)</th>
                        <th>\(c\)</th>
                        <th>\(x1\)</th>
                        <th>\(x2\)</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                        <tr>
                            <td>{{ $data->firstItem() + $key }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->a }}</td>
                            <td>{{ $item->b }}</td>
                            <td>{{ $item->c }}</td>
                            <td>{{ $item->x1 }}</td>
                            <td>{{ $item->x2 }}</td>
                            <td><a class="btn btn-success" href="{{ route('inputedit', ['id' => $item->id]) }}"><i class="fas fa-edit text-white"></i></a></td>
                            <td><a class="btn btn-danger" href="{{  route('inputhapus', ['id' => $item->id]) }}"><i class="far fa-trash-alt text-white"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
