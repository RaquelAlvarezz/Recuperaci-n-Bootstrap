<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/estiloscontacto.css">
    
    <link rel="icon" type="image/jpg" href="./img/bosquejo.png"/>
    <title>360 grados Arquitectura</title>
    
</head>
<body>
 
<?php include "header.php"; ?>
    
<main>

#browser
  #browser-bar
    .circles 
    .circles 
    .circles 
    %p Contactos Sugeridos
    %span.arrow.entypo-resize-full
  #content
    #left
      #map 
        %p Ginecologos SLP
        .map-locator
          .tooltip
            %ul
              %li 
                %span.entypo-location
                %span.selectedLocation Dra.Patricia Padilla Zabalegui
              %li 
                %span.entypo-mail 
                %a{:href => "#"} padillaginecologia@gmail.com
              %li 
                %span.entypo-phone 
                (+01) 444 813 2945
        .zoom
      %ul#location-bar
        %li 
          %a{:href => "https://goo.gl/maps/oAJd2FhGhSD2",
          :data => {:location => 'Consultario1'},
          :class => "location"} Consultorio1
    #right
      %form
        %p Registrate
        %input{:type => "email", :placeholder => "Email"}/ 
        %input{:type => "text", :placeholder => "Subject"}
        
        %textarea{:placeholder => "Message", :rows => "4"}
        
        %input{:type => "submit", :placeholder => "Send"}/ 
        
      %p Contactanos
      %p.other.entypo-mail 
        %a{:href => "#"} yesika_romero1b@outlook.com
      %p.other.entypo-mail 
        %a{:href => "#"} jose_garcia1b@outlook.com
    </main>
    <?php include "footer.php"; ?>
    
    
</body>
</html>