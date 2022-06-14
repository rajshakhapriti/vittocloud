 
$(document).ready(function () {
	setTimeout(function () {
		$(".alert-success").hide()
	}, 10000);

	$("#checkAll").change(function () {
		$("input[name='checkaction[]']").prop('checked', $(this).prop("checked"));
		if ($(this).prop("checked") == true) {
			$("#showmultiaction").show();
		} else if ($("input[name='checkaction[]']").prop("checked") == true) {
			$("#showmultiaction").show();
		} else {
			$("#showmultiaction").hide();
		}

	});

	function onclickcheck(id) {

		var a = $("input[name='checkaction[]']");
		if (a.filter(":checked").length > 0) {
			$("#showmultiaction").show();
		} else {
			$("#showmultiaction").hide();
		}
	}

	$('#viewEmailLog').on('show.bs.modal', function (e) {
		var rowid = $(e.relatedTarget).data('id');

		$.ajax({
			type: 'GET',
			url: base_url+"/admin/email/log/view/"+rowid,
			success: function (data) {
				$('#putEmailViewFormat').html(data);
			}
                    // , beforeSend: function () {
                    //     $("#addRepresentiveLoader").removeClass('hide');
                    // },
                    // complete: function () {
                    //     $("#addRepresentiveLoader").addClass('hide');
                    // },
                    // error: function () {
                    //     $("#addRepresentiveLoader").addClass('hide');
                    //     $("#ajaxErrorMsg").removeClass('hide');
                    // }
                });


	});

	
	$("#txtsearchable").keypress(function(){
		var keyword = $('#txtsearchable').val();
		var showPerRecode = $('#showPerRecode').val();
		if(keyword.length > 0){
			$.ajax({
				type: "POST",
				url: base_url+"/admin/email/log",
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, //Add this <-----
				data: {
					keyword: keyword,
					showPerRecode: showPerRecode,
					ajaxLoad: 1
				},
				success: function (data) {
					$('#logTable').html(data);
				}
			});
		}
	});
	$("#txtsearchable").keyup(function(){
		var keyword = $('#txtsearchable').val();
		var showPerRecode = $('#showPerRecode').val();
		if(keyword.length > 0){
			$.ajax({
				type: "POST",
				url: base_url+"/admin/email/log",
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, //Add this <-----
				data: {
					keyword: keyword,
					showPerRecode: showPerRecode,
					ajaxLoad : 1
				},
				success: function (data) {
					$('#logTable').html(data);
				}
			});
		}
	});
	$( "#showPerRecode" ).change(function() {

		var keyword = $('#txtsearchable').val();
		var showPerRecode = $( this ).val();
		
		$.ajax({
			type: "POST",
			url: base_url+"/admin/email/log",
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, //Add this <-----
				data: {
					keyword: keyword,
					showPerRecode: showPerRecode,
					ajaxLoad : 1
				},
				success: function (data) {
					$('#logTable').html(data);
				}
			});
		
	});
});