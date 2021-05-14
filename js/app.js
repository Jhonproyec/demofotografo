$(function(){

  // Evento para aparecer y desaparecer el menu
  let activo = false;
  $(document).on('click', '.botonMenu', function(){
    if(activo == false){
      $('#menu').css({"transform": "translateX(0%)"});
      this.classList.add('abierto');
      activo = true;
    }else{
      $('#menu').css({"transform": "translateX(100%)"});
      this.classList.remove('abierto');
      activo = false;
    }
  })





  // Funcion para eliminar un articulo o un album
  
  const eliminar = (eliminar, url) => {
    $(document).on('click', eliminar, function(e){
      // Obtener el id del elemento a eliminar
      let elementoEliminar = $(this)[0].parentElement.parentElement.parentElement;
      let idEliminar = $(elementoEliminar).attr('idarticulo'); 
      //Asegurarnos que si se quiere eliminar el elemento
      if(confirm("¿Estas seguro que quieres eliminarlo?")){
          // Enviar id por ajax
        $.ajax({
          url: url,
          type: 'POST',
          data: {id:idEliminar},
          success: function(response){
            $(elementoEliminar).fadeOut(300);
          }
        })
      }


      e.preventDefault();
    })
  }

  //funcion para editar un articulo
  const editar = (editar) => {
    $(document).on('click', editar, function(){
      // obtener el id del elemento a editar
      let elementoEditar = $(this)[0].parentElement.parentElement.parentElement;
      let idEditar = $(elementoEditar).attr('idarticulo');
      // Enviar id por ajax al archivo articuloaEditar.php para obtener toda la informacion del articulo
      $.ajax({
        url: '../admin/articuloaEditar.php',
        type: 'POST',
        data: {
          id: idEditar
        },
        success: function(response){
          // Convertir el string de la respuesta a un JSON
          let articulo = JSON.parse(response);
          // Rellenar los campos del formulario de editar
          $('#idEditPost').val(articulo.id);
          $('#tituloEditPost').val(articulo.titulo);
          $('#extractoEditPost').val(articulo.extracto);
          $('#descripcionEditPost').val(articulo.descripcion);
        }
      })
    })
  }  
  editar('.editarPost');






  //LLamar la funcion para que se elimine un blog
  eliminar('.eliminarPost', '../admin/eliminarPost.php');
})