<?php

/* rhplus/template/common/menu.twig */
class __TwigTemplate_9f673f2da3ad56a110eb81d86899b08bacf6ec3d4ffaada79b82e65a52439720 extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "<ul class=\"list-unstyled menu\">
  ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 4
                echo "  <li><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "rhplus/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* <ul class="list-unstyled menu">*/
/*   {% for category in categories %}*/
/*   <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*   {% endfor %}*/
/* </ul>*/
/* {% endif %}*/
/* */
