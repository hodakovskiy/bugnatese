<?php

/* rhplus/template/product/category.twig */
class __TwigTemplate_43398f5b50fdc517c909935308b365b2207ee214dfaa89ec1cdf48d65dc1f18f extends Twig_Template
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
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 12
            echo "      <div class=\"row\">
        ";
            // line 13
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 14
                echo "        <div class=\"col-xs-12\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 16
            echo "        ";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 17
                echo "        <div class=\"col-xs-12\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>
        ";
            }
            // line 19
            echo "      </div>
      <br>
      ";
        }
        // line 22
        echo "      ";
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 23
            echo "      <div class=\"row\">
        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "        <div class=\"col-sm-2 refine-search\">
          ";
                // line 26
                if ($this->getAttribute($context["category"], "thumb", array())) {
                    // line 27
                    echo "          <a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["category"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\" class=\"img-responsive\" width=\"100%\" height=\"100%\" /></a>
          ";
                } else {
                    // line 29
                    echo "          <a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\"><img src=\"catalog/view/theme/rhplus/image/refine-search-empty.png\" alt=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\" class=\"img-responsive\" width=\"100%\" height=\"100%\" /></a>
          ";
                }
                // line 31
                echo "          <a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"refine-search-link\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "      </div>
      ";
        }
        // line 36
        echo "      ";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 37
            echo "      <div class=\"row product-filter\">
        <div class=\"col-md-4\">
          <a href=\"";
            // line 39
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\" class=\"btn btn-default btn-block\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a>
        </div>
        <div class=\"col-md-4 text-right\">
          <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 44
                echo "            ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 45
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
            ";
                } else {
                    // line 47
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
            ";
                }
                // line 49
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "          </select>
        </div>
        <div class=\"col-md-4 text-right\">
          <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 55
                echo "            ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 56
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
            ";
                } else {
                    // line 58
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
            ";
                }
                // line 60
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "          </select>
        </div>
      </div>
      <div class=\"row\">
        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 66
                echo "        <div class=\"product-layout product-grid col-md-3 col-sm-6 col-xs-12\">
          <div class=\"product-thumb\">
            ";
                // line 68
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 69
                    echo "            <div class=\"sale\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Sale\"><i class=\"icon ion-ios-flame\"></i></div>
            ";
                }
                // line 71
                echo "            <figure>
              <div class=\"image\"><a href=\"";
                // line 72
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
                // line 74
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></div>
                ";
                // line 75
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 76
                    echo "                <div class=\"price\">
                  ";
                    // line 77
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 78
                        echo "                  ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                  ";
                    } else {
                        // line 80
                        echo "                  <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                  ";
                    }
                    // line 82
                    echo "                </div>
                ";
                }
                // line 84
                echo "              </figcaption>
            </figure>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 91
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
        <div class=\"col-sm-6 text-right results\"><span>";
            // line 92
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</span></div>
      </div>
      ";
        }
        // line 95
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 96
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 98
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 101
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
  </div>
</div>
";
        // line 105
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "rhplus/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 105,  313 => 101,  305 => 98,  299 => 96,  296 => 95,  290 => 92,  286 => 91,  282 => 89,  272 => 84,  268 => 82,  262 => 80,  256 => 78,  254 => 77,  251 => 76,  249 => 75,  243 => 74,  232 => 72,  229 => 71,  225 => 69,  223 => 68,  219 => 66,  215 => 65,  209 => 61,  203 => 60,  195 => 58,  187 => 56,  184 => 55,  180 => 54,  174 => 50,  168 => 49,  160 => 47,  152 => 45,  149 => 44,  145 => 43,  136 => 39,  132 => 37,  129 => 36,  125 => 34,  113 => 31,  105 => 29,  95 => 27,  93 => 26,  90 => 25,  86 => 24,  83 => 23,  80 => 22,  75 => 19,  69 => 17,  66 => 16,  56 => 14,  54 => 13,  51 => 12,  49 => 11,  45 => 10,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
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
/*       {% if thumb or description %}*/
/*       <div class="row">*/
/*         {% if thumb %}*/
/*         <div class="col-xs-12"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></div>*/
/*         {% endif %}*/
/*         {% if description %}*/
/*         <div class="col-xs-12">{{ description }}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*       <br>*/
/*       {% endif %}*/
/*       {% if categories %}*/
/*       <div class="row">*/
/*         {% for category in categories %}*/
/*         <div class="col-sm-2 refine-search">*/
/*           {% if category.thumb %}*/
/*           <a href="{{ category.href }}"><img src="{{ category.thumb }}" alt="{{ category.name }}" class="img-responsive" width="100%" height="100%" /></a>*/
/*           {% else %}*/
/*           <a href="{{ category.href }}"><img src="catalog/view/theme/rhplus/image/refine-search-empty.png" alt="{{ category.name }}" class="img-responsive" width="100%" height="100%" /></a>*/
/*           {% endif %}*/
/*           <a href="{{ category.href }}" class="refine-search-link">{{ category.name }}</a>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       {% endif %}*/
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
