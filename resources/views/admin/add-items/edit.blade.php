@extends('index')

@section('title')
    Edit Permission
@endsection

@section('extra-css')
<!-- Colorpicker Css -->
    {{ Html::style('bsbmd/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}

    <!-- Dropzone Css -->
    {{ Html::style('bsbmd/plugins/dropzone/dropzone.css') }}

    <!-- Multi Select Css -->
    {{ Html::style('bsbmd/plugins/multi-select/css/multi-select.css') }}

    <!-- Bootstrap Spinner Css -->
    {{ Html::style('bsbmd/plugins/jquery-spinner/css/bootstrap-spinner.css') }}

    <!-- Bootstrap Tagsinput Css -->
    {{ Html::style('bsbmd/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}

    <!-- Bootstrap Select Css -->
    {{ Html::style('bsbmd/plugins/bootstrap-select/css/bootstrap-select.css') }}

    <!-- noUISlider Css -->
    {{ Html::style('bsbmd/plugins/nouislider/nouislider.min.css') }}
    
@endsection

@section('content')
        <div class="container-fluid">
            <div class="block-header">
                <h2>Edit Permission</h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-pink">
                            <h2>
                                Edit Permission
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                           <form id="form_validation" method="POST" action="{{ route('add-items.update',$item->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="_method" type="hidden" value="PUT">
                                                <input type="text" class="form-control" name="name" value="{{ $item->name }}" required>
                                                <label class="form-label">Name</label>
                                            </div>
                                            @if ($errors->has('name'))
                                                <label id="name-error" class="error" for="name">{{ $errors->first('name') }}</label>
                                            @endif
                                        </div>
                                    </div>                                    
                                </div> 

                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="net_wt" value="{{ $item->net_wt }}" required>
                                                <label class="form-label">Net Weight</label>
                                            </div>
                                            @if ($errors->has('net_wt'))
                                                <label id="net_wt-error" class="error" for="name">{{ $errors->first('net_wt') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="stone_wt" value="{{ $item->stone_wt }}">
                                                <label class="form-label">Stone Weight</label>
                                            </div>
                                             @if ($errors->has('stone_wt'))
                                                <label id="stone_wt-error" class="error" for="stone_wt">{{ $errors->first('stone_wt') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                     <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="gross_wt" value="{{ $item->gross_wt }}">
                                                <label class="form-label">Gross Weight</label>
                                            </div>
                                             @if ($errors->has('gross_wt'))
                                                <label id="name-error" class="error" for="name">{{ $errors->first('gross_wt') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="caret" value="{{ $item->caret }}" required>
                                                <label class="form-label">Caret</label>
                                            </div>
                                             @if ($errors->has('caret'))
                                                <label id="name-error" class="error" for="name">{{ $errors->first('caret') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="purity" value="{{ $item->purity }}">
                                                <label class="form-label">Purity</label>
                                            </div>
                                             @if ($errors->has('purity'))
                                                <label id="name-error" class="error" for="name">{{ $errors->first('purity') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="height" value="{{ $item->height }}">
                                                <label class="form-label">Height</label>
                                            </div>
                                             @if ($errors->has('height'))
                                                <label id="name-error" class="error" for="name">{{ $errors->first('height') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="width" value="{{ $item->width }}">
                                                <label class="form-label">Width</label>
                                            </div>
                                             @if ($errors->has('width'))
                                                <label id="name-error" class="error" for="name">{{ $errors->first('width') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="item_size" value="{{ $item->item_size }}" required>
                                                <label class="form-label">Item Size</label>
                                            </div>
                                             @if ($errors->has('item_size'))
                                                <label id="name-error" class="error" for="name">{{ $errors->first('item_size') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="discount" value="{{ $item->discount }}">
                                                <label class="form-label">Discount</label>
                                            </div>
                                             @if ($errors->has('discount'))
                                                <label id="name-error" class="error" for="name">{{ $errors->first('discount') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="price" value="{{ $item->price }}" required>
                                                <label class="form-label">Price</label>
                                            </div>
                                             @if ($errors->has('price'))
                                                <label id="name-error" class="error" for="name">{{ $errors->first('price') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                               
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="description" value="{{ $item->description }}" required>
                                                <label class="form-label">Description</label>
                                            </div>
                                             @if ($errors->has('description'))
                                                <label id="name-error" class="error" for="name">{{ $errors->first('description') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="other_details" value="{{ $item->other_details }}"required>
                                                <label class="form-label">Other Details</label>
                                            </div>
                                             @if ($errors->has('other_details'))
                                                <label id="name-error" class="error" for="name">{{ $errors->first('other_details') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file" class="form-control" name="item_image">
                                                <label class="form-label"></label>
                                            </div>
                                            @if ($errors->has('item_image'))
                                                <label id="name-error" class="error" for="name">{{ $errors->first('item_image') }}</label>
                                            @endif
                                        </div>                                        
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->           
        </div>
@endsection

@section('extra-script')
    {{Html::script('bsbmd/plugins/autosize/autosize.js')}}
    {{Html::script('bsbmd/plugins/momentjs/moment.js')}}
    {{Html::script('bsbmd/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}
    {{Html::script('bsbmd/js/pages/forms/basic-form-elements.js')}}
    {{Html::script('bsbmd/plugins/jquery-validation/jquery.validate.js')}}
    {{Html::script('bsbmd/plugins/jquery-steps/jquery.steps.js')}}
    {{Html::script('bsbmd/plugins/sweetalert/sweetalert.min.js')}}
    {{Html::script('bsbmd/js/pages/forms/form-validation.js')}}
@endsection
