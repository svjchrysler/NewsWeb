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

	$('#fileimage').change(function() {
		if (this.files && this.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				var src = e.target.result;			
				$('#image-cargar').val(src)				
			}
			reader.readAsDataURL(this.files[0]);
		}
	})

	$('#category').change(function() {
		alert($('#category').val())
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
								<div contenteditable class="editable h2 tipografia espacio-subtitle"></div>
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
								<div contenteditable class="editable p text-justify tipografia"></div>
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
								<div class="row margin-espacio">
									<div class="col-md-12 text-center">
										<img src="${src}" class="padding-bottom" style="margin-top: 1.5em;" width="100%" />
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


function cargarSubcategoria(categoria) {
	$.ajax('')
}
