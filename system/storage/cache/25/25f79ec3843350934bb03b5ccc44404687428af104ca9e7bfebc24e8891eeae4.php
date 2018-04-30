<?php

/* rhplus/template/product/special.twig */
class __TwigTemplate_ef71f92831502beb10f9e36f0c959095c6bba4421ff0af13bac2ad7a06432ad2 extends Twig_Template
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
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
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
      ";
        // line 11
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 12
            echo "      <div class=\"row product-filter\">
        <div class=\"col-md-4\">
          <a href=\"";
            // line 14
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\" class=\"btn btn-default btn-block\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a>
        </div>
        <div class=\"col-md-4 text-right\">
          <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 19
                echo "            ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 20
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
            ";
                } else {
                    // line 22
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
            ";
                }
                // line 24
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "          </select>
        </div>
        <div class=\"col-md-4 text-right\">
          <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 30
                echo "            ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 31
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
            ";
                } else {
                    // line 33
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
            ";
                }
                // line 35
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "          </select>
        </div>
      </div>
      <div class=\"row\">
        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 41
                echo "        <div class=\"product-layout product-grid col-md-3 col-sm-6 col-xs-12\">
          <div class=\"product-thumb\">
            ";
                // line 43
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 44
                    echo "            <div class=\"sale\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Sale\"><i class=\"icon ion-ios-flame\"></i></div>
            ";
                }
                // line 46
                echo "            <figure>
              <div class=\"image\"><a href=\"";
                // line 47
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a></div>
              <figcaption>
                <div class=\"name\"><a href=\"";
                // line 49
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></div>
                ";
                // line 50
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 51
                    echo "                <div class=\"price\">
                  ";
                    // line 52
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 53
                        echo "                  ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                  ";
                    } else {
                        // line 55
                        echo "                  <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                  ";
                    }
                    // line 57
                    echo "                </div>
                ";
                }
                // line 59
                echo "              </figcaption>
            </figure>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 66
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
        <div class=\"col-sm-6 text-right results\"><span>";
            // line 67
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</span></div>
      </div>
      ";
        }
        // line 70
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 71
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 73
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 76
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
  </div>
</div>
";
        // line 80
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "rhplus/template/product/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 80,  232 => 76,  224 => 73,  218 => 71,  215 => 70,  209 => 67,  205 => 66,  201 => 64,  191 => 59,  187 => 57,  181 => 55,  175 => 53,  173 => 52,  170 => 51,  168 => 50,  162 => 49,  151 => 47,  148 => 46,  144 => 44,  142 => 43,  138 => 41,  134 => 40,  128 => 36,  122 => 35,  114 => 33,  106 => 31,  103 => 30,  99 => 29,  93 => 25,  87 => 24,  79 => 22,  71 => 20,  68 => 19,  64 => 18,  55 => 14,  51 => 12,  49 => 11,  45 => 10,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">*/
/*     <div id="content" class="col-sm-12">*/
/*       {{ content_top }}*/
/*       {% if products %}*/
/*       <div class="row product-filter">*/
/*         <div class="col-md-4">*/
/*           <a href="{{ compare }}" id="compare-total" class="btn btn-default btn-block">{{ text_compare }}</a>*/
/*         </div>*/
/*         <div class="col-md-4 text-right">*/
/*           <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*             {% for sorts in sorts %}*/
/*             {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*             <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*             {% else %}*/
/*             <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*         <div class="col-md-4 text-right">*/
/*           <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*             {% for limits in limits %}*/
/*             {% if limits.value == limit %}*/
/*             <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*             {% else %}*/
/*             <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row">*/
/*         {% for product in products %}*/
/*         <div class="product-layout product-grid col-md-3 col-sm-6 col-xs-12">*/
/*           <div class="product-thumb">*/
/*             {% if product.special %}*/
/*             <div class="sale" data-toggle="tooltip" data-placement="top" title="Sale"><i class="icon ion-ios-flame"></i></div>*/
/*             {% endif %}*/
/*             <figure>*/
/*               <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*               <figcaption>*/
/*                 <div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/*                 {% if product.price %}*/
/*                 <div class="price">*/
/*                   {% if not product.special %}*/
/*                   {{ product.price }}*/
/*                   {% else %}*/
/*                   <span class="price-new">{{ product.special }}</span>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 {% endif %}*/
/*               </figcaption>*/
/*             </figure>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right results"><span>{{ results }}</span></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if not categories and not products %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
