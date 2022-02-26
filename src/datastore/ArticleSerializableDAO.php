<?php

require_once 'BaseDao.php';
require_once SITE_ROOT . '/models/ArticleSerializable.php';

class ArticleSerializableDAO extends BaseDAO
{
    protected function getModelClass()
    {
        return 'ArticleSerializable';
    }

    protected function getModelTable()
    {
        return 'articles';
    }
}
