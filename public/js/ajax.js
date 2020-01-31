$(function() {
	$("#btn-add").on("click", function(e) {
		if ($("#nome").val() == "") {
			e.preventDefault();
			return false;
		}
		else {
			$(".modal-bg").show();

			$.ajax({
				type: "GET",
				success: function() {
					$(".modal").append("<h3>Cadastro realizado com sucesso!</h3>").addClass("title-modal");
				}
			});
		}
	});
});