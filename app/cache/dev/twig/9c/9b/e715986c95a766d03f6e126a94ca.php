<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_9c9be715986c95a766d03f6e126a94ca extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "[exception] ";
        echo twig_escape_filter($this->env, (((($this->getContext($context, 'status_code') . " | ") . $this->getContext($context, 'status_text')) . " | ") . $this->getAttribute($this->getContext($context, 'exception'), "class", array(), "any", false)), "html");
        echo "
[message] ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'exception'), "message", array(), "any", false), "html");
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'exception'), "toarray", array(), "any", false));
        foreach ($context['_seq'] as $context['i'] => $context['e']) {
            // line 4
            echo "[";
            echo twig_escape_filter($this->env, ($this->getContext($context, 'i') + 1), "html");
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'e'), "class", array(), "any", false), "html");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'e'), "message", array(), "any", false), "html");
            echo "
";
            // line 5
            $this->env->loadTemplate("TwigBundle:Exception:traces.txt.twig")->display(array("exception" => $this->getContext($context, 'e')));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
