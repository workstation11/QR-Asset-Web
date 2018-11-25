<!-- Nomor Surat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomor_surat', 'Nomor Surat:') !!}
    {!! Form::number('nomor_surat', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Aset Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_aset_id', 'Data Aset Id:') !!}
    {!! Form::number('data_aset_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('users_id', 'Users Id:') !!}
    {!! Form::number('users_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Kejadian Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_kejadian', 'Tanggal Kejadian:') !!}
    {!! Form::date('tanggal_kejadian', null, ['class' => 'form-control']) !!}
</div>

<!-- Waktu Kejadian Field -->
<div class="form-group col-sm-6">
    {!! Form::label('waktu_kejadian', 'Waktu Kejadian:') !!}
    {!! Form::text('waktu_kejadian', null, ['class' => 'form-control']) !!}
</div>

<!-- Lokasi Kejadian Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lokasi_kejadian', 'Lokasi Kejadian:') !!}
    {!! Form::text('lokasi_kejadian', null, ['class' => 'form-control']) !!}
</div>

<!-- Kronologis Kejadian Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('kronologis_kejadian', 'Kronologis Kejadian:') !!}
    {!! Form::textarea('kronologis_kejadian', null, ['class' => 'form-control']) !!}
</div>

<!-- Mengetahui1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mengetahui1', 'Mengetahui1:') !!}
    {!! Form::text('mengetahui1', null, ['class' => 'form-control']) !!}
</div>

<!-- Jabatan Mengetahui1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jabatan_mengetahui1', 'Jabatan Mengetahui1:') !!}
    {!! Form::text('jabatan_mengetahui1', null, ['class' => 'form-control']) !!}
</div>

<!-- Mengetahui2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mengetahui2', 'Mengetahui2:') !!}
    {!! Form::text('mengetahui2', null, ['class' => 'form-control']) !!}
</div>

<!-- Jabatan Mengetahui2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jabatan_mengetahui2', 'Jabatan Mengetahui2:') !!}
    {!! Form::text('jabatan_mengetahui2', null, ['class' => 'form-control']) !!}
</div>

<!-- Check Field -->
<div class="form-group col-sm-6">
    {!! Form::label('check', 'Check:') !!}
    {!! Form::text('check', null, ['class' => 'form-control']) !!}
</div>

<!-- Jabatan Check Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jabatan_check', 'Jabatan Check:') !!}
    {!! Form::text('jabatan_check', null, ['class' => 'form-control']) !!}
</div>

<!-- Raised By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('raised_by', 'Raised By:') !!}
    {!! Form::text('raised_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Jabatan Raised By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jabatan_raised_by', 'Jabatan Raised By:') !!}
    {!! Form::text('jabatan_raised_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-actions">
    <a href="{!! route('asetHilangs.index') !!}" class="btn btn-danger">
        <i class="fa fa-check-square-o"></i> Cancel
    </a>
    {!! Form::submit('Save', ['class' => 'btn btn-success mr-1']) !!}
</div>
