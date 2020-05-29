<?php


namespace View;


class PageView
{
    public function form(string $redirect = "page.add", array $data = [])
    {
        ?>
        <form action="<?=ADMIN_ROOT_URL."?".ADMIN_ACTION_PARAM."=" . $redirect?>" method="post">
            <label>slug <br/><input name="page[slug]" type="text" value="<?=$data['slug'] ?? ''?>"></label> <br/>
            <label>title <br/><input name="page[title]" type="text" value="<?=$data['title'] ?? ''?>"></label> <br/>
            <label>descprtion <br/><textarea name="page[description]"><?=$data['description'] ?? ''?></textarea> <br/>
            <label>span-text <br/><input type="text" name="page[span-text]" value="<?=$data['span-text'] ?? ''?>"></label> <br/>
            <label>span-label <br/><input type="text" name="page[span-label]" value="<?=$data['span-label'] ?? ''?>"></label> <br/>
            <label>img <br/><input type="text" name="page[img]" value="<?=$data['img'] ?? ''?>"></label> <br/>
            <label>img-alt <br/><input type="text" name="page[img-alt]" value="<?=$data['img-alt'] ?? ''?>"></label> <br/>
                <input type="submit">
        </form>
        <?php
    }

}