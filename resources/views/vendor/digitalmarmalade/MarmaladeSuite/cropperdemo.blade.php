@extends('vendor.digitalmarmalade.MarmaladeSuite.master')

@section('head')
@parent
{!! \DigitalMarmalade\Cropper\CropperOutput::header() !!}
@endsection

@section('main')

<form method="post" enctype="multipart/form-data" action="{{ route('msuiteCropperDemoUpload') }}" target="_blank" class="main-form">

    {!! csrf_field() !!}
    <section class="widget section-banner">
        <h1>Image Cropper</h1>
        <p class="standard">
            <span class="input-file-container">
                <span class="label">No file selected.</span>
                <span class="file-name"></span>
                {!! Cropper::file('cropme') !!}
            </span>
            <label>File</label>
        </p>
    </section>

    <div class="action-buttons">		
        <button type="submit" class="btn btn-save">Submit</button>  
    </div>
    
    {!! Overlay::setName('test123')->setTemplate('cropper::overlay')->render() !!}
</form>

@endsection
