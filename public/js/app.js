var count = 2;
$(document).ready(function() {

	$('#form_article').submit(function(event) {
		var contenido = $('#contenido').html()
		$('#content_html').val(contenido)
		var title = $('#title-header').text()
		$('#title').val(title)
		var photo = $('#img-header').attr('src')
		$('#photo').val(photo)
	})

	$('#titulo').click(function() {
		var template = `<div class="row" id="edit-${count}">
							<div class="col-md-1 ocultar">
								<button class="btn btn-default btn-option-title" onclick="eliminar(${count})">
									<img class="img" src="http://image.flaticon.com/icons/svg/148/148782.svg">
								</button>
							</div>
							<div class="col-md-11">
								<div contenteditable class="editable h1"></div>
							</div>
						</div>`
		count++;
		$('#element').append(template)
	})

	$('#subtitulo').click(function() {
		var template = `<div class="row" id="edit-${count}">
							<div class="col-md-1 ocultar">
								<button class="btn btn-default btn-option-subtitle" onclick="eliminar(${count})">
									<img class="img" src="http://image.flaticon.com/icons/svg/148/148782.svg">
								</button>
							</div>
							<div class="col-md-11">
								<div contenteditable class="editable h2"></div>
							</div>
						</div>`
		count++;
		$('#element').append(template)
	})

	$('#parrafo').click(function() {
		var template = `<div class="row" id="edit-${count}">
							<div class="col-md-1 ocultar">
								<button class="btn btn-default btn-option-subtitle" onclick="eliminar(${count})">
									<img class="img" src="http://image.flaticon.com/icons/svg/148/148782.svg">
								</button>
							</div>
							<div class="col-md-11">
								<div contenteditable class="editable p text-justify"></div>
							</div>
						</div>`
		count++;
		$('#element').append(template)	
	})

	$('#filename').change(function() {
		if (this.files && this.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				var src = e.target.result;
				var template = `<div class="row" id="edit-${count}">
							<div class="col-md-1 ocultar">
								<button class="btn btn-default btn-option-subtitle" onclick="eliminar(${count})">
									<img class="img" style="margin-top: 1em;" src="http://image.flaticon.com/icons/svg/148/148782.svg">
								</button>
							</div>
							<div class="col-md-11">
								<div class="row">
									<div class="col-md-8">
										<img src="${src}" class="padding-bottom" width="100%" style="margin-top: 1.5em;" />
									</div>
									<div class="col-md-4">
										<div contenteditable class="editable h2"></div>	
										<div contenteditable class="editable p text-justify"></div>
									</div>
								</div>
							</div>
						</div>`
				count++;
				$('#element').append(template)				
			}
			reader.readAsDataURL(this.files[0]);
		}
	})

	$('#header').change(function() {
		if (this.files && this.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				var src = e.target.result;
				$('#img-header').attr("src", src)
			}
			reader.readAsDataURL(this.files[0]);
		}	
	})
})


function eliminar(id) {
	var element = '#edit-'+id;
	$(element).remove();
}
