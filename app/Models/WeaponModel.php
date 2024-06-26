<?php

namespace App\Models;

class WeaponModel
{
  /**
   * Récupère tous les types d'armes du jeu depuis l'API
   *
   * @param string $url
   * @return array|false 
   */
  public function fetchWeapons($url)
  {
    $response = file_get_contents($url);

    if ($response === FALSE) {
      return false;
    }

    $data = json_decode($response, true);

    return isset($data['types']) ? $data['types'] : [];
  }

  /**
   * Récupère les armes par rapport à un type d'armes du jeu depuis l'API
   *
   * @param string $url
   * @return array|false 
   */
  public function fetchWeapon($url)
  {
    $response = file_get_contents($url);

    if ($response === FALSE) {
      return false;
    }

    $data = json_decode($response, true);

    return isset($data['weapons']) ? $data['weapons'] : [];
  }
}
