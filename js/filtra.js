var campoFiltro = document.querySelector("#filtrar-tabela");

campoFiltro.addEventListener("input", function(){
	
	var linha = document.querySelectorAll(".linha");
	

	if (this.value.length > 0) {
		for(var i = 0; i < linha.length; i++) {
			var filtro = linha[i];
			
			var td01 = filtro.querySelector(".td01");
			var tdContent = td01.textContent;

			var expressao = new RegExp(this.value, "i");

			var verificaTd = expressao.test(tdContent);
			
			


			if (verificaTd) {
				filtro.classList.remove("invisivel");
			
			} else {
				filtro.classList.add("invisivel");
				
			}
		
		}
	}else{
		for (var i = 0; i < linha.length; i++) {
			var filtro = linha[i];
			
			filtro.classList.remove("invisivel");
			
		}
	}




});

