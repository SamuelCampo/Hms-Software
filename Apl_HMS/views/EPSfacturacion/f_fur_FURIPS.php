<input type="hidden" name="urldestino" value="<?= $this->uri->uri_string() ?>" />
<section class="content">
    <div class="row contenedorsobreadonopd">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <i class="glyphicon glyphicon-pencil"></i>1. DATOS BASICOS
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="col-lg-2">
                                <label for="rg">RG:</label>
                                <input name="rg" id="rg" class="form-control" type="checkbox" required="">
                            </div>
                            <div class="col-lg-5">
                                <label for="radicacionanterior">N° de Radicación anterior:<br>(Respuesta a glosa, marcar con X en RG)</label>
                                <input name="radicant" size="5" id="radicant" class="form-control" type="number" required="">
                            </div>
                            <div class="col-lg-5">
                                <br><label for="cuenta">N° de Factura/ Cuenta de Cobro:</label>
                                <input name="cuentacobro" id="cuentacobro" class="form-control" type="number" required="" readonly="">
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <i class="glyphicon glyphicon-pencil"></i> 2. DATOS DEL SITIO DONDE OCURRIÓ EL EVENTO CATASTRÓFICO O EL ACCIDENTE DE TRANSITO
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseFour">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <legend>Naturaleza del evento:</legend>
                            <div class="col-lg-12">
                                <label for="accidentedetransito">Accidente de Transito:</label>
                                <input type="checkbox" name="accitrans" id="accitrans" value="01" required="">
                            </div>
                            <legend>Naturales:</legend>
                            <div class="col-lg-3">
                                <label for="sismo">Sismo:</label>
                                <input type="checkbox" name="sismo" id="sismo" value="02">
                            </div>
                            <div class="col-lg-3">
                                <label for="maremoto">Maremoto:</label>
                                <input type="checkbox" name="maremoto" id="maremoto" value="03">
                            </div>
                            <div class="col-lg-3">
                                <label for="erupcciones">Erupciones Volcanicas:</label>
                                <input type="checkbox" name="eupcionesvolc" id="eupcionesvolc" value="04">
                            </div>
                            <div class="col-lg-3">
                                <label for="huracan">Huracán:</label>
                                <input type="checkbox" name="huracan" id="huracan" value="16">
                            </div><br><br>
                            <div class="col-lg-3">
                                <label for="inundaciones">Inundaciones:</label>
                                <input type="checkbox" name="inund" id="inund" value="06">
                            </div>
                            <div class="col-lg-3">
                                <label for="avalancha">Avalancha:</label>
                                <input type="checkbox" name="avlanch" id="avlanch" value="07">
                            </div>
                            <div class="col-lg-3">
                                <label for="deslizamiento">Deslizamiento de Tierra:</label>
                                <input type="checkbox" name="delizam" id="delizam" value="05">
                            </div>
                            <div class="col-lg-3">
                                <label for="incendionatural">Incendio Natural:</label>
                                <input type="checkbox" name="incendio" id="incendio" value="08">
                            </div>
                            <br><br>
                            <div class="col-lg-3">
                                <label for="rayo">Rayo:</label>
                                <input type="checkbox" name="rayo" id="rayo" value="25">
                            </div>
                            <div class="col-lg-3">
                                <label for="vendaval">Vendaval:</label>
                                <input type="checkbox" name="vendav" id="vendav" value="26">
                            </div>
                            <div class="col-lg-3">
                                <label for="tornado">Tornado:</label>
                                <input type="checkbox" name="tornado" id="tornado" value="27">
                            </div>
                            <legend>Terroristas:</legend>
                            <div class="col-lg-3">
                                <label for="explosion">Explosión:</label>
                                <input type="checkbox" name="explosion" id="explosion" value="09">
                            </div>
                            <div class="col-lg-3">
                                <label for="masacre">Masacre:</label>
                                <input type="checkbox" name="masacre" id="masacre" value="13">
                            </div>
                            <div class="col-lg-3">
                                <label for="minaantipersonal">Mina Antipersonal:</label>
                                <input type="checkbox" name="minaant" id="minaant" value="15">
                            </div>
                            <div class="col-lg-3">
                                <label for="combate">Combate:</label>
                                <input type="checkbox" name="combat" id="combat" value="11">
                            </div><br><br>
                            <div class="col-lg-3">
                                <label for="incendio">Incendio:</label>
                                <input type="checkbox" name="icendio" id="icendio" value="10">
                            </div>
                            <div class="col-lg-3">
                                <label for="ataquesamunicipios">Ataques a Municipios:</label>
                                <input type="checkbox" name="ataquesamun" id="ataquesamun" value="12">
                            </div>
                            <div class="col-lg-3">
                                <label for="otro">Otro:</label>
                                <input type="checkbox" name="otro" id="otro" value="17">
                            </div>
                            <div class="col-lg-3">
                                <label for="cual">Cual?:</label>
                                <input type="text" name="cual" id="cual">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-5"><br><br>
                                <label for="direccion">Dirección:</label>
                                <input type="text" name="direcc" id="direcc" class="form-control" required="">
                            </div>
                            <div class="col-lg-3"><br><br>
                                <label for="fecha">Fecha:</label>
                                <input type="date" name="fechao" id="fechao" class="form-control" required="">
                            </div>
                            <div class="col-lg-2"><br><br>
                                <label for="hora">Hora:</label>
                                <input type="time" name="hora" id="hora" class="form-control" placeholder="HH.MM" required="">
                            </div>
                            <div class="col-lg-2"><br><br>
                                <label for="zona">Zona:</label>
                                <select required="" class="form-control" id="zona" name="zona">
                                    <option value="U">URBANA</option>
                                    <option value="R">RURAL</option>
                                </select>
                            </div>
                            <div class="col-lg-4"><br><br>
                                <label for="depatartamento">Departamento:</label>
                                <input type="text" name="depto" id="depto" class="form-control" required="">
                            </div>
                            <div class="col-lg-2"><br><br>
                                <label for="codigodepatartamento">Codigo:</label>
                                <input type="number" name="codidepto" id="codidepto" class="form-control" required="">
                            </div>
                            <div class="col-lg-4"><br><br>
                                <label for="municipio">Municipio:</label>
                                <input type="text" name="municip" id="municip" class="form-control" required="">
                            </div>
                            <div class="col-lg-2"><br><br>
                                <label for="codigomunicipio">Codigo:</label>
                                <input type="number" name="codimunicip" id="codimunicip" class="form-control" required="">
                            </div>

                            <div class="col-lg-12"><br><br>
                                <label for="descripcion">Descripcón Breve del Evento Catastrofico o Accidente de Transito:</label>
                                <textarea class="form-control" rows="4" name="descripc" placeholder="Enuncie las lprincipales carácteristicas del evento/ accidente" id="descripc"></textarea>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <i class="glyphicon glyphicon-pencil"></i> 3. DATOS DEL VEHICULO DE ACCIDENTE DE TRANSITO
                        </a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseFive">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <label for="poliza">Póliza:</label>
                                <select required="" class="form-control">
                                    <option value="2">ASEGURADO</option>
                                    <option value="3">NO ASEGURADO</option>
                                    <option value="4">VEHICULO FANTASMA</option>
                                    <option value="5">PÓLIZA FALSA </option>
                                    <option value="6">VEHICULO EN FUGA</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="marca">Marca:</label>
                                <input type="text" name="marca" id="marca" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="placa">Placa:</label>
                                <input type="text" name="placa" id="placa" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="tiposervicio">Tipo de Servicio :</label>
                                <select required="" class="form-control">
                                    <option value="1"></option>
                                    <option value="2">PARTICULAR</option>
                                    <option value="3">PÚBLICO</option>
                                    <option value="4">OFICIAL</option>
                                    <option value="5">VEHICULO DE EMERGENCIA</option>
                                    <option value="6">VEHICULO DE SERVICIO DIPLOMATICO O CONSULAR</option>
                                    <option value="7">VEHICULO DE TRANSPORTE MASIVO</option>
                                    <option value="8">VEHICULO ESCOLAR</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for=" codigo">Codigo de la Aseguradora:</label>
                                <input type="number" name="codigoaseg" id="codigoaseg" class="form-control"x>
                            </div>
                            <div class="col-lg-4">
                                <label for=" numeropoliza">N° de la Poliza:</label>
                                <input type="number" name="numpoliza" id="numpoliza" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="vigdesde">VIGENCIA <br>Desde:</label>
                                <input type="date" name="vigenciadesde" id="vigenciadesde" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="vighasta"><br>Hasta:</label>
                                <input type="date" name="vigenciahasta" id="vigenciahasta" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="intervencion"><br>Intervención de Autoridad:</label>
                                <input type="checkbox" name="intervent" id="intervent" class="form-control">
                                <label for="cobroexcedente"><br>Cobro Excedente Póliza:</label>
                                <input type="checkbox" name="cobroex" id="cobroex" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSix">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <i class="glyphicon glyphicon-pencil"></i> 4. DATOS DEL PROPIETARIO DEL VEHICULO 
                        </a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseSix">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <label for="primerapellido">Primer Apellido o Razón Socíal:</label>
                                <input type="text" name="primerapell" id="primerapell" class="form-control" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="segundoapellido">Segundo Apellido:</label>
                                <input type="text" name="segundapell" id="segundapell" class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <label for="primernombre">Primer Nombre:</label>
                                <input type="text" name="primernomb" id="primernomb" class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <label for="segundonombre">Segundo Nombre:</label>
                                <input type="text" name="segundnomb" id="segundnomb" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="tipodocumento">Tipo documento:</label>
                                <select required="" class="form-control">
                                    <option value="CC">CEDULA DE CIUDADNIAC</option>
                                    <option value="CE">CEDULA DE EXTRANJERIA</option>
                                    <option value="PA">PASAPORTE</option>
                                    <option value="NIT">NIT</option>
                                    <option value="PA">TARJETA DE IDENTIDAD</option>
                                    <option value="RC">REGISTRO CIVIL</option>
                                    <option value="CD">CARNET DIPLOMATICO</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label for="numerodocumento">Numero Documento:</label>
                                <input type="number" name="numdocument" id="numdocument" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="direccionresidencia">Dirección de Residencia:</label>
                                <input type="text" name="direccresid" id="direccresid" class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <label for="telefono">Telefono:</label>
                                <input type="number" name="direccresid" id="direccresid" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="telefono">Departamento:</label>
                                <input type="text" name="depto" id="depto" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="codigod">Codigo:</label>
                                <input type="number" name="codedepto" id="codedepto" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="municipioresidencia">Municipio Residencia:</label>
                                <input type="text" name="municip" id="municip" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="codigom">Codigo:</label>
                                <input type="number" name="codemunic" id="codemunicnat" class="form-control">
                            </div>
                        </div>           
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSeven">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <i class="glyphicon glyphicon-pencil"></i> 5. DATOS DE REMISIÓN
                        </a>
                    </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseSeven">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <label for="tiporeferencia">Tipo Referencia:</label>
                                <select class="form-control">
                                    <option value="1">REMISIÓN</option>
                                    <option value="2">ORDEN DE SERVICIO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <label for="fechar">Fecha Remisión:</label> 
                                <input type="date" name="fechrem" id="fechrem" required="" placeholder="aaaa/mm/dd" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="hora">Hora:</label>
                                <input type="time" name="hora" id="hora" required="" placeholder="HH.MM" class="form-control">
                            </div>
                        </div>
                        <br><br><br><br>
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <label for="prestador">Prestador que Remite:</label>
                                <input type="text" name="prestadorremite" id="prestadorremite" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="codigoremite">Codigo:</label>
                                <input type="number" name="codigorem" id="codigorem" required="" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="profeesional">Profesional que Remite:</label>
                                <input type="text" name="profesionalremite" id="profesionalremite" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="cargoprofesional">Cargo:</label>
                                <input type="text" name="cargoprofesionremit" id="cargoprofesionremit" required="" class="form-control">
                            </div><br><br><br><br>
                            <div class="col-lg-4">
                                <label for="cargoprofesional">Fecha de Aceptación:</label>
                                <input type="date" name="fechacept" id="fechacept" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="horaceptac">Hora:</label>
                                <input type="time" name="horaceptac" id="horaceptac" required="" placeholder="HH.MM" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <label for="prestadorrec">Prestador que Recibe:</label>
                                <input type="text" name="prestadorecibe" id="prestadorecibe" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="codigorec">Codigo:</label>
                                <input type="number" name="codigoreci" id="codigoreci" required="" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="profeesionalrec">Profesional que Recibe:</label>
                                <input type="text" name="profesionalrecibe" id="profesionalrecibe" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="cargoprofesionalrec">Cargo:</label>
                                <input type="text" name="cargoprofesionrecib" id="cargoprofesionrecib" required="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingEight">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            <i class="glyphicon glyphicon-pencil"></i> 6. AMPARO DE TRANSPORTE Y MOVILIZACIÓN DE LA VICTIMA 
                        </a>
                    </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseEight">
                    <div class="panel-body">
                        <legend>Diligenciar únicamente para el transporte desde el sitio del evento hasta la primera IPS (Transporte Primario)</legend>
                        <h4>Datos del Vehículo</h4>
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <label for="placa">Placa No.</label>
                                <input type="text" name="placveh" id="placveh" class="form-control" required="">
                            </div>
                            <div class="col-lg-4">
                                <label for="transportodesde">Transporto la Victima Desde:</label>
                                <input type="text" name="transdesde" id="transdesde" class="form-control" required="">
                            </div>
                            <div class="col-lg-4">
                                <label for="transportohasta">Hasta:</label>
                                <input type="text" name="transhasta" id="transhasta" class="form-control" required="">
                            </div>
                            <div class="col-lg-4">
                                <label for="tipodetransporte ">Tipo de Transporte:</label>
                                <select class="form-control">
                                    <option value="1">AMBULANCIA BÁSICA</option>
                                    <option value="2">AMBULANCIA MEDICADA</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="lugarvictima ">Lugar Donde Recoge la Victima:</label>
                                <select class="form-control">
                                    <option value="1">RURAL</option>
                                    <option value="2">URBANA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingNine">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            <i class="glyphicon glyphicon-pencil"></i> 7. CERTIFICADO DE LA ATENCIÓN MEDICA DE LA VICTIMA COMO PRUEBA DEL ACCIDENTE O EVENTO 
                        </a>
                    </h4>
                </div>
                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseNine">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <label for="fechadeingreso">Fecha de Ingreso:</label>
                                <input type="date" name="fechadeingreso" id="fechadeingreso" class="form-control" required="">
                            </div>
                            <div class="col-lg-2">
                                <label for="horadeingreso">Hora:</label>
                                <input type="time" name="horadeing" id="horadeing" class="form-control" required="">
                            </div>
                            <div class="col-lg-2">
                            </div>
                            <div class="col-lg-3">
                                <label for="fechadeegreso">Fecha de Egreso:</label>
                                <input type="date" name="fechaegreso" id="fechaegreso" class="form-control" required="">
                            </div>
                            <div class="col-lg-2">
                                <label for="horadeegreso">Hora:</label>
                                <input type="time" name="horadeegreso" id="horadeegreso" class="form-control" required="">
                            </div><br><br><br><br>
                            <div class="col-lg-5">
                                <legend>Códigos Diagnóstico Principal de Ingreso</legend>
                            </div> 
                            <div class="col-lg-2">
                            </div> 
                            <div class="col-lg-5">
                                <legend>Códigos Diagnóstico Principal de Egreso</legend>
                            </div>
                            <div class="col-lg-2">
                                <label for="codigoprincipalingreso">Código:</label>
                                <input type="number" name="codigoprincipalingreso" id="codigoprincipalingreso" class="form-control" required="">
                            </div> 
                            <div class="col-lg-2">
                                <label for="codigootro1">Otro:</label>
                                <input type="number" name="codigotro1" id="codigotro1" class="form-control">
                            </div> 
                            <div class="col-lg-2">
                                <label for="codigootro2">Otro:</label>
                                <input type="number" name="codigotro2" id="codigotro2" class="form-control">
                            </div> 
                            <div class="col-lg-2">
                                <label for="codigoprincipalegreso">Código:</label>
                                <input type="number" name="codigoprincipalegreso" id="codigoprincipalegreso" class="form-control" required="">
                            </div> 
                            <div class="col-lg-2">
                                <label for="codigootroegre1">Otro:</label>
                                <input type="number" name="codigotroegreso1" id="codigotroegreso1" class="form-control">
                            </div> 
                            <div class="col-lg-2">
                                <label for="codigootroegre2">Otro:</label>
                                <input type="number" name="codigotroegreso2" id="codigotroegreso2" class="form-control">
                            </div> 
                            <legend>Datos del Médico o Profesional Tratante</legend>
                            <div class="col-lg-3">
                                <label for="primerapellido">Primer Apellido:</label>
                                <input type="text" name="primerapellido" id="primerapellido" class="form-control" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="segundoapellido">Segundo Apellido:</label>
                                <input type="text" name="segundoapellido" id="segundoapellido" class="form-control" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="primernombrem">Primer Nombre:</label>
                                <input type="text" name="primernombrem" id="primernombrem" class="form-control" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="segundonombrem">Segundo Nombre:</label>
                                <input type="text" name="segundonombrem" id="segundonombrem" class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <label for="tipodocumento">Tipo Documento:</label>
                                <select class="form-control">
                                    <option value="cc">CEDULA DE CIUDADANIA</option>
                                    <option value="ce">CEDULA DE EXTRANJERIA</option>
                                    <option value="pa">PASAPORTE</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label for="numerodocumentom">Número Documento:</label>
                                <input type="number" name="numerodocumentom" id="numerodocumentom" class="form-control" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="numeroregistromedico">Número Registro Médico:</label>
                                <input type="number" name="numeroregmed" id="numeroregmed" class="form-control" required="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTen">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            <i class="glyphicon glyphicon-pencil"></i> 8. AMPAROS QUE RECLAMA
                        </a>
                    </h4>
                </div>
                <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseTen">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                            </div>
                            <div class="col-lg-4">
                                <label for="valortotal">Valor Total Facturado</label>
                            </div>
                            <div class="col-lg-4">
                                <label for="valortotal">Valor Reclamado al FOSYGA</label>
                            </div>
                            <div class="col-lg-4">
                                <label for="gastosmedquir">Gastos Medicos Quirugicos</label>
                            </div>
                            <div class="col-lg-4">
                                <input type="number" class="form-control" name="valtotalfac" id="valtotalfac" placeholder="$" required="">
                            </div>
                            <div class="col-lg-4">
                                <input type="number" class="form-control" name="valrecfos" id="valrecfos"  placeholder="$" required="">
                            </div>
                            <div class="col-lg-4">
                                <label for="gastosmedquir">Gastos de Transporte y Movilización de la Victima</label>
                            </div>
                            <div class="col-lg-4">
                                <input type="number" class="form-control" name="valtotalfac2" id="valtotalfac2" placeholder="$" required="">
                            </div>
                            <div class="col-lg-4">
                                <input type="number" class="form-control" name="valrecfos2" id="valrecfos2"placeholder="$" required="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingEleven">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            <i class="glyphicon glyphicon-pencil"></i> 9. DECLARACIONES DE LA INSTITUCION PRESTADORA DE SERVICIOS DE SALUD 
                        </a>
                    </h4>
                </div>
                <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseEleven">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <textarea rows="4" name="declaraciones" id="declararciones" class="form-control" readonly="">Como representante legal o gerente de la institución prestadora de servicios de salud declaro bajo gravedad de juramento que toda la información contenida en este formulario es cierta y se podrá verificar por la compañia de seguros, por la Dirección Administrativa de Fondos de la Protección Social o a quien haga sus veces, por el Administrador Fiduciario del Fondo de Solidaridad y Garantia Fosyga, por la Superintendencia Nacional de salud o la Contraloria General de la República de no ser asi, acepto todas las consecuencias legales que produzca esta situación. Adicionalmente, manifiesto que la reclamación no ha sido presentada con anterioridad ni se ha recibido pago alguno por las sumas reclamadas.
                            </textarea>
                        </div>
                        <div class="col-lg-4">
                            <label for="acepto">Acepto:</label>
                            <input type="checkbox" name="acepto" id="acepto" class="form-control" required="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="form-group">
            <div class="row text-center">
                <button name="formularioenviado" value="envfurips" type="submit" class="btn bg-navy">Guardar</button>
            </div>
        </div>
</section>

