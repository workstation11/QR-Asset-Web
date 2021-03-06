@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Aset Pengembalian
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'asetPengembalians.store']) !!}

                        @include('aset_pengembalians.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
