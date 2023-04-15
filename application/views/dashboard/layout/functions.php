<script type="text/javascript">
	if (window.history.replaceState) {
		window.history.replaceState(null, null, window.location.href);
	}

	$(function() {
		$(".close-sidebar-btn").click(function() {
			var t = $(this).attr("data-class");
			$(".app-container").toggleClass(t);

			var n = $(this);
			n.hasClass("is-active") ? n.removeClass("is-active") : n.addClass("is-active");
		});

		$('i.fa-eye').on('click', function (event) {
            var target = $(event.target);
            var targetParent = $(target).parent('div');
            $(targetParent).children('input:password').attr("type", "text");
            $(targetParent).children('i.fas.fa-eye-slash').css("display", "flex");
            $(targetParent).children('i.fas.fa-eye').css("display", "none");
        });

        $('i.fa-eye-slash').on('click', function (event) {
            var target = $(event.target);
            var targetParent = $(target).parent('div');
            $(targetParent).children('input:text').attr("type", "password");
            $(targetParent).children('i.fas.fa-eye-slash').css("display", "none");
            $(targetParent).children('i.fas.fa-eye').css("display", "flex");
        });

		var switched = false;
		$(".switch-container-class").on("click", function() {
			var el = $(this);
			var t = el.attr("data-class");

			if (!switched) {
				switched = true;
				var value = el.find('input[type=checkbox]').is(':checked') ? 1 : 0;

				$.ajax({
					type: 'post',
					url: '<?= base_url('admin/save-settings') ?>',
					data: {
						save: true,
						type: t,
						value: value,
						setting: 'global'
					},
					dataType: 'json',
					success: function(response) {
						switched = false;

						if (response.status) {
							$(".app-container").toggleClass(t);
							el.parent().find(".switch-container-class").removeClass("active");
							el.addClass("active");

							toastr.success(response.message, '', {
								preventDuplicates: true
							});
						} else {
							toastr.error('Some error occurred, please try again!', '', {
								preventDuplicates: true
							});
						}
					}
				});
			}
		});

		var header = false;
		$(".switch-header-cs-class").on("click", function() {
			var el = $(this);
			var t = el.attr("data-class");

			if (!header) {
				header = true;

				$.ajax({
					type: 'post',
					url: '<?= base_url('admin/save-settings') ?>',
					data: {
						save: true,
						type: 'header-class',
						value: t,
						setting: 'color'
					},
					dataType: 'json',
					success: function(response) {
						header = false;

						if (response.status) {
							$(".switch-header-cs-class").removeClass("active");
							el.addClass("active");

							$(".app-header").attr("class", "app-header");
							$(".app-header").addClass("header-shadow " + t);

							toastr.success(response.message, '', {
								preventDuplicates: true
							});
						} else {
							toastr.error('Some error occurred, please try again!', '', {
								preventDuplicates: true
							});
						}
					}
				});
			}
		});

		var sidebar = false;
		$(".switch-sidebar-cs-class").on("click", function() {
			var el = $(this);
			var t = el.attr("data-class");

			if (!sidebar) {
				sidebar = true;

				$.ajax({
					type: 'post',
					url: '<?= base_url('admin/save-settings') ?>',
					data: {
						save: true,
						type: 'sidebar-class',
						value: t,
						setting: 'color'
					},
					dataType: 'json',
					success: function(response) {
						sidebar = false;

						if (response.status) {
							$(".switch-sidebar-cs-class").removeClass("active");
							el.addClass("active");

							$(".app-sidebar").attr("class", "app-sidebar");
							$(".app-sidebar").addClass("sidebar-shadow " + t);

							toastr.success(response.message, '', {
								preventDuplicates: true
							});
						} else {
							toastr.error('Some error occurred, please try again!', '', {
								preventDuplicates: true
							});
						}
					}
				});
			}
		});

		var theme = false;
		$(".switch-theme-class").on("click", function() {
			var el = $(this);
			var t = el.attr("data-class");

			if (!theme) {
				theme = true;
				var other = "app-theme-white" == t ? "app-theme-gray" : "app-theme-white";

				$.ajax({
					type: 'post',
					url: '<?= base_url('admin/save-settings') ?>',
					data: {
						save: true,
						type: t,
						value: 1,
						other: other,
						setting: 'global'
					},
					dataType: 'json',
					success: function(response) {
						theme = false;

						if (response.status) {
							if ("app-theme-white" == t) {
								$(".app-container").removeClass("app-theme-gray");
								$(".app-container").addClass(t);
							} else {
								$(".app-container").removeClass("app-theme-white")
								$(".app-container").addClass(t);
							}

							el.parent().find(".switch-theme-class").removeClass("active");
							el.addClass("active");

							toastr.success(response.message, '', {
								preventDuplicates: true
							});
						} else {
							toastr.error('Some error occurred, please try again!', '', {
								preventDuplicates: true
							});
						}
					}
				});
			}
		});

		var loginPage = false;
		$(".switch-login-cs-class").on("click", function() {
			var el = $(this);
			var t = el.attr("data-class");

			if (!loginPage) {
				loginPage = true;

				$.ajax({
					type: 'post',
					url: '<?= base_url('admin/save-settings') ?>',
					data: {
						save: true,
						type: 'login-class',
						value: t,
						setting: 'color'
					},
					dataType: 'json',
					success: function(response) {
						loginPage = false;

						if (response.status) {
							$(".switch-login-cs-class").removeClass("active");
							el.addClass("active");

							toastr.success(response.message, '', {
								preventDuplicates: true
							});
						} else {
							toastr.error('Some error occurred, please try again!', '', {
								preventDuplicates: true
							});
						}
					}
				});
			}
		});

		var login = false;
		$(".switch-login-class").on("click", function() {
			var el = $(this);
			var t = el.attr("data-class");

			if (!login) {
				login = true;
				var other = "login-boxed" == t ? "login-full" : "login-boxed";

				$.ajax({
					type: 'post',
					url: '<?= base_url('admin/save-settings') ?>',
					data: {
						save: true,
						type: t,
						value: 1,
						other: other,
						setting: 'global'
					},
					dataType: 'json',
					success: function(response) {
						login = false;

						if (response.status) {
							el.parent().find(".switch-login-class").removeClass("active");
							el.addClass("active");

							toastr.success(response.message, '', {
								preventDuplicates: true
							});
						} else {
							toastr.error('Some error occurred, please try again!', '', {
								preventDuplicates: true
							});
						}
					}
				});
			}
		});
	});

	function initTinyMce(selecter) {
		tinymce.init({
			selector: '#' + selecter,
      		plugins: 'anchor autolink codesample image link lists media searchreplace',
      		toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media | align lineheight | numlist bullist indent outdent',
			menubar: false,
			statusbar: false,
			element_format: "html",
			height: "300px",
			language: "en",
			directionality: "ltr",
			automatic_uploads: true,
			file_picker_types: 'image',
			file_picker_callback: function (cb, value, meta) {
				var input = document.createElement('input');
				input.setAttribute('type', 'file');
				input.setAttribute('accept', 'image/*');
				input.onchange = function () {
					var file = this.files[0];

					var reader = new FileReader();
					reader.onload = function () {
						var id = 'blobid' + (new Date()).getTime();
						var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
						var base64 = reader.result.split(',')[1];
						var blobInfo = blobCache.create(id, file, base64);
						blobCache.add(blobInfo);

						cb(blobInfo.blobUri(), { title: file.name });
					};
					
					reader.readAsDataURL(file);
				};

				input.click();
			},
		});
	}

	function delPopup(el) {
		var id = $(el).data('index');
		var type = $(el).data('type');

		$('#id').val(id);
		$('#type').val(type);
	}

	function delVal() {
		var id = $('#id').val();
		var type = $('#type').val();

		$.ajax({
			url: "<?= base_url('admin/delete') ?>",
			type: "post",
			data: {
				id: id,
				type: type
			},
			dataType: 'json',
			success: function(response) {
                $('.del-record').modal('hide');

				if (response.status) {
					toastr.success(response.message, '', {
						timeOut: 2,
						onHidden: function() {
							location.reload(true);
						}
					});
				} else {
					toastr.error('Some error occurred, please try again!', '', {
						preventDuplicates: true
					});
				}
			}
		});
	}
</script>