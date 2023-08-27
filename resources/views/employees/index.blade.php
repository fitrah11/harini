@extends('employees.layouts')

@section('content')
<div class="row" style="background-color:  rgb(0, 98, 255);">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
    <h1>Gajih Pegawai</h1>

        </div>
        <div class="float-left my-2">
            <a class="btn btn-success"  href="{{ route('employees.create') }}">Tambah Pegawai</a>
        </div>
    </div>
</div>
    <table>
        <thead>
            <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <th>Divisi</th>
                <th>Lama Kerja</th>
                <th>Gaji</th>
                <th>Tunjangan</th>
                <th>Total</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->division }}</td>
                    <td>{{ $employee->hitungLamaKerja() }} tahun</td>
                    <td>{{ $employee->salary }}</td>
                    <td>{{ $employee->allowance }}</td>
                    <td>{{ $employee->total }}</td>
                    <td>
                        <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
