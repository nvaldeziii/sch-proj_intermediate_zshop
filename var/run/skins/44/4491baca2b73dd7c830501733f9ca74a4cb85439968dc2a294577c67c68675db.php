<?php

/* upgrade/install_updates/parts/top.twig */
class __TwigTemplate_e6045784e0710867b4ba61708ea70a9e71d54ecf13d5de99b152c56a45e8c777 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAdvancedMode", array(), "method")) {
            // line 8
            echo "  <div class=\"upgrade-warning\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("In advanced mode you can choose specific modules for upgrade.")), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAdvancedMode", array(), "method")) {
            // line 12
            echo "  <div class=\"alert alert-warning upgrade-warning\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Please take your attention that it is not guaranteed the correct site operation after upgrade if you select to not upgrade all.")), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "upgrade/install_updates/parts/top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  33 => 11,  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Top message for the advanced mode*/
/*  #*/
/*  # @ListChild (list="upgrade.install_updates.sections", weight="100")*/
/*  #}*/
/* */
/* {% if this.isAdvancedMode() %}*/
/*   <div class="upgrade-warning">{{ t('In advanced mode you can choose specific modules for upgrade.') }}</div>*/
/* {% endif %}*/
/* */
/* {% if this.isAdvancedMode() %}*/
/*   <div class="alert alert-warning upgrade-warning">{{ t('Please take your attention that it is not guaranteed the correct site operation after upgrade if you select to not upgrade all.') }}</div>*/
/* {% endif %}*/
/* */
