<?php

/* common/price_plain_body.twig */
class __TwigTemplate_275c4b413e1bfffa8613874056751e229c600d83db489311df2416146e920d58 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayOnlyPrice", array())) {
            // line 6
            echo "    ";
            $this->loadTemplate("common/price_plain_only.twig", "common/price_plain_body.twig", 6)->display($context);
        } else {
            // line 8
            echo "    ";
            $this->loadTemplate("common/price_plain.twig", "common/price_plain_body.twig", 8)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "common/price_plain_body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Price widget*/
/*  #}*/
/* */
/* {% if this.displayOnlyPrice %}*/
/*     {% include 'common/price_plain_only.twig' %}*/
/* {% else %}*/
/*     {% include 'common/price_plain.twig' %}*/
/* {% endif %}*/
/* */
