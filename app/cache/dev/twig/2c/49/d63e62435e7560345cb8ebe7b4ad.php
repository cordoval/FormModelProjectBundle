<?php

/* MinkBundle::headers.html.twig */
class __TwigTemplate_2c49d63e62435e7560345cb8ebe7b4ad extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"ru\">
<head>
    <title>headers</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"/>
</head>
<body>
    ";
        // line 8
        echo $this->getContext($context, 'headers');
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "MinkBundle::headers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
