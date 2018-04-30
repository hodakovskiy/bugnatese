<?php

/* rhplus/template/common/search.twig */
class __TwigTemplate_d112e038e53da9c32b86c2018c0e5cfc848743612a26856b9386bcbab5c0ffb1 extends Twig_Template
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
        echo "<div class=\"btn-group btn-search\">
  <button type=\"button\" data-toggle=\"dropdown\" class=\"btn dropdown-toggle\"><i class=\"icon ion-ios-search-strong\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        // line 2
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\"></i></button>
  <ul class=\"dropdown-menu pull-right\">
  <li class=\"dropdown-triangle\"></li>
    <li>
      <div id=\"search\" class=\"input-group\">
        <input type=\"text\" name=\"search\" value=\"";
        // line 7
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" class=\"form-control\" />
        <div class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\">";
        // line 9
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</button>
        </div>
      </div>
    </li>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "rhplus/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  30 => 7,  22 => 2,  19 => 1,);
    }
}
/* <div class="btn-group btn-search">*/
/*   <button type="button" data-toggle="dropdown" class="btn dropdown-toggle"><i class="icon ion-ios-search-strong" data-toggle="tooltip" data-placement="bottom" title="{{ text_search }}"></i></button>*/
/*   <ul class="dropdown-menu pull-right">*/
/*   <li class="dropdown-triangle"></li>*/
/*     <li>*/
/*       <div id="search" class="input-group">*/
/*         <input type="text" name="search" value="{{ search }}" class="form-control" />*/
/*         <div class="input-group-btn">*/
/*           <button type="button" class="btn btn-default">{{ text_search }}</button>*/
/*         </div>*/
/*       </div>*/
/*     </li>*/
/*   </ul>*/
/* </div>*/
/* */
