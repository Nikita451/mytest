<?php

/* DemosBlogBundle:Default:hw.html.twig */
class __TwigTemplate_7d0c9443cb09ca7ed5e472641b171736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
<title></title>
</head>
<hr>
<div>
";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "myhw"), "html", null, true);
        echo "
</div>
<hr>
</html>
";
    }

    public function getTemplateName()
    {
        return "DemosBlogBundle:Default:hw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  17 => 1,);
    }
}
