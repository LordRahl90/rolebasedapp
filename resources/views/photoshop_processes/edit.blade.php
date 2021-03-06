@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Photoshop App
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($photoshopProcess, ['route' => ['photoshopProcesses.update', $photoshopProcess->id], 'method' => 'patch']) !!}

                        @include('photoshop_processes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection