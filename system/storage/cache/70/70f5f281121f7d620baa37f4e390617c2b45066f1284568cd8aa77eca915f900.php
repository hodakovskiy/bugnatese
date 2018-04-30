<?php

/* marketplace/modification.twig */
class __TwigTemplate_fb7e99b727ef049c970e9ebdb058c3e2d5daaf332891ff6e3d0eef7c5bf3da8a extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-right\"><a href=\"";
        // line 5
        echo (isset($context["refresh"]) ? $context["refresh"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fas fa-sync\"></i></a> <a href=\"";
        echo (isset($context["clear"]) ? $context["clear"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_clear"]) ? $context["button_clear"] : null);
        echo "\" class=\"btn btn-warning\"><i class=\"fas fa-eraser\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-modification').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
      </div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "            <li class=\"breadcrumb-item\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </ol>
      </nav>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 24
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 25
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 29
        echo "    <div class=\"alert alert-info\"><i class=\"fas fa-info-circle\"></i> ";
        echo (isset($context["text_refresh"]) ? $context["text_refresh"] : null);
        echo "</div>
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 31
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</div>
      <div class=\"card-body\">

        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-general\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 35
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-log\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 36
        echo (isset($context["tab_log"]) ? $context["tab_log"] : null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-general\" class=\"tab-pane fade show active\">
            <form action=\"";
        // line 40
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-modification\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                      <td class=\"text-left\">";
        // line 46
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            // line 47
            echo "                          <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                        ";
        } else {
            // line 49
            echo "                          <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                        ";
        }
        // line 50
        echo "</td>
                      <td class=\"text-left\">";
        // line 51
        if (((isset($context["sort"]) ? $context["sort"] : null) == "author")) {
            // line 52
            echo "                          <a href=\"";
            echo (isset($context["sort_author"]) ? $context["sort_author"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_author"]) ? $context["column_author"] : null);
            echo "</a>
                        ";
        } else {
            // line 54
            echo "                          <a href=\"";
            echo (isset($context["sort_author"]) ? $context["sort_author"] : null);
            echo "\">";
            echo (isset($context["column_author"]) ? $context["column_author"] : null);
            echo "</a>
                        ";
        }
        // line 55
        echo "</td>
                      <td class=\"text-left\">";
        // line 56
        if (((isset($context["sort"]) ? $context["sort"] : null) == "version")) {
            // line 57
            echo "                          <a href=\"";
            echo (isset($context["sort_version"]) ? $context["sort_version"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_version"]) ? $context["column_version"] : null);
            echo "</a>
                        ";
        } else {
            // line 59
            echo "                          <a href=\"";
            echo (isset($context["sort_version"]) ? $context["sort_version"] : null);
            echo "\">";
            echo (isset($context["column_version"]) ? $context["column_version"] : null);
            echo "</a>
                        ";
        }
        // line 60
        echo "</td>
                      <td class=\"text-left\">";
        // line 61
        if (((isset($context["sort"]) ? $context["sort"] : null) == "status")) {
            // line 62
            echo "                          <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                        ";
        } else {
            // line 64
            echo "                          <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                        ";
        }
        // line 65
        echo "</td>
                      <td class=\"text-left\">";
        // line 66
        if (((isset($context["sort"]) ? $context["sort"] : null) == "date_added")) {
            // line 67
            echo "                          <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
                        ";
        } else {
            // line 69
            echo "                          <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
                        ";
        }
        // line 70
        echo "</td>
                      <td class=\"text-right\">";
        // line 71
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 75
        if ((isset($context["modifications"]) ? $context["modifications"] : null)) {
            // line 76
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modifications"]) ? $context["modifications"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["modification"]) {
                // line 77
                echo "                        <tr>
                          <td class=\"text-center\">";
                // line 78
                if (twig_in_filter($this->getAttribute($context["modification"], "modification_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 79
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["modification"], "modification_id", array());
                    echo "\" checked=\"checked\"/>
                            ";
                } else {
                    // line 81
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["modification"], "modification_id", array());
                    echo "\"/>
                            ";
                }
                // line 82
                echo "</td>
                          <td class=\"text-left\">";
                // line 83
                echo $this->getAttribute($context["modification"], "name", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 84
                echo $this->getAttribute($context["modification"], "author", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 85
                echo $this->getAttribute($context["modification"], "version", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 86
                echo $this->getAttribute($context["modification"], "status", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 87
                echo $this->getAttribute($context["modification"], "date_added", array());
                echo "</td>
                          <td class=\"text-right\">";
                // line 88
                if ($this->getAttribute($context["modification"], "link", array())) {
                    // line 89
                    echo "                              <a href=\"";
                    echo $this->getAttribute($context["modification"], "link", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_link"]) ? $context["button_link"] : null);
                    echo "\" class=\"btn btn-info\" target=\"_blank\"><i class=\"fas fa-link\"></i></a>
                            ";
                } else {
                    // line 91
                    echo "                              <button type=\"button\" class=\"btn btn-info\" disabled=\"disabled\"><i class=\"fas fa-link\"></i></button>
                            ";
                }
                // line 93
                echo "                            ";
                if ( !$this->getAttribute($context["modification"], "enabled", array())) {
                    // line 94
                    echo "                              <a href=\"";
                    echo $this->getAttribute($context["modification"], "enable", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
                    echo "\" class=\"btn btn-success\"><i class=\"fas fa-plus-circle\"></i></a>
                            ";
                } else {
                    // line 96
                    echo "                              <a href=\"";
                    echo $this->getAttribute($context["modification"], "disable", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_disable"]) ? $context["button_disable"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></a>
                            ";
                }
                // line 97
                echo "</td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                    ";
        } else {
            // line 101
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"7\">";
            // line 102
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 105
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 110
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 111
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
          <div id=\"tab-log\" class=\"tab-pane fade\">
            <div class=\"form-group\">
              <textarea wrap=\"off\" rows=\"15\" class=\"form-control\">";
        // line 116
        echo (isset($context["log"]) ? $context["log"] : null);
        echo "</textarea>
            </div>
            <div class=\"text-center\"><a href=\"";
        // line 118
        echo (isset($context["clear_log"]) ? $context["clear_log"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-eraser\"></i> ";
        echo (isset($context["button_clear"]) ? $context["button_clear"] : null);
        echo "</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 125
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "marketplace/modification.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 125,  372 => 118,  367 => 116,  359 => 111,  355 => 110,  348 => 105,  342 => 102,  339 => 101,  336 => 100,  328 => 97,  320 => 96,  312 => 94,  309 => 93,  305 => 91,  297 => 89,  295 => 88,  291 => 87,  287 => 86,  283 => 85,  279 => 84,  275 => 83,  272 => 82,  266 => 81,  260 => 79,  258 => 78,  255 => 77,  250 => 76,  248 => 75,  241 => 71,  238 => 70,  230 => 69,  220 => 67,  218 => 66,  215 => 65,  207 => 64,  197 => 62,  195 => 61,  192 => 60,  184 => 59,  174 => 57,  172 => 56,  169 => 55,  161 => 54,  151 => 52,  149 => 51,  146 => 50,  138 => 49,  128 => 47,  126 => 46,  117 => 40,  110 => 36,  106 => 35,  99 => 31,  93 => 29,  85 => 25,  82 => 24,  74 => 20,  72 => 19,  65 => 14,  54 => 12,  50 => 11,  44 => 8,  37 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="float-right"><a href="{{ refresh }}" data-toggle="tooltip" title="{{ button_refresh }}" class="btn btn-info"><i class="fas fa-sync"></i></a> <a href="{{ clear }}" data-toggle="tooltip" title="{{ button_clear }}" class="btn btn-warning"><i class="fas fa-eraser"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-modification').submit() : false;"><i class="fas fa-trash-alt"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <nav aria-label="breadcrumb">*/
/*         <ol class="breadcrumb">*/
/*           {% for breadcrumb in breadcrumbs %}*/
/*             <li class="breadcrumb-item"><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*           {% endfor %}*/
/*         </ol>*/
/*       </nav>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*       <div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*       <div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> {{ success }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="alert alert-info"><i class="fas fa-info-circle"></i> {{ text_refresh }}</div>*/
/*     <div class="card">*/
/*       <div class="card-header"><i class="fas fa-list"></i> {{ text_list }}</div>*/
/*       <div class="card-body">*/
/* */
/*         <ul class="nav nav-tabs">*/
/*           <li class="nav-item"><a href="#tab-general" data-toggle="tab" class="nav-link active">{{ tab_general }}</a></li>*/
/*           <li class="nav-item"><a href="#tab-log" data-toggle="tab" class="nav-link">{{ tab_log }}</a></li>*/
/*         </ul>*/
/*         <div class="tab-content">*/
/*           <div id="tab-general" class="tab-pane fade show active">*/
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-modification">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').trigger('click');"/></td>*/
/*                       <td class="text-left">{% if sort == 'name' %}*/
/*                           <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                         {% else %}*/
/*                           <a href="{{ sort_name }}">{{ column_name }}</a>*/
/*                         {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'author' %}*/
/*                           <a href="{{ sort_author }}" class="{{ order|lower }}">{{ column_author }}</a>*/
/*                         {% else %}*/
/*                           <a href="{{ sort_author }}">{{ column_author }}</a>*/
/*                         {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'version' %}*/
/*                           <a href="{{ sort_version }}" class="{{ order|lower }}">{{ column_version }}</a>*/
/*                         {% else %}*/
/*                           <a href="{{ sort_version }}">{{ column_version }}</a>*/
/*                         {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'status' %}*/
/*                           <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>*/
/*                         {% else %}*/
/*                           <a href="{{ sort_status }}">{{ column_status }}</a>*/
/*                         {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'date_added' %}*/
/*                           <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a>*/
/*                         {% else %}*/
/*                           <a href="{{ sort_date_added }}">{{ column_date_added }}</a>*/
/*                         {% endif %}</td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% if modifications %}*/
/*                       {% for modification in modifications %}*/
/*                         <tr>*/
/*                           <td class="text-center">{% if modification.modification_id in selected %}*/
/*                               <input type="checkbox" name="selected[]" value="{{ modification.modification_id }}" checked="checked"/>*/
/*                             {% else %}*/
/*                               <input type="checkbox" name="selected[]" value="{{ modification.modification_id }}"/>*/
/*                             {% endif %}</td>*/
/*                           <td class="text-left">{{ modification.name }}</td>*/
/*                           <td class="text-left">{{ modification.author }}</td>*/
/*                           <td class="text-left">{{ modification.version }}</td>*/
/*                           <td class="text-left">{{ modification.status }}</td>*/
/*                           <td class="text-left">{{ modification.date_added }}</td>*/
/*                           <td class="text-right">{% if modification.link %}*/
/*                               <a href="{{ modification.link }}" data-toggle="tooltip" title="{{ button_link }}" class="btn btn-info" target="_blank"><i class="fas fa-link"></i></a>*/
/*                             {% else %}*/
/*                               <button type="button" class="btn btn-info" disabled="disabled"><i class="fas fa-link"></i></button>*/
/*                             {% endif %}*/
/*                             {% if not modification.enabled %}*/
/*                               <a href="{{ modification.enable }}" data-toggle="tooltip" title="{{ button_enable }}" class="btn btn-success"><i class="fas fa-plus-circle"></i></a>*/
/*                             {% else %}*/
/*                               <a href="{{ modification.disable }}" data-toggle="tooltip" title="{{ button_disable }}" class="btn btn-danger"><i class="fas fa-minus-circle"></i></a>*/
/*                             {% endif %}</td>*/
/*                         </tr>*/
/*                       {% endfor %}*/
/*                     {% else %}*/
/*                       <tr>*/
/*                         <td class="text-center" colspan="7">{{ text_no_results }}</td>*/
/*                       </tr>*/
/*                     {% endif %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*           <div id="tab-log" class="tab-pane fade">*/
/*             <div class="form-group">*/
/*               <textarea wrap="off" rows="15" class="form-control">{{ log }}</textarea>*/
/*             </div>*/
/*             <div class="text-center"><a href="{{ clear_log }}" class="btn btn-danger"><i class="fas fa-eraser"></i> {{ button_clear }}</a></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
