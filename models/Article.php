<?php
  class Article {
    private $db;

    public function __construct() { $this->db = new Database; }

    public function addArticle($data) {
      $this->db->query('INSERT INTO `Article`(`title`, `subtitle`, `created_at`, `content`,  `banner`) VALUES (:title, :subtitle, :created_at :content, :banner)');
      
      $this->db->bind(':nom', $data['nom']);
      $this->db->bind(':note', $data['note']);
      $this->db->bind(':auteur', $data['auteur']);
      $this->db->bind(':idPoint', $data['idPoint']);
      $this->db->bind(':typePoint', $data['typePoint']);

      if($this->db->execute()) { return true; }
      else { return false; }
    }

    public function getArticles() {
      $this->db->query('SELECT * FROM `Article` ORDER BY `created_at` DESC');
      $results = $this->db->resultset();
      return $results;
    }

    public function getArticleById($idArticle) {
      $this->db->query('SELECT * FROM `Article` WHERE `id` = ' . $idArticle);
      $results = $this->db->resultset();
      return $results;
    }

  }