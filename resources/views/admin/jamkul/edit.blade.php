@extends('adminlte::page')

@section('title', 'Edit Product')

@section('content_header')
<h1>Edit Fakultas</h1>
@stop

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{!! Form::model($jamkul, ['method' => 'PATCH','route' => ['jamkul.update', $jamkul],'files' => false]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jam Masuk :</strong>
            <input width="276" value="{{$jamkul->masuk}}" id="timepicker_masuk" name="masuk" class="form-control timepicker" required placeholder="Pilih Jam Masuk" />
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jam Keluar :</strong>
            <input width="276" value="{{$jamkul->keluar}}" id="timepicker_keluar" name="keluar" class="form-control timepicker" required placeholder="Pilih Jam Keluar"/>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jumah SKS:</strong>
            {!! Form::number('sks', null, ['class'=>'form-control', 'placeholder'=>'Jumlah SKS Jam Kuliah', 'required']) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@stop

@section('js')
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script>
    $('#timepicker_masuk').timepicker({
        uiLibrary: 'bootstrap4'
    });
    $('#timepicker_keluar').timepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
@stop