
		<!--end::Main-->
		<script>var hostUrl = "{{ url('assets/')  }}";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ url('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ url('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ url('assets/js/custom/widgets.js') }}"></script>
		<script src="{{ url('assets/js/custom/modals/create-app.js') }}"></script>
		<script src="{{ url('assets/js/custom/modals/upgrade-plan.js') }}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
		<script src="{{ url('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
		<br><br><br>
	</body>
	<!--end::Body-->
</html>