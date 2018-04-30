<?php

/* rhplus/template/common/language.twig */
class __TwigTemplate_1066bd42f7c008e49c96be127fd6792cf00366c67c99803129963d54b6155866 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 2
            echo "<div class=\"pull-left\">
<form action=\"";
            // line 3
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"language\">
  <div class=\"btn-group\">
    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 7
                echo "      ";
                if (($this->getAttribute($context["language"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 8
                    echo "      <span class=\"language-name\">";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "</span>
      ";
                }
                // line 10
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    <i class=\"fa fa-angle-down\"></i></button>
    <ul class=\"dropdown-menu\">
      <li class=\"dropdown-triangle\"></li>
      ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 15
                echo "      <li><a href=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" class=\"currency-select btn btn-block\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </ul>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 20
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
</form>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "rhplus/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  69 => 17,  58 => 15,  54 => 14,  49 => 11,  43 => 10,  37 => 8,  34 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if languages|length > 1 %}*/
/* <div class="pull-left">*/
/* <form action="{{ action}}" method="post" enctype="multipart/form-data" id="language">*/
/*   <div class="btn-group">*/
/*     <button class="btn dropdown-toggle" data-toggle="dropdown">*/
/*     {% for language in languages %}*/
/*       {% if language.code == code %}*/
/*       <span class="language-name">{{ language.name }}</span>*/
/*       {% endif %}*/
/*     {% endfor %}*/
/*     <i class="fa fa-angle-down"></i></button>*/
/*     <ul class="dropdown-menu">*/
/*       <li class="dropdown-triangle"></li>*/
/*       {% for language in languages %}*/
/*       <li><a href="{{ language.code }}" class="currency-select btn btn-block">{{ language.name }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/*   <input type="hidden" name="code" value="" />*/
/*   <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* </form>*/
/* </div>*/
/* {% endif %}*/
/* */
