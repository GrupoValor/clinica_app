@if (Session::has('msg-ok'))
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">
							<i class="ace-icon fa fa-times"></i>
						</button>
						{{ Session::get('msg-ok') }}
					</div>
@endif
@if (Session::has('msg-error'))
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">
							<i class="ace-icon fa fa-times"></i>
						</button>
						<strong>Error:</strong>
						{{ Session::get('msg-error') }}
						<br />
					</div>
@endif