<?php

/* body.twig */
class __TwigTemplate_a174fc6f09786610c0ec59f9ba5c93c97806dbcd103003bc2fc802f090abb857 extends \XLite\Core\Templating\Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "currentLanguage", array()), "getCode", array(), "method"), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHTMLAttributes", array(), "method"));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            echo " ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Header"))), "html", null, true);
        echo "
<body ";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBodyClass", array(), "method")) {
            echo "class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBodyClass", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">
";
        // line 8
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCommonJSData", array(), "method")), "method");
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "body"))), "html", null, true);
        echo "
";
        // line 13
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  53 => 9,  51 => 8,  43 => 7,  39 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Common layout*/
/*  #}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ this.currentLanguage.getCode() }}"{% for k, v in this.getHTMLAttributes() %} {{ k }}="{{ v }}"{% endfor %}>*/
/*   {{ widget('\\XLite\\View\\Header') }}*/
/* <body {% if this.getBodyClass() %}class="{{ this.getBodyClass() }}"{% endif %}>*/
/* {% do this.displayCommentedData(this.getCommonJSData()) %}*/
/* {{ widget_list('body') }}*/
/* {##*/
/*  # Please note that any custom list child of 'body' will NOT have its CSS/JS resources loaded because the resources block is being 'body' child itself. Use 'layout.main' or 'layout.footer' instead.*/
/*  #}*/
/* </body>*/
/* </html>*/
/* */
