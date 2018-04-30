<?php

/* rhplus/template/common/home.twig */
class __TwigTemplate_f2e9077b1e2a2337557fe02284023a0d2103dc96afdd772340b7f734059ec87b extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"row\">
  <div id=\"content\" class=\"col-sm-12\">
    ";
        // line 4
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
    ";
        // line 5
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
  </div>
</div>
<span id=\"home\"></span>
";
        // line 9
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "rhplus/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="row">*/
/*   <div id="content" class="col-sm-12">*/
/*     {{ content_top }}*/
/*     {{ content_bottom }}*/
/*   </div>*/
/* </div>*/
/* <span id="home"></span>*/
/* {{ footer }}*/
/* */
