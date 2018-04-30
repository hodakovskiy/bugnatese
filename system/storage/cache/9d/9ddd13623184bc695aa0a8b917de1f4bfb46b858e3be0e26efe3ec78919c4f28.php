<?php

/* extension/dashboard/order_info.twig */
class __TwigTemplate_8607d5c2de876f644ed383d2711ca70c0a66576f5a02ff7bc849b36bbfbf2ffd extends Twig_Template
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
        // line 1
        echo "<div class=\"tile tile-primary\">
  <div class=\"tile-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " <span class=\"float-right\">
    ";
        // line 3
        if (((isset($context["percentage"]) ? $context["percentage"] : null) > 0)) {
            // line 4
            echo "      <i class=\"fas fa-caret-up\"></i>
    ";
        } elseif ((        // line 5
(isset($context["percentage"]) ? $context["percentage"] : null) < 0)) {
            // line 6
            echo "      <i class=\"fas fa-caret-down\"></i>
    ";
        }
        // line 8
        echo "      ";
        echo (isset($context["percentage"]) ? $context["percentage"] : null);
        echo "%</span></div>
  <div class=\"tile-body\"><i class=\"fas fa-shopping-cart\"></i>
    <h2 class=\"float-right\">";
        // line 10
        echo (isset($context["total"]) ? $context["total"] : null);
        echo "</h2>
  </div>
  <div class=\"tile-footer\"><a href=\"";
        // line 12
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_view"]) ? $context["text_view"] : null);
        echo "</a></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  43 => 10,  37 => 8,  33 => 6,  31 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="tile tile-primary">*/
/*   <div class="tile-heading">{{ heading_title }} <span class="float-right">*/
/*     {% if percentage > 0 %}*/
/*       <i class="fas fa-caret-up"></i>*/
/*     {% elseif percentage < 0 %}*/
/*       <i class="fas fa-caret-down"></i>*/
/*     {% endif %}*/
/*       {{ percentage }}%</span></div>*/
/*   <div class="tile-body"><i class="fas fa-shopping-cart"></i>*/
/*     <h2 class="float-right">{{ total }}</h2>*/
/*   </div>*/
/*   <div class="tile-footer"><a href="{{ order }}">{{ text_view }}</a></div>*/
/* </div>*/
/* */
