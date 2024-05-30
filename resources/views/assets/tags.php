<?php

function beginHtml(string $title)
{
	echo "
	<!DOCTYPE html>
	<html lang='es'>
	<head>
  		<meta charset='UTF-8'>
  		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
  		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
  		<title>$title</title>
  		<script src='https://kit.fontawesome.com/cf7ee57364.js' crossorigin='anonymous'></script>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0' />
		<script type='text/javascript' language='JavaScript' src='../js/reloj.js'></script>
		<script type='text/javascript' language='JavaScript' src='js/funciones.js'></script>
		<script src='https://cdn.tailwindcss.com'></script>
  		<link rel='stylesheet' href='/css/style.css'>
			
	</head>
	<body onload='mostrarTiempo();'>
		<div class='contenedorPrincipal'>
	";
}

function showHeader()
{
	echo '
		<header class="header">
      		<img src="../img/logo.png" alt="Logo" class="header_img">
     		 <p class="header_p">Colegio de Estudios Científicos y Tecnológicos del Estado de Querétaro</p>
			  <span id="tiempo"></span>
    	</header>';
}


function showMain()
{
	echo '<main class="main --default">';
}

function closeMain()
{
	echo '</main>';
}

function showFooter()
{
	echo '

		<footer class="footer">
      		<p>Felipe Industries, 2024</p>
    	</footer>
	';
}


function endHtml()
{
	// Div del contenedorPrincipal
	echo '</div>';
	echo '</body>';
	echo '</html>';
}

function showMenu()
{
	if ($_SESSION['Tipo'] == 'D') {
		echo '<ul class="menu__lista-princ">
    <li class="menu__opcion"><a href="/home" class="menu__link --inicio"><i class="fa-sharp fa-solid fa-home" style="font-size: var(--tamano-2); padding-right: var(--tamano-med);"></i>Inicio</a></li>

    <li class="menu__opcion"><a href="/alumnos" class="menu__link"><i class="fa-sharp fa-solid fa-graduation-cap" style="font-size: var(--tamano-1); padding-right: var(--tamano-med); color: gray;"></i>Alumnos</a>
        
    </li>
	<li class="menu__opcion"><a href="/profesores" class="menu__link"><i class="fa-sharp fa-solid fa-chalkboard-user" style="font-size: var(--tamano-1); padding-right: var(--tamano-med); color: steelblue;"></i>Profesores</a>
        
    </li>
	<li class="menu__opcion"><a href="/materias" class="menu__link"><i class="fa-sharp fa-solid fa-book" style="font-size: var(--tamano-1); padding-right: var(--tamano-med); color: blue;"></i>Materias</a>
        
    </li>
	<li class="menu__opcion"><a href="/admin" class="menu__link"><i class="fa-sharp fa-solid fa-user-tie" style="font-size: var(--tamano-1); padding-right: var(--tamano-med); color: black;"></i>Administradores</a>
        
    </li>
	<li class="menu__opcion"><a href="/usuarios" class="menu__link"><i class="fa-sharp fa-solid fa-user" style="font-size: var(--tamano-1); padding-right: var(--tamano-med); color: black;"></i>Usuarios</a>
        
    </li>
	<li class="menu__opcion"><a href="/calificaciones" class="menu__link"><i class="fa-sharp fa-solid fa-table" style="font-size: var(--tamano-1); padding-right: var(--tamano-med); color: blue;"></i>Calificaciones</a>
        
    </li>
	<li class="menu__opcion"><a href="/grupos" class="menu__link"><i class="fa-sharp fa-solid fa-user-group" style="font-size: var(--tamano-1); padding-right: var(--tamano-med); color: red;"></i>Grupos</a>
        
    </li>

    <li class="menu__opcion"><a href="/logout" class="menu__link --cerrar">Cerrar sesión</a></li>
	</ul>';
	}
}


function showArea()
{
	echo '<div class="area-trabajo">';
}

function closeArea()
{
	echo '</div>';
}

function scriptCopyTable()
{
	echo '
	<script>
		document.getElementById("copiarTabla").addEventListener("click", function() {
		var tabla = document.getElementById("tabla");
		var range = document.createRange();
		range.selectNode(tabla);
		window.getSelection().removeAllRanges();
		window.getSelection().addRange(range);
		document.execCommand("copy");
		window.getSelection().removeAllRanges();
		
		alert("Tabla copiada al portapapeles.");
		});
	</script>
	';
}

function openHTML($title = 'CECyTEQ')
{
	beginHtml($title);
	showHeader();
	showMain();
	showMenu();
	showArea();
}

function closeHTML()
{
	closeArea();
	closeMain();
	showFooter();
	endHtml();
}
