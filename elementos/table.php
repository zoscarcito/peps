<div class="row">
	<div class="col-sm-12">
		<h2 style="text-align:center;">METODO DE VALUACIÓN PEPS</h2>
		<br>
		<h3 style="text-align:center;">Libro de Almacen Kardex o valorado</h3>
		<br>
		<table class="table table-hover table-condensed table-bordered">
	<!--<caption>
				<button class="btn btn-primary" data-toggle="modal" data-target="#nuevoModal">Nuevo</button>
	</caption>-->	
		<tr>
			<td></td>
			<td></td>
			<td><b>Documento</b></td>
			<td></td>
			<td></td>
			<td></td>
			<td><b>Entradas</b></td>
			<td></td>

			<td></td>
			<td></td>

			<td></td>
			<td><b>Movimientos</b></td>
			<td></td>

			<td></td>
			<td></td>

			<td></td>
			<td><b>Saldos</b></td>
			<td></td>

			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><b>Item<b></td>
			<td><b>Fecha</b>/</td>
			<td><b>Guia</b></td>
			<td><b>Factura</b></td>
			<td><b>Detalle</b></td>
			<td><b>Cantidad</b></td>
			<td><b>Precio Unit.</b></td>
			<td><b>Precio Total</b></td>

			<td></td>
			<td></td>

			<td><b>Cantidad</b></td>
			<td><b>Precio Unit.</b></td>
			<td><b>Precio Total</b></td>

			<td></td>
			<td></td>

			<td><b>Cantidad</b></td>
			<td><b>Precio Unit.</b></td>
			<td><b>Precio Total</b></td>

			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><input id="num" type="number" name=""  style="width : 40px; heigth : 5px; border:none" value=01></td>
			<td><input id="fecha" type="date" name=""  style="width : 120px; heigth : 5px; border:none" value="2022-01-01"></td>
			<td><input id="guia" type="text" name=""  style="width : 100px; heigth : 5px; border:none" placeholder="Saldoinicial"></td>
			<td><input id="fact" type="text" name=""  style="width : 80px; heigth : 5px; border:none" ></td>
			<td><input id="deta" type="text" name=""  style="width : 180px; heigth : 5px; border:none" ></td>
			<script>
    		function precioTotal1() {
        	c = document.getElementById("cant1").value;
        	p = document.getElementById("preu1").value;
        	r = c*p;
        	document.getElementById("precioTot1").value = r;
        	document.getElementById("precioTota1").value = r;
        	document.getElementById("repaa1").value = c;
        	document.getElementById("repaaa1").value = p;
        	document.getElementById("repaa2").value = p;
    		}
			</script>
			<td><input id="cant1" type="number" style="width : 60px; heigth : 5px; border:none" value=150 max="150" onchange="precioTotal1()"></td>
			<td><input id="preu1" type="number" style="width : 60px; heigth : 5px; border:none" value=10 onchange="precioTotal1()"></td>	
			<td><output id="precioTot1" for="cantidad precioUn"></output></td>

			<td></td>
			<td></td>


			<td><output id="repaa1" ></output></td>
			<td><output id="repaa2" ></output></td>
			<td><output id="precioTota1" for="cant1"></output></td>

			<td></td>
			<td></td>

			<td><input id="cantidad" type="number" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>
			<td><input id="precioUn" type="number" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>
			<td><input id="precioTo" type="text" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>

			<td></td>
			<td></td>
		</tr>

		<tr>
			<td><input id="num" type="number" name="id"  style="width : 40px; heigth : 5px; border:none" value=02></td>
			<td><input id="fecha" type="date" name=""  style="width : 120px; heigth : 5px; border:none" value="2022-01-01" min="2022-01-01" max="2022-12-31"></td>
			<td><input id="guia" type="text" name="id"  style="width : 100px; heigth : 5px; border:none" placeholder="001-005"></td>
			<td><input id="fact" type="text" name="id"  style="width : 80px; heigth : 5px; border:none" placeholder="001-0225"></td>
			<td><input id="deta" type="text" name="id"  style="width : 180px; heigth : 5px; border:none" placeholder="Compra a Proveedor x"></td>
			<script>
    		function precioTotal2() {
        	c = document.getElementById("cant2").value;
        	p = document.getElementById("preu2").value;
        	r = c*p;
        	document.getElementById("precioTot2").value = r;
        	document.getElementById("precioTota2").value = r;
        	document.getElementById("repab1").value = c;
        	document.getElementById("repab2").value = p;
    		}
			</script>
			<td><input id="cant2" type="number" style="width : 60px; heigth : 5px; border:none" value=150 onchange="precioTotal2()"></td>
			<td><input id="preu2" type="number" style="width : 60px; heigth : 5px; border:none" value=10.10 onchange="precioTotal2()"></td>	
			<td><output id="precioTot2" for="cantidad precioUn"></output></td>

			<td></td>
			<td></td>

			<td><output id="repab1" ></output></td>
			<td><output id="repab2" ></output></td>
			<td><output id="precioTota2" for="cant1"></output></td>

			<td></td>
			<td></td>

			<td><input id="cantidad" type="number" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>
			<td><input id="precioUn" type="number" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>
			<td><input id="precioTo" type="text" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>

			<td></td>
			<td></td>
		</tr>

		<tr>
			<td><input id="num" type="number" name="id"  style="width : 40px; heigth : 5px; border:none" value=03></td>
			<td><input id="fecha" type="date" name=""  style="width : 120px; heigth : 5px; border:none" value="2022-01-02"min="2022-01-01" max="2022-12-31"></td>
			<td><input id="guia" type="text" name="id"  style="width : 100px; heigth : 5px; border:none" placeholder="001-266"></td>
			<td><input id="fact" type="text" name="id"  style="width : 80px; heigth : 5px; border:none" placeholder="123-2515"></td>
			<td><input id="deta" type="text" name="id"  style="width : 180px; heigth : 5px; border:none" placeholder="Compra a Proveedor y"></td>
			<script>
    		function precioTotal() {
        	c = document.getElementById("cant3").value;
        	p = document.getElementById("preu3").value;
        	r = c*p;
        	document.getElementById("precioTot3").value = r;
        	document.getElementById("precioTota3").value = r;
        	document.getElementById("repac1").value = c;
        	document.getElementById("repac2").value = p;
    		}
			</script>
			<td><input id="cant3" type="number" style="width : 60px; heigth : 5px; border:none" value=350 onchange="precioTotal()"></td>
			<td><input id="preu3" type="number" style="width : 60px; heigth : 5px; border:none" value=9.98 onchange="precioTotal()"></td>	
			<td><output id="precioTot3" for="cantidad precioUn"></output></td>

			<td></td>
			<td></td>

			<td><output id="repac1" ></output></td>
			<td><output id="repac2" ></output></td>
			<td><output id="precioTota3" for="cant1"></output></td>

			<td></td>
			<td></td>

			<td><input id="cantidad" type="number" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>
			<td><input id="precioUn" type="number" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>
			<td><input id="precioTo" type="text" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>

			<td></td>
			<td></td>
		</tr>

		<tr>
			<td><input id="num" type="number" name="id"  style="width : 40px; heigth : 5px; border:none" value=04></td>
			<td><input id="fecha" type="date" name=""  style="width : 120px; heigth : 5px; border:none" value="2022-01-10"min="2022-01-01" max="2022-12-31"></td>
			<td><input id="guia" type="text" name="id"  style="width : 100px; heigth : 5px; border:none" placeholder="021-455"></td>
			<td><input id="fact" type="text" name="id"  style="width : 80px; heigth : 5px; border:none" placeholder="123-455"></td>
			<td><input id="deta" type="text" name="id"  style="width : 180px; heigth : 5px; border:none" placeholder="Compra a Proveedor x"></td>
			<script>
    		function precioTotal4() {
        	c = document.getElementById("cant4").value;
        	p = document.getElementById("preu4").value;
        	r = c*p;
        	document.getElementById("precioTot4").value = r;
        	document.getElementById("precioTota4").value = r;
        	document.getElementById("repad1").value = c;
        	document.getElementById("repad2").value = p;
    		}
			</script>
			<td><input id="cant4" type="number" style="width : 60px; heigth : 5px; border:none" value=700 onchange="precioTotal4()"></td>
			<td><input id="preu4" type="number" style="width : 60px; heigth : 5px; border:none" value=9.95 onchange="precioTotal4()"></td>	
			<td><output id="precioTot4" for="cantidad precioUn"></output></td>

			<td></td>
			<td></td>

			<td><output id="repad1" ></output></td>
			<td><output id="repad2" ></output></td>
			<td><output id="precioTota4" for="cant1"></output></td>

			<td></td>
			<td></td>

			<td><input id="cantidad" type="number" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>
			<td><input id="precioUn" type="number" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>
			<td><input id="precioTo" type="text" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>

			<td></td>
			<td></td>
		</tr>		

		<tr>
			<td><input id="num" type="number" name="id"  style="width : 40px; heigth : 5px; border:none" value=05></td>
			<td><input id="fecha" type="date" name=""  style="width : 120px; heigth : 5px; border:none" value="" min="2022-01-01" max="2022-12-31"></td>
			<td><input id="guia" type="text" name="id"  style="width : 100px; heigth : 5px; border:none" placeholder=""></td>
			<td><input id="fact" type="text" name="id"  style="width : 80px; heigth : 5px; border:none" ></td>
			<td><input id="deta" type="text" name="id"  style="width : 180px; heigth : 5px; border:none" ></td>
			<script>
    		function precioTotal5() {
        	c = document.getElementById("cant5").value;
        	p = document.getElementById("preu5").value;
        	r = c*p;
        	document.getElementById("precioTot5").value = r;
        	document.getElementById("precioTota5").value = r;
        	document.getElementById("repae1").value = c;
        	document.getElementById("repae2").value = p;
    		}
			</script>
			<td><input id="cant5" type="number" style="width : 60px; heigth : 5px; border:none" value="" onchange="precioTotal5()"></td>
			<td><input id="preu5" type="number" style="width : 60px; heigth : 5px; border:none" value="" onchange="precioTotal5()"></td>	
			<td><output id="precioTot5" for="cantidad precioUn"></output></td>

			<td></td>
			<td></td>

			<td><output id="repae1" ></output></td>
			<td><output id="repae2" ></output></td>
			<td><output id="precioTota5" for="cant1"></output></td>

			<td></td>
			<td></td>

			<td><input id="cantidad" type="number" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>
			<td><input id="precioUn" type="number" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>
			<td><input id="precioTo" type="text" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>

			<td></td>
			<td></td>
		</tr>

		<tr>
			<td><input id="num" type="number" name="id"  style="width : 40px; heigth : 5px; border:none" value=06></td>
			<td><input id="fecha" type="date" name=""  style="width : 120px; heigth : 5px; border:none" value="" min="2022-01-01" max="2022-12-31"></td>
			<td><input id="guia" type="text" name="id"  style="width : 100px; heigth : 5px; border:none" placeholder=""></td>
			<td><input id="fact" type="text" name="id"  style="width : 80px; heigth : 5px; border:none" ></td>
			<td><input id="deta" type="text" name="id"  style="width : 180px; heigth : 5px; border:none" ></td>
			<script>
    		function precioTotal6() {
        	c = document.getElementById("cant6").value;
        	p = document.getElementById("preu6").value;
        	r = c*p;
        	document.getElementById("precioTot6").value = r;
        	document.getElementById("precioTota6").value = r;
        	document.getElementById("repaf1").value = c;
        	document.getElementById("repaf2").value = p;
    		}
			</script>
			<td><input id="cant6" type="number" style="width : 60px; heigth : 5px; border:none" value="" onchange="precioTotal6()"></td>
			<td><input id="preu6" type="number" style="width : 60px; heigth : 5px; border:none" value="" onchange="precioTotal6()"></td>	
			<td><output id="precioTot6" for="cantidad precioUn"></output></td>

			<td></td>
			<td></td>

			<td><output id="repaf1" ></output></td>
			<td><output id="repaf2" ></output></td>
			<td><output id="precioTota6" for="cant1"></output></td>

			<td></td>
			<td></td>

			<td><input id="cantidad" type="number" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>
			<td><input id="precioUn" type="number" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>
			<td><input id="precioTo" type="text" name="id"  style="width : 60px; heigth : 5px; border:none" value=></td>

			<td></td>
			<td></td>
		</tr>		
		</table>

		<table class="table table-hover table-condensed table-bordered">
		<tr>
			<td></td>
			<td></td>
			<td><b>Documento</b></td>
			<td></td>
			<td></td>
			<td></td>
			<td><b>Salidas</b></td>
			<td></td>

			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>


			<td></td>
			<td><b>Comprobación</b></td>
			<td></td>

		</tr>
		<tr>
			<td><b>Item</b></td>
			<td><b>Fecha</b></td>
			<td><b>Guia</b></td>
			<td><b>Factura</b></td>
			<td><b>Detalle</b></td>
			<td><b>Cantidad</b></td>
			<td><b>Precio Unit.</b></td>
			<td><b>Precio Total</b></td>

			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

			<td>Inv Inicial</td>
			<td><input id="invInicial" type="number" name="id"  style="width : 100px; heigth : 5px; border:none" value=></td>
			</tr>

			<tr>
			<td><input id="num" type="number" name="id"  style="width : 40px; heigth : 5px; border:none" value=07></td>
			<td><input id="fecha" type="date" name=""  style="width : 120px; heigth : 5px; border:none" value="2022-01-07" min="2022-01-01" max="2022-12-31"></td>
			<td><input id="guia" type="text" name="id"  style="width : 100px; heigth : 5px; border:none" placeholder=""></td>
			<td><input id="fact" type="text" name="id"  style="width : 80px; heigth : 5px; border:none" ></td>
			<td><input id="deta" type="text" name="id"  style="width : 180px; heigth : 5px; border:none" value="Ventas a la fecha"></td>
			<script>
    		function precioTotal7() {
        	c = document.getElementById("cant7").value;
        	p = document.getElementById("preu1").value;
        	r = c*p;
        	document.getElementById("precioTot7").value = r;
    		}
			</script>
			<td><input id="cant7" type="number" style="width : 60px; heigth : 5px; border:none" value="" max="150" onchange="precioTotal7()"></td>
			<td><output id="repaaa1" ></output></td>	
			<td><output id="precioTot7" for="cantidad precioUn"></output></td>

			<td></td>
			<td></td>

			<td></td>
			<td></td>
			<td></td>

			<td></td>
			<td>(+)Compras</td>
			<td><input id="comprass" type="number" name="id"  style="width : 100px; heigth : 5px; border:none" value=></td>
		</tr>

			<tr>
			<td><input id="num" type="number" name="id"  style="width : 40px; heigth : 5px; border:none" value=08></td>
			<td><input id="fecha" type="date" name=""  style="width : 120px; heigth : 5px; border:none" value="2022-01-08"min="2022-01-01" max="2022-12-31"></td>
			<td><input id="guia" type="text" name="id"  style="width : 100px; heigth : 5px; border:none" placeholder=""></td>
			<td><input id="fact" type="text" name="id"  style="width : 80px; heigth : 5px; border:none" ></td>
			<td><input id="deta" type="text" name="id"  style="width : 180px; heigth : 5px; border:none" value="Ventas"></td>
			<script>
    		function precioTotal8() {
        	c = document.getElementById("cant8").value;
        	p = document.getElementById("preu8").value;
        	r = c*p;
        	document.getElementById("precioTot8").value = r;
    		}
			</script>
			<td><input id="cant8" type="number" style="width : 60px; heigth : 5px; border:none" value="" onchange="precioTotal8()"></td>
			<td><input id="preu8" type="number" style="width : 60px; heigth : 5px; border:none" value="" onchange="precioTotal8()"></td>	
			<td><output id="precioTot8" for="cantidad precioUn"></output></td>

			<td></td>
			<td></td>

			<td></td>
			<td></td>
			<td></td>

			<td></td>
			<td> (-) Inv Final</td>
			<td><input id="comprass" type="number" name="id"  style="width : 100px; heigth : 5px; border:none" value=></td>
		</tr>

			<tr>
			<td><input id="num" type="number" name="id"  style="width : 40px; heigth : 5px; border:none" value=09></td>
			<td><input id="fecha" type="date" name=""  style="width : 120px; heigth : 5px; border:none" value="2022-01-12"min="2022-01-01" max="2022-12-31"></td>
			<td><input id="guia" type="text" name="id"  style="width : 100px; heigth : 5px; border:none" placeholder=""></td>
			<td><input id="fact" type="text" name="id"  style="width : 80px; heigth : 5px; border:none" ></td>
			<td><input id="deta" type="text" name="id"  style="width : 180px; heigth : 5px; border:none"value="ventas a la fecha" ></td>
			<script>
    		function precioTotal9() {
        	c = document.getElementById("cant9").value;
        	p = document.getElementById("preu9").value;
        	r = c*p;
        	document.getElementById("precioTot9").value = r;
    		}
			</script>
			<td><input id="cant9" type="number" style="width : 60px; heigth : 5px; border:none" value="" onchange="precioTotal9()"></td>
			<td><input id="preu9" type="number" style="width : 60px; heigth : 5px; border:none" value="" onchange="precioTotal9()"></td>	
			<td><output id="precioTot9" for="cantidad precioUn"></output></td>

			<td></td>
			<td></td>

			<td></td>
			<td></td>
			<td></td>

			<td></td>
			<td>(=)Costo de Ventas</td>
			<td><input id="comprass" type="number" name="id"  style="width : 100px; heigth : 5px; border:none" value=></td>
		</tr>

			<tr>
			<td><input id="num" type="number" name="id"  style="width : 40px; heigth : 5px; border:none" value=10></td>
			<td><input id="fecha" type="date" name=""  style="width : 120px; heigth : 5px; border:none" value="2022-01-15"min="2022-01-01" max="2022-12-31"></td>
			<td><input id="guia" type="text" name="id"  style="width : 100px; heigth : 5px; border:none" placeholder=""></td>
			<td><input id="fact" type="text" name="id"  style="width : 80px; heigth : 5px; border:none" ></td>
			<td><input id="deta" type="text" name="id"  style="width : 180px; heigth : 5px; border:none" value="Ventas a la fecha"></td>
			<script>
    		function precioTotal10() {
        	c = document.getElementById("cant10").value;
        	p = document.getElementById("preu10").value;
        	r = c*p;
        	document.getElementById("precioTot10").value = r;
    		}
			</script>
			<td><input id="cant10" type="number" style="width : 60px; heigth : 5px; border:none" value="" onchange="precioTotal10()"></td>
			<td><input id="preu10" type="number" style="width : 60px; heigth : 5px; border:none" value="" onchange="precioTotal10()"></td>	
			<td><output id="precioTot10" for="cantidad precioUn"></output></td>

			<td></td>
			<td></td>

			<td></td>
			<td></td>
			<td></td>

			<td></td>
			<td></td>
			<td></td>
		</tr>				

