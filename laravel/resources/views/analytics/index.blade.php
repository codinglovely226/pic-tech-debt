@extends('layouts.admin') 
@section('scripts')
<!-- remove soon -->
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- EasyQuery widgets settings -->
<script src="{{ asset('js/analytics/easyquery/eq.widget.settings.js') }}" type="text/javascript"></script>
<!-- EasyQuery script files -->
<script src="{{ asset('js/analytics/easyquery/eq.all.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/analytics/easyquery/eq.view.basic.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/analytics/easyquery/easychart.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/analytics/easyquery/easychart.google.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/analytics/easyquery/export.js') }}" type="text/javascript"></script>
@include('analytics.modal.loadquery') 
@include('analytics.modal.savequery') 
@endsection 
@section('styles')
<link href="{{ asset('css/analytics/easyquery/easyquery.css') }}" rel="stylesheet" type="text/css" media="screen">
<link href="{{ asset('css/analytics/easyquery/eq-icons-default.css') }}" rel="stylesheet" type="text/css" media="screen">
<link href="{{ asset('css/analytics/easyquery/eqview.css') }}" rel="stylesheet" type="text/css" media="screen"> 
@endsection 

@section('content')
<form action="./" id="__AjaxAntiForgeryForm" method="post">
    <input name="__RequestVerificationToken" type="hidden" value="j6BmDvXyu6RGRCk1EHEKzTVVVhlSOKs5HE7ha6vi1KhAmFWNB-v8tOsWFqHMmJ6X13nZadv6cQrm372IWyC_vLj8ENGD0Z7r0x_209AF63M1" />
</form>
<div class="content">
        <div class="row">
			<div class="col-12">
            <div class="card">
                <div class="card-header"> {{ trans('cruds.analytic.columns') }}
                    <div id="ClearQueryButton" class="btn btn-lg btn-link pull-right">
                        <span class="glyphicon glyphicon-remove"></span>
                        <span style="font-size: 1rem;"><span>Clear Query</span>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="columns-panel-container">
                        <!-- ColumnsPanel widget placeholder -->
                        <div id="ColumnsPanel"></div>
                    </div>
                </div>
                <div class="card-footer">
                    <h5>{{ trans('cruds.analytic.columns') }} {{ trans('cruds.analytic.sorting') }}</h5>
                    <div class="columns-sorting-container">
                        <div id="SortingBar"></div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
			<div class="col-12">
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.analytic.conditions') }}
                </div>
                <div class="card-body">
                        <!-- QueryPanel widget placeholder -->
                        <div id="QueryPanel"></div>
                </div>

            </div>
</div>
        </div>
        <div class="row">
			<div class="col-12">
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.analytic.result') }}
                    <span id="ResultCount" style="display:none; margin-left:20px; font-size:small"></span>

                    <span id="ResultExportButtons">
						 <a href="#" onclick="javascript:ExportCsv.run()">Export to Excel</a>   
					</span>
                </div>
                <div class="card-body">
                    <div id="ResultPanel" class="result-panel-content"> </div>
                    <div class="result-panel-content-padding"> </div>
                </div>

            </div>
</div>
        </div>

    </div>

<div id='loading_wrap'>
    <div class="loader"></div>
</div>
@endsection
