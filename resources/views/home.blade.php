@extends('layouts.app')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/DataTables/datatables.min.css')}}"/>
@endsection
@section('content')
<div class="container-fuid m-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Data Meeting Request') }}
                    <a class="btn btn-success pull-right" href="javascript:void(0);"
                    onclick="event.preventDefault();
                                  document.getElementById('export-data').submit();">
                     <i class="fa fa-file-excel-o mr-2"></i> {{ __('Export Data') }}
                 </a>
                 <form id="export-data" action="{{ route('meeting-schedule.export') }}" method="POST" class="d-none">
                    <input type="hidden" name="export_type" value="xls">
                    @csrf
                </form>
                </div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert {{ session('alert-class') }}" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    

                 
                    <table id="datatable" class="table table-bordered" width="100%">
                        <thead class="thead-dark text-center">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Instansi</th>
                                <th rowspan="2">Nama</th>
                                <th rowspan="2">No. Telepon</th>
                                <th colspan="5">Pertemuan</th>
                                <th rowspan="2">Dibuat</th>
                                <th rowspan="2">Status</th>
                                <th rowspan="2">Action</th>
                            </tr>
                            <tr>
                                <th>Jenis</th>
                                <th>Waktu</th>
                                <th>Lokasi</th>
                                <th>Anggota</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr>
                                    <td class="text-center"">{{++$i}}</td>
                                    <td>{{$item->instansi}}</td>
                                    <td>{{$item->cp}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td class="font-weight-bold @if($item->category =='online') text-success @endif">{{$item->category}}</td>
                                    <td>{{{\Carbon\Carbon::parse($item->schedule)->format('d/F/Y H:i')}}}</td>
                                    <td>{{$item->location}}</td>
                                    <td>{{$item->audient}}</td>
                                    <td>{{\Str::limit($item->description,50)}}</td>
                                    <td>{{{\Carbon\Carbon::parse($item->created_at)->diffForHumans()}}}</td>
                                    <td>
                                        @if ($item->status =='Waiting')
                                        <span class="badge badge-warning">{{$item->status}}</span>
                                        @elseif($item->status =='Approved')
                                        <span class="badge badge-success">{{$item->status}}</span>
                                        @elseif($item->status =='Decline')
                                        <span class="badge badge-danger">{{$item->status}}</span>
                                        @else
                                        <span class="badge badge-primary">{{$item->status}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            {{-- <a href="" class="btn btn-sm btn-success"><i class="fa fa-rocket"></i></a href=""> --}}
                                            <a href="{{route('meeting-schedule.edit',$item->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Edit</a href="">
                                            <a  href="javascript:void(0);" onclick="formRemoveData({{$item->id}});" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a href="">
                                          </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10">Tidak ada data dalam database</td>
                                </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->
<form id="form-deleteData" action="#" method="POST">
    @csrf @method('delete')
    <input type="submit" value="submit" style="display: none;">
</form>

@endsection

@section('script')
<script type="text/javascript" src="{{asset('vendor/DataTables/datatables.min.js')}}"></script>    
<script>
    $(document).ready(function(){
        $('#datatable').DataTable();
    });

    function formRemoveData(dataid){
        $("#form-deleteData").attr('action', '{{ url('/adm/meeting-schedule') }}/'+dataid);
        if(confirm('Apakah anda yakin akan menghapus data ini?')) { 
            $('#form-deleteData').submit();
        }
    }

</script>
@endsection