</tr>

			<tr>
			<td><input id="num" type="number" name="id"  style="width : 40px; heigth : 5px; border:none" value=11></td>
			<td><input id="fecha" type="date" name=""  style="width : 120px; heigth : 5px; border:none" value=""min="2022-01-01" max="2022-12-31"></td>
			<td><input id="guia" type="text" name="id"  style="width : 100px; heigth : 5px; border:none" placeholder=""></td>
			<td><input id="fact" type="text" name="id"  style="width : 80px; heigth : 5px; border:none" ></td>
			<td><input id="deta" type="text" name="id"  style="width : 180px; heigth : 5px; border:none" value=""></td>
			<script>
    		function precioTotal11() {
        	c = document.getElementById("cant11").value;
        	p = document.getElementById("preu11").value;
        	r = c*p;
        	document.getElementById("precioTot11").value = r;
    		}
			</script>
			<td><input id="cant11" type="number" style="width : 60px; heigth : 5px; border:none" value="" onchange="precioTotal11()"></td>
			<td><input id="preu11" type="number" style="width : 60px; heigth : 5px; border:none" value="" onchange="precioTotal11()"></td>	
			<td><output id="precioTot11" for="cantidad precioUn"></output></td>

			<td></td>
			<td></td>

			<td></td>
			<td></td>
			<td></td>

			<td></td>
			<td></td>
			<td></td>
		</tr>

