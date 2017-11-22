@extends('index')

@section('title')
	Jewellery
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

     <!-- JQuery DataTable Css -->
    {{ Html::style('bsbmd/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}
	
@endsection

@section('content')
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add Items</h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-pink">
                            <h2>Add Items</h2>
                            <a href="{{route('add-items.create')}}" class="btn btn-info m-t-15 waves-effect">Add New</a>
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                        	<th>Id</th>
                                            <th>name</th>
                                            <th>Item Image</th>
                                            <th>Net wt</th>
                                            <th>Gross wt</th>
                                            <th>Stone wt</th>
                                            <th>Other Details</th>
                                            <th>Description</th>
                                            <th>Caret</th>
                                            <th>Item_size</th>
                                            <th>Purity</th>
                                            <th>Height</th>
                                            <th>Width</th>
                                            <th>Discount</th>
                                            <th>Price</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        	<th>Id</th>
                                            <th>name</th>
                                            <th>Item Image</th>
                                            <th>Net wt</th>
                                            <th>Gross wt</th>
                                            <th>Stone wt</th>
                                            <th>Other Details</th>
                                            <th>Description</th>
                                            <th>Caret</th>
                                            <th>Item_size</th>
                                            <th>Purity</th>
                                            <th>Height</th>
                                            <th>Width</th>
                                            <th>Discount</th>
                                            <th>Price</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @if (count($items) > 0)
                                        	@foreach($items as $row)
                                            <tr>                                        	
                                            	<td>{{ $row->id }}</td>
                                                <td>{{ $row->name }} </td>
                                                <td>
                                                    <img src="{{url('storage/products',$row->item_image)}}" width="60" height="60" alt="{{ $row->name }}" />
                                                </td>
                                                <td>{{ $row->net_wt }} </td>
                                                <td>{{ $row->gross_wt }} </td>
                                                <td>{{ $row->stone_wt }} </td>
                                                <td>{{ $row->other_details }} </td>
                                                <td>{{ $row->description }} </td>
                                                <td>{{ $row->caret }} </td>
                                                <td>{{ $row->item_size }} </td>
                                                <td>{{ $row->purity }} </td>
                                                <td>{{ $row->height }} </td>
                                                <td>{{ $row->width }} </td>
                                                <td>{{ $row->discount }} </td>
                                                <td>{{ $row->price }} </td>
                                            	<td>
                                            		<a href="{{route('add-items.edit',$row->id)}}" class="btn btn-warning waves-effect">Edit</a>
                                            	</td>
                                            	<td>
                                            		<form id="delete_form" method="POST" action="{{ route('add-items.destroy',$row->id) }}">
    					                            	{{ csrf_field() }}
    					                            	<input name="_method" type="hidden" value="DELETE">
    					                                <button class="btn btn-danger waves-effect" type="submit">Delete</button>
    					                            </form>
                                            	</td>	                                   
                                            </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
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

    <!-- Jquery DataTable Plugin Js -->
    {{Html::script('bsbmd/plugins/jquery-datatable/jquery.dataTables.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/jszip.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}	
    {{Html::script('bsbmd/js/pages/tables/jquery-datatable.js') }}
@endsection