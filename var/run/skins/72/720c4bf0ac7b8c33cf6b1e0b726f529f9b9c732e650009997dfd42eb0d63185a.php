<?php

/* body/header.twig */
class __TwigTemplate_b65407c8d26991919d2f9fc319ee50a106cd886dd37a9fd60933bb04d65fb49d extends \XLite\Core\Templating\Twig\Template
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
<div id=\"header-wrapper\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "admin.main.page.header_wrapper"))), "html", null, true);
        echo "
  <div id=\"header\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "admin.main.page.header"))), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "body/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Header*/
/*  #}*/
/* */
/* <div id="header-wrapper">*/
/*   {{ widget_list('admin.main.page.header_wrapper') }}*/
/*   <div id="header">*/
/*     {{ widget_list('admin.main.page.header') }}*/
/*   </div>*/
/* </div>*/
/* */
