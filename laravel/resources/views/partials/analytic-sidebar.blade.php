<li class="c-sidebar-nav-item">
	<div class="card" style="width: 310px; margin: 0 5px 20px 5px !important;min-height: 400px">
	<div class="card-header text-dark">
    {{ trans('cruds.analytic.fields') }}
  </div>
	<div class="card-body text-dark flex-fill" style="padding: .25rem;">
			<!-- EntitiesPanel widget placeholder -->
			<div id="EntitiesPanel" onselectstart="return false"></div>
	</div>
	</div>
</li>
{{-- Hide SQl panel for everyone except Admins --}}
@if (auth()->check())
   @if (auth()->user()->getIsAdminAttribute())
		<li class="c-sidebar-nav-item">
			<div class="card" style="width: 310px; margin: 0 5px 20px 5px !important; min-height: 200px">
				<div class="card-header text-dark">
    {{ trans('cruds.analytic.sql') }}
  </div>
			<div class="card-body text-dark flex-fill" style="padding: .25rem;">
				<!-- we might need to fix this -->
				<div id="SqlPanel" class="sql-block">
					<div class="sql-panel-result"></div>
				</div>
				
			</div>
			</div>
		</li>		
   @endif
@endif
