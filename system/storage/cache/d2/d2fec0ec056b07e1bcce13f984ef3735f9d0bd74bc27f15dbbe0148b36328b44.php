<?php

/* rhplus/template/common/header.twig */
class __TwigTemplate_068835ff9ab6d96ad03d0a7d82636242073bcf38378576beb056aa187ef63818 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content= \"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 20
        echo "<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"//fonts.googleapis.com/css?family=Roboto:400,500,700\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/rhplus/stylesheet/font-awesome.min.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/rhplus/stylesheet/ionicons.min.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/rhplus/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 26
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"catalog/view/theme/rhplus/javascript/common.js\"></script>
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 32
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 35
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 38
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</head>
<body class=\"";
        // line 41
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
<nav class=\"side-nav side-nav-left\">
  <div id=\"logo\">
    ";
        // line 44
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 45
            echo "    <a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>
    ";
        } else {
            // line 47
            echo "    <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
    ";
        }
        // line 49
        echo "  </div>
  ";
        // line 50
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
</nav>
<div class=\"site-overlay\"></div>
<div id=\"container\">
<header>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        <div class=\"menu-btn pull-left\"><i class=\"icon ion-ios-more\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Menu\"></i></div>
        <div class=\"account pull-right\">
          <ul class=\"list-inline\">
            <li class=\"dropdown\"><a href=\"";
        // line 61
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" class=\"dropdown-toggle icon-account\" data-toggle=\"dropdown\"><i class=\"icon ion-ios-person-outline\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-right text-center\">
                <li class=\"dropdown-triangle\"></li>
                ";
        // line 64
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 65
            echo "                <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
                <li><a href=\"";
            // line 66
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
                <li><a href=\"";
            // line 67
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
                <li><a href=\"";
            // line 68
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
                <li><a href=\"";
            // line 69
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
                ";
        } else {
            // line 71
            echo "                <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
                <li><a href=\"";
            // line 72
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
                ";
        }
        // line 74
        echo "              </ul>
            </li>
          </ul>
        </div>
        <div class=\"search-btn pull-right\">";
        // line 78
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
        <div class=\"shopping-bag pull-right\">";
        // line 79
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
        <div class=\"switchers pull-right\">
        ";
        // line 81
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
        ";
        // line 82
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
        </div>
      </div>
    </div>
  </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "rhplus/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 82,  259 => 81,  254 => 79,  250 => 78,  244 => 74,  237 => 72,  230 => 71,  223 => 69,  217 => 68,  211 => 67,  205 => 66,  198 => 65,  196 => 64,  188 => 61,  174 => 50,  171 => 49,  163 => 47,  151 => 45,  149 => 44,  143 => 41,  140 => 40,  132 => 38,  128 => 37,  119 => 35,  115 => 34,  104 => 32,  100 => 31,  95 => 28,  82 => 26,  78 => 25,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content= "{{ keywords }}" />*/
/* {% endif %}*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet">*/
/* <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">*/
/* <link href="catalog/view/theme/rhplus/stylesheet/font-awesome.min.css" rel="stylesheet">*/
/* <link href="catalog/view/theme/rhplus/stylesheet/ionicons.min.css" rel="stylesheet">*/
/* <link href="catalog/view/theme/rhplus/stylesheet/stylesheet.css" rel="stylesheet">*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/* <script src="catalog/view/theme/rhplus/javascript/common.js"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}"></script>*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/* <body class="{{ class }}">*/
/* <nav class="side-nav side-nav-left">*/
/*   <div id="logo">*/
/*     {% if logo %}*/
/*     <a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>*/
/*     {% else %}*/
/*     <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*     {% endif %}*/
/*   </div>*/
/*   {{ menu }}*/
/* </nav>*/
/* <div class="site-overlay"></div>*/
/* <div id="container">*/
/* <header>*/
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-sm-12">*/
/*         <div class="menu-btn pull-left"><i class="icon ion-ios-more" data-toggle="tooltip" data-placement="bottom" title="Menu"></i></div>*/
/*         <div class="account pull-right">*/
/*           <ul class="list-inline">*/
/*             <li class="dropdown"><a href="{{ account }}" class="dropdown-toggle icon-account" data-toggle="dropdown"><i class="icon ion-ios-person-outline" data-toggle="tooltip" data-placement="bottom" title="{{ text_account }}"></i></a>*/
/*               <ul class="dropdown-menu dropdown-menu-right text-center">*/
/*                 <li class="dropdown-triangle"></li>*/
/*                 {% if logged %}*/
/*                 <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*                 <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*                 <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*                 <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*                 <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*                 {% else %}*/
/*                 <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*                 <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*                 {% endif %}*/
/*               </ul>*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*         <div class="search-btn pull-right">{{ search }}</div>*/
/*         <div class="shopping-bag pull-right">{{ cart }}</div>*/
/*         <div class="switchers pull-right">*/
/*         {{ currency }}*/
/*         {{ language }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* */
