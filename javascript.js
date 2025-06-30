function ver_hoje() {
	var hoje = new Date();
	var dia = parseInt(hoje.getDate());
	var ano = parseInt(hoje.getFullYear());
	var hora =  parseInt(hoje.getHours());
	var minuto = parseInt(hoje.getMinutes());
	var segundo = parseInt(hoje.getSeconds());
	var saudacao = document.getElementById('saudacao');
	var dia_semana = new Array('Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado');
	var mes = new Array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
	var mostrar = 'Olá';
	if (hora >= 0 && hora <= 11) {
		mostrar = 'Bom Dia';
	}
	if (hora >= 12 && hora <= 17) {
		mostrar = 'Boa Tarde';
	}
	if (hora >= 18 && hora <= 23) {
		mostrar = 'Boa Noite';
	}
	if (hora < 10) {
		hora = '0' + hora;
	}
	if (minuto < 10) {
		minuto = '0' + minuto;
	}
	if (segundo < 10) {
		segundo = '0' + segundo;
	}
	saudacao.innerHTML = '<B>' + mostrar + '</B> - ' + hora + ':' + minuto + ':' + segundo;
	window.setTimeout('ver_hoje();', 100);
}
function separador_argumentos(/*texto,caracter_inicial,caracter_final*/) {
	if (arguments.length > 0) {
		var texto = '' + arguments[0];
		if (arguments[1]) {
			var chr_inicial = arguments[1];
		}
		if (arguments[2]) {
			var chr_final = arguments[2];
		}
		var achou_inicial = false;
		var pos_inicial = 0;
		var pos_final = 0;
		var valores = new Array();
		var num_valor = 0;
		var resposta = texto;
		for (var i = 0; i < texto.length; i++) {
			if (texto.charAt(i) == chr_inicial) {
				pos_inicial = i;
				achou_inicial = true;
			}
			if (texto.charAt(i) == chr_final) {
				if (achou_inicial == true) {
					pos_final = i;
					valores[num_valor] = texto.substring((pos_inicial + 1),pos_final);
					achou_inicial = false;
					num_valor++;
				}
			}
		}
		if (valores.length > 0) {
			resposta = valores;
		}
		return resposta;
	}
}
function remove_zero_esq(/*str*/) {
	var str = '';
	if (arguments.length > 0) {
		str = '' + arguments[0];
		if (trim(str) != '') {
			for (var n = 0; n < str.length; n++) {
				if (str.charAt(0) == '0') {
					str = str.substring(1,str.length);
				}
			}
		}
	}
	return str;
}
function trim(/*str*/) {
	var str = '';
	if (arguments.length > 0) {
		str = '' + arguments[0];
		for (var n = 0; n < str.length; n++) {
			if (str.charAt(0)) {
				if (str.charAt(0) == ' ') {
					str = str.substring(1,str.length);
				}
				if (str.charAt(str.length - 1)) {
					if (str.charAt(str.length - 1) == ' ') {
						str = str.substring(0,(str.length - 1));
					}
				}
			}
		}
	}
	return str;
}
function porcentagem(/*valor,fator,tipo*/) {
	var calculo = 0;
	if (arguments.length > 1) {
		valor = '' + arguments[0];
		fator = '' + arguments[1];
		if (trim(valor) != '' && trim(fator) != '') {
			valor = parseFloat(remove_zero_esq(valor));
			fator = parseFloat(remove_zero_esq(fator));
			if (isNaN(valor) == true) {
				valor = 0;
			}
			if (isNaN(fator) == true) {
				fator = 0;
			}
			calculo = parseFloat((valor / 100) * fator);
			if (arguments[2]) {
				var tipo = '' + arguments[2];
				if (remove_caracteres(tipo,' ') != '') {
					for (var n = 0; n < tipo.length; n++) {
						if (tipo.charAt(n) == '+') {
							calculo = valor + calculo;
							break;
						}
						if (tipo.charAt(n) == '-') {
							calculo = valor - calculo;
							break;
						}
						if (tipo.charAt(n) == '*') {
							calculo = valor * calculo;
							break;
						}
						if (tipo.charAt(n) == '/') {
							calculo = valor / calculo;
							break;
						}
					}
				}
			}
		}
	}
	return calculo;
}
function remove_caracteres(/*texto,caracteres*/) {
	var txt_resposta = '';
	if (arguments.length > 1) {
		texto = '' + arguments[0];
		caracteres = '' + arguments[1];
		for (var n = 0; n < texto.length; n++) {
			var achou = false;
			for (var j = 0; j < caracteres.length; j++) {
				if (texto.charAt(n) == caracteres.charAt(j)) {
					achou = true;
				}
			}
			if (achou == false) {
				txt_resposta += '' + texto.charAt(n);
			}
		}
	}
	return txt_resposta;
}
function remove_letras(/*texto*/) {
	var txt_resposta = '';
	if (arguments.length > 0) {
		var texto = '' + arguments[0];
		if (trim(texto) != '') {
			for (var n = 0; n < texto.length; n++) {
				if (isNaN(texto.charAt(n)) == false) {
					txt_resposta += '' + texto.charAt(n);
				}
			}
		}
	}
	return txt_resposta;
}
function remove_numeros(/*texto*/) {
	var txt_resposta = '';
	if (arguments.length > 0) {
		var texto = '' + arguments[0];
		if (trim(texto) != '') {
			for (var n = 0; n < texto.length; n++) {
				if (isNaN(texto.charAt(n)) == true) {
					txt_resposta += '' + texto.charAt(n);
				}
			}
		}
	}
	return txt_resposta;
}
function separador(/*valor,tipo,excecoes*/) {
	var divisoes = '';
	if (arguments.length > 0) {
		var valor = '' + arguments[0];
		var numerico = true;
		if (arguments[1]) {
			if (remove_caracteres(arguments[1],' ') != '') {
				var tipo = '' + arguments[1];
				if (isNaN(parseInt(tipo)) == true) {
					numerico = false;
				}
			}
		}
		var num_excecoes = 0;
		var excecoes = '';
		if (arguments[2]) {
			excecoes = '' + remove_caracteres(arguments[2],' ');
		}
		num_divisao = 0;
		divisoes = new Array();
		for (var n = 0; n < valor.length; n++) {
			var enc_excecao = false;
			var enc_prox_excecao = false;
			if (excecoes.length > 0) {
				for (var i = 0; i < excecoes.length; i++) {
					if (valor.charAt(n) == excecoes.charAt(i)) {
						enc_excecao = true;
					}
					if (valor.charAt((n + 1)) != null) {
						if (valor.charAt((n + 1)) == excecoes.charAt(i)) {
							enc_prox_excecao = true;
						}
					}
				}
			}
			if (isNaN(parseInt(valor.charAt(n))) != numerico || enc_excecao == true) {
				if (divisoes[num_divisao] == null) {
					divisoes[num_divisao] = '';
				}
				divisoes[num_divisao] += '' + valor.charAt(n);
				if (valor.charAt((n + 1)) != null) {
					var prox_chr = valor.charAt((n + 1));
					if (isNaN(parseInt(prox_chr)) == numerico && enc_prox_excecao == false) {
						num_divisao += 1;
					}
				}
			}
		}
	}
	return divisoes;
}
function soma(/*valor1,valor2*/) {
	var str_temp = '';
	if (arguments.length > 1) {
		var valor1 = '' + remove_letras(arguments[0]);
		var valor2 = '' + remove_letras(arguments[1]);
		var val_1 = remove_zero_esq(valor1);
		var val_2 = remove_zero_esq(valor2);
		var resultado = 0;
		var num_chr_val_1 = parseInt(val_1.length);
		var num_chr_val_2 = parseInt(val_2.length);
		var num_caracteres = 0;
		if (num_chr_val_1 < num_chr_val_2) {
			num_caracteres = num_chr_val_2;
		} else {
			num_caracteres = num_chr_val_1;
		}
		var sobra = 0;
		for (var n = 0; n < num_caracteres; n++) {
			var valor1_temp = parseInt(val_1.charAt(val_1.length - (n + 1)));
			var valor2_temp = parseInt(val_2.charAt(val_2.length - (n + 1)));
			resultado = ((valor1_temp + valor2_temp) + sobra);
			if (isNaN(resultado) == true) {
				if (isNaN(valor1_temp) == false) {
					resultado = (valor1_temp + sobra);
				}
				if (isNaN(valor2_temp) == false) {
					resultado = (valor2_temp + sobra);
				}
			}
			var tmp = '' + resultado;
			if (tmp.length > 1) {
				str_temp = '' + tmp.charAt(1) + '' + str_temp;
				sobra = parseInt(tmp.charAt(0));
			} else {
				str_temp = '' + tmp.charAt(0) + '' + str_temp;
				sobra = 0;
			}
		}
	}
	return str_temp;
}
function formato_numero(/*variavel,casas_decimais,separador_decimal,separador_milhar*/) {
	var str_formatada = '';
	if (arguments.length > 0) {
		var variavel = '0';
		if (arguments[0]) {
			if (arguments[0] != '') {
				variavel = '' + arguments[0];
			}
		}
		var casas_decimais = parseInt(variavel.length);
		if (arguments[1]) {
			casas_decimais = remove_letras(arguments[1]);
			casas_decimais = remove_zero_esq(casas_decimais);
			if (isNaN(parseInt(casas_decimais)) == false) {
				casas_decimais = parseInt(casas_decimais);
			}
		}
		var separador_decimal = ',';
		if (arguments[2]) {
			if (arguments[2] != '') {
				separador_decimal = '' + arguments[2];
			}
		}
		var separador_milhar = '.';
		if (arguments[3]) {
			if (arguments[3] != '') {
				separador_milhar = '' + arguments[3];
			}
		}
		var valor = separador(variavel);
		var esquerda = '';
		var direita = '';
		var str_temp = '';
		var casas_milhar = 3;
		if (valor.length > 1) {
			for (var n = 0; n < valor.length; n++) {
				if (n < (valor.length - 1)) {
					esquerda += '' + valor[n];
				} else {
					direita += '' + valor[n];
				}
			}
			var mil_inicial = 0;
			for (var n = 0; n < esquerda.length; n++) {
				var str_temp = '' + esquerda.charAt(esquerda.length - (n + 1)) + '' + str_temp;
				mil_inicial++;
				if (mil_inicial == casas_milhar) {
					str_temp = separador_milhar + '' + str_temp;
					mil_inicial = 0;
				}
			}
			var zeros = '';
			if (parseInt(direita.length) < casas_decimais) {
				for (var i = 0; i < (casas_decimais - direita.length); i++) {
					zeros += '0';
				}
			}
			direita = direita.substr(0,casas_decimais);
			if (casas_decimais > 0) {
				str_formatada = '' + str_temp + separador_decimal + direita + '' + zeros;
			} else {
				str_formatada = '' + str_temp;
			}
		} else {
			var str_formatada = valor.join();
			str_formatada = str_formatada.replace(',','');
			var mil_inicial = 0;
			for (var n = 0; n < str_formatada.length; n++) {
				var str_temp = '' + str_formatada.charAt(str_formatada.length - (n + 1)) + '' + str_temp;
				mil_inicial++;
				if (mil_inicial == casas_milhar) {
					str_temp = separador_milhar + '' + str_temp;
					mil_inicial = 0;
				}
			}
			var zeros = '';
			for (var n = 0; n < casas_decimais; n++) {
				zeros += '0';
			}
			if (casas_decimais > 0) {
				str_formatada = '' + str_temp + separador_decimal + zeros;
			} else {
				str_formatada = '' + str_temp;
			}
		}
		if (isNaN(str_formatada.charAt(0)) == true) {
			str_formatada = str_formatada.substr(1,str_formatada.length);
		}
	}
	return str_formatada;
}
function filtra_teclas(/*chr_permitidos*/) {
	var codigo_tecla = event.keyCode;
	var tecla = String.fromCharCode(codigo_tecla);
	var chr_permitidos = '';
	if (arguments[0]) {
		if (trim(arguments[0]) != '') {
			chr_permitidos = '' + arguments[0];
		}
	}
	var achou = false;
	if (isNaN(parseInt(tecla)) == false) {
		achou = true;
	} else {
		for (var n = 0; n < chr_permitidos.length; n++) {
			if (tecla == chr_permitidos.charAt(n)) {
				achou = true;
			}
		}
	}
	event.returnValue = achou;
}
function filtra_letras() {
	var codigo_tecla = event.keyCode;
	var tecla = String.fromCharCode(codigo_tecla);
	event.returnValue = (isNaN(parseInt(tecla))) ? true : false;
}
function filtra_numeros() {
	var codigo_tecla = event.keyCode;
	var tecla = String.fromCharCode(codigo_tecla);
	event.returnValue = (isNaN(parseInt(tecla))) ? false : true;
}
function moeda() {
	var codigo_tecla = event.keyCode;
	var tecla = String.fromCharCode(codigo_tecla);
	var txt_temp = event.srcElement;
	var decimal = txt_temp.value.split(',');
	var continuar = true;
	if (decimal.length > 1 && tecla == ',') {
		continuar = false;
		event.returnValue = continuar;
	}
	if (continuar == true) {
		var chr_permitidos = '.,';
		var achou = false;
		if (isNaN(parseInt(tecla)) == false) {
			achou = true;
		} else {
			for (var n = 0; n < chr_permitidos.length; n++) {
				if (tecla == chr_permitidos.charAt(n)) {
					achou = true;
				}
			}
		}
		event.returnValue = achou;
	}
}
function desconto() {
	var codigo_tecla = event.keyCode;
	var tecla = String.fromCharCode(codigo_tecla);
	var txt_temp = event.srcElement;
	var decimal = txt_temp.value.split(',');
	var continuar = true;
	if (decimal.length > 1 && tecla == ',') {
		continuar = false;
		event.returnValue = continuar;
	}
	if (continuar == true) {
		var chr_permitidos = ',';
		var achou = false;
		if (isNaN(parseInt(tecla)) == false) {
			achou = true;
		} else {
			for (var n = 0; n < chr_permitidos.length; n++) {
				if (tecla == chr_permitidos.charAt(n)) {
					achou = true;
				}
			}
		}
		event.returnValue = achou;
	}
}
function bloquear_evento() {
	if (event) {
		event.returnValue = false;
	}
}
function formata_cnpj() {
	var obj;
	var cnpj;
	if (event.srcElement) {
		obj = event.srcElement;
		cnpj = remove_letras(obj.value);
	} else if (arguments[0]) {
		cnpj = remove_letras(arguments[0]);
	}
	if (cnpj.length > 2) {
		cnpj = cnpj.substr(0,2) + '.' + cnpj.substr(2,cnpj.length);
		if (cnpj.length > 6) {
			cnpj = cnpj.substr(0,6) + '.' + cnpj.substr(6,cnpj.length);
			if (cnpj.length > 10) {
				cnpj = cnpj.substr(0,10) + '/' + cnpj.substr(10,cnpj.length);
				if (cnpj.length > 15) {
					cnpj = cnpj.substr(0,15) + '-' + cnpj.substr(15,2);
				}
			}
		}
	} else {
		cnpj = remove_letras(cnpj);
	}
	if (obj) {
		obj.value = cnpj;
	}
	return cnpj;
}
function formata_cpf() {
	var obj;
	var cnpj;
	if (event.srcElement) {
		obj = event.srcElement;
		cpf = remove_letras(obj.value);
	} else if (arguments[0]) {
		cpf = remove_letras(arguments[0]);
	}
	if (cpf.length > 3) {
		cpf = cpf.substr(0,3) + '.' + cpf.substr(3,cpf.length);
		if (cpf.length > 7) {
			cpf = cpf.substr(0,7) + '.' + cpf.substr(7,cpf.length);
			if (cpf.length > 11) {
				cpf = cpf.substr(0,11) + '-' + cpf.substr(11,2);
			}
		}
	} else {
		cpf = remove_letras(cpf);
	}
	if (obj) {
		obj.value = cpf;
	}
	return cpf;
}
function formata_cep() {
	var obj;
	var cep;
	if (event.srcElement) {
		obj = event.srcElement;
		cep = remove_letras(obj.value);
	} else if (arguments[0]) {
		cep = remove_letras(arguments[0]);
	}
	if (cep.length > 2) {
		cep = cep.substr(0,2) + '.' + cep.substr(2,cep.length);
		if (cep.length > 6) {
			cep = cep.substr(0,6) + '-' + cep.substr(6,3);
		}
	} else {
		cep = remove_letras(cep);
	}
	if (obj) {
		obj.value = cep;
	}
	return cep;
}
function formata_uf() {
	var obj;
	var uf = '';
	if (event.srcElement) {
		obj = event.srcElement;
		uf = remove_numeros(obj.value);
	} else if (arguments[0]) {
		uf = remove_numeros(arguments[0]);
	}
	uf = uf.toUpperCase();
	if (obj) {
		obj.value = uf;
	}
	return uf;
}
function formata_fone() {
	var obj;
	var fone = '';
	if (event.srcElement) {
		obj = event.srcElement;
		fone = remove_letras(obj.value);
	} else if (arguments[0]) {
		fone = remove_letras(arguments[0]);
	}
	fone = remove_zero_esq(fone);
	if (fone.length == 7) {
		fone = fone.substr(0,3) + '-' + fone.substr(3,4);
	} else if (fone.length > 4) {
		fone = fone.substr(0,4) + '-' + fone.substr(4,4);
	} else {
		fone = remove_letras(fone);
	}
	if (obj) {
		obj.value = fone;
	}
	return fone
}
function verifica_cnpj() {
	var obj;
	var cnpj;
	if (event.srcElement) {
		obj = event.srcElement;
		cnpj = remove_letras(obj.value);
	} else if (arguments[0]) {
		cnpj = remove_letras(arguments[0]);
	}
	if (cnpj.length < 14) {
		return false;
	}
	var a = [];
	var b = new Number;
	var c = [6,5,4,3,2,9,8,7,6,5,4,3,2];
	for (i = 0; i < 12; i++){
		a[i] = cnpj.charAt(i);
		b += a[i] * c[i + 1];
	}
	if ((x = b % 11) < 2) {
		a[12] = 0;
	} else {
		a[12] = 11 - x;
	}
	b = 0;
	for (y = 0; y < 13; y++) {
		b += (a[y] * c[y]); 
	}
	if ((x = b % 11) < 2) {
		a[13] = 0;
	} else {
		a[13] = 11 - x;
	}
	if ((cnpj.charAt(12) != a[12]) || (cnpj.charAt(13) != a[13])){
		return false;
	}
}
function verifica_cpf() {
	var obj;
	var cpf;
	if (event.srcElement) {
		obj = event.srcElement;
		cpf = remove_letras(obj.value);
	} else if (arguments[0]) {
		cpf = remove_letras(arguments[0]);
	}
	if (cpf.length < 11) {
		return false;
	}
	var a = [];
	var b = new Number;
	var c = 11;
	for (i = 0; i < 11; i++) {
		a[i] = cpf.charAt(i);
		if (i < 9) {
			b += (a[i] * --c);
		}
	}
	if ((x = b % 11) < 2) {
		a[9] = 0;
	} else {
		a[9] = 11 - x;
	}
	b = 0;
	c = 11;
	for (y = 0; y < 10; y++) {
		b += (a[y] * c--);
	}
	if ((x = b % 11) < 2) {
		a[10] = 0;
	} else {
		a[10] = 11 - x;
	}
	if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10])) {
		return false;
	}
}
function abrir_janela() {
	if (arguments.length > 1) {
		window.open(arguments[0],arguments[1],'width=' + (screen.availWidth - 30) + ',height=' + (screen.availHeight - 70) + ',status=yes,top=0,left=0,scrollbars=yes,resizable=yes');
	}
}
function CM() {
	div_menu_contexto = document.getElementById('div_menu_contexto');
	if (event != null && div_menu_contexto != null) {
		if (event.srcElement.parentElement != div_menu_contexto) {
			obj_clicado = event.srcElement;
			div_menu_contexto.style.top = ((event.y + document.body.scrollTop) - 3);
			div_menu_contexto.style.left = ((event.x + document.body.scrollLeft) - 3);
			div_menu_contexto.style.display = 'inline';
		}
		event.returnValue = false;
	}
}
function abrir_dlg_cor() {
	var cor_atual;
	dlgHelper = document.getElementById('dlgHelper');
	if (arguments[0] != null) {
		if (trim(arguments[0]).length > 0) {
			cor_atual = arguments[0];
			cor_atual = cor_atual.toString(16);
			cor_atual = '000000'.substr(0,(6 - cor_atual.length)) + cor_atual;
			cor = dlgHelper.ChooseColorDlg(cor_atual);
		} else {
			cor = dlgHelper.ChooseColorDlg();
		}
	} else {
		cor = dlgHelper.ChooseColorDlg();
	}
	if (cor != false) {
		cor = cor.toString(16);
		cor = '000000'.substr(0,(6 - cor.length)) + cor;
		return cor;
	}
}
function muda_cor_fundo() {
	if (obj_clicado != null) {
		if (cor_fundo = abrir_dlg_cor(obj_clicado.currentStyle.backgroundColor)) {
			obj_clicado.style.backgroundColor = cor_fundo;
		}
	}
}
function muda_cor_letra() {
	if (obj_clicado != null) {
		if (cor_letra = abrir_dlg_cor(obj_clicado.currentStyle.color)) {
			obj_clicado.style.color = cor_letra;
		}
	}
}
function ocultar_obj() {
	div_menu_contexto = document.getElementById('div_menu_contexto');
	if (obj_clicado != null) {
		if (obj_clicado.tagName != 'BODY' && obj_clicado != div_menu_contexto) {
			obj_clicado.style.filter = 'Alpha(Opacity=0, FinishOpacity=0, Style=10, StartX=10, StartY=100, FinishX=10, FinishY=100)';
		}
	}
}
function mostrar_obj() {
	div_menu_contexto = document.getElementById('div_menu_contexto');
	if (obj_clicado != null) {
		if (obj_clicado != div_menu_contexto) {
			obj_clicado.style.filter = '';
		}
	}
}
function oculta_div_menu_contexto() {
	div_menu_contexto = document.getElementById('div_menu_contexto');
	var evt = false;
	if (event) {
		if (event.type != 'mousedown') {
			evt = true;
		}
	}
	if (evt == false) {
		window.setTimeout('',5000);
	}
	if (obj_atual) {
		var obj_anterior = obj_atual;
		var achou = false;
		while(obj_anterior != null) {
			if (obj_anterior == div_menu_contexto) {
				achou = true;
			}
			obj_anterior = obj_anterior.parentElement;
		}
		if (achou == false) {
			div_menu_contexto.style.display = 'none';
		}
	}
	window.setTimeout('oculta_div_menu_contexto()',5000);
}
function ver_html() {
	document.getElementById('txt_html').value = document.documentElement.outerHTML;
	abrir_janela('about:blank','html');
	document.getElementById('frm_html').submit();
	document.getElementById('txt_html').value = '';
}
function propriedades_obj() {
	alert(obj_atual.innerWidth);
}
function mover() {
	if (ob != null) {
		if (N) {
			ob.moveTo((arguments[0].pageX - X),(arguments[0].pageY - Y));
		} else {
			ob.pixelLeft = (event.clientX - X) + document.body.scrollLeft;
			ob.pixelTop = (event.clientY - Y) + document.body.scrollTop;
			return false;
		}
	}
}
function WOL() {
	//document.body.scroll = 'auto';
}
function MD() {
	if (N) {
		ob = document.layers[arguments[0].target.name];
		X = arguments[0].x;
		Y = arguments[0].y;
		return false;
	} else {
		obj_atual = event.srcElement;
		var obj_anterior = obj_atual;
		var achou = false;
		var obj_encontrado;
		while (obj_anterior != null) {
			if (obj_anterior.currentStyle.position == 'absolute') {
				ob = obj_anterior;
			}
			var bck_obj_anterior = obj_anterior;
			obj_anterior = obj_anterior.parentElement;
			if (obj_anterior == null && ob == null) {
				ob = bck_obj_anterior;
			}
		}
		if (ob == null) {
			ob = obj_atual;
		}
		ob = ob.style;
		X = event.offsetX;
		Y = event.offsetY;
	}
	oculta_div_menu_contexto();
}
function MM() {
/*	if (ob != null) {
		if (N) {
			ob.moveTo((arguments[0].pageX - X),(arguments[0].pageY - Y));
		} else {
			ob.pixelLeft = (event.clientX - X) + document.body.scrollLeft;
			ob.pixelTop = (event.clientY - Y) + document.body.scrollTop;
			return false;
		}
	}*/
}
function MU() {
	ob = null;
}
function MO() {
	if (event) {
		var txt_status = '';
		obj_atual = event.srcElement;
		if (obj_atual.title != null) {
			if (obj_atual.title.length > 0) {
				txt_status = '' + obj_atual.title;
			}
		}
		if (txt_status.length == 0) {
			if (obj_atual.value != null) {
				txt_status = '' + obj_atual.value;
			} else {
				txt_status = obj_atual.innerText;
			}
		}
		if (obj_atual.tagName != 'BODY' && obj_atual.tagName != 'TR' && obj_atual.tagName != 'TABLE' && obj_atual.tagName != 'TD' && obj_atual.tagName != 'FORM') {
			/*var txt_tmp = separador(txt_status,' ');
			if (obj_atual.title == '' && txt_tmp.length <= 2) {
				obj_atual.title = txt_status;
			}*/
			//alert(obj_atual.tagName);
			return window.status = txt_status;
		}
	}
}
function MT() {
	if (ob) {
		ob = null;
	}
	if (event) {
		return window.status = '';
	}
	oculta_div_menu_contexto();
}
function KU() {
	if (event != null) {
		var txt_status = '';
		obj_atual = event.srcElement;
		if (obj_atual.value != null) {
			if (obj_atual.type != 'password') {
				txt_status = '' + obj_atual.value;
			}
		} else {
			txt_status = obj_atual.innerText;
		}
		if (obj_atual.tagName != 'BODY') {
			return window.status = txt_status;
		}
	}
}

function menu_esq_sobre(este) {
	este.style.backgroundColor = '#51A432';
	este.style.cursor = 'hand';
}
function menu_esq_fora(este) {
	este.style.backgroundColor = '';
}

var N = (document.all) ? 0 : 1;
if (N) {
	document.captureEvents(Event.MOUSEDOWN | Event.MOUSEMOVE | Event.MOUSEUP | Event.MOUSEOVER | Event.MOUSEOUT | Event.KEYUP);
}

var ob;
var obj_atual;
var div_menu_contexto;
var dlgHelper;
var obj_clicado;
var X;
var Y;

document.oncontextmenu = CM;
document.onmousedown = MD;
//document.onmousemove = MM;
document.onmouseup = MU;
document.onmouseover = MO;
document.onmouseout = MT;
document.onkeyup = KU;
window.onload = WOL;