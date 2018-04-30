<?php

/* rhplus/template/account/voucher.twig */
class __TwigTemplate_c1e6ac8e2c93cdba5ee8ac6a3573575b56283eb744852da6079c67ac336d16f5 extends Twig_Template
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
<div id=\"account-voucher\" class=\"container\">
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
  ";
        // line 8
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-danger alert-dismissible\">";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">
    <div id=\"content\" class=\"col-sm-12\">
      ";
        // line 13
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 14
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <p>";
        // line 15
        echo (isset($context["text_description"]) ? $context["text_description"] : null);
        echo "</p>
      <form action=\"";
        // line 16
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-to-name\">";
        // line 18
        echo (isset($context["entry_to_name"]) ? $context["entry_to_name"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_name\" value=\"";
        // line 20
        echo (isset($context["to_name"]) ? $context["to_name"] : null);
        echo "\" id=\"input-to-name\" class=\"form-control\" />
            ";
        // line 21
        if ((isset($context["error_to_name"]) ? $context["error_to_name"] : null)) {
            // line 22
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_to_name"]) ? $context["error_to_name"] : null);
            echo "</div>
            ";
        }
        // line 24
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-to-email\">";
        // line 27
        echo (isset($context["entry_to_email"]) ? $context["entry_to_email"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_email\" value=\"";
        // line 29
        echo (isset($context["to_email"]) ? $context["to_email"] : null);
        echo "\" id=\"input-to-email\" class=\"form-control\" />
            ";
        // line 30
        if ((isset($context["error_to_email"]) ? $context["error_to_email"] : null)) {
            // line 31
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_to_email"]) ? $context["error_to_email"] : null);
            echo "</div>
            ";
        }
        // line 33
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-from-name\">";
        // line 36
        echo (isset($context["entry_from_name"]) ? $context["entry_from_name"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_name\" value=\"";
        // line 38
        echo (isset($context["from_name"]) ? $context["from_name"] : null);
        echo "\" id=\"input-from-name\" class=\"form-control\" />
            ";
        // line 39
        if ((isset($context["error_from_name"]) ? $context["error_from_name"] : null)) {
            // line 40
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_from_name"]) ? $context["error_from_name"] : null);
            echo "</div>
            ";
        }
        // line 42
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-from-email\">";
        // line 45
        echo (isset($context["entry_from_email"]) ? $context["entry_from_email"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_email\" value=\"";
        // line 47
        echo (isset($context["from_email"]) ? $context["from_email"] : null);
        echo "\" id=\"input-from-email\" class=\"form-control\" />
            ";
        // line 48
        if ((isset($context["error_from_email"]) ? $context["error_from_email"] : null)) {
            // line 49
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_from_email"]) ? $context["error_from_email"] : null);
            echo "</div>
            ";
        }
        // line 51
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\">";
        // line 54
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
           ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voucher_themes"]) ? $context["voucher_themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 57
            echo "            ";
            if (($this->getAttribute($context["voucher_theme"], "voucher_theme_id", array()) == (isset($context["voucher_theme_id"]) ? $context["voucher_theme_id"] : null))) {
                // line 58
                echo "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 60
                echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
                echo "\" checked=\"checked\" />
                ";
                // line 61
                echo $this->getAttribute($context["voucher_theme"], "name", array());
                echo "</label>
            </div>
            ";
            } else {
                // line 64
                echo "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 66
                echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
                echo "\" />
                ";
                // line 67
                echo $this->getAttribute($context["voucher_theme"], "name", array());
                echo "</label>
            </div>
            ";
            }
            // line 70
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            ";
        if ((isset($context["error_theme"]) ? $context["error_theme"] : null)) {
            // line 72
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_theme"]) ? $context["error_theme"] : null);
            echo "</div>
            ";
        }
        // line 74
        echo "          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-message\"><span data-toggle=\"tooltip\" title=\"";
        // line 77
        echo (isset($context["help_message"]) ? $context["help_message"] : null);
        echo "\">";
        echo (isset($context["entry_message"]) ? $context["entry_message"] : null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <textarea name=\"message\" cols=\"40\" rows=\"5\" id=\"input-message\" class=\"form-control\">";
        // line 79
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "</textarea>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-amount\"><span data-toggle=\"tooltip\" title=\"";
        // line 83
        echo (isset($context["help_amount"]) ? $context["help_amount"] : null);
        echo "\">";
        echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"amount\" value=\"";
        // line 85
        echo (isset($context["amount"]) ? $context["amount"] : null);
        echo "\" id=\"input-amount\" class=\"form-control\" size=\"5\" />
            ";
        // line 86
        if ((isset($context["error_amount"]) ? $context["error_amount"] : null)) {
            // line 87
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_amount"]) ? $context["error_amount"] : null);
            echo "</div>
            ";
        }
        // line 89
        echo "          </div>
        </div>
        <div class=\"buttons clearfix\">
          <div class=\"pull-right\"> ";
        // line 92
        echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
        echo "
            ";
        // line 93
        if ((isset($context["agree"]) ? $context["agree"] : null)) {
            // line 94
            echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 96
            echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
        }
        // line 98
        echo "            &nbsp;
            <input type=\"submit\" value=\"";
        // line 99
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
      ";
        // line 103
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
  </div>
</div>
";
        // line 107
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "rhplus/template/account/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 107,  282 => 103,  275 => 99,  272 => 98,  268 => 96,  264 => 94,  262 => 93,  258 => 92,  253 => 89,  247 => 87,  245 => 86,  241 => 85,  234 => 83,  227 => 79,  220 => 77,  215 => 74,  209 => 72,  206 => 71,  200 => 70,  194 => 67,  190 => 66,  186 => 64,  180 => 61,  176 => 60,  172 => 58,  169 => 57,  165 => 56,  160 => 54,  155 => 51,  149 => 49,  147 => 48,  143 => 47,  138 => 45,  133 => 42,  127 => 40,  125 => 39,  121 => 38,  116 => 36,  111 => 33,  105 => 31,  103 => 30,  99 => 29,  94 => 27,  89 => 24,  83 => 22,  81 => 21,  77 => 20,  72 => 18,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-voucher" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible">{{ error_warning }}</div>*/
/*   {% endif %}*/
/*   <div class="row">*/
/*     <div id="content" class="col-sm-12">*/
/*       {{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <p>{{ text_description }}</p>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-to-name">{{ entry_to_name }}</label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="to_name" value="{{ to_name }}" id="input-to-name" class="form-control" />*/
/*             {% if error_to_name %}*/
/*             <div class="text-danger">{{ error_to_name }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-to-email">{{ entry_to_email }}</label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="to_email" value="{{ to_email }}" id="input-to-email" class="form-control" />*/
/*             {% if error_to_email %}*/
/*             <div class="text-danger">{{ error_to_email }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-from-name">{{ entry_from_name }}</label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="from_name" value="{{ from_name }}" id="input-from-name" class="form-control" />*/
/*             {% if error_from_name %}*/
/*             <div class="text-danger">{{ error_from_name }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-from-email">{{ entry_from_email }}</label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="from_email" value="{{ from_email }}" id="input-from-email" class="form-control" />*/
/*             {% if error_from_email %}*/
/*             <div class="text-danger">{{ error_from_email }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label">{{ entry_theme }}</label>*/
/*           <div class="col-sm-10">*/
/*            {% for voucher_theme in voucher_themes %}*/
/*             {% if voucher_theme.voucher_theme_id == voucher_theme_id %}*/
/*             <div class="radio">*/
/*               <label>*/
/*                 <input type="radio" name="voucher_theme_id" value="{{ voucher_theme.voucher_theme_id }}" checked="checked" />*/
/*                 {{ voucher_theme.name }}</label>*/
/*             </div>*/
/*             {% else %}*/
/*             <div class="radio">*/
/*               <label>*/
/*                 <input type="radio" name="voucher_theme_id" value="{{ voucher_theme.voucher_theme_id }}" />*/
/*                 {{ voucher_theme.name }}</label>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% if error_theme %}*/
/*             <div class="text-danger">{{ error_theme }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="col-sm-2 control-label" for="input-message"><span data-toggle="tooltip" title="{{ help_message }}">{{ entry_message }}</span></label>*/
/*           <div class="col-sm-10">*/
/*             <textarea name="message" cols="40" rows="5" id="input-message" class="form-control">{{ message }}</textarea>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="col-sm-2 control-label" for="input-amount"><span data-toggle="tooltip" title="{{ help_amount }}">{{ entry_amount }}</span></label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="amount" value="{{ amount }}" id="input-amount" class="form-control" size="5" />*/
/*             {% if error_amount %}*/
/*             <div class="text-danger">{{ error_amount }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-right"> {{ text_agree }}*/
/*             {% if agree %}*/
/*             <input type="checkbox" name="agree" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="agree" value="1" />*/
/*             {% endif %}*/
/*             &nbsp;*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary" />*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*       {{ content_bottom }}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
