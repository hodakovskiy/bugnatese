<?php

/* rhplus/template/extension/module/slideshow.twig */
class __TwigTemplate_f815890285b827ab1e91bedff1fa2c8a05756ae338f9f1358e29a5fa2b8bac40 extends Twig_Template
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
        echo "<div id=\"slideshow";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"owl-carousel\" style=\"opacity: 1;\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 3
            echo "  <div class=\"item\">
    ";
            // line 4
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 5
                echo "    <a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" /></a>
    ";
            } else {
                // line 7
                echo "    <img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />
    ";
            }
            // line 9
            echo "  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>
<script type=\"text/javascript\"><!--
\$('#slideshow";
        // line 13
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " ').owlCarousel({
\titems: 6,
\tautoPlay: 6000,
\tsingleItem: true,
\tnavigation: true,
\tnavigationText: ['<i class=\"icon ion-ios-arrow-left\"></i>', '<i class=\"icon ion-ios-arrow-right\"></i>'],
\tpagination: true
});
--></script>
";
    }

    public function getTemplateName()
    {
        return "rhplus/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  58 => 11,  51 => 9,  43 => 7,  33 => 5,  31 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div id="slideshow{{ module }}" class="owl-carousel" style="opacity: 1;">*/
/*   {% for banner in banners %}*/
/*   <div class="item">*/
/*     {% if banner.link %}*/
/*     <a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>*/
/*     {% else %}*/
/*     <img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />*/
/*     {% endif %}*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#slideshow{{ module }} ').owlCarousel({*/
/* 	items: 6,*/
/* 	autoPlay: 6000,*/
/* 	singleItem: true,*/
/* 	navigation: true,*/
/* 	navigationText: ['<i class="icon ion-ios-arrow-left"></i>', '<i class="icon ion-ios-arrow-right"></i>'],*/
/* 	pagination: true*/
/* });*/
/* --></script>*/
/* */
