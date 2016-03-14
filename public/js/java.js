function bodyAppend(tagName, innerHTML) {
	var elm;

	elm = document.createElement(tagName);
	elm.innerHTML = innerHTML;
	document.body.appendChild(elm);
}
	$("document").ready(function(){

		$("#foto1").change(function() {
				input = document.getElementById('foto1');
				var input, file;
				if (input) {
					file = input.files[0];
					bodyAppend("p", "Filenya " + file.name + " Besarnya " + file.size + " bytes in size");
					if (file.size>200000) {
						alert ('File Terlalu Besar');
						window.location="{{URL('stok')}}";
					};

				};
		});
	});