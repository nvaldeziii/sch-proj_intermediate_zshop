<?php

/* noscript.twig */
class __TwigTemplate_2ed10eda3b68753da344f27dfc6c43fc7f831ae36f2dedd64a7f2055b15cc2b5 extends \XLite\Core\Templating\Twig\Template
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
        echo "<noscript>
  <div class=\"noscript\">
    ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This site requires JavaScript to function properly.")), "html", null, true);
        echo "
    <br />";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Please enable JavaScript in your web browser.")), "html", null, true);
        echo "
  </div>
</noscript>
";
    }

    public function getTemplateName()
    {
        return "noscript.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #}*/
/* <noscript>*/
/*   <div class="noscript">*/
/*     {{ t('This site requires JavaScript to function properly.') }}*/
/*     <br />{{ t('Please enable JavaScript in your web browser.') }}*/
/*   </div>*/
/* </noscript>*/
/* */
