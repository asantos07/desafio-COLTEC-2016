<?php

/**
 *  Classe que lida com os comentários dos vídeos
 */
class Comentario
{

  public $id;
  public $nota;
  public $comentario;

  /**
   * Construtor que recebe o vetor de data com os parâmetros do comentarios
   *
   * @param array $data vetor com os parâmetros do comentário a ser preenchido
   *  (o id do comentário é adicionado depois)
   */
  function __construct(array $data)
  {
    $this->nota = $data['nota'];
    $this->comentario = $data['comentario'];
  }

  /**
   * Get the value of id
   *
   * @return mixed
   */
  public function getId()
  {
      return $this->id;
  }

  /**
   * Get the value of Nota
   *
   * @return mixed
   */
  public function getNota()
  {
      return $this->nota;
  }

  /**
   * Get the value of Comentario
   *
   * @return mixed
   */
  public function getComentario()
  {
      return $this->comentario;
  }

  /**
   * Get the value of Video Id
   *
   * @return mixed
   */
  public function getVideoId()
  {
      return $this->videoId;
  }
}
