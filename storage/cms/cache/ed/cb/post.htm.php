<?php 
class Cms5cbc2b9b6578d020277605_86894bb87b5ce97724d285744dbe30c7Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
