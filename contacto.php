<?php include("includes/head.php");?>

<body>
<?php $urlvista="contacto";include("includes/header.php");?>
    <body>

      <form action="index.html" method="post">
        
        <h1>Ingrese su Consulta</h1>
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre_cliente">
        
        <label for="mail">Email:</label>
        <input type="email" id="mail" name="email_cliente">
        
        <label for="fono">Telefono:</label>
        <input type="text" id="fono" name="telefono_cliente">
        
        <label for="comentario">Escriba su comentario o duda:</label>
        <textarea id="comentario" name="comentario_cliente"></textarea>
        
        <button type="submit">Enviar Consulta</button>
        
      </form>
      
    </body>
<?php include("includes/footer.php");?>









