<?php

/* items_list/product/parts/common.button-add2cart.twig */
class __TwigTemplate_4bc64d85df5f45670af1853b959e86a6a2fbad1df698f811fe6748a898c1f8d2 extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
";
        // line 7
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShowAdd2CartBlock", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdd2CartBlockWidget", array(), "method"))) {
            // line 8
            echo "    ";
            echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdd2CartBlockWidget", array(), "method"), "display", array(), "method");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/common.button-add2cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Item buttons*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.customer.columns", weight="50")*/
/*  #}*/
/* */
/* {% if this.isShowAdd2CartBlock() and this.getAdd2CartBlockWidget() %}*/
/*     {{ this.getAdd2CartBlockWidget().display()|raw }}*/
/* {% endif %}*/
/* */
