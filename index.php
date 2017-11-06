<?php

require_once 'vendor/autoload.php';

use \BudimirNameSpace\src;


$myFlags[] = new \BudimirNameSpace\rect(
    "England",
    2,
    3
);

$myFlags[] = new \BudimirNameSpace\triangle(
    "Nepal",
    3,
    2
);

foreach ($myFlags as $item){
    echo $item." / ".$item->getSize();
}

/*
if(isse($_GET['format'])){
    //render HTML output
    if($_GET['format']=='html'){
        echo renderHTML($myFlag);
    }
    //render JSON output
    if($_GET['format']=='json'){
        echo renderJSON($myFlag);
    }
    if($_GET['format']!='html'&& $_GET['format']=='json'){
        echo 'No Format Given';
    }
}
*/

function renderHTML():string{

    // Initializing the View: rendering in Fluid takes place through a View instance
    // which contains a RenderingContext that in turn contains things like definitions
    // of template paths, instances of variable containers and similar.
    $view = new \TYPO3Fluid\Fluid\View\TemplateView();

    // TemplatePaths object: a subclass can be used if custom resolving is wanted.
    $paths = $view->getTemplatePaths();

    // Assigning the template path and filename to be rendered. Doing this overrides
    // resolving normally done by the TemplatePaths and directly renders this file.
    $paths->setTemplatePathAndFilename(__DIR__ . '/Templates/Flagdemo.html');

    // In this example we assign all our variables in one array. Alternative is
    // to repeatedly call $view->assign('name', 'value').
    $view->assignMultiple([
        'flag1' => $myFlags[0],
        'flag2' => $myFlags[1]
    ]);

    // Rendering the View: plain old rendering of single file, no bells and whistles.
    $output = $view->render();

    return $output;

}

function renderJSON():string{

    return '{"name":"fixedNameCannotAccessProperty"'.'", area":';

    return json_encode();

}


/**
 * <?php

require "vendor/autoload.php";

use \Benjamin\Flaggen;

$flagge = new \Benjamin\Flaggen\Rechteck("Eine Flagge", "Blau", 6.0, 4.0);

echo isset($_GET['format']) ? $_GET['format'] : "no format given";
//echo $_GET['name'];

function renderHTML(\Benjamin\Flaggen\Rechteck $flagge): string
{
    $view = new \TYPO3Fluid\Fluid\View\TemplateView();
    $paths = $view->getTemplatePaths();

    $view->assignMultiple([
        "flagge1" => $flagge
    ]);

    $paths->setTemplatePathAndFilename(_DIR_ . "/templates/flagdemo.html");

    $output = $view->render();
    return $output;
}

function renderJSON(\Benjamin\Flaggen\Rechteck $flagge): string
{
    return '{ "name":"fixedNameCannotAccessProperty"'.',"area":"'.$flagge->getFlaeche().'"}';
    json_encode($flagge);
}

if (isset($_GET['format'])) {
    if ($_GET['format'] == 'html') {
        echo renderHTML($flagge);
    }

    if ($_GET['format'] == 'json') {
        echo renderJSON($flagge);
    }

    if ($_GET['format'] != 'json' && $_GET['format'] != 'html') {
        echo 'no format given';
    }
}

**/



