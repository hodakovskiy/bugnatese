<?php

/* rhplus/template/common/cart.twig */
class __TwigTemplate_df1940c821d1c63293362ccd66db5babecb9341125f101d706d3660c43b2e910 extends Twig_Template
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
        echo "<div id=\"cart\" class=\"btn-group\">
  <a href=\"#\" data-toggle=\"dropdown\" class=\"btn btn-block dropdown-toggle hidden-xs hidden-sm\" role=\"button\"><i class=\"icon ion-bag\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        // line 2
        echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
        echo "\"></i><strong id=\"cart-total\">";
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</strong></a>
  <a href=\"";
        // line 3
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "\" class=\"btn btn-block hidden-md hidden-lg\" role=\"button\"><i class=\"icon ion-bag\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
        echo "\"></i><strong id=\"cart-total\">";
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</strong></a>
  <ul class=\"dropdown-menu pull-right\">
    <li class=\"dropdown-triangle\"></li>
    ";
        // line 6
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 7
            echo "    <li class=\"table-src\">
      <table class=\"table\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 10
                echo "        <tr>
          <td class=\"text-center\">
            ";
                // line 12
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    // line 13
                    echo "            <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" /></a>
            ";
                }
                // line 15
                echo "          </td>
          <td class=\"text-left\"><a href=\"";
                // line 16
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
            ";
                // line 17
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 18
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 19
                        echo "            <br />
            - <small>";
                        // line 20
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "  ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "            ";
                }
                // line 23
                echo "            ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    // line 24
                    echo "            <br />
            - <small>";
                    // line 25
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo "  ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small>
            ";
                }
                // line 26
                echo "</td>
          <td class=\"text-right\">x";
                // line 27
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 28
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 29
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo " ');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-sm btn-danger\"><i class=\"icon ion-ios-close-empty\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 33
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 35
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 37
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 38
                echo $this->getAttribute($context["voucher"], "key", array());
                echo " ');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-sm btn-danger\"><i class=\"icon ion-ios-close-empty\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 47
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 48
                echo $this->getAttribute($context["total"], "title", array());
                echo "  :</strong></td>
            <td class=\"text-right\">";
                // line 49
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </table>
        <div class=\"row cart-link\">
          <div class=\"col-sm-12 text-center\">
            <a href=\"";
            // line 55
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\"><strong>( ";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "  )</strong></a>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-12\"><a href=\"";
            // line 59
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\" class=\"btn btn-default btn-block\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a></div>
        </div>
      </div>
    </li>
    ";
        } else {
            // line 64
            echo "    <li>
      <p class=\"empty-cart text-center\">";
            // line 65
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 68
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "rhplus/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 68,  216 => 65,  213 => 64,  203 => 59,  194 => 55,  189 => 52,  180 => 49,  176 => 48,  173 => 47,  169 => 46,  162 => 41,  151 => 38,  147 => 37,  142 => 35,  138 => 33,  133 => 32,  122 => 29,  118 => 28,  114 => 27,  111 => 26,  104 => 25,  101 => 24,  98 => 23,  95 => 22,  85 => 20,  82 => 19,  77 => 18,  75 => 17,  69 => 16,  66 => 15,  54 => 13,  52 => 12,  48 => 10,  44 => 9,  40 => 7,  38 => 6,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div id="cart" class="btn-group">*/
/*   <a href="#" data-toggle="dropdown" class="btn btn-block dropdown-toggle hidden-xs hidden-sm" role="button"><i class="icon ion-bag" data-toggle="tooltip" data-placement="bottom" title="{{ text_cart }}"></i><strong id="cart-total">{{ text_items }}</strong></a>*/
/*   <a href="{{ cart }}" class="btn btn-block hidden-md hidden-lg" role="button"><i class="icon ion-bag" data-toggle="tooltip" data-placement="bottom" title="{{ text_cart }}"></i><strong id="cart-total">{{ text_items }}</strong></a>*/
/*   <ul class="dropdown-menu pull-right">*/
/*     <li class="dropdown-triangle"></li>*/
/*     {% if products or vouchers %}*/
/*     <li class="table-src">*/
/*       <table class="table">*/
/*         {% for product in products %}*/
/*         <tr>*/
/*           <td class="text-center">*/
/*             {% if product.thumb %}*/
/*             <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></a>*/
/*             {% endif %}*/
/*           </td>*/
/*           <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a>*/
/*             {% if product.option %}*/
/*             {% for option in product.option %}*/
/*             <br />*/
/*             - <small>{{ option.name }}  {{ option.value }}</small>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %}*/
/*             <br />*/
/*             - <small>{{ text_recurring }}  {{ product.recurring }}</small>*/
/*             {% endif %}</td>*/
/*           <td class="text-right">x{{ product.quantity }}</td>*/
/*           <td class="text-right">{{ product.total }}</td>*/
/*           <td class="text-center"><button type="button" onclick="cart.remove('{{ product.cart_id }} ');" title="{{ button_remove }}" class="btn btn-sm btn-danger"><i class="icon ion-ios-close-empty"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-center"></td>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*           <td class="text-right">x&nbsp;1</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*           <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }} ');" title="{{ button_remove }}" class="btn btn-sm btn-danger"><i class="icon ion-ios-close-empty"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </li>*/
/*     <li>*/
/*       <div>*/
/*         <table class="table table-bordered">*/
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td class="text-right"><strong>{{ total.title }}  :</strong></td>*/
/*             <td class="text-right">{{ total.text }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*         <div class="row cart-link">*/
/*           <div class="col-sm-12 text-center">*/
/*             <a href="{{ cart }}"><strong>( {{ text_cart }}  )</strong></a>*/
/*           </div>*/
/*         </div>*/
/*         <div class="row">*/
/*           <div class="col-sm-12"><a href="{{ checkout }}" class="btn btn-default btn-block">{{ text_checkout }}</a></div>*/
/*         </div>*/
/*       </div>*/
/*     </li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="empty-cart text-center">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
/* */
