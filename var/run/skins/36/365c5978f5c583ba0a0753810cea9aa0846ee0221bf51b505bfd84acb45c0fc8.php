<?php

/* layout/header/header.logo.twig */
class __TwigTemplate_42341e3ba1042db6933399d2bdad782d1a652fefcfc08c7f8c42a4f54d4467b2 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getUniqueId", array(0 => "logo"), "method"), "html", null, true);
        echo "\" class=\"company-logo\">
  <a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context)), "html", null, true);
        echo "\" title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Home")), "html", null, true);
        echo "\" rel=\"home\"><img src=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLogo", array(), "method"), "html", null, true);
        echo "\" alt=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Home")), "html", null, true);
        echo "\" /></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/header/header.logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header logo*/
/*  #*/
/*  # @ListChild (list="layout.header", weight="100")*/
/*  #}*/
/* <div id="{{ this.getUniqueId('logo') }}" class="company-logo">*/
/*   <a href="{{ url() }}" title="{{ t('Home') }}" rel="home"><img src="{{ this.getLogo() }}" alt="{{ t('Home') }}" /></a>*/
/* </div>*/
/* */
