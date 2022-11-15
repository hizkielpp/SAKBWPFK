@extends('reports.layout')
@section('content')
@push('css')
    <link rel="stylesheet" href="{{ asset('') }}vendor/datatables.net-dt/jquery.dataTables.min.css" r>
@endpush
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Index dari Logs</h2>
        </div>
        {{-- <div class="pull-right">
            <a class="btn btn-success" href="{{ route('reports.create') }}"> Create New Product</a>
        </div> --}}
    </div>
</div>

@if (session('success'))
    <div class="alert alert-success">
        <p>{{ session('success') }}</p>
    </div>
@endif
@if(session('name'))
    <div>
        Detail Logs untuk Bahan Berita Berjudul {{ session('name') }}
    </div>
@endif
<div class="card-body">
    {{ $dataTable->table() }}
</div>

</div>
@endsection
@push('scripts')
    {{ $dataTable->scripts() }}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
@endpush