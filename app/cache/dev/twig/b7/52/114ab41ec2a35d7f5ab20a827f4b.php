<?php

/* MinkBundle::submit.html.twig */
class __TwigTemplate_b752114ab41ec2a35d7f5ab20a827f4b extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<h1>
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, 'method'), "html");
        echo " recieved
</h1>

<br/>
";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo " is ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'age'), "html");
        echo " years old ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'speciality'), "html");
        echo "
";
    }

    public function getTemplateName()
    {
        return "MinkBundle::submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
