
<!-- ================== BEGIN PAGE CSS STYLE ================== -->
<link href="{{ asset('public/plugins/jquery-tag-it/css/jquery.tagit.css') }}" rel="stylesheet" />
<link href="{{ asset('public/plugins/bootstrap-wysihtml5/src/bootstrap3-wysihtml5.css') }}" rel="stylesheet" />
<!-- ================== END PAGE CSS STYLE ================== -->
	
	
<!-- begin vertical-box -->
<div class="vertical-box with-grid inbox">
	<!-- begin vertical-box-column -->
	<div class="vertical-box-column width-200 bg-silver hidden-xs">
		<!-- begin vertical-box -->
		<div class="vertical-box">
			<!-- begin wrapper -->
			<div class="wrapper bg-silver text-center">
				<a href="{{ route('compose') }}" data-toggle="ajax" class="btn btn-inverse p-l-40 p-r-40 btn-sm">
					Compose
				</a>
			</div>
			<!-- end wrapper -->
			<!-- begin vertical-box-row -->
			<div class="vertical-box-row">
				<!-- begin vertical-box-cell -->
				<div class="vertical-box-cell">
					<!-- begin vertical-box-inner-cell -->
					<div class="vertical-box-inner-cell">
						<!-- begin scrollbar -->
						<div data-scrollbar="true" data-height="100%">
							<!-- begin wrapper -->
							<div class="wrapper p-0">
								<div class="nav-title"><b>FOLDERS</b></div>
								<ul class="nav nav-inbox">
									<li class="active"><a href="{{ route('inbox') }}" data-toggle="ajax"><i class="fa fa-inbox fa-fw m-r-5"></i> Inbox <span class="badge pull-right">52</span></a></li>
									<li><a href="{{ route('inbox') }}" data-toggle="ajax"><i class="fa fa-flag fa-fw m-r-5"></i> Important</a></li>
									<li><a href="{{ route('inbox') }}" data-toggle="ajax"><i class="fa fa-envelope fa-fw m-r-5"></i> Sent</a></li>
									<li><a href="{{ route('inbox') }}" data-toggle="ajax"><i class="fa fa-pencil-alt fa-fw m-r-5"></i> Drafts</a></li>
									<li><a href="{{ route('inbox') }}" data-toggle="ajax"><i class="fa fa-trash fa-fw m-r-5"></i> Trash</a></li>
								</ul>
								<div class="nav-title"><b>LABEL</b></div>
								<ul class="nav nav-inbox">
									<li><a href="javascript:;"><i class="fa fa-fw f-s-10 m-r-5 fa-circle text-inverse"></i> Admin</a></li>
									<li><a href="javascript:;"><i class="fa fa-fw f-s-10 m-r-5 fa-circle text-primary"></i> Designer & Employer</a></li>
									<li><a href="javascript:;"><i class="fa fa-fw f-s-10 m-r-5 fa-circle text-success"></i> Staff</a></li>
									<li><a href="javascript:;"><i class="fa fa-fw f-s-10 m-r-5 fa-circle text-warning"></i> Sponsorer</a></li>
									<li><a href="javascript:;"><i class="fa fa-fw f-s-10 m-r-5 fa-circle text-danger"></i> Client</a></li>
								</ul>
							</div>
							<!-- end wrapper -->
						</div>
						<!-- end scrollbar -->
					</div>
					<!-- end vertical-box-inner-cell -->
				</div>
				<!-- end vertical-box-cell -->
			</div>
			<!-- end vertical-box-row -->
		</div>
		<!-- end vertical-box -->
	</div>
	<!-- end vertical-box-column -->
	<!-- begin vertical-box-column -->
	<div class="vertical-box-column bg-white">
		<!-- begin vertical-box -->
		<div class="vertical-box">
			<!-- begin wrapper -->
			<div class="wrapper bg-silver">
				<span class="btn-group m-r-5">
					<a href="javascript:;" class="btn btn-white btn-sm"><i class="fa fa-envelope f-s-14 m-r-3 m-r-xs-0 t-plus-1"></i> <span class="hidden-xs">Send</span></a>
					<a href="javascript:;" class="btn btn-white btn-sm"><i class="fa fa-paperclip f-s-14 m-r-3 m-r-xs-0 t-plus-1"></i> <span class="hidden-xs">Attach</span></a>
				</span>
				<span class="dropdown">
					<a href="javascript:;" class="btn btn-white btn-sm" data-toggle="dropdown"><i class="fa fa-ellipsis-h f-s-14 t-plus-1"></i></a>
					<ul class="dropdown-menu dropdown-menu-left">
						<li><a href="javascript:;">Save draft</a></li>
						<li><a href="javascript:;">Show From</a></li>
						<li><a href="javascript:;">Check names</a></li>
						<li><a href="javascript:;">Switch to plain text</a></li>
						<li><a href="javascript:;">Check for accessibility issues</a></li>
					</ul>
				</span>
				<span class="pull-right">
					<a href="{{ route('inbox') }}" data-toggle="ajax" class="btn btn-white btn-sm"><i class="fa fa-times f-s-14 m-r-3 m-r-xs-0 t-plus-1"></i> <span class="hidden-xs">Discard</span></a>
				</span>
			</div>
			<!-- end wrapper -->
			<!-- begin vertical-box-row -->
			<div class="vertical-box-row bg-white">
				<!-- begin vertical-box-cell -->
				<div class="vertical-box-cell">
					<!-- begin vertical-box-inner-cell -->
					<div class="vertical-box-inner-cell">
						<!-- begin scrollbar -->
						<div data-scrollbar="true" data-height="100%" class="p-15">
							<!-- begin email form -->
							<form action="/" method="POST" name="email_to_form">
								<!-- begin email to -->
								<div class="email-to">
									<span class="float-right-link">
										<a href="#" data-click="add-cc" data-name="Cc" class="m-r-5">Cc</a>
										<a href="#" data-click="add-cc" data-name="Bcc">Bcc</a>
									</span>
									<label class="control-label">To:</label>
									<ul id="email-to" class="primary line-mode">
										<li>bootstrap@gmail.com</li>
										<li>google@gmail.com</li>
									</ul>
								</div>
								<!-- end email to -->
								
								<div data-id="extra-cc"></div>
								
								<!-- begin email subject -->
								<div class="email-subject">
									<input type="text" class="form-control form-control-lg" placeholder="Subject" />
								</div>
								<!-- end email subject -->
								<!-- begin email content -->
								<div class="email-content p-t-15">
									<textarea class="textarea form-control" id="wysihtml5" placeholder="Enter text ..." rows="20"></textarea>
								</div>
								<!-- end email content -->
							</form>
							<!-- end email form -->
						</div>
						<!-- end scrollbar -->
					</div>
					<!-- end vertical-box-inner-cell -->
				</div>
				<!-- end vertical-box-cell -->
			</div>
			<!-- end vertical-box-row -->
			<!-- begin wrapper -->
			<div class="wrapper bg-silver text-right">
				<button type="submit" class="btn btn-white p-l-40 p-r-40 m-r-5">Discard</button>
				<button type="submit" class="btn btn-primary p-l-40 p-r-40">Send</button>
			</div>
			<!-- end wrapper -->
		</div>
		<!-- end vertical-box -->
	</div>
	<!-- end vertical-box-column -->
</div>
<!-- end vertical-box -->


<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script>
    App.setPageTitle('52 Admin | Email - Compose');
	App.setPageOption({
		pageContentFullHeight: true,
		pageContentFullWidth: true,
    	clearOptionOnLeave: true
	});
    App.restartGlobalFunction();
    
	$.when(
		$.getScript('{{ asset("public/plugins/jquery-tag-it/js/tag-it.min.js") }}'),
		$.getScript('{{ asset("public/plugins/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.all.min.js") }}'),
		$.getScript('{{ asset("public/js/demo/email-compose.demo.min.js") }}'),
		$.Deferred(function( deferred ){
			$(deferred.resolve);
		})
	).done(function() {
		EmailCompose.init();
	});
</script>
<!-- ================== END PAGE LEVEL JS ================== -->