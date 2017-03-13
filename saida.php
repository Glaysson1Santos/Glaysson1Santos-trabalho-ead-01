<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">      
    <?php     
      $NomeBanda              = $_POST['NomeBanda'];
      $linkImagem             = $_POST['linkImagem'];
      $Nome1integrante        = $_POST['Nome1integrante'];
      $Data1integrante        = $_POST['Data1integrante'];
      $Instrumento1integrante = $_POST['Instrumento1integrante'];
      $Nome2integrante        = $_POST['Nome2integrante'];
      $Data2integrante        = $_POST['Data2integrante'];
      $Instrumento2integrante = $_POST['Instrumento2integrante'];
      $Nome3integrante        = $_POST['Nome3integrante'];
      $Data3integrante        = $_POST['Data3integrante'];
      $Instrumento3integrante = $_POST['Instrumento3integrante'];
      $biografiaBanda         = $_POST['biografiaBanda'];
      $corFundo               = $_POST['corFundo'];
      $corTexto               = $_POST['corTexto'];        
    ?>        
    <title> 
      <?php echo $nomeBanda;?> - Biografia 
    </title>  
    <link rel='stylesheet'    
          type='text/css'
          href='estiloSaida.css'>
    <style type='text/css'>
      body {
        color            : <?php echo $corTexto; ?>;
        background-color : <?php echo $corFundo; ?>;        
      }
    </style>
  </head>

  <body>
    <h1 align="center"> 
      <?php echo $NomeBanda; ?>
    </h1>
    
    <p align="center"> 
      <img src   = "<?php echo $linkImagem; ?>" 
           title = "<?php echo $NomeBanda;   ?>" 
           alt   = "<?php echo $NomeBanda;   ?>" > 
    </p>

    <hr>

    <h2> 
      Biografia 
    </h2>

    <p>
      <?php echo $biografiaBanda; ?>
    </p>

    <hr>

    <h2> 
      Integrantes 
    </h2>

    <table>

      <tr>
        <th> 
          Nome
        </td>
        <th> 
          Data de Nascimento 
        </td>
        <th> 
          Instrumento		
        </td>
      </tr>

      <tr>
        <td> 
          <?php echo $Nome1integrante; ?>	
        </td>
        <td> 
          <?php echo $Data1integrante; ?>	
        </td>
        <td> 
          <?php echo $Instrumento1integrante; ?>	
        </td>
      </tr>

      <tr>
        <td> 
          <?php echo $Nome2integrante; ?>	
        </td>
        <td> 
          <?php echo $Data2integrante; ?>	
        </td>
        <td> 
          <?php echo $Instrumento2integrante; ?>	
        </td>
      </tr>

      <tr>
        <td> 
          <?php echo $Nome3integrante; ?>	
        </td>
        <td> 
          <?php echo $Data3integrante; ?>	
        </td>
        <td> 
          <?php echo $Instrumento3integrante; ?>
        </td>
      </tr>

    </table>

  </body>
</html>
