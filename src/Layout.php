<?php

function layout_menu($articles)
{
    $list = "";

    foreach($articles as $index=>$article)
    {
        $list.="<li><a href='?id={$index}'>{$article->getTitle()}</a></li>";
    }
    echo <<<EOT
    <div style="min-width: 200px; height: 100vh; border: 1px solid black; display:block">
        <ul>
            {$list}
        </ul>
    </div>
EOT;
}

