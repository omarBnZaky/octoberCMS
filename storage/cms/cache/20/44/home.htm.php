<?php 
class Cms5cbc284a9d206829160968_db55123ee0cc26fe5ab937000d248f81Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
