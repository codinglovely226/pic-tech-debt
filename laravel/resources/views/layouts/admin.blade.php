<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Bret Watson">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>{{ trans('panel.site_title').' - '.trans('panel.site_heading') }}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
  <!--  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" /> 
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" /> -->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
  <!--  <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" /> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <!-- Main styles for this application -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!--charting js --
    <link href="{{ asset('css/coreui-chartjs.min.css') }}" rel="stylesheet"> -->
    @yield('styles')
</head>

<body class="c-app ">
    <div class="c-sidebar c-sidebar-lg c-sidebar-dark c-sidebar-fixed @if (Route::is('dash*'))  @else c-sidebar-lg-show @endif" id="sidebar">
        <div class="c-sidebar-brand d-md-down-none">
            <img class="c-sidebar-brand-full" width="46" height="46" alt="PICSI Logo" src="{{ asset('img/amanita-muscaria.svg')}}" />

            <img class="c-sidebar-brand-minimized" width="46" height="46" alt="PICSI Logo" src="{{ asset('img/amanita-muscaria.svg')}}" />
            <h2>&nbsp;&nbsp;picsi</h2>
        </div>
        <!-- start sidebar menu-->
        <ul class="c-sidebar-nav">
        @if (Route::is('settings*'))
	        @include('partials.adminmenu')
		@elseif (Route::is('analytics*'))
			@include('partials.analytic-sidebar')
		@elseif (Route::is('dashboard*'))
			@include('partials.nomenu')
		@else
		    @include('partials.adminmenu')
        @endif
        </ul>
    </div>
    <div class="c-wrapper c-fixed-components">
		{{-- /* if the window is too small we want to give the user a menu button */ --}}
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
             <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
          <svg class="c-icon c-icon-lg">
            <use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-menu')}}"></use>
          </svg>
        </button> 
            <a class="c-header-brand d-lg-none" href="#">
                <img class="c-sidebar-brand-full" width="46" height="46" alt="PICSI Logo" src="{{ asset('img/amanita-muscaria.svg')}}" />
            </a>
            <!-- WE want to hide the sidebar -- normally, but for Dashboard we'll show this ##### -->
            
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none @if (Route::is('dash*')) visible @else invisible @endif" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
          <svg class="c-icon c-icon-lg">
            <use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-menu')}}"></use>
          </svg>
        </button> 

            <!-- main menu items - will have underscores and drop downs when on page -->
            <ul class="c-header-nav d-md-down-none">
			    <li class="c-header-nav-item px-3">
					<a class="c-header-nav-link" href="/">
						App
					</a>
				</li>
			    @can('dash_access')
			    <li class="c-header-nav-item px-3">
			        <a href="{{ route("dashboard.index") }}" class="c-header-nav-link">
						@if(Route::is('dashboard*'))
			            <strong>{{ trans('global.dashboard') }}</strong>
			            @else
			            {{ trans('global.dashboard') }}
			            @endif
			        </a>
			    </li>
			    @endcan 
			    @can('analytic_access')
			    <li class="c-header-nav-item px-3">
			        <a href="{{ route("analytics.index") }}" class="c-header-nav-link">
						@if(Route::is('analytics*'))
						  <strong>{{ trans('cruds.analytic.title') }}</strong>
						@else
						    {{ trans('cruds.analytic.title') }}
						@endif
					</a>
			    </li>
			    @endcan @can('doc_access')
			    <li class="c-header-nav-item px-3">
			        <a href="{{ route("docs.index") }}" target="_blank" class="c-header-nav-link">
						{{ trans('cruds.doc.title') }}
					</a>
			    </li>
			    @endcan
			    <li class="c-header-nav-item px-3">
			        <a class="c-header-nav-link" href="#">
						@if(Route::is('admin*'))
						  <strong>{{ trans('global.admin') }}</strong>
						@else
							{{ trans('global.admin') }}
						@endif	  
				  </a>
			    </li>
			</ul>
            <!-- everyone always has this stuff -->
            <ul class="c-header-nav ml-auto mr-4">
                <!-- notifications -->
                <li class="c-header-nav-item d-md-down-none mx-2 dropdown notifications-menu">
                    <a href="#" class="c-header-nav-link" data-toggle="dropdown">
                        <svg class="c-icon">
					<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-bell')}}"></use>
				  </svg> @php($alertsCount = 0) {{-- \Auth::user()->userUserAlerts()->where('read', false)->count()) --}}
				  @if($alertsCount > 0)
                        <span class="badge badge-warning navbar-badge">
							{{ $alertsCount }}
						</span> 
				 @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        @if(0>1) {{-- count($alerts = \Auth::user()->userUserAlerts()->withPivot('read')->limit(10)->orderBy('created_at', 'ASC')->get()->reverse()) > 0) --}}
							@foreach($alerts as $alert)
                        <div class="dropdown-item">
                            <a href="{{ $alert->alert_link ? $alert->alert_link : " # " }}" target="_blank" rel="noopener noreferrer">
									@if($alert->pivot->read === 0) <strong> @endif
										{{ $alert->alert_text }}
									@if($alert->pivot->read === 0) </strong> @endif
								</a>
                        </div>
                        @endforeach 
                        @else
                        <div class="text-center">
                            {{ trans('global.no_alerts') }}
                        </div>
                        @endif
                    </div>
                </li>
                <!-- mail icon -->
                <li class="c-header-nav-item d-md-down-none mx-2">
                    <a class="c-header-nav-link" href="#">
                        <svg class="c-icon">
					<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-envelope-open')}}"></use>
				  </svg>
                    </a>
                </li>
                <!-- avatar - maybe not an image? - lets try user icon  -->
                <li class="c-header-nav-item dropdown">
                    <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <!-- <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"></div>  hiding for the moment -->
                        <svg class="c-icon">
				<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-user')}}"></use>
			  </svg>
                    </a>
                    <!-- dropdown -->
                    <div class="dropdown-menu dropdown-menu-right pt-0">
                        <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
			                  <use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-bell')}}"></use>
			                </svg> Notifications<span class="badge badge-info ml-auto">3</span></a>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
			                  <use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-envelope-open')}}"></use>
			                </svg> Messages<span class="badge badge-success ml-auto">42</span></a>

                        <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>

                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
			                  <use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-user')}}"></use>
			                </svg> Profile</a>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
			                  <use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-settings')}}"></use>
			                </svg> Settings</a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            <svg class="c-icon mr-2">
			                  <use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-account-logout')}}"></use>
			                </svg> Logout</a>
							<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
                    </div>
                    <!-- end dropdown -->
                </li>
            </ul>

            <!-- we will use this space for main app scrollspy and submenus for Analytics  -->
            @if(Route::is('analytics*'))
            <div class="c-subheader px-3">
				<button type="button" class="btn btn-ghost-dark" id="SaveQueryButton">
					<svg class="c-icon mr-2">
						<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-cloud-upload')}}"></use>
			        </svg>
					<span style="font-size: 1rem;"><span>Save Query</span></span>
				</button>
	            <button type="button" class="btn btn-ghost-dark" id="LoadQueryButton">
					<svg class="c-icon mr-2">
						<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-cloud-download')}}"></use>
			        </svg>
					<span style="font-size: 1rem;"><span>Load Query</span></span>
				</button>
	            <button type="button" class="btn btn-ghost-dark" id="ExecuteQueryButton">
					<svg class="c-icon mr-2">
						<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-media play')}}"></use>
			        </svg>
					<span style="font-size: 1rem;"><span>Run Query</span></span>
				</button>
            </div>
			            
			@endif
        
        </header>
        <!-- start of main body area -->
        <div class="c-body">
            <main class="c-main">
                @yield('content')
            </main>
            <footer class="c-footer fixed-bottom">
                <div>PICSI application &copy; 2020 IT Interim Management Pty Ltd.</div>
                <div class="ml-auto">
                    <p><small>doc id here</small></p>
                </div>
            </footer>
        </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('js/coreui_v3.2.2/coreui.bundle.min.js')}}"></script>
    <!--[if IE]><!-->
    <script src="{{ asset('js/coreui_v3.2.2/svgxuse.min.js')}}"></script>
    <!--<![endif]-->
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('js/coreui_v3.2.2/coreui-chartjs.bundle.min.js')}}"></script> 
    <script src="{{ asset('js/coreui_v3.2.2/coreui-utils.js')}}"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
    <!--<script src="https://unpkg.com/@coreui/coreui@3.2/dist/js/coreui.min.js"></script>-->
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <!--<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    </script>
    <script>
        $(function() {
  let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
  let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
  let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
  let printButtonTrans = '{{ trans('global.datatables.print') }}'
  let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'
  let selectAllButtonTrans = '{{ trans('global.select_all') }}'
  let selectNoneButtonTrans = '{{ trans('global.deselect_all') }}'

  let languages = {
    'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json',
        'de': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/German.json',
        'es': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json',
        'hu': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Hungarian.json',
        'pt': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese.json',
        'fr': 'https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json',
        'ru': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Russian.json',
        'it': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Italian.json',
        'ar': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json',
        'pt-br': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json',
        'id': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Indonesian.json',
        'ro': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Romanian.json',
        'gr': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Greek.json',
        'zh': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Chinese-traditional.json',
        'no': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Norwegian-Bokmal.json',
        'lv': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Latvian.json',
        'hi': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Hindi.json',
        'vi': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Vietnamese.json',
        'ta': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Tamil.json'
  };

  $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
  $.extend(true, $.fn.dataTable.defaults, {
    language: {
      url: languages['{{ app()->getLocale() }}']
    },
    columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
    }, {
        orderable: false,
        searchable: false,
        targets: -1
    }],
    select: {
      style:    'multi+shift',
      selector: 'td:first-child'
    },
    order: [],
    scrollX: true,
    pageLength: 100,
    dom: 'lBfrtip<"actions">',
    buttons: [
      {
        extend: 'selectAll',
        className: 'btn-primary',
        text: selectAllButtonTrans,
        exportOptions: {
          columns: ':visible'
        },
        action: function(e, dt) {
          e.preventDefault()
          dt.rows().deselect();
          dt.rows({ search: 'applied' }).select();
        }
      },
      {
        extend: 'selectNone',
        className: 'btn-primary',
        text: selectNoneButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'copy',
        className: 'btn-default',
        text: copyButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'csv',
        className: 'btn-default',
        text: csvButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'excel',
        className: 'btn-default',
        text: excelButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'print',
        className: 'btn-default',
        text: printButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'colvis',
        className: 'btn-default',
        text: colvisButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      }
    ]
  });

  $.fn.dataTable.ext.classes.sPageButton = '';
});
    </script>
    <script>
        $(document).ready(function () {
    $(".notifications-menu").on('click', function () {
        if (!$(this).hasClass('open')) {
            $('.notifications-menu .label-warning').hide();
            $.get('/admin/user-alerts/read');
        }
    });
});
    </script>
    @yield('scripts')

</body>

</html>
