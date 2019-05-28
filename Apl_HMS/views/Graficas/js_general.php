<script>
    $(document).ready(function() {
        listarProcedimientos();
        listarQuirurgicas();
    });
    var labels = [];
    var dato = [];
    var inicios,finals;
    var n = 0;
    var arreglo = [];
 	$.post('<?= site_url('json/listarDatos') ?>',"", function(data, textStatus, xhr) {
    var num = JSON.parse(data);
    $.each(num, function(index, val) {
       n++;
       arreglo.push(val);    
    });
    inicios = n/2;
    finals = inicios;
    for (var i = 0; i < inicios; i++) {
        labels.push(arreglo[i]); 
    }
    for (var i = finals; i < n; i++) {
        dato.push(arreglo[i]); 
    }
    //console.log(dato);
    var ctx = document.getElementById('myChart').getContext('2d');
         var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
            
            data: {
                labels: labels,
                datasets: [{
                    label: 'Ingresos De pacientes',
                    borderColor: 'rgb(255, 99, 132)',
                    data: dato
                }]
            },

            // Configuration options go here
            options: {
                responsive: true,
            }
        });
    });
        var labelss = [];
    var datos = [];
    var inicio,final;
    var l = 0;
    var arreglos = [];
    $.post('<?= site_url('json/listarEgresos') ?>',"", function(data, textStatus, xhr) {
    var num = JSON.parse(data);
    $.each(num, function(index, val) {
       l++;
       arreglos.push(val);    
    });
    //console.log(arreglos);
    inicio = l/2;
    final = inicio;
    for (var i = 0; i < inicio; i++) {
        labelss.push(arreglos[i]); 
    }
    for (var i = final; i < l; i++) {
        datos.push(arreglos[i]); 
    }
    //console.log(data);
    //console.log(dato);
    var ctx = document.getElementById('egresos').getContext('2d');
         var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
            
            data: {
                labels: labelss,
                datasets: [{
                    label: 'Egresos De pacientes',
                    borderColor: 'rgb(11, 99, 132)',
                    data: datos
                }]
            },

            // Configuration options go here
            options: {
                responsive: true,
            }
        });
    });

    var f = 0;
        var title = [];
    var dats = [];
    var iniciar,finalizar;
    var arregla = [];
    $.post('<?= site_url('json/listarFacturas') ?>',"", function(data, textStatus, xhr) {
    var num = JSON.parse(data);
    $.each(num, function(index, val) {
       f++;
       arregla.push(val);    
    });
    //console.log(arreglos);
    iniciar = f/2;
    finalizar = iniciar;
    for (var i = 0; i < iniciar; i++) {
        title.push(arregla[i]); 
    }
    for (var i = finalizar; i < f; i++) {
        dats.push(arreglos[i]); 
    }

    //console.log(data);
    //console.log(dato);
    var ctx = document.getElementById('facturas').getContext('2d');
         var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
            
            data: {
                labels: title,
                datasets: [{
                    label: 'Facturas Cerradas',
                    borderColor: 'rgb(11, 0, 132)',
                    data: dats
                }]
            },

            // Configuration options go here
            options: {
                responsive: true,
            }
        });
    });

    $('#procedimientoActualizar').click(function(event) {
        fecha_inicial = $('#fecha_inicial').val();
        fecha_final = $('#fecha_final').val();
        $('#procedimientos').empty();
        $('#muestra').empty();
        $('#muestra').html('<canvas id="procedimientos" style=""></canvas>')
        listarProcedimientos(fecha_inicial,fecha_final);
        listarQuirurgicas(fecha_inicial,fecha_final);
    });
    function listarProcedimientos(fecha_inicial = "",fecha_final = "") {
       var p = 0;
        var titulo_proc = [];
        var datos_proc = [];
        var iniciar_proc,finalizar_proc;
        var arregla_proc = [];
        var color = [];
        $.post('<?= site_url('json/listarProcedimientos') ?>',{fecha1: fecha_inicial,fecha2: fecha_final}, function(data, textStatus, xhr) {
        var num = JSON.parse(data);
        $.each(num, function(index, val) {
           p++;
           arregla_proc.push(val);    
        });
        iniciar_proc = p/2;
        finalizar_proc = iniciar_proc;
        for (var i = 0; i < iniciar_proc; i++) {
            titulo_proc.push(arregla_proc[i]); 
        }
        for (var i = finalizar_proc; i < p; i++) {
            datos_proc.push(arregla_proc[i]); 
            color.push('rgba('+Math.floor((Math.random() * 255) + 0)+','+Math.floor((Math.random() * 255) + 0)+','+Math.floor((Math.random() * 255) + 0)+',.5)');
        }
        //console.log(color);
        var ctx = document.getElementById('procedimientos').getContext('2d');
             var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
                
                data: {
                    labels: titulo_proc,
                    datasets: [{
                        label: '# procedimientos',
                        borderColor: 'rgba(255,255,255)',
                        backgroundColor: color,
                        data: datos_proc
                    }]
                },

                // Configuration options go here
                options: {
                    responsive: true,
                    elements: {
                        line: {
                            tension: 0 // disables bezier curves
                        }
                    }
                }
            });
        }); 
    }

    function listarQuirurgicas(fecha_inicial = "",fecha_final = "") {
       var p = 0;
        var titulo_quir = [];
        var datos_quir = [];
        var iniciar_quir,finalizar_quir;
        var arregla_quir = [];
        var colorQuir = [];
        $.post('<?= site_url('json/listarQuirurgicas') ?>',{fecha1: fecha_inicial,fecha2: fecha_final}, function(data, textStatus, xhr) {
        var num = JSON.parse(data);
        $.each(num, function(index, val) {
           p++;
           arregla_quir.push(val);    
        });
        iniciar_quir = p/2;
        finalizar_quir = iniciar_quir;
        for (var i = 0; i < iniciar_quir; i++) {
            titulo_quir.push(arregla_quir[i]); 
        }
        for (var i = finalizar_quir; i < p; i++) {
            datos_quir.push(arregla_quir[i]); 
            colorQuir.push('rgba('+Math.floor((Math.random() * 255) + 0)+','+Math.floor((Math.random() * 255) + 0)+','+Math.floor((Math.random() * 255) + 0)+',.5)');
        }
        //console.log(color);
        console.log(datos_quir);
        var ctx = document.getElementById('Cirugias').getContext('2d');
             var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
                
                data: {
                    labels: titulo_quir,
                    datasets: [{
                        label: '# Cirugias',
                        borderColor: 'rgba(255,255,255)',
                        backgroundColor: colorQuir,
                        data: datos_quir
                    }]
                },

                // Configuration options go here
                options: {
                    responsive: true,
                    elements: {
                        line: {
                            tension: 0 // disables bezier curves
                        }
                    }
                }
            });
        }); 
    }
	

</script>