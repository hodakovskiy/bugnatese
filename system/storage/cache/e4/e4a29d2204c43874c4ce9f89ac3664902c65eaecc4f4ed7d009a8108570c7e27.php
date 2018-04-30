<?php

/* rhplus/template/information/sitemap.twig */
class __TwigTemplate_6469dc4e848877677470317a56d98ded7eeb0436a0332d7309dcf53827653f19 extends Twig_Template
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
<div id=\"information-sitemap\" class=\"container\">
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
      <h1>";
        // line 11
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <ul>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 16
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["category_1"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category_1"], "name", array());
            echo "</a>
              ";
            // line 17
            if ($this->getAttribute($context["category_1"], "children", array())) {
                // line 18
                echo "              <ul>
                ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 20
                    echo "                <li><a href=\"";
                    echo $this->getAttribute($context["category_2"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</a>
                  ";
                    // line 21
                    if ($this->getAttribute($context["category_2"], "children", array())) {
                        // line 22
                        echo "                  <ul>
                    ";
                        // line 23
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 24
                            echo "                    <li><a href=\"";
                            echo $this->getAttribute($context["category_3"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["category_3"], "name", array());
                            echo "</a></li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 26
                        echo "                  </ul>
                  ";
                    }
                    // line 28
                    echo "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "              </ul>
              ";
            }
            // line 32
            echo "            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "          </ul>
        </div>
        <div class=\"col-sm-6\">
          <ul>
            <li><a href=\"";
        // line 38
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 39
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a>
              <ul>
                <li><a href=\"";
        // line 41
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\">";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 42
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\">";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 43
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 44
        echo (isset($context["history"]) ? $context["history"] : null);
        echo "\">";
        echo (isset($context["text_history"]) ? $context["text_history"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 45
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 48
        echo (isset($context["history"]) ? $context["history"] : null);
        echo "\">";
        echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 49
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 50
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\">";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</a></li>
            <li>";
        // line 51
        echo (isset($context["text_information"]) ? $context["text_information"] : null);
        echo "
              <ul>
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 54
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["information"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["information"], "title", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                <li><a href=\"";
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      ";
        // line 62
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
  </div>
</div>
";
        // line 66
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "rhplus/template/information/sitemap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 66,  226 => 62,  214 => 56,  203 => 54,  199 => 53,  194 => 51,  188 => 50,  182 => 49,  176 => 48,  168 => 45,  162 => 44,  156 => 43,  150 => 42,  144 => 41,  137 => 39,  131 => 38,  125 => 34,  118 => 32,  114 => 30,  107 => 28,  103 => 26,  92 => 24,  88 => 23,  85 => 22,  83 => 21,  76 => 20,  72 => 19,  69 => 18,  67 => 17,  60 => 16,  56 => 15,  49 => 11,  45 => 10,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="information-sitemap" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">*/
/*     <div id="content" class="col-sm-12">*/
/*       {{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <div class="row">*/
/*         <div class="col-sm-6">*/
/*           <ul>*/
/*             {% for category_1 in categories %}*/
/*             <li><a href="{{ category_1.href }}">{{ category_1.name }}</a>*/
/*               {% if category_1.children %}*/
/*               <ul>*/
/*                 {% for category_2 in category_1.children %}*/
/*                 <li><a href="{{ category_2.href }}">{{ category_2.name }}</a>*/
/*                   {% if category_2.children %}*/
/*                   <ul>*/
/*                     {% for category_3 in category_2.children %}*/
/*                     <li><a href="{{ category_3.href }}">{{ category_3.name }}</a></li>*/
/*                     {% endfor %}*/
/*                   </ul>*/
/*                   {% endif %}*/
/*                 </li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endif %}*/
/*             </li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*           <ul>*/
/*             <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*             <li><a href="{{ account }}">{{ text_account }}</a>*/
/*               <ul>*/
/*                 <li><a href="{{ edit }}">{{ text_edit }}</a></li>*/
/*                 <li><a href="{{ password }}">{{ text_password }}</a></li>*/
/*                 <li><a href="{{ address }}">{{ text_address }}</a></li>*/
/*                 <li><a href="{{ history }}">{{ text_history }}</a></li>*/
/*                 <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li><a href="{{ history }}">{{ text_cart }}</a></li>*/
/*             <li><a href="{{ checkout }}">{{ text_checkout }}</a></li>*/
/*             <li><a href="{{ search }}">{{ text_search }}</a></li>*/
/*             <li>{{ text_information }}*/
/*               <ul>*/
/*                 {% for information in informations %}*/
/*                 <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*                 {% endfor %}*/
/*                 <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*               </ul>*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
