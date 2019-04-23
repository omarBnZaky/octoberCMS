<?php 
class Cms5cbf49bc8f2ae931426452_882b4a1a93a0b343817632a73dae357dClass extends Cms\Classes\PageCode
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
