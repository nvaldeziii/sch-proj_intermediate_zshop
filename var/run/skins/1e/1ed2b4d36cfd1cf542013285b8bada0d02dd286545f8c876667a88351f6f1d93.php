<?php

/* powered_by.twig */
class __TwigTemplate_10760e59e41ca4cf1ddc1e86481226de20ec8a9a387e949c4dbf33da6a431578 extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
<div class=\"powered-by\">
  <p class=\"copyright\">&copy; ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCompanyYear", array(), "method"), "html", null, true);
        echo " ";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMessage", array(), "method");
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "powered_by.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Powered by box*/
/*  #}*/
/* */
/* {# Modification of this template or removal of the "Powered by X-Cart" label are forbidden for X-Cart Free Edition. #}*/
/* */
/* <div class="powered-by">*/
/*   <p class="copyright">&copy; {{ this.getCompanyYear() }} {{ this.getMessage()|raw }}</p>*/
/* </div>*/
/* */
