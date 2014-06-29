<?php

/* DemosBlogBundle:Default:show.html.twig */
class __TwigTemplate_846019ba13e547f2fe523b53fefc0c2c extends Twig_Template
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
\t<head>
\t\t<title></title>
\t</head>
\t<body>
\t\t<h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "getTitle", array(), "method"), "html", null, true);
        echo "</h1>
\t\t<div>
\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "getBody", array(), "method"), "html", null, true);
        echo "
\t\t</div>
\t\t<hr>
\t\t<p>
\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "post"), "getCreatedDate", array(), "method"), "format", array(0 => "Y:m:d H:i:s"), "method"), "html", null, true);
        echo "
\t\t</p>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "DemosBlogBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 13,  30 => 9,  25 => 7,  17 => 1,);
    }
}
