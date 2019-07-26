<?php

interface IArticleService {

    static function insertArticle(Article $newArticle) : bool;
    
    static function getArticle(string $aShortName) : Article;

    static function getArticles(): array;

    static function deleteArticle(string $shortName) : bool;

    static function updateArticle(Article $updatedArticle) : bool;

    static function writeArticles() : bool;

    static function parse($contents);

}
    
?>