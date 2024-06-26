<?php

namespace App\Controllers;

class MainController extends CoreController
{
  /**
   * Method which handles the home page
   *
   * @return void
   */
  public function home()
  {
    // 1. préparation des données

    // 2. appel de la vue
    $this->show(
      'main/home'
    );
  }
}
