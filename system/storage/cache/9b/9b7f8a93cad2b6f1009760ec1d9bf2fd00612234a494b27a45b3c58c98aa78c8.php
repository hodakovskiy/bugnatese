<?php

/* rhplus/template/common/currency.twig */
class __TwigTemplate_6885d70023cd02ebbe8850523e3d9ae553e4c68a0c6dad3dc807cece62e6c8d1 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 2
            echo "<div class=\"pull-left\">
<form action=\"";
            // line 3
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"currency\">
  <div class=\"btn-group\">
    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 7
                echo "      ";
                if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 8
                    echo "      <span class=\"currency-title\">";
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "</span>
      ";
                }
                // line 10
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    <i class=\"fa fa-angle-down\"></i></button>
    <ul class=\"dropdown-menu\">
      <li class=\"dropdown-triangle\"></li>
      ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 15
                echo "      ";
                if ($this->getAttribute($context["currency"], "code", array())) {
                    // line 16
                    echo "      <li><button class=\"currency-select btn btn-block\" type=\"button\" name=\"";
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "</button></li>
      ";
                }
                // line 18
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </ul>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 22
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
</form>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "rhplus/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  75 => 19,  69 => 18,  61 => 16,  58 => 15,  54 => 14,  49 => 11,  43 => 10,  37 => 8,  34 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if currencies|length > 1 %}*/
/* <div class="pull-left">*/
/* <form action="{{ action}}" method="post" enctype="multipart/form-data" id="currency">*/
/*   <div class="btn-group">*/
/*     <button class="btn dropdown-toggle" data-toggle="dropdown">*/
/*     {% for currency in currencies %}*/
/*       {% if currency.code == code %}*/
/*       <span class="currency-title">{{ currency.title }}</span>*/
/*       {% endif %}*/
/*     {% endfor %}*/
/*     <i class="fa fa-angle-down"></i></button>*/
/*     <ul class="dropdown-menu">*/
/*       <li class="dropdown-triangle"></li>*/
/*       {% for currency in currencies %}*/
/*       {% if currency.code %}*/
/*       <li><button class="currency-select btn btn-block" type="button" name="{{ currency.code }}">{{ currency.title }}</button></li>*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/*   <input type="hidden" name="code" value="" />*/
/*   <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* </form>*/
/* </div>*/
/* {% endif %}*/
/* */
