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
                            <i class="glyphicon glyphicon-pencil"></i> 2. DATOS DEL TRANSPORTADOR 
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseTwo">
                    <div class="panel-body">
                        <legend>Si es persona natural diligenciar los campos referentes a nombres y apellidos.</legend>
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <label for="nombreempresa">Nombre Empresa de Transporte Especial o Reclamante:</label>
                                <input type="text" name="empresareclam" id="empresareclam" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label for="codigohabilitacion">Código de Habilitación Empresa de Transporte Especial:</label>
                                <input type="number" name="codhabilt" id="codhabilt" class="form-control">
                            </div>
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
                                    <option value="nit">NIT</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label for="numerodedocumento">Número de Documento:</label>
                                <input type="number" name="numerodoc" id="numerodoc" class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <label for="tiposervicio">Tipo de Servicio:</label>
                                <select class="form-control" required="">
                                    <option value="1">AMBULANCIA BÁSICA</option>
                                    <option value="2">AMBULANCIA MEDICADA</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label for="tiposervicio">Persona Natural-Tipo de Servicio:</label>
                                <select class="form-control" required="">
                                    <option value="1">PARTICULAR</option>
                                    <option value="2">PÚBLICO</option>
                                    <option value="3">OFICIAL</option>
                                    <option value="4">VEHICULO DE SERVICIO DIPLOMATICO O CONSULAR</option>
                                    <option value="5">VEHICULO DE TRANSPORTE MASIVO</option>
                                    <option value="6">VEHICULO ESCOLAR</option>
                                    <option value="7">OTRO</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label for="otro">Otro:</label>
                                <input type="text" name="otro" id="otro" placeholder="Otro servicio...Describa" class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <label for="placavehiculo">Vehiculo Placa N°:</label>
                                <input type="text" name="placaveh" id="placaveh" class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <label for="direccion">Dirección:</label>
                                <input type="text" name="direcciontrans" id="direcciontrans" placeholder="Empresa o persona que transporta" class="form-control">
                            </div>
                            <div class="col-lg-3">
                                <label for="telefono">Telefono o Celular:</label>
                                <input type="text" name="telefcont" id="telefcont" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="departamento">Departamento:</label>
                                <input type="text" name="depto" id="depto" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="codigo">Código:</label>
                                <input type="number" name="codigo" id="codigo" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="municipio">Municipio:</label>
                                <input type="text" name="depto" id="depto" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="codigomunic">Código:</label>
                                <input type="number" name="codigomun" id="codigomun" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="glyphicon glyphicon-pencil"></i> 3. RELACION DE VICTIMAS TRASLADADAS
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseThree">
                    <div class="panel-body"> 
                        <div class="col-lg-12" id="victimas">
                            <div class="col-lg-2">
                                <label for="tipodocumento">Tipo de <br> Documento</label>
                                <select name="tipodocumento" id="tipodocumento" class="form-control">
                                    <option value="1">CC</option>
                                    <option value="2">CE</option>
                                    <option value="3">PA</option>
                                    <option value="4">TI</option>
                                    <option value="5">AS</option>
                                    <option value="6">MS</option>
                                </select><br>
                                <select name="tipodocumento1" id="tipodocumento1" class="form-control">
                                    <option value="1">CC</option>
                                    <option value="2">CE</option>
                                    <option value="3">PA</option>
                                    <option value="4">TI</option>
                                    <option value="5">AS</option>
                                    <option value="6">MS</option>
                                </select>
                                </select><br>
                                <select name="tipodocumento2" id="tipodocumento2" class="form-control">
                                    <option value="1">CC</option>
                                    <option value="2">CE</option>
                                    <option value="3">PA</option>
                                    <option value="4">TI</option>
                                    <option value="5">AS</option>
                                    <option value="6">MS</option>
                                </select>
                                </select><br>
                                <select name="tipodocumento3" id="tipodocumento3" class="form-control">
                                    <option value="1">CC</option>
                                    <option value="2">CE</option>
                                    <option value="3">PA</option>
                                    <option value="4">TI</option>
                                    <option value="5">AS</option>
                                    <option value="6">MS</option>
                                </select>
                                </select><br>
                                <select name="tipodocumento4" id="tipodocumento4" class="form-control">
                                    <option value="1">CC</option>
                                    <option value="2">CE</option>
                                    <option value="3">PA</option>
                                    <option value="4">TI</option>
                                    <option value="5">AS</option>
                                    <option value="6">MS</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <label for="numerodocumento">Número de <br> Documento</label> 
                                <input type="number" name="numerodocu" id="numerodocu" required="" class="form-control"><br>
                                <input type="number" name="numerodocu1" id="numerodocu1" required="" class="form-control"><br>
                                <input type="number" name="numerodocu2" id="numerodocu2" required="" class="form-control"><br>
                                <input type="number" name="numerodocu3" id="numerodocu3" required="" class="form-control"><br>
                                <input type="number" name="numerodocu4" id="numerodocu4" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="primernombre">Primer  <br> Nombre</label> 
                                <input type="text" name="primernom" id="primernom" required="" class="form-control"><br>
                                <input type="text" name="primernom1" id="primernom1" required="" class="form-control"><br>
                                <input type="text" name="primernom2" id="primernom2" required="" class="form-control"><br>
                                <input type="text" name="primernom3" id="primernom3" required="" class="form-control"><br>
                                <input type="text" name="primernom4" id="primernom4" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="segundonombre">Segundo  <br> Nombre</label> 
                                <input type="text" name="segundnombre" id="segundnombre"  class="form-control"><br>
                                <input type="text" name="segundnombre1" id="segundnombre1"  class="form-control"><br>
                                <input type="text" name="segundnombre2" id="segundnombre2"  class="form-control"><br>
                                <input type="text" name="segundnombre3" id="segundnombre3"  class="form-control"><br>
                                <input type="text" name="segundnombre4" id="segundnombre4"  class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="primerapellido">Primer  <br> Apellido</label> 
                                <input type="text" name="primapelli" id="primapelli" required="" class="form-control"><br>
                                <input type="text" name="primapelli1" id="primapelli1" required="" class="form-control"><br>
                                <input type="text" name="primapelli2" id="primapelli2" required="" class="form-control"><br>
                                <input type="text" name="primapelli3" id="primapelli3" required="" class="form-control"><br>
                                <input type="text" name="primapelli4" id="primapelli4" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="segundoapellido">Segundo  <br> Apellido</label> 
                                <input type="text" name="segunapell" id="segunapell" required="" class="form-control"><br>
                                <input type="text" name="segunapell1" id="segunapell1" required="" class="form-control"><br>
                                <input type="text" name="segunapell2" id="segunapell2" required="" class="form-control"><br>
                                <input type="text" name="segunapell3" id="segunapell3" required="" class="form-control"><br>
                                <input type="text" name="segunapell4" id="segunapell4" required="" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="tipodeevento">Tipo de Evento que Sucita la Movilización</label> 
                                <select name="tipoevento" id="tipoevento" class="form-control">
                                    <option value="1">ACCIDENTE DE TRÁNSITO</option>
                                    <option value="2">EVENTO CATASTRÓFICO</option>
                                    <option value="3">EVENTO TERRORISTA</option>
                                    <option value="4">OTRO</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="descripciondeotroevento">Descripcion del otro evento</label> 
                                <input type="text" name="descripcotro" id="descripcotro" required="" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <i class="glyphicon glyphicon-pencil"></i> 4. LUGAR EN EL QUE SE RECOGE LA VICTIMA O VICTIMAS 
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseFour">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="col-lg-8">
                                <label for="dirección">Dirección:</label>
                                <input type="text" name="direccevnto" id="direccevnto" required="" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="zona">Zona:</label>
                                <select name="zonaevento" id="zonaevento" class="form-control">
                                    <option value="1">RURAL</option>
                                    <option value="2">URBANA</option>
                                </select>
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
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <i class="glyphicon glyphicon-pencil"></i> 5. CERTIFICACIÓN DE TRASLADO
                        </a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseFive">
                    <div class="panel-body"> 
                        <legend>La institución prestadora de servicios de salud certifica que la entidad de transporte especial o persona natural efectuo el traslado de la victima a esta IPS</legend>
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
            <button name="formularioenviado" value="envfurtran" type="submit" class="btn bg-navy">Guardar</button>
        </div>
    </div>
</section>

