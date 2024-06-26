<?php

namespace App\Controllers;

class CharacterController extends CoreController
{
  /**
   * Method which handles the home page
   *
   * @return void
   */
  public function list()
  {
    // 1. préparation des données
    $apiUrl = 'https://api.resonance.rest/characters';
    $characterData = $this->fetchCharacters($apiUrl);

    sort($characterData);

    // 2. appel de la vue
    $this->show(
      'character/list',
      ['characters' => $characterData]
    );
  }

  /**
   * Récupère les personnages du jeu de l'API
   *
   * @param string $url
   * @return array
   */
  private function fetchCharacters($url)
  {
    $response = file_get_contents($url);

    if ($response === FALSE) {
      die('Error retrieving data.');
    }

    $data = json_decode($response, true);

    return $data['characters'];
  }
}
