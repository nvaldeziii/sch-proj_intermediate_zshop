<?php

/* items_list/product/parts/common.labels.twig */
class __TwigTemplate_a9aee05f2012d14a919ebd823155f23d96be0e4d8c108adab42718f42588d84f extends \XLite\Core\Templating\Twig\Template
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
        // line 11
        echo "
";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Labels", "labels" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabels", array(), "method")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/common.labels.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,);
    }
}
/* {##*/
/*  # Labels list*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info", weight="998")*/
/*  # @ListChild (list="itemsList.product.small_thumbnails.customer.details", weight="30")*/
/*  # @ListChild (list="itemsList.product.list.customer.photo", weight="998")*/
/*  # @ListChild (list="itemsList.product.table.customer.columns", weight="25")*/
/*  # @ListChild (list="itemsList.product.big_thumbnails.customer.info", weight="998")*/
/*  # @ListChild (list="productBlock.info.photo", weight="998")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Labels', labels=this.getLabels()) }}*/
/* */
