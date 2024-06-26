<?php

namespace App\Controllers;

use App\Models\CharacterModel;

class CharacterController extends CoreController
{
  protected $characterModel;

  public function __construct()
  {
    $this->characterModel = new CharacterModel();
  }

  /**
   * Méthode pour afficher la liste des personnages
   *
   * @return void
   */
  public function list()
  {
    // 1. préparation des données
    $apiUrl = 'https://api.resonance.rest/characters';
    $characterData = $this->characterModel->fetchCharacters($apiUrl);

    if ($characterData === false) {
      header('HTTP/1.0 404 Not Found');
      $this->show('error/error404');
      return;
    }

    sort($characterData);

    // 2. appel de la vue
    $this->show(
      'character/list',
      ['characters' => $characterData]
    );
  }

  /**
   * Méthode pour afficher les détails d'un personnage
   *
   * @param string $name 
   * @return void
   */
  public function read($name)
  {
    // 1. préparation des données
    $apiUrl = 'https://api.resonance.rest/characters/' . urlencode($name);
    $characterData = $this->characterModel->fetchCharacter($apiUrl);

    if ($characterData === false) {
      header('HTTP/1.0 404 Not Found');
      $this->show('error/error404');
      return;
    }

    // 2. appel de la vue
    $this->show(
      'character/read',
      ['character' => $characterData]
    );
  }
}
