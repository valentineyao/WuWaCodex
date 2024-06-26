<?php

namespace App\Models;

class WeaponModel
{
  /**
   * Récupère tous les armes du jeu depuis l'API
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
}
