@extends('layouts.app')
@section('style')
@endsection
@section('content')
<div class="container-fuid m-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Data Meeting Request') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('meeting-schedule.update',$data->id)}}" method="POST">
                        @csrf @method('PATCH') 
                        <div class="form-group row">
                            <label for="set_jenis_meeting" class="col-sm-2 col-form-label">Jenis Pertemuan</label>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" value="online" type="radio" name="category" id="set_category_online" @if($data->category =='online') checked @endif>
                                    <label class="form-check-label" for="set_category_online">WEBINAR</label>
                                  </div>
                            </div>
                            <div class="col">
                                  <div class="form-check">
                                    <input class="form-check-input" value="offline" type="radio" name="category" id="set_category_offline" @if($data->category =='offline') checked @endif>
                                    <label class="form-check-label" for="set_category_offline">PERTEMUAN LANGSUNG</label>
                                  </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="set_instansi" class="col-sm-2 col-form-label">Nama Instansi</label>
                            <div class="col-sm-10">
                            <input type="text" name="instansi" class="form-control"  id="set_instansi" value="{{$data->instansi}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="set_cp" class="col-sm-2 col-form-label">Nama Kontak</label>
                            <div class="col-sm-10">
                            <input type="text" name="cp" class="form-control" id="set_cp" value="{{$data->cp}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="set_phone" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-10">
                            <input type="text" name="phone" class="form-control" id="set_phone" value="{{$data->phone}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="set_audient" class="col-sm-2 col-form-label">Perkiraan Anggota Rapat</label>
                            <div class="col-sm-10">
                            <input type="number" min="0" name="audient" class="form-control" id="set_audient" value="{{$data->audient}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">Link Webinar / Tempat Pertemuan</div>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="location" rows="5" placeholder="Alamat Lokasi Lengkap">{{$data->location}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="set_date" class="col-sm-2 col-form-label">Tanggal Pertemuan yang diharapkan</label>
                            <div class="col">
                                <input type="date" name="date" class="form-control" id="set_date" required value="{{\Carbon\Carbon::parse($data->schedule)->format('Y-m-d')}}">
                            </div>
                            <label for="set_time" class="col-sm-2 col-form-label">Waktu</label>
                            <div class="col">
                                <input type="text" name="time" class="form-control" id="set_time" required value="{{\Carbon\Carbon::parse($data->schedule)->format('H:i')}}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-2">Deskripsi</div>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" rows="5">{{$data->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 text-info font-weight-bold">Status</div>
                            <div class="col-sm-10">
                                <select name="status" class="form-control">
                                    <option @if($data->status =='Waiting') selected @endif>Waiting</option>
                                    <option @if($data->status =='Approved') selected @endif>Approved</option>
                                    <option @if($data->status =='Decline') selected @endif>Decline</option>
                                    <option @if($data->status =='Finished') selected @endif>Finished</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Data</button>
                            </div>
                        </div>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection
