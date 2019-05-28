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
                                <label for="rg">RG::</label>
                                <input name="rg" id="rg" class="form-control" type="checkbox" required="">
                            </div>
                            <div class="col-lg-5">
                                <label for="radicacionanterior">N° de Radicación anterior:<br>(Respuesta a glosa, marcar con X en RG):</label>
                                <input name="radicant" id="radicant" class="form-control" type="number" required="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="glyphicon glyphicon-pencil"></i> 2. DATOS DE LA PERSONA QUE RECLAMA 
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseTwo">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <label for="primerapellido">Primer Apellido:</label>
                                <input type="text" name="primapell" id="primapell" class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <label for="segundoapellido">Segundo Apellido:</label>
                                <input type="text" name="segunapell" id="segunapell" class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <label for="primernombre">primer Nombre:</label>
                                <input type="text" name="primernom" id="primernom" class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <label for="segundonombre">Segundo Nombre:</label>
                                <input type="text" name="segundnom" id="segundnom " class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <label for="tipodedocumento">Tipo de Documento:</label>
                                <select class="form-control" required="">
                                    <option value="cc">CEDULA DE CIUDADNIA</option>
                                    <option value="ce">CEDULA DE EXTRANJERIA</option>
                                    <option value="pa">PASPORTE</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label for="numerodedocumento">Número de Documento:</label>
                                <input type="number" name="numerodoc" id="numerodoc" class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <label for="direccion">Dirección:</label>
                                <input type="text" name="direcciontrans" id="direcciontrans" class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <label for="telefono">Telefono:</label>
                                <input type="text" name="teleft" id="teleft" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="departamento">Departamento:</label>
                                <input type="text" name="departevento" id="departevento" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="codigodepartamento">codigo:</label>
                                <input type="number" name="codigodepa" id="codigodepa" required="" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="municipio">Municipio:</label>
                                <input type="text" name="municevento" id="municevento" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="codigomunicipio">codigo:</label>
                                <input type="number" name="codigomunicip" id="codigomunicip" required="" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="parentesco">Parentesco o Relación con la Víctima:</label>
                                <select name="prestensco" id="parentesco" class="form-control">
                                    <option value="1">PADRES</option>
                                    <option value="2">CÓNYUGE</option>
                                    <option value="3">ABUELOS</option>
                                    <option value="4">COMPAÑERO(A) PERMANENTE</option>
                                    <option value="5">HIJOS</option>
                                    <option value="6">NIETOS</option>
                                    <option value="7">HERMANOS</option>
                                    <option value="8">APODERADO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="glyphicon glyphicon-pencil"></i> 3.DATOS DEL SITIO DONDE OCURRIO EL EVENTO CATASTRÓFICO O ACCIDENTE DE TRÁNSITO   
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseThree">
                    <div class="panel-body"> 
                        <div class="col-lg-12">
                            <legend>Naturaleza del evento:</legend>
                            <div class="col-lg-12">
                                <label for="accidentedetransito">Accidente de Transito:</label>
                                <input type="checkbox" name="accitrans" id="accitrans" required="">
                            </div>
                            <legend>Naturales:</legend>
                            <div class="col-lg-3">
                                <label for="sismo">Sismo:</label>
                                <input type="checkbox" name="sismo" id="sismo" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="maremoto">Maremoto:</label>
                                <input type="checkbox" name="maremoto" id="maremoto" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="erupcciones">Erupciones Volcanicas:</label>
                                <input type="checkbox" name="eupcionesvolc" id="eupcionesvolc" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="huracan">Huracán:</label>
                                <input type="checkbox" name="huracan" id="huracan" required="">
                            </div><br><br>
                            <div class="col-lg-3">
                                <label for="inundaciones">Inundaciones:</label>
                                <input type="checkbox" name="inund" id="inund" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="avalancha">Avalancha:</label>
                                <input type="checkbox" name="avlanch" id="avlanch" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="deslizamiento">Deslizamiento de Tierra:</label>
                                <input type="checkbox" name="delizam" id="delizam" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="incendionatural">Incendio Natural:</label>
                                <input type="checkbox" name="incendio" id="incendio" required="">
                            </div>
                            <br><br>
                            <div class="col-lg-3">
                                <label for="rayo">Rayo:</label>
                                <input type="checkbox" name="rayo" id="rayo" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="vendaval">Vendaval:</label>
                                <input type="checkbox" name="vendav" id="vendav" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="tornado">Tornado:</label>
                                <input type="checkbox" name="tornado" id="tornado" required="">
                            </div>
                            <legend>Terroristas:</legend>
                            <div class="col-lg-3">
                                <label for="explosion">Explosión:</label>
                                <input type="checkbox" name="explosion" id="explosion" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="masacre">Masacre:</label>
                                <input type="checkbox" name="masacre" id="masacre" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="minaantipersonal">Mina Antipersonal:</label>
                                <input type="checkbox" name="minaant" id="minaant" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="combate">Combate:</label>
                                <input type="checkbox" name="combat" id="combat" required="">
                            </div><br><br>
                            <div class="col-lg-3">
                                <label for="incendio">Incendio:</label>
                                <input type="checkbox" name="icendio" id="icendio" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="ataquesamunicipios">Ataques a Municipios:</label>
                                <input type="checkbox" name="ataquesamun" id="ataquesamun" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="otro">Otro:</label>
                                <input type="checkbox" name="otro" id="otro" required="">
                            </div>
                            <div class="col-lg-3">
                                <label for="cual">Cual?:</label>
                                <input type="text" name="cual" id="cual" required="">
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
                                    <input type="time" name="hora" id="hora" class="form-control" required="">
                                </div>
                                <div class="col-lg-2"><br><br>
                                    <label for="zona">Zona:</label>
                                    <select required="" class="form-control">
                                        <option value="1"></option>
                                        <option value="2">Urbana</option>
                                        <option value="3">Rural</option>
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
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <i class="glyphicon glyphicon-pencil"></i> 4. INFORMACIÓN DEL VEHICULO DEL ACCIDENTE DE TRÁNSITO 
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseFour">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <label for="poliza">Estado de Aseguramiento:</label>
                                <select required="" class="form-control">
                                    <option value="1"></option>
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
                                <label for="nombreaseguradora">Nombre de la Aseguradora:</label>
                                <input type="text" name="nombreasegurad" id="nombreasegurad" required="" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for=" numeropoliza">N° de la Poliza:</label>
                                <input type="number" name="numpoliza" id="numpoliza" class="form-control" required="">
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
                                <select name="interven" id="interven" class="form-control">
                                    <option value="1">SI</option>
                                    <option value="1">NO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <i class="glyphicon glyphicon-pencil"></i> 5. DATOS DEL PROPIETARIO DEL VEHICULO
                        </a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseFive">
                    <div class="panel-body"> 
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <label for="primerapellido">Primer Apellido:</label>
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
                                <select required="" class="form-control" required="">
                                    <option value="1"></option>
                                    <option value="2">CC</option>
                                    <option value="3">CE</option>
                                    <option value="4">PA</option>
                                    <option value="5">TI</option>
                                    <option value="6">RC</option>
                                    <option value="7">CD</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <label for="numerodocumento">Numero Documento:</label>
                                <input type="number" name="numdocument" id="numdocument" class="form-control" required="">
                            </div>
                            <div class="col-lg-2">
                                <label for="fechadenacimiento">Fecha Nacimiento:</label>
                                <input type="date" name="fechadenacim" id="fechadenacim" class="form-control" required="">
                            </div>
                            <div class="col-lg-2">
                                <label for="sexo">Sexo:</label>
                                <select name="sexo" id="sexo" class="form-control">
                                    <option value="1">FEMENINO</option>
                                    <option value="2">MASCULINO</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <label for="direccion">Dirección:</label>
                                <input type="text" name="direccion" id="direccion" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="telefono">Telefono:</label>
                                <input type="number" name="telefono" id="telefono" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="departamento">Departamento:</label>
                                <input type="text" name="departevento" id="departevento" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="codigodepartamento">codigo:</label>
                                <input type="number" name="codigodepa" id="codigodepa" required="" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="municipio">Municipio:</label>
                                <input type="text" name="municevento" id="municevento" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="codigomunicipio">codigo:</label>
                                <input type="number" name="codigomunicip" id="codigomunicip" required="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSix">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <i class="glyphicon glyphicon-pencil"></i> 5. DATOS DEL CONDUCTOR DEL VEHICULO
                        </a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseSix">
                    <div class="panel-body"> 
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <label for="primerapellido">Primer Apellido:</label>
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
                                <select required="" class="form-control" required="">
                                    <option value="1"></option>
                                    <option value="2">CC</option>
                                    <option value="3">CE</option>
                                    <option value="4">PA</option>
                                    <option value="5">TI</option>
                                    <option value="6">RC</option>
                                    <option value="7">CD</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <label for="numerodocumento">Numero Documento:</label>
                                <input type="number" name="numdocument" id="numdocument" class="form-control" required="">
                            </div>
                            <div class="col-lg-2">
                                <label for="fechadenacimiento">Fecha Nacimiento:</label>
                                <input type="date" name="fechadenacim" id="fechadenacim" class="form-control" required="">
                            </div>
                            <div class="col-lg-2">
                                <label for="sexo">Sexo:</label>
                                <select name="sexo" id="sexo" class="form-control">
                                    <option value="1">FEMENINO</option>
                                    <option value="2">MASCULINO</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <label for="direccion">Dirección:</label>
                                <input type="text" name="direccion" id="direccion" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="telefono">Telefono:</label>
                                <input type="number" name="telefono" id="telefono" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="departamento">Departamento:</label>
                                <input type="text" name="departevento" id="departevento" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="codigodepartamento">codigo:</label>
                                <input type="number" name="codigodepa" id="codigodepa" required="" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="municipio">Municipio:</label>
                                <input type="text" name="municevento" id="municevento" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="codigomunicipio">codigo:</label>
                                <input type="number" name="codigomunicip" id="codigomunicip" required="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSeven">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <i class="glyphicon glyphicon-pencil"></i> 5. AMPAROS QUE RECLAMA
                        </a>
                    </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseSeven">
                    <div class="panel-body"> 
                        <legend>Marque la casilla correspondiente al beneficio reclamado:</legend>
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <input type="text" name="conceptoreclamado" id="conceptoreclamado" value="  CONCEPTO RECLAMADO" class="form-control" readonly="">
                                <input type="text" name="gastosfuner" id="gastosfuner" value="GASTOS FUNERARIOS" class="form-control" readonly="">
                                <input type="text" name="muertevic" id="muertevic" value="MUERTE DE LA VICTIMA" class="form-control" readonly="">
                                <input type="text" name="incapacidad" id="incapacidad" value="INCAPACIDAD PERMANENTE" class="form-control" readonly="">
                            </div>
                            <div class="col-lg-1">
                                <input type="text" name="marcar" value="  X" class="form-control" readonly="">
                                <center><input type="checkbox" name="gastosf" id="gastosf" class="form-control"></center><br>
                                <center><input type="checkbox" name="muertevict" id="muertevict"  class="form-control"></center><br>
                                <center><input type="checkbox" name="incapperm" id="incapperm"  class="form-control"></center>
                            </div>
                            <div class="col-lg-3">
                                <input type="text" name="conceptoreclamado" id="conceptoreclamado" value="  VALOR RECLAMADO" class="form-control" readonly="">
                                <input type="number" name="valorreclam" id="valorreclam" placeholder="$" class="form-control">
                            </div>
                            <div class="col-lg-5">
                            </div>
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
    </div>
    <div class="form-group">
        <div class="row text-center">
            <button name="formularioenviado" value="envfurtran" type="submit" class="btn bg-navy">Guardar</button>
        </div>
    </div>
</section>

