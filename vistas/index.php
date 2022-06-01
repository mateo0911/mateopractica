<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Document</title>
</head>

<body>
  <div class="container my-5">
    <h1>formulario</h1>
    <form id="formulario" method="post">
      <label for="">Nombre de Producto</label>
      <input type="text" name="nom_producto" id="id_nom"> <br>
      <label for="">CANTIDAD</label>
      <input type="number" name="cantidad" id="idcantidad"><br>
      <label for="">PROVEEDOR</label>
      <input type="text" name="proveedor" id="idproveedor"><br>
      <button type="button" id="enviar"> Enviar</button>
    </form>
  </div>

  <div id="insertado">

  </div>

  <script>
    const formulario = document.getElementById('formulario');
    const enviar = document.getElementById('enviar');
    const insertar = document.getElementById('insertado')

    const url = '../controller/insertar.php';
    enviar.addEventListener('click', enviarDatos)

    async function enviarDatos() {
      const data = new FormData(formulario);
      const respuesta = await fetch(url, {
        method: 'POST',
        body: data
      });

      const respuestaJson = await respuesta.json();
      if (respuestaJson.insertado == true) {
        insertar.innerHTML = `
        <h1>datos insertados</h1>
        `
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Insertado con exito',
          showConfirmButton: false,
          timer: 1500
        })

      }else{
        Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Insertado con exito',
          showConfirmButton: false,
          timer: 1500
        })
      }
    }
  </script>

</body>

</html>