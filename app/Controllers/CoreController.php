<?php

namespace App\Controllers;

abstract class CoreController
{
  /**
   * Method that displays content to views
   *
   * @param string $viewName Nom du fichier de vue
   * @param array $viewData Tableau des données à transmettre aux vues
   * @return void
   */
  protected function show(string $viewName, $viewData = [])
  {
    global $router;

    $absoluteUrl = $_SERVER['BASE_URI'] . './public';

    require_once __DIR__ . '/../Views/layout/header.tpl.php';
    require_once __DIR__ . '/../Views/' . $viewName . '.tpl.php';
    require_once __DIR__ . '/../Views/layout/footer.tpl.php';
  }
}
