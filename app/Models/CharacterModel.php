<?php

namespace App\Models;

class CharacterModel
{
  /**
   * Récupère tous les personnages du jeu depuis l'API
   *
   * @param string $url
   * @return array|false 
   */
  public function fetchCharacters($url)
  {
    $response = file_get_contents($url);

    if ($response === FALSE) {
      return false;
    }

    $data = json_decode($response, true);

    return isset($data['characters']) ? $data['characters'] : [];
  }

  /**
   * Récupère les informations d'un personnage spécifique du jeu depuis l'API
   *
   * @param string $url
   * @return array|false 
   */
  public function fetchCharacter($url)
  {
    $response = file_get_contents($url);

    if ($response === FALSE) {
      return false;
    }

    $data = json_decode($response, true);

    return $data;
  }
}
