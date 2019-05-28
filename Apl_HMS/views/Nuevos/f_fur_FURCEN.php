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
                            <i class="glyphicon glyphicon-pencil"></i> 2. IDENTIFICACIÓN DEL EVENTO CATASTROFICO   
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseTwo">
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
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-5"><br><br>
                                <label for="direccion">Dirección:</label>
                                <input type="text" name="direcc" id="direcc" class="form-control" required="">
                            </div>
                            <div class="col-lg-2"><br><br>
                                <label for="zona">Zona:</label>
                                <select required="" class="form-control">
                                    <option value="1"></option>
                                    <option value="2">Urbana</option>
                                    <option value="3">Rural</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
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
                        </div>
                    </div>
                    </div>
                </div>
           
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="glyphicon glyphicon-pencil"></i> 3.IDENTIFICACIÓN DE LAS VICTIMAS DEL EVENTO CATASTROFICO 
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseThree">
                    <div class="panel-body"> 
                        <div class="col-lg-12">
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
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <label for="numerodocumento">Número de <br> Documento</label> 
                                <input type="number" name="numerodocu" id="numerodocu" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="primernombre">Primer  <br> Nombre</label> 
                                <input type="text" name="primernom" id="primernom" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="segundonombre">Segundo  <br> Nombre</label> 
                                <input type="text" name="segundnombre" id="segundnombre"  class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="primerapellido">Primer  <br> Apellido</label> 
                                <input type="text" name="primapelli" id="primapelli" required="" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label for="segundoapellido">Segundo  <br> Apellido</label> 
                                <input type="text" name="segunapell" id="segunapell" required="" class="form-control">
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
                            <i class="glyphicon glyphicon-pencil"></i> 4. APROBACIÓN DE CERTIFICACIÓN 
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseFour">
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
                                    <option value="1"></option>
                                    <option value="2">CC</option>
                                    <option value="3">CE</option>
                                    <option value="4">PA</option>
                                    <option value="5">TI</option>
                                    <option value="6">RC</option>
                                    <option value="7">CD</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label for="numerodocumento">Numero Documento:</label>
                                <input type="number" name="numdocument" id="numdocument" class="form-control">
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

