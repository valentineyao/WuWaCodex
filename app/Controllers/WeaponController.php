<?php

namespace App\Controllers;

use App\Models\WeaponModel;

class WeaponController extends CoreController
{
  protected $weaponModel;

  public function __construct()
  {
    $this->weaponModel = new WeaponModel();
  }

  /**
   * Méthode pour afficher la liste des types d'armes
   *
   * @return void
   */
  public function list()
  {
    // 1. préparation des données
    $apiUrl = 'https://api.resonance.rest/weapons';
    $weaponData = $this->weaponModel->fetchWeapons($apiUrl);

    if ($weaponData === false) {
      header('HTTP/1.0 404 Not Found');
      $this->show('error/error404');
      return;
    }

    sort($weaponData);

    // 2. appel de la vue
    $this->show(
      'weapon/list',
      ['weapons' => $weaponData]
    );
  }


  /**
   * Méthode pour afficher la liste des armes par rapport à un type d'armes
   *
   * @return void
   */
  public function read($name)
  {
    // 1. préparation des données
    $apiUrl = 'https://api.resonance.rest/weapons/' . urlencode($name);
    $weaponData = $this->weaponModel->fetchWeapon($apiUrl);

    if ($weaponData === false) {
      header('HTTP/1.0 404 Not Found');
      $this->show('error/error404');
      return;
    }

    sort($weaponData);

    // 2. appel de la vue
    $this->show(
      'weapon/read',
      ['weapons' => $weaponData]
    );
  }
}