</tr>

			<tr>
			<td><input id="num" type="number" name="id"  style="width : 40px; heigth : 5px; border:none" value=12></td>
			<td><input id="fecha" type="date" name=""  style="width : 120px; heigth : 5px; border:none" value=""min="2022-01-01" max="2022-12-31"></td>
			<td><input id="guia" type="text" name="id"  style="width : 100px; heigth : 5px; border:none" placeholder=""></td>
			<td><input id="fact" type="text" name="id"  style="width : 80px; heigth : 5px; border:none" ></td>
			<td><input id="deta" type="text" name="id"  style="width : 180px; heigth : 5px; border:none" value=""></td>
			<script>
    		function precioTotal12() {
        	c = document.getElementById("cant12").value;
        	p = document.getElementById("preu12").value;
        	r = c*p;
        	document.getElementById("precioTot12").value = r;
    		}
			</script>
			<td><input id="cant12" type="number" style="width : 60px; heigth : 5px; border:none" value="" onchange="precioTotal12()"></td>
			<td><input id="preu12" type="number" style="width : 60px; heigth : 5px; border:none" value="" onchange="precioTotal12()"></td>	
			<td><output id="precioTot12" for="cantidad precioUn"></output></td>

			<td></td>
			<td></td>

			<td></td>
			<td></td>
			<td></td>

			<td></td>
			<td></td>
			<td></td>
		</tr>

</tr>
		</table>

	</div>
</div>

<p> EspinoVillanueva Djorkaeff Oscar - se están implementando más funcionalidades</p>
