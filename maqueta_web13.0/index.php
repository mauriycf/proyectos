<?php

if(isset($_GET['view'])) {
  if(file_exists('nucleo/controladores/' . 'controlador' . ucfirst(strtolower($_GET['view'])) . '.php')) {
    include('nucleo/controladores/' . 'controlador' . ucfirst(strtolower($_GET['view'])) . '.php');
  } else {
    include('nucleo/controladores/controladorError.php');
  }
} else {
  include('nucleo/controladores/controladorIndex.php');
}
