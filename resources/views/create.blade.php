@extends('app')

@section('css')
    @parent
@endsection

@section('content')
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="x_title">
                <h2>New Content <small>add a new content</small></h2>
                <div class="clearfix"></div>
                </div>
                    <div class="x_content">
                        @include('partials.alerts')
                        @include('partials.errors')
                        <br />
                        <form id="demo-form2" method="POST" enctype="multipart/form-data" action="{{ url('/content') }}" data-parsley-validate class="form-horizontal form-label-left">
                        @include('partials.form.create')
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection



@section('scripts')
    @parent

@endsection