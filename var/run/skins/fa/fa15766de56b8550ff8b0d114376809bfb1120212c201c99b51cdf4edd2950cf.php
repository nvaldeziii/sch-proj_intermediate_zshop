<?php

/* /var/www/next/output/xcart/src/skins/customer/order/list/parts/spec.switcher.twig */
class __TwigTemplate_7b23b5e4744d95b8f565b1d76c1bcbab2001961ff5a99ba6edf8c1b393338d6f extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"order-switcher\"><i data-interval=\"0\" data-toggle=\"collapse\" id=\"order-";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "orderId", array()), "html", null, true);
        echo "-action\" data-target=\"#order-";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "orderId", array()), "html", null, true);
        echo "\" class=\"fa fa-plus-square-o\"></i></li>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/order/list/parts/spec.switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Orders list item : spec : switcher*/
/*  #*/
/*  # @ListChild (list="orders.children.spec", weight="100")*/
/*  #}*/
/* <li class="order-switcher"><i data-interval="0" data-toggle="collapse" id="order-{{ this.order.orderId }}-action" data-target="#order-{{ this.order.orderId }}" class="fa fa-plus-square-o"></i></li>*/
