<?php

require_once 'BaseDao.php';
require_once SITE_ROOT . '/models/Article.php';

class ArticleDAO extends BaseDAO
{
    protected function getModelClass()
    {
        return 'Article';
    }

    protected function getModelTable()
    {
        return 'articles';
    }

    public function add($article)
    {
        $query = "INSERT INTO " . $this->getModelTable() . " (title, contributorName, text) VALUES (:title, :contributorName, :text)";

        if ($stmt = $this->pdo->prepare($query)) {

            // Bind variables to the prepared statement parameters
            $stmt->bindParam(":title", $article->getTitle());
            $stmt->bindParam(":contributorName", $article->getContributorName());
            $stmt->bindParam(":text", $article->getText());

            // execute the prepared statement
            if ($stmt->execute()) {
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else {
                die("Something went wrong. Please try again later.");
            }
        }
    }

    public function getById($id)
    {
        $query = "SELECT * FROM " . $this->getModelTable() . " WHERE id = :id;";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                return $this->mapToObject($row);
            }
        }
        return null;
    }
}
