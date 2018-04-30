<?php

/* rhplus/template/product/manufacturer_list.twig */
class __TwigTemplate_3d81c063003a02f6a3e20d965684d2393343ef6a6736db8cc8e42d6f3d70b270 extends Twig_Template
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
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li> <a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\"> ";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "  </a> </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">
    <div id=\"content\" class=\"col-sm-12\">
      ";
        // line 10
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 11
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 12
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 13
            echo "      <p><strong>";
            echo (isset($context["text_index"]) ? $context["text_index"] : null);
            echo "</strong>
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 15
                echo "        &nbsp;&nbsp;&nbsp;<a href=\"index.php?route=product/manufacturer#";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      </p>
      ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 19
                echo "      <h2 id=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</h2>
      ";
                // line 20
                if ($this->getAttribute($context["category"], "manufacturer", array())) {
                    // line 21
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "manufacturer", array()), 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturers"]) {
                        // line 22
                        echo "      <div class=\"row\">
        ";
                        // line 23
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["manufacturers"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                            // line 24
                            echo "        <div class=\"col-sm-3\"><a href=\"";
                            echo $this->getAttribute($context["manufacturer"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["manufacturer"], "name", array());
                            echo "</a></div>
        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 26
                        echo "      </div>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturers'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "      ";
                }
                // line 29
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "      ";
        } else {
            // line 31
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
            // line 33
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 36
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
  </div>
</div>
";
        // line 40
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "rhplus/template/product/manufacturer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 40,  147 => 36,  139 => 33,  133 => 31,  130 => 30,  124 => 29,  121 => 28,  114 => 26,  103 => 24,  99 => 23,  96 => 22,  91 => 21,  89 => 20,  82 => 19,  78 => 18,  75 => 17,  64 => 15,  60 => 14,  55 => 13,  53 => 12,  49 => 11,  45 => 10,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li> <a href="{{ breadcrumb.href }}"> {{ breadcrumb.text }}  </a> </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">*/
/*     <div id="content" class="col-sm-12">*/
/*       {{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       {% if categories %}*/
/*       <p><strong>{{ text_index }}</strong>*/
/*         {% for category in categories %}*/
/*         &nbsp;&nbsp;&nbsp;<a href="index.php?route=product/manufacturer#{{ category.name }}">{{ category.name }}</a>*/
/*         {% endfor %}*/
/*       </p>*/
/*       {% for category in categories %}*/
/*       <h2 id="{{ category.name }}">{{ category.name }}</h2>*/
/*       {% if category.manufacturer %}*/
/*       {% for manufacturers in category.manufacturer|batch(4) %}*/
/*       <div class="row">*/
/*         {% for manufacturer in manufacturers %}*/
/*         <div class="col-sm-3"><a href="{{ manufacturer.href }}">{{ manufacturer.name }}</a></div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       {% endfor %}*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
