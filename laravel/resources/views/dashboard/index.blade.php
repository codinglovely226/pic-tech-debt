@extends('layouts.admin')
@section('scripts')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js"></script>
    <link href="https://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.0/lodash.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/dashboard/gridstack.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dashboard/gridstack.jQueryUI.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js" integrity="sha256-MZo5XY1Ah7Z2Aui4/alkfeiq3CopMdV/bbkc/Sh41+s=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/dashboard/patternomaly.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dashboard/dash.js') }}"></script>
@endsection
@section('styles')

    <link rel="stylesheet" href="{{ asset('css/dashboard/gridstack.min.css') }}" type="text/css" />
    <style media="screen" type="text/css">
		<style type="text/css">
        .grid-stack {
            
        }

        .grid-stack-item-content {
            /*margin-bottom: 10px;*/
            left: 15px;
            right: 15px;
			padding: 10px 17px;
			background: #fff;
			border: 1px solid #e6e9ed;
        }
        .grid-stack-item {
            
        }
 .defaultWidgetFrame {
    margin-bottom: 10px;
    padding: 10px 17px;
    background: #fff;
    border: 1px solid #e6e9ed;
}
.defaultWidgetFrameHeader .title {
    font-size: 18px;
    float: left;
    display: block;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
element.style {
    opacity: 1;
}
.defaultWidgetFrameHeader {
	/*border-bottom: 2px solid #e6e9ed;*/
    padding: 1px 5px 6px;
    margin-bottom: 10px;
}
/* Centered section inside the top navigation */
.topnav-centered {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
    </style>
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
	        <div class="card">
                <div class="card-header">
                    Home
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Dash!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
