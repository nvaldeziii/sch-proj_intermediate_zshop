<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/core_upgrade_needed/note_1_enable.twig */
class __TwigTemplate_bbdd634ab22baf4ef97e38c064734052e6b1bc7956d87f5ac3d450efb30557e7 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The module version is incompatible with your core version and cannot be enabled. Minimum core version required for this module is X.", array("version" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNeededCoreVersion", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")))), "html", null, true);
        echo "   
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/core_upgrade_needed/note_1_enable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Note for "Manage add-ons" page*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section.messages.cannot_enable.core_upgrade_needed", weight="100")*/
/*  #}*/
/* */
/* {{ t('The module version is incompatible with your core version and cannot be enabled. Minimum core version required for this module is X.', {'version': this.getNeededCoreVersion(this.module)}) }}   */
/* */
