$(document).ready(function () {
    const datosHeroe = [];
    recuperarJSON();
    const carga = document.getElementById('contenedor');
    
    $('#agregar').click(() => {
        insertar();
    });

    $('#elimina').click(() => {
        eliminarDatos();
    });

    function recuperarJSON() {
        
        $.ajax({
            url: 'https://cdn.jsdelivr.net/gh/akabab/superhero-api@0.3.0/api/all.json',
            success: (r)=> {
                var superHeroes = JSON.stringify(r);
                superHeroes = JSON.parse(superHeroes);
                for (i = 0; i < superHeroes.length; i++) {
                   datosHeroe.push({"img":'<img loading="lazy" class="img-fluid" src="'+superHeroes[i].images.lg+'">',"nombre":superHeroes[i].name,"alter_ego":superHeroes[i].biography.fullName,"poder":superHeroes[i].powerstats.power,"genero":superHeroes[i].appearance.gender,"publicacion":superHeroes[i].biography.publisher});                         
                }
            }
        });
    }


    function insertar(){
        ventanaCarga();
        $.ajax({
            type: "POST",
            url: '../php/insercion.php',
            data: {'datosHero': JSON.stringify(datosHeroe)},    
            success: function(r){
                quitarCarga();
                if (r == "2") {
                    swal({
                        icon: "success",
                        title: "Insercion realizada con exito!",
                        html: true,
                        text: '\n\n Estas siendo redirigido automaticamente...',
                        closeOnClickOutside: false,
                        closeOnEsc: false,
                        value: true,
                        buttons: false,
                        timer: 5000
                    }).then((value) => {
                        window.location = "../";
                    });
                } else {
                    swal('Se ha producido un error', 'No se insertaron los datos en la tabla' + r, 'error');
                }  
            }
        });
    }

    function eliminarDatos(){
        swal({
            title: "Advertencia!",
            text: "¿Esta seguro de querer eliminar todos los datos?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: 'POST',
                    url: '../php/eliminar.php',
                    success: (r)=>{
                        if(r == "2"){
                            swal('Porcedimiento exitoso', 'Se han eliminado los registros', 'success');
                        }else{
                            swal('Se ha producido un error', 'No se han podido eliminar los datos en la tabla' + r, 'error');
                        }
                    }
                });
            } 
        });
        
    }


    var altura= $('.menu').offset().top;

	$(window).on('scroll',function(){
		if ($(window).scrollTop() > altura) {
			$('.menu').addClass('menu-fixed');
		}else{
			$('.menu').removeClass('menu-fixed');
		}
	});

    function ventanaCarga(){
        carga.style.visibility = 'visible';
        //carga.style.opacity = '0';
    }  
    
    function quitarCarga(){
        carga.style.visibility = 'hidden';
        carga.style.opacity = '0';
    }  

});