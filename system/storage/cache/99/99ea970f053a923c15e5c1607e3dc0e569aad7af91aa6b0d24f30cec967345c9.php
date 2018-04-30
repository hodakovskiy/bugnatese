<?php

/* marketplace/event.twig */
class __TwigTemplate_8bd14114067cd3d03c0b27c3d8fdf7c3ba8eb211089a85e6c88c12535edfe9b2 extends Twig_Template
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
      <div class=\"float-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-event').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
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
        echo (isset($context["text_event"]) ? $context["text_event"] : null);
        echo "</div>
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 31
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 33
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-event\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                  <td class=\"text-left\">";
        // line 39
        if (((isset($context["sort"]) ? $context["sort"] : null) == "code")) {
            echo "<a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 40
        if (((isset($context["sort"]) ? $context["sort"] : null) == "status")) {
            echo "<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-right\">";
        // line 41
        if (((isset($context["sort"]) ? $context["sort"] : null) == "sort_order")) {
            echo "<a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-right\">";
        // line 42
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 46
        if ((isset($context["events"]) ? $context["events"] : null)) {
            // line 47
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 48
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 49
                if (twig_in_filter($this->getAttribute($context["event"], "event_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 50
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["event"], "event_id", array());
                    echo "\" checked=\"checked\"/>
                        ";
                } else {
                    // line 52
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["event"], "event_id", array());
                    echo "\"/>
                        ";
                }
                // line 53
                echo "</td>
                      <td class=\"text-left\">";
                // line 54
                echo $this->getAttribute($context["event"], "code", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 55
                echo $this->getAttribute($context["event"], "status", array());
                echo "</td>
                      <td class=\"text-right\">";
                // line 56
                echo $this->getAttribute($context["event"], "sort_order", array());
                echo "</td>
                      <td class=\"text-right\"><button type=\"button\" data-toggle=\"modal\" data-target=\"#modal-event";
                // line 57
                echo $this->getAttribute($context["event"], "event_id", array());
                echo "\" class=\"btn btn-info\"><i class=\"fas fa-info-circle\"></i></button>
                        ";
                // line 58
                if ( !$this->getAttribute($context["event"], "enabled", array())) {
                    // line 59
                    echo "                          <button type=\"button\" value=\"";
                    echo $this->getAttribute($context["event"], "event_id", array());
                    echo "\" data-toggle=\"tooltip\" data-title=\"";
                    echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
                    echo "\" class=\"btn btn-success\"><i class=\"fas fa-plus-circle\"></i></button>
                        ";
                } else {
                    // line 61
                    echo "                          <button type=\"button\" value=\"";
                    echo $this->getAttribute($context["event"], "event_id", array());
                    echo "\" data-toggle=\"tooltip\" data-title=\"";
                    echo (isset($context["button_disable"]) ? $context["button_disable"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button>
                        ";
                }
                // line 63
                echo "                        <div id=\"modal-event";
                echo $this->getAttribute($context["event"], "event_id", array());
                echo "\" class=\"modal text-left\">
                          <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <h5 class=\"modal-title\">";
                // line 67
                echo (isset($context["text_info"]) ? $context["text_info"] : null);
                echo "</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                              </div>
                              <div class=\"modal-body\">
                                <div class=\"form-group\">
                                  <label class=\"col-form-label\" for=\"input-trigger\">";
                // line 72
                echo (isset($context["text_trigger"]) ? $context["text_trigger"] : null);
                echo "</label> <textarea id=\"input-trigger\" class=\"form-control\" disabled>";
                echo $this->getAttribute($context["event"], "trigger", array());
                echo "</textarea>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"col-form-label\" for=\"input-trigger\">";
                // line 75
                echo (isset($context["text_action"]) ? $context["text_action"] : null);
                echo "</label> <textarea id=\"input-trigger\" class=\"form-control\" disabled>";
                echo $this->getAttribute($context["event"], "action", array());
                echo "</textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                ";
        } else {
            // line 85
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"5\">";
            // line 86
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                  </tr>
                ";
        }
        // line 89
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 94
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 95
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-event').on('click', '.btn-success', function() {
\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/event/enable&user_token=";
        // line 106
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&event_id=' + \$(element).val(),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('.alert-info').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.alert-info').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$(element).replaceWith('<button type=\"button\" value=\"' + \$(element).val() + '\" data-toggle=\"tooltip\" data-title=\"";
        // line 124
        echo (isset($context["button_disable"]) ? $context["button_disable"] : null);
        echo "\"  class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#form-event').on('click', '.btn-danger', function() {
\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/event/disable&user_token=";
        // line 137
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&event_id=' + \$(element).val(),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('.alert-info').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.alert-info').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$(element).replaceWith('<button type=\"button\" value=\"' + \$(element).val() + '\" data-toggle=\"tooltip\" data-title=\"";
        // line 155
        echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
        echo "\"  class=\"btn btn-success\"><i class=\"fas fa-plus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
        // line 164
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "marketplace/event.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 164,  362 => 155,  341 => 137,  325 => 124,  304 => 106,  290 => 95,  286 => 94,  279 => 89,  273 => 86,  270 => 85,  267 => 84,  250 => 75,  242 => 72,  234 => 67,  226 => 63,  218 => 61,  210 => 59,  208 => 58,  204 => 57,  200 => 56,  196 => 55,  192 => 54,  189 => 53,  183 => 52,  177 => 50,  175 => 49,  172 => 48,  167 => 47,  165 => 46,  158 => 42,  140 => 41,  122 => 40,  104 => 39,  95 => 33,  90 => 31,  84 => 29,  76 => 25,  73 => 24,  65 => 20,  63 => 19,  56 => 14,  45 => 12,  41 => 11,  35 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="float-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-event').submit() : false;"><i class="fas fa-trash-alt"></i></button>*/
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
/*     <div class="alert alert-info"><i class="fas fa-info-circle"></i> {{ text_event }}</div>*/
/*     <div class="card">*/
/*       <div class="card-header"><i class="fas fa-list"></i> {{ text_list }}</div>*/
/*       <div class="card-body">*/
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-event">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').trigger('click');"/></td>*/
/*                   <td class="text-left">{% if sort == 'code' %}<a href="{{ sort_code }}" class="{{ order|lower }}">{{ column_code }}</a>{% else %}<a href="{{ sort_code }}">{{ column_code }}</a>{% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'status' %}<a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>{% else %}<a href="{{ sort_status }}">{{ column_status }}</a>{% endif %}</td>*/
/*                   <td class="text-right">{% if sort == 'sort_order' %}<a href="{{ sort_sort_order }}" class="{{ order|lower }}">{{ column_sort_order }}</a>{% else %}<a href="{{ sort_sort_order }}">{{ column_sort_order }}</a>{% endif %}</td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if events %}*/
/*                   {% for event in events %}*/
/*                     <tr>*/
/*                       <td class="text-center">{% if event.event_id in selected %}*/
/*                           <input type="checkbox" name="selected[]" value="{{ event.event_id }}" checked="checked"/>*/
/*                         {% else %}*/
/*                           <input type="checkbox" name="selected[]" value="{{ event.event_id }}"/>*/
/*                         {% endif %}</td>*/
/*                       <td class="text-left">{{ event.code }}</td>*/
/*                       <td class="text-left">{{ event.status }}</td>*/
/*                       <td class="text-right">{{ event.sort_order }}</td>*/
/*                       <td class="text-right"><button type="button" data-toggle="modal" data-target="#modal-event{{ event.event_id }}" class="btn btn-info"><i class="fas fa-info-circle"></i></button>*/
/*                         {% if not event.enabled %}*/
/*                           <button type="button" value="{{ event.event_id }}" data-toggle="tooltip" data-title="{{ button_enable }}" class="btn btn-success"><i class="fas fa-plus-circle"></i></button>*/
/*                         {% else %}*/
/*                           <button type="button" value="{{ event.event_id }}" data-toggle="tooltip" data-title="{{ button_disable }}" class="btn btn-danger"><i class="fas fa-minus-circle"></i></button>*/
/*                         {% endif %}*/
/*                         <div id="modal-event{{ event.event_id }}" class="modal text-left">*/
/*                           <div class="modal-dialog">*/
/*                             <div class="modal-content">*/
/*                               <div class="modal-header">*/
/*                                 <h5 class="modal-title">{{ text_info }}</h5>*/
/*                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                               </div>*/
/*                               <div class="modal-body">*/
/*                                 <div class="form-group">*/
/*                                   <label class="col-form-label" for="input-trigger">{{ text_trigger }}</label> <textarea id="input-trigger" class="form-control" disabled>{{ event.trigger }}</textarea>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                   <label class="col-form-label" for="input-trigger">{{ text_action }}</label> <textarea id="input-trigger" class="form-control" disabled>{{ event.action }}</textarea>*/
/*                                 </div>*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </td>*/
/*                     </tr>*/
/*                   {% endfor %}*/
/*                 {% else %}*/
/*                   <tr>*/
/*                     <td class="text-center" colspan="5">{{ text_no_results }}</td>*/
/*                   </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#form-event').on('click', '.btn-success', function() {*/
/* 	var element = this;*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=marketplace/event/enable&user_token={{ user_token }}&event_id=' + $(element).val(),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$(element).button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$(element).button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('.alert-info').after('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('.alert-info').after('<div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$(element).replaceWith('<button type="button" value="' + $(element).val() + '" data-toggle="tooltip" data-title="{{ button_disable }}"  class="btn btn-danger"><i class="fas fa-minus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#form-event').on('click', '.btn-danger', function() {*/
/* 	var element = this;*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=marketplace/event/disable&user_token={{ user_token }}&event_id=' + $(element).val(),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$(element).button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$(element).button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('.alert-info').after('<div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('.alert-info').after('<div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$(element).replaceWith('<button type="button" value="' + $(element).val() + '" data-toggle="tooltip" data-title="{{ button_enable }}"  class="btn btn-success"><i class="fas fa-plus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
