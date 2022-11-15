@extends('reports.layout')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Index Report Khusus Admin</h2>
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

<table class="table table-bordered">
    <tr>
        {{-- <th>ID</th> --}}
        <th>Judul Berita</th>
        <th>Status</th>
        {{-- <th width="280px">Action</th> --}}
        <th>Download</th>
        <th>Aksi</th>
    </tr>
    @foreach ($reports as $report)
    <tr>
        {{-- <td>{{ $report->id }}</td> --}}
        <td>{{ $report->name }}</td>
        <td>{{ $report->status }}</td>
        <td><a href="{{ route('report.download',$report->id) }}" class=""btn btn-info"">Download</a></td>
        @if ($report->status==="terupload")
        <td>
            <a class="btn btn-primary"href="/reports/{{ $report->id }}/edit?edit=diproses" onclick="return confirm('Apakah yakin akan diproses?');">Diproses</a>
            <a class="btn btn-danger"href="/reports/{{ $report->id }}/edit?edit=ditolak" onclick="return confirm('Apakah yakin akan ditolak?');">Ditolak</a>
        </td>        
        @elseif ($report->status==="diproses")
        <td>
            <a class="btn btn-info"href="/reports/{{ $report->id }}/edit?edit=validasi supervisor" onclick="return confirm('Apakah yakin akan divalidasi oleh supervisor');">Validasi Supervisor</a>
        </td>
        @elseif ($report->status==="validasi supervisor")
        <td>
            <a class="btn btn-success"href="/reports/{{ $report->id }}/edit?edit=sudah diposting" onclick="return confirm('Apakah yakin akan diposting');">Diposting</a>
        </td>         
        @endif
        {{-- <td>
            <form action="{{ route('reports.destroy',$report->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('reports.show',$report->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('reports.edit',$report->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td> --}}
    </tr>
    @endforeach

</table>
{{ $reports->links() }}
</div>
@endsection