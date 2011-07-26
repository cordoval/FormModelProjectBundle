<?php

/* MinkBundle::page.html.twig */
class __TwigTemplate_351f0dc7efc4ebff50ef1c2debb76722 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"ru\">
<head>
    <title>page</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"/>
</head>
<body>
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, 'page'), "html");
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_behat_tests_page", array("page" => "page10")), "html");
        echo "\">p10</a>
        </li>
        <li>
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_behat_tests_page", array("page" => "page0")), "html");
        echo "\">p0</a>
        </li>
        <li>
            <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_behat_tests_page", array("page" => "page22")), "html");
        echo "\">p22</a>
        </li>
    </ul>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "MinkBundle::page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
