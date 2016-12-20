<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 13:28
 */

namespace Class152\Projekt\Library;


use Class152\Projekt\Config\TemplateConfig;
use Class152\Projekt\Services\SessionService\SesionService;

class TwigRendering
{
    private $templatePath;

    /**
     * TwigRendering constructor.
     * @param string $template
     * @param array $variables
     */
    public function __construct(string $template, array $variables)
    {
        $this->templatePath = TemplateConfig::getPath();
        $loader = new \Twig_Loader_Filesystem($this->templatePath);

        $twig =new \Twig_Environment($loader, array());
        
        $template = $twig->loadTemplate($template);
        echo $template->render($variables);
    }
}