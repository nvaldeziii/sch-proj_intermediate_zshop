<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.cart-tray.twig */
class __TwigTemplate_bb06f01a20471812efd8b85d35fb381c0c4db4a7e4f6cf26211f90edfe1fd7ed extends \XLite\Core\Templating\Twig\Template
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
<div class=\"cart-tray cart-tray-box\">
  <div class=\"tray-area\">

    <div class=\"centered-tray-box\">

    <div class=\"drop-here tray-status\">";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Drop items here to shop")), "html", null, true);
        echo "</div>

    <div class=\"dropped-here tray-status\">";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Product has been added to cart")), "html", null, true);
        echo "</div>

    <div class=\"product-added tray-status\">
      ";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\SimpleLink", "label" => "Checkout", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "checkout")), "style" => "regular-button"))), "html", null, true);
        echo "
    </div>

    <div class=\"progress-bar\">
      <div class=\"wait-progress\">
        <div></div>
      </div>
    </div>

    </div>

  </div>
</div>
<div class=\"preload-cart-tray\"></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.cart-tray.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 17,  32 => 14,  27 => 12,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart box*/
/*  #*/
/*  # @ListChild (list="itemsList.product.cart")*/
/*  #}*/
/* */
/* <div class="cart-tray cart-tray-box">*/
/*   <div class="tray-area">*/
/* */
/*     <div class="centered-tray-box">*/
/* */
/*     <div class="drop-here tray-status">{{ t('Drop items here to shop') }}</div>*/
/* */
/*     <div class="dropped-here tray-status">{{ t('Product has been added to cart') }}</div>*/
/* */
/*     <div class="product-added tray-status">*/
/*       {{ widget('\\XLite\\View\\Button\\SimpleLink', label='Checkout', location=url('checkout'), style='regular-button') }}*/
/*     </div>*/
/* */
/*     <div class="progress-bar">*/
/*       <div class="wait-progress">*/
/*         <div></div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     </div>*/
/* */
/*   </div>*/
/* </div>*/
/* <div class="preload-cart-tray"></div>*/
/* */
