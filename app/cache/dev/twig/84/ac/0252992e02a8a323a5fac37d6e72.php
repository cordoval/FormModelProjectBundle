<?php

/* MinkBundle::form.html.twig */
class __TwigTemplate_84ac0252992e02a8a323a5fac37d6e72 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"ru\">
<head>
    <title>form</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"/>
</head>
<body>
    <form name=\"user\" method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_behat_tests_submit"), "html");
        echo "\">
        <input id=\"name\" type=\"text\" name=\"name\" />
        <input id=\"age\" type=\"text\" name=\"age\" />
        <select id=\"speciality\" name=\"speciality\">
            <option value=\"programmer\">Programmer</option>
            <option value=\"manager\">Manager</option>
        </select>

        <input type=\"submit\" value=\"Send spec info\" />
    </form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "MinkBundle::form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
