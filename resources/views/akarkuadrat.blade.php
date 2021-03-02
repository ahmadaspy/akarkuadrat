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
    @if(session()->has('gagal'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session()->get('gagal') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="card mb-4">
    <div class="card-header">
        Akar Kuadrat
    </div>
    <div class="card-body">
        <p>
            Rumus abc merupakan alternatif pilihan ketika persamaan kuadrat sudah tidak bisa diselesaikan dengan metode faktorisasi maupun kuadrat sempurna.<br>
            Berikut rumus formula abc pada persamaan kuadrat \(ax2 +bx + c = 0\)<br>
            <div class="text-center">
                \(x = {-b \pm \sqrt{b^2-4ac} \over 2a} \)
            </div>

        </p>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        Test Input
    </div>
    <div class="card-body">

        <form action="{{ route('input')}}" method="POST" id="myform">
            @csrf
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" placeholder="Bambang" name="nama" required>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Masukan angka</label>
              <div class="col-sm-1" >
                <input type="number" class="form-control" id="a" placeholder="a" name="a">
              </div>
              <div class="col-sm-1 text-center">
                <label class="form-text">\(x^2\)</label>
              </div>
              <div class="col-sm-1 text-center">
                <label class="form-text">\(+\)</label>
              </div>
              <div class="col-sm-1">
                <input type="number" class="form-control" id="b" placeholder="b" name="b">
              </div>
              <div class="col-sm-1 text-center">
                <label class="form-text">\(x\)</label>
              </div>
              <div class="col-sm-1 text-center">
                <label class="form-text">\(+\)</label>
              </div>
              <div class="col-sm-1">
                <input type="number" class="form-control" id="c" placeholder="c" name="c">
              </div>
              <div class="col-sm-1 text-center">
                  <button onclick="functionhitung()" type="button" class="btn btn-primary" name="samadengan"> = </button>
              </div>
              <div class="col-sm-1">
                <input type="number" class="form-control" id="x1" placeholder="x1" name="x1" readonly>
              </div>
              <div class="col-sm-1">
                <input type="number" class="form-control" id="x2" placeholder="x2" name="x2" readonly>
              </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
          </form>
    </div>
</div>
@endsection
@section('scriptbawah')
    <script>
        function functionhitung(){
            var a = document.getElementById("a").value;
            var b = document.getElementById("b").value;
            var c = document.getElementById("c").value;
            var satu = b**2;
            console.log(satu);
            var dua = 4*a*c;
            console.log(dua);
            var akar = Math.sqrt(satu-dua);
            console.log(akar);
            var tiga = 2*a;
            console.log(tiga);
            var minb = b*(-1);
            console.log(minb);
            var x1 = (minb + akar)/tiga;
            console.log(x1);
            var x2 = (minb - akar)/tiga;
            console.log(x2);
            if(x1 == null || x2 == null){
                document.getElementById("myform").reset();
            }
            document.getElementById("x1").value = x1;
            document.getElementById("x2").value = x2;

        }
    </script>
@endsection
