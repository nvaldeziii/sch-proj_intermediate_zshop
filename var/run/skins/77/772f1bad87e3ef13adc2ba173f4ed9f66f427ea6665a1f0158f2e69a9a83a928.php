<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/sections/addons_search_box.twig */
class __TwigTemplate_f5db6b283f41b905930ec55e4a673b3fd89a2b093df4849d14e629e4502015a9 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<div class=\"addons-search-box\">

  ";
        // line 10
        $this->startForm("\\XLite\\View\\Form\\Module\\Install", array("formMethod" => "GET", "className" => "search-form"));        // line 11
        echo "  <input type=\"hidden\" name=\"tag\" value=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTagValue", array(), "method"), "html", null, true);
        echo "\" />
  <div class=\"substring\">
    ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldOnly" => "true", "fieldName" => "substring", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSubstring", array(), "method"), "defaultValue" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Search for modules"))))), "html", null, true);
        echo "
    ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => ""))), "html", null, true);
        echo "
  </div>
  ";
        $this->endForm();        // line 17
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/sections/addons_search_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 17,  35 => 14,  31 => 13,  25 => 11,  24 => 10,  19 => 7,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="marketplace.addons-filters", weight="200")*/
/*  # @ListChild (list="marketplace.landing.controls", weight="100")*/
/*  #}*/
/* */
/* <div class="addons-search-box">*/
/* */
/*   {% form '\\XLite\\View\\Form\\Module\\Install' with {formMethod: 'GET', className: 'search-form'} %}*/
/*   <input type="hidden" name="tag" value="{{ this.getTagValue() }}" />*/
/*   <div class="substring">*/
/*     {{ widget('\\XLite\\View\\FormField\\Input\\Text', fieldOnly='true', fieldName='substring', value=this.getSubstring(), defaultValue=t('Search for modules')) }}*/
/*     {{ widget('\\XLite\\View\\Button\\Submit', label='') }}*/
/*   </div>*/
/*   {% endform %}*/
/* */
/* </div>*/
/* */
