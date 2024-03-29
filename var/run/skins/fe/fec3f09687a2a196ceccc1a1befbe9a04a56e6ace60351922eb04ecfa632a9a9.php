<?php

/* banner_rotation/body.twig */
class __TwigTemplate_30992c8e084c9c808a33968f7903257a68082e5a17e18e52f80a324bc93552cd extends \XLite\Core\Templating\Twig\Template
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
<div id=\"banner-rotation-widget\" class=\"carousel slide banner-carousel\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCommentedData", array(), "method")), "method"), "html", null, true);
        echo "

  <!-- Indicators -->
  ";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRotationEnabled", array(), "method")) {
            // line 10
            echo "    <ol class=\"carousel-indicators\">
      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getImages", array(), "method"));
            foreach ($context['_seq'] as $context["i"] => $context["image"]) {
                // line 12
                echo "        <li data-target=\"#banner-rotation-widget\" data-slide-to=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    </ol>
  ";
        }
        // line 16
        echo "
  <div class=\"carousel-inner\" role=\"listbox\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getImages", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 19
            echo "      <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "bannerRotationSlide", array()), "getLink", array(), "method"), "html", null, true);
            echo "\" class=\"item\">
        <img src=\"";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["image"], "getFrontURL", array(), "method"), "html", null, true);
            echo "\" alt=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["image"], "getAlt", array(), "method"), "html", null, true);
            echo "\" >
      </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "banner_rotation/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  64 => 20,  59 => 19,  55 => 18,  51 => 16,  47 => 14,  38 => 12,  34 => 11,  31 => 10,  29 => 9,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Banner rotation widget template*/
/*  #}*/
/* */
/* <div id="banner-rotation-widget" class="carousel slide banner-carousel">*/
/*   {{ this.displayCommentedData(this.getCommentedData()) }}*/
/* */
/*   <!-- Indicators -->*/
/*   {% if this.isRotationEnabled() %}*/
/*     <ol class="carousel-indicators">*/
/*       {% for i, image in this.getImages() %}*/
/*         <li data-target="#banner-rotation-widget" data-slide-to="{{ i }}"></li>*/
/*       {% endfor %}*/
/*     </ol>*/
/*   {% endif %}*/
/* */
/*   <div class="carousel-inner" role="listbox">*/
/*     {% for image in this.getImages() %}*/
/*       <a href="{{ image.bannerRotationSlide.getLink() }}" class="item">*/
/*         <img src="{{ image.getFrontURL() }}" alt="{{ image.getAlt() }}" >*/
/*       </a>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
