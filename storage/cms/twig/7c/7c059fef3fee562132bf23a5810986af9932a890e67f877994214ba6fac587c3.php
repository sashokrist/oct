<?php

/* C:\xampp\htdocs\oct/themes/hambern-hambern-blank-bootstrap-4/layouts/fallback.htm */
class __TwigTemplate_581fe211372a72cc5988dfb154eed8aebe603286da321470971e75b1555c0d3f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\oct/themes/hambern-hambern-blank-bootstrap-4/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "C:\\xampp\\htdocs\\oct/themes/hambern-hambern-blank-bootstrap-4/layouts/fallback.htm", "");
    }
}
