<?php

require_once 'BaseDao.php';
require_once '../models/Article.php';

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
}
