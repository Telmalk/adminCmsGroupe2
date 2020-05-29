<?php


namespace Model;


use Helper\AbstractModel;

class PageModel extends AbstractModel
{
    public function add(array $dataPage)
    {
        $sql = "
            INSERT INTO
                page
            SET
                slug = :slug,
                description = :description,
                `span-text` = :spanText,
                `span-label` = :spanLabel,
                img = :img,
                `img-alt` = :imgAlt,
                title = :title
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":slug", htmlentities($dataPage["slug"]));
        $stmt->bindValue(":description", htmlentities($dataPage["description"]));
        $stmt->bindValue(":spanText", htmlentities($dataPage["span-text"]));
        $stmt->bindValue(":spanLabel", htmlentities($dataPage["span-label"]));
        $stmt->bindValue(":img", htmlentities($dataPage["img"]));
        $stmt->bindValue(":imgAlt", htmlentities($dataPage['img-alt']));
        $stmt->bindValue(":title", htmlentities($dataPage["title"]));
        $stmt->execute();
        $this->errorHandler($stmt);
    }
}