<?php

/* tool/upgrade.twig */
class __TwigTemplate_e7de1f917f4a8f949cd82c3350724009045c7311bbfb9121ce7431cf2085a7ca extends Twig_Template
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
      <h1>";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
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
        // line 11
        echo "        </ol>
      </nav>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "      <div class=\"alert alert-danger\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 21
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 22
            echo "      <div class=\"alert alert-success\"><i class=\"fas fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 26
        echo "    <div id=\"collapse\">
      <div class=\"card\">
        <div class=\"card-header\" data-toggle=\"collapse\" data-target=\"#collapse-version\"><i class=\"fas fa-sync\"></i> ";
        // line 28
        echo (isset($context["text_version"]) ? $context["text_version"] : null);
        echo "</div>
        <div id=\"collapse-version\" data-parent=\"#collapse\" class=\"collapse show\">
          <div class=\"card-body\">
            <fieldset>
              ";
        // line 32
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 33
            echo "                <legend class=\"text-danger\" id=\"btn-version\">";
            echo (isset($context["text_update"]) ? $context["text_update"] : null);
            echo "</legend>
              ";
        } else {
            // line 35
            echo "                <legend id=\"btn-version\">";
            echo (isset($context["text_update"]) ? $context["text_update"] : null);
            echo "</legend>
              ";
        }
        // line 37
        echo "            </fieldset>
            <div class=\"alert alert-info\">
              <p><strong><i class=\"fas fa-exclamation-circle\"></i> Tips: Before upgrading it's very important to</strong></p>
              <ol>
                <li>Make a complete backup of your web site!
                  <br/>
                  Backup <a href=\"";
        // line 43
        echo (isset($context["backup"]) ? $context["backup"] : null);
        echo "\">here</a>;
                  <br/>
                  If you are using the cloud version, you can backup with your opencart account <a href=\"";
        // line 45
        echo (isset($context["opencart_account"]) ? $context["opencart_account"] : null);
        echo "\" target=\"_blank\">here</a>.
                </li>
                <li>Check the extensions installed are compatible with the latest version</li>
                <li>It's better if you could copy your site to a test server and practise upgrading before starting with the live web site.</li>
              </ol>
            </div>
            <fieldset>
              <legend id=\"version\">";
        // line 52
        echo (isset($context["text_change"]) ? $context["text_change"] : null);
        echo "</legend>
              <textarea wrap=\"off\" rows=\"10\" readonly class=\"form-control\">";
        // line 53
        echo (isset($context["log"]) ? $context["log"] : null);
        echo "</textarea>
            </fieldset>
            <br/>
            <div class=\"text-right\"><a href=\"#collapse-compatible\" data-toggle=\"collapse\" data-parent=\"#collapse\" class=\"btn btn-primary\"><i class=\"fas fa-arrow-right\"></i> ";
        // line 56
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
          </div>
        </div>
      </div>
      <div class=\"card\">
        <div class=\"card-header collapsed\" data-toggle=\"collapse\" data-target=\"#collapse-compatible\"><i class=\"fas fa-random\"></i> ";
        // line 61
        echo (isset($context["text_compatibility"]) ? $context["text_compatibility"] : null);
        echo "</div>
        <div id=\"collapse-compatible\" data-parent=\"#collapse\" class=\"collapse\">
          <div class=\"card-body\">
            <div class=\"alert alert-warning\">
              Before upgrading, it's very important to check the extensions installed are compatible with the latest version!
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 71
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 72
        echo (isset($context["column_compatible"]) ? $context["column_compatible"] : null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 73
        echo (isset($context["column_available"]) ? $context["column_available"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 77
        if ((isset($context["extensions"]) ? $context["extensions"] : null)) {
            // line 78
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 79
                echo "                    <tr>
                      <td class=\"text-left\"><a href=\"";
                // line 80
                echo $this->getAttribute($context["extension"], "link", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</a></td>
                      <td class=\"text-center\">";
                // line 81
                if ($this->getAttribute($context["extension"], "compatible", array())) {
                    echo "<i class=\"fas fa-check text-success\"></i>";
                } else {
                    echo "<i class=\"fas fa-times text-danger\"></i>";
                }
                echo "</td>
                      <td class=\"text-center\">";
                // line 82
                if ($this->getAttribute($context["extension"], "available", array())) {
                    echo "<i class=\"fas fa-check text-success\"></i>";
                } else {
                    echo "<i class=\"fas fa-times text-danger\"></i>";
                }
                echo "</td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                ";
        } else {
            // line 86
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"3\">";
            // line 87
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                  </tr>
                ";
        }
        // line 90
        echo "              </tbody>
            </table>
            <br/>
            <div class=\"text-right\"><a href=\"#collapse-upgrade\" data-toggle=\"collapse\" data-parent=\"#collapse\" class=\"btn btn-primary\"><i class=\"fas fa-arrow-right\"></i> ";
        // line 93
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
          </div>
        </div>
      </div>
      <div class=\"card\">
        <div class=\"card-header collapsed\" data-toggle=\"collapse\" data-target=\"#collapse-upgrade\"><i class=\"fas fa-check\"></i> ";
        // line 98
        echo (isset($context["text_upgrade"]) ? $context["text_upgrade"] : null);
        echo "</div>
        <div id=\"collapse-upgrade\" data-parent=\"#collapse\" class=\"collapse\">
          <div class=\"card-body\">
            <fieldset>
              <legend>";
        // line 102
        echo (isset($context["text_progress"]) ? $context["text_progress"] : null);
        echo "</legend>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">Progress</label>
                <div class=\"col-sm-10\">
                  <div id=\"progress-download\" class=\"progress\">
                    <div id=\"progress-bar\" class=\"progress-bar\"></div>
                  </div>
                  <div id=\"progress-text\"></div>
                </div>
              </div>
              <div class=\"col-sm-10 offset-sm-2\">
                <div class=\"form-group row\">
                  ";
        // line 114
        if ((isset($context["upgrade"]) ? $context["upgrade"] : null)) {
            // line 115
            echo "                    <button type=\"button\" id=\"button-upgrade\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-success\"><i class=\"fas fa-play\"></i> ";
            echo (isset($context["button_start"]) ? $context["button_start"] : null);
            echo "</button>
                  ";
        } else {
            // line 117
            echo "                    <button type=\"button\" id=\"button-upgrade\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-success\" disabled=\"disabled\"><i class=\"fas fa-play\"></i> ";
            echo (isset($context["button_start"]) ? $context["button_start"] : null);
            echo "</button>
                  ";
        }
        // line 119
        echo "                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>Upgrade Log</legend>
              <textarea id=\"log\" wrap=\"off\" rows=\"10\" readonly class=\"form-control\"></textarea>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-upgrade').on('click', function() {
\t\$('#progress-bar').css('width', '0%');
\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');
\t\$('#progress-text').html('";
        // line 136
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "');
\t\$('#log').append('";
        // line 137
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "' + \"\\n\");

\t\$.ajax({
\t\turl: 'index.php?route=tool/upgrade/download&user_token=";
        // line 140
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&version=";
        echo (isset($context["version"]) ? $context["version"] : null);
        echo "',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-upgrade').button('loading');
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"invalid-tooltip\">' + json['error'] + '</div>');
\t\t\t\t\$('#log').append(json['error'] + \"\\n\");
\t\t\t}

\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-bar').css('width', '20%');
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t\t\$('#log').append(json['text'] + \"\\n\");
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\tnext(json['next'], 1);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\$('#log').append(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

function next(url, i) {
\ti = i + 1;

\t\$.ajax({
\t\turl: url,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#progress-bar').css('width', (i * 20) + '%');

\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"invalid-tooltip\">' + json['error'] + '</div>');
\t\t\t\t\$('#log').append(json['error'] + \"\\n\");

\t\t\t\t\$('#button-upgrade').button('reset');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');
\t\t\t\t\$('#log').append(json['success'] + \"\\n\");

\t\t\t\t\$('#button-upgrade').button('reset');
\t\t\t}

\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t\t\$('#log').append(json['text'] + \"\\n\");
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\tnext(json['next'], i);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\$('#log').append(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

//--></script>
";
        // line 209
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "tool/upgrade.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 209,  301 => 140,  295 => 137,  291 => 136,  272 => 119,  264 => 117,  256 => 115,  254 => 114,  239 => 102,  232 => 98,  224 => 93,  219 => 90,  213 => 87,  210 => 86,  207 => 85,  194 => 82,  186 => 81,  180 => 80,  177 => 79,  172 => 78,  170 => 77,  163 => 73,  159 => 72,  155 => 71,  142 => 61,  134 => 56,  128 => 53,  124 => 52,  114 => 45,  109 => 43,  101 => 37,  95 => 35,  89 => 33,  87 => 32,  80 => 28,  76 => 26,  68 => 22,  65 => 21,  57 => 17,  55 => 16,  48 => 11,  37 => 9,  33 => 8,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
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
/*       <div class="alert alert-danger"><i class="fas fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*       <div class="alert alert-success"><i class="fas fa-check-circle"></i> {{ success }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div id="collapse">*/
/*       <div class="card">*/
/*         <div class="card-header" data-toggle="collapse" data-target="#collapse-version"><i class="fas fa-sync"></i> {{ text_version }}</div>*/
/*         <div id="collapse-version" data-parent="#collapse" class="collapse show">*/
/*           <div class="card-body">*/
/*             <fieldset>*/
/*               {% if error_warning %}*/
/*                 <legend class="text-danger" id="btn-version">{{ text_update }}</legend>*/
/*               {% else %}*/
/*                 <legend id="btn-version">{{ text_update }}</legend>*/
/*               {% endif %}*/
/*             </fieldset>*/
/*             <div class="alert alert-info">*/
/*               <p><strong><i class="fas fa-exclamation-circle"></i> Tips: Before upgrading it's very important to</strong></p>*/
/*               <ol>*/
/*                 <li>Make a complete backup of your web site!*/
/*                   <br/>*/
/*                   Backup <a href="{{ backup }}">here</a>;*/
/*                   <br/>*/
/*                   If you are using the cloud version, you can backup with your opencart account <a href="{{ opencart_account }}" target="_blank">here</a>.*/
/*                 </li>*/
/*                 <li>Check the extensions installed are compatible with the latest version</li>*/
/*                 <li>It's better if you could copy your site to a test server and practise upgrading before starting with the live web site.</li>*/
/*               </ol>*/
/*             </div>*/
/*             <fieldset>*/
/*               <legend id="version">{{ text_change }}</legend>*/
/*               <textarea wrap="off" rows="10" readonly class="form-control">{{ log }}</textarea>*/
/*             </fieldset>*/
/*             <br/>*/
/*             <div class="text-right"><a href="#collapse-compatible" data-toggle="collapse" data-parent="#collapse" class="btn btn-primary"><i class="fas fa-arrow-right"></i> {{ button_continue }}</a></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="card">*/
/*         <div class="card-header collapsed" data-toggle="collapse" data-target="#collapse-compatible"><i class="fas fa-random"></i> {{ text_compatibility }}</div>*/
/*         <div id="collapse-compatible" data-parent="#collapse" class="collapse">*/
/*           <div class="card-body">*/
/*             <div class="alert alert-warning">*/
/*               Before upgrading, it's very important to check the extensions installed are compatible with the latest version!*/
/*               <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td class="text-left">{{ column_name }}</td>*/
/*                   <td class="text-center">{{ column_compatible }}</td>*/
/*                   <td class="text-center">{{ column_available }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if extensions %}*/
/*                   {% for extension in extensions %}*/
/*                     <tr>*/
/*                       <td class="text-left"><a href="{{ extension.link }}">{{ extension.name }}</a></td>*/
/*                       <td class="text-center">{% if extension.compatible %}<i class="fas fa-check text-success"></i>{% else %}<i class="fas fa-times text-danger"></i>{% endif %}</td>*/
/*                       <td class="text-center">{% if extension.available %}<i class="fas fa-check text-success"></i>{% else %}<i class="fas fa-times text-danger"></i>{% endif %}</td>*/
/*                     </tr>*/
/*                   {% endfor %}*/
/*                 {% else %}*/
/*                   <tr>*/
/*                     <td class="text-center" colspan="3">{{ text_no_results }}</td>*/
/*                   </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*             <br/>*/
/*             <div class="text-right"><a href="#collapse-upgrade" data-toggle="collapse" data-parent="#collapse" class="btn btn-primary"><i class="fas fa-arrow-right"></i> {{ button_continue }}</a></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="card">*/
/*         <div class="card-header collapsed" data-toggle="collapse" data-target="#collapse-upgrade"><i class="fas fa-check"></i> {{ text_upgrade }}</div>*/
/*         <div id="collapse-upgrade" data-parent="#collapse" class="collapse">*/
/*           <div class="card-body">*/
/*             <fieldset>*/
/*               <legend>{{ text_progress }}</legend>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label">Progress</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div id="progress-download" class="progress">*/
/*                     <div id="progress-bar" class="progress-bar"></div>*/
/*                   </div>*/
/*                   <div id="progress-text"></div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="col-sm-10 offset-sm-2">*/
/*                 <div class="form-group row">*/
/*                   {% if upgrade %}*/
/*                     <button type="button" id="button-upgrade" data-loading-text="{{ text_loading }}" class="btn btn-success"><i class="fas fa-play"></i> {{ button_start }}</button>*/
/*                   {% else %}*/
/*                     <button type="button" id="button-upgrade" data-loading-text="{{ text_loading }}" class="btn btn-success" disabled="disabled"><i class="fas fa-play"></i> {{ button_start }}</button>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*             </fieldset>*/
/*             <fieldset>*/
/*               <legend>Upgrade Log</legend>*/
/*               <textarea id="log" wrap="off" rows="10" readonly class="form-control"></textarea>*/
/*             </fieldset>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-upgrade').on('click', function() {*/
/* 	$('#progress-bar').css('width', '0%');*/
/* 	$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');*/
/* 	$('#progress-text').html('{{ text_download }}');*/
/* 	$('#log').append('{{ text_download }}' + "\n");*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=tool/upgrade/download&user_token={{ user_token }}&version={{ version }}',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-upgrade').button('loading');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['error']) {*/
/* 				$('#progress-bar').addClass('progress-bar-danger');*/
/* 				$('#progress-text').html('<div class="invalid-tooltip">' + json['error'] + '</div>');*/
/* 				$('#log').append(json['error'] + "\n");*/
/* 			}*/
/* */
/* 			if (json['text']) {*/
/* 				$('#progress-bar').css('width', '20%');*/
/* 				$('#progress-text').html(json['text']);*/
/* 				$('#log').append(json['text'] + "\n");*/
/* 			}*/
/* */
/* 			if (json['next']) {*/
/* 				next(json['next'], 1);*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			$('#log').append(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* function next(url, i) {*/
/* 	i = i + 1;*/
/* */
/* 	$.ajax({*/
/* 		url: url,*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			$('#progress-bar').css('width', (i * 20) + '%');*/
/* */
/* 			if (json['error']) {*/
/* 				$('#progress-bar').addClass('progress-bar-danger');*/
/* 				$('#progress-text').html('<div class="invalid-tooltip">' + json['error'] + '</div>');*/
/* 				$('#log').append(json['error'] + "\n");*/
/* */
/* 				$('#button-upgrade').button('reset');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#progress-bar').addClass('progress-bar-success');*/
/* 				$('#progress-text').html('<span class="text-success">' + json['success'] + '</span>');*/
/* 				$('#log').append(json['success'] + "\n");*/
/* */
/* 				$('#button-upgrade').button('reset');*/
/* 			}*/
/* */
/* 			if (json['text']) {*/
/* 				$('#progress-text').html(json['text']);*/
/* 				$('#log').append(json['text'] + "\n");*/
/* 			}*/
/* */
/* 			if (json['next']) {*/
/* 				next(json['next'], i);*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			$('#log').append(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* //--></script>*/
/* {{ footer }}*/
