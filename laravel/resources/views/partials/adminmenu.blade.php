
	@can('user_management_access')
		<li class="c-sidebar-nav-dropdown">
			<a class="c-sidebar-nav-dropdown-toggle" href="#">
				<svg class="c-sidebar-nav-icon">
					<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-people')}}"></use>
				</svg> 
				{{ trans('cruds.userManagement.title') }}
			</a>
			<ul class="c-sidebar-nav-dropdown-items">
				@can('permission_access')
					<li class="c-sidebar-nav-item">
						<a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
							<svg class="c-sidebar-nav-icon">
								<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-lock-unlocked')}}"></use>
							</svg>
							{{ trans('cruds.permission.title') }}
						</a>
					</li>
				@endcan
				@can('role_access')
					<li class="c-sidebar-nav-item">
						<a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
							<svg class="c-sidebar-nav-icon">
								<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-briefcase')}}"></use>
							</svg>
							{{ trans('cruds.role.title') }}
						</a>
					</li>
				@endcan
				@can('user_access')
					<li class="c-sidebar-nav-item">
						<a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
							<svg class="c-sidebar-nav-icon">
								<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-user')}}"></use>
							</svg>
							{{ trans('cruds.user.title') }}
						</a>
					</li>
				@endcan
			</ul>
		</li>
	@endcan
	@can('site_management_access')
		<li class="c-sidebar-nav-dropdown">
			<a class="c-sidebar-nav-dropdown-toggle" href="#">
				<svg class="c-sidebar-nav-icon">
					<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-building')}}"></use>
				</svg>
				{{ trans('cruds.siteManagement.title') }}
			</a>
			<ul class="c-sidebar-nav-dropdown-items">
				@can('isoto_country_access')
					<li class="c-sidebar-nav-item">
						<a href="{{ route("admin.isoto-countries.index") }}" class="c-sidebar-nav-link {{ request()->is('admin/isoto-countries') || request()->is('admin/isoto-countries/*') ? 'active' : '' }}">
							<svg class="c-sidebar-nav-icon">
								<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-globe-alt')}}"></use>
							</svg>
							{{ trans('cruds.isotoCountry.title') }}
						</a>
					</li>
				@endcan
				@can('organisation_access')
					<li class="c-sidebar-nav-item">
						<a href="{{ route("admin.organisations.index") }}" class="c-sidebar-nav-link {{ request()->is('admin/organisations') || request()->is('admin/organisations/*') ? 'active' : '' }}">
							<svg class="c-sidebar-nav-icon">
								<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-sitemap')}}"></use>
							</svg>
							{{ trans('cruds.organisation.title') }}
						</a>
					</li>
				@endcan
				@can('team_access')
					<li class="c-sidebar-nav-item">
						<a href="{{ route("admin.teams.index") }}" class="c-sidebar-nav-link {{ request()->is('admin/teams') || request()->is('admin/teams/*') ? 'active' : '' }}">
							<svg class="c-sidebar-nav-icon">
								<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-factory')}}"></use>
							</svg>
							{{ trans('cruds.team.title') }}
						</a>
					</li>
				@endcan
				@can('specialist_access')
					<li class="c-sidebar-nav-item">
						<a href="{{ route("admin.specialists.index") }}" class="c-sidebar-nav-link {{ request()->is('admin/specialists') || request()->is('admin/specialists/*') ? 'active' : '' }}">
							<svg class="c-sidebar-nav-icon">
								<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-medical-cross')}}"></use>
							</svg>
							{{ trans('cruds.specialist.title') }}
						</a>
					</li>
				@endcan
				@can('subscription_access')
					<li class="c-sidebar-nav-item">
						<a href="{{ route("admin.subscriptions.index") }}" class="c-sidebar-nav-link {{ request()->is('admin/subscriptions') || request()->is('admin/subscriptions/*') ? 'active' : '' }}">
							<svg class="c-sidebar-nav-icon">
								<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-calendar')}}"></use>
							</svg>
							{{ trans('cruds.subscription.title') }}
						</a>
					</li>
				@endcan
				@can('site_data_set_access')
					<li class="c-sidebar-nav-item">
						<a href="{{ route("admin.site-data-sets.index") }}" class="c-sidebar-nav-link {{ request()->is('admin/site-data-sets') || request()->is('admin/site-data-sets/*') ? 'active' : '' }}">
							<svg class="c-sidebar-nav-icon">
								<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-link')}}"></use>
							</svg>
							{{ trans('cruds.siteDataSet.title') }}
						</a>
					</li>
				@endcan
			</ul>
		</li>
	@endcan
	@can('agent_ref_management_access')
		<li class="c-sidebar-nav-dropdown">
			<a class="c-sidebar-nav-dropdown-toggle" href="#">
				<svg class="c-sidebar-nav-icon">
					<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-color-fill')}}"></use>
				</svg> 
				{{ trans('cruds.agentRefManagement.title') }}
			</a>
			<ul class="c-sidebar-nav-dropdown-items">
				@can('agent_access')
					<li class="c-sidebar-nav-item">
						<a href="{{ route("admin.agents.index") }}" class="c-sidebar-nav-link {{ request()->is('admin/agents') || request()->is('admin/agents/*') ? 'active' : '' }}">
							<svg class="c-sidebar-nav-icon">
								<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-paint-bucket')}}"></use>
							</svg>
							{{ trans('cruds.agent.title') }}
						</a>
					</li>
				@endcan
				@can('data_set_access')
					<li class="c-sidebar-nav-item">
						<a href="{{ route("admin.data-sets.index") }}" class="c-sidebar-nav-link {{ request()->is('admin/data-sets') || request()->is('admin/data-sets/*') ? 'active' : '' }}">
							<svg class="c-sidebar-nav-icon">
								<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-object-group')}}"></use>
							</svg>
							{{ trans('cruds.dataSet.title') }}
						</a>
					</li>
				@endcan
			</ul>
		</li>
	@endcan
	@can('user_alert_access')
		<li class="c-sidebar-nav-item">
			<a href="{{ route("admin.user-alerts.index") }}" class="c-sidebar-nav-link {{ request()->is('admin/user-alerts') || request()->is('admin/user-alerts/*') ? 'active' : '' }}">
				<svg class="c-sidebar-nav-icon">
					<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-bell')}}"></use>
				</svg>
				{{ trans('cruds.userAlert.title') }}
			</a>
		</li>
	@endcan
	@php($unread = \App\QaTopic::unreadCount())
		<li class="c-sidebar-nav-item">
			<a href="{{ route("admin.messenger.index") }}" class="{{ request()->is('admin/messenger') || request()->is('admin/messenger/*') ? 'active' : '' }} c-sidebar-nav-link">
				<svg class="c-sidebar-nav-icon">
					<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-envelope-closed')}}"></use>
				</svg>
				<span>{{ trans('global.messages') }}</span>
				@if($unread > 0)
					<strong>( {{ $unread }} )</strong>
				@endif

			</a>
		</li>
		{{-- @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
			@can('profile_password_edit')
				<li class="c-sidebar-nav-item">
					<a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
						<svg class="c-sidebar-nav-icon">
							<use xlink:href="{{ asset('img/coreui_v3.2.2/sprites/free.svg#cil-envelope-closed')}}"></use>
						</svg>
						{{ trans('global.change_password') }} change to profile
					</a>
				</li>
			@endcan
		@endif --}}
