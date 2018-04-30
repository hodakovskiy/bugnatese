<?php

/* rhplus/template/extension/module/featured.twig */
class __TwigTemplate_a58ac96238e02f01942a9d64a6940257d8e511aefc98e73c744410f2e91fa1e6 extends Twig_Template
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
        echo "<h3>";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
<div class=\"row\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "  <div class=\"product-layout product-grid col-md-3 col-sm-6 col-xs-12\">
    <div class=\"product-thumb\">
      ";
            // line 6
            if ($this->getAttribute($context["product"], "special", array())) {
                // line 7
                echo "      <div class=\"sale\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Sale\"><i class=\"icon ion-ios-flame\"></i></div>
      ";
            }
            // line 9
            echo "      <figure>
        <div class=\"image\"><a href=\"";
            // line 10
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
            // line 12
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></div>
          ";
            // line 13
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 14
                echo "          <div class=\"price\">
            ";
                // line 15
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 16
                    echo "            ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
            ";
                } else {
                    // line 18
                    echo "            <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span>
            ";
                }
                // line 20
                echo "          </div>
          ";
            }
            // line 22
            echo "        </figcaption>
      </figure>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "rhplus/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  82 => 22,  78 => 20,  72 => 18,  66 => 16,  64 => 15,  61 => 14,  59 => 13,  53 => 12,  42 => 10,  39 => 9,  35 => 7,  33 => 6,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <h3>{{ heading_title }}</h3>*/
/* <div class="row">*/
/*   {% for product in products %}*/
/*   <div class="product-layout product-grid col-md-3 col-sm-6 col-xs-12">*/
/*     <div class="product-thumb">*/
/*       {% if product.special %}*/
/*       <div class="sale" data-toggle="tooltip" data-placement="top" title="Sale"><i class="icon ion-ios-flame"></i></div>*/
/*       {% endif %}*/
/*       <figure>*/
/*         <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*         <figcaption>*/
/*           <div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/*           {% if product.price %}*/
/*           <div class="price">*/
/*             {% if not product.special %}*/
/*             {{ product.price }}*/
/*             {% else %}*/
/*             <span class="price-new">{{ product.special }}</span>*/
/*             {% endif %}*/
/*           </div>*/
/*           {% endif %}*/
/*         </figcaption>*/
/*       </figure>*/
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
