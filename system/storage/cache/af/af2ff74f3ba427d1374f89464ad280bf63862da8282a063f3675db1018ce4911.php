<?php

/* setting/setting.twig */
class __TwigTemplate_afdc49144efa2cb61ed7a7ee14482318bd7084ef235c1d8c5c8cb75a19bbb138 extends Twig_Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
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
  <div class=\"container-fluid\"> ";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 23
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 28
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 29
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 31
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 33
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 34
        echo (isset($context["tab_store"]) ? $context["tab_store"] : null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 35
        echo (isset($context["tab_local"]) ? $context["tab_local"] : null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 36
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 37
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 38
        echo (isset($context["tab_mail"]) ? $context["tab_mail"] : null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 39
        echo (isset($context["tab_server"]) ? $context["tab_server"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-meta-title\">";
        // line 44
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 46
        echo (isset($context["config_meta_title"]) ? $context["config_meta_title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "\" id=\"input-meta-title\" class=\"form-control\"/>
                  ";
        // line 47
        if ((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null)) {
            // line 48
            echo "                    <div class=\"invalid-tooltip\">";
            echo (isset($context["error_meta_title"]) ? $context["error_meta_title"] : null);
            echo "</div>
                  ";
        }
        // line 49
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-meta-description\">";
        // line 52
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 54
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo (isset($context["config_meta_description"]) ? $context["config_meta_description"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-meta-keyword\">";
        // line 58
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 60
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo (isset($context["config_meta_keyword"]) ? $context["config_meta_keyword"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-theme\">";
        // line 64
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 68
            echo "                      ";
            if (($this->getAttribute($context["theme"], "value", array()) == (isset($context["config_theme"]) ? $context["config_theme"] : null))) {
                // line 69
                echo "                        <option value=\"";
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>
                      ";
            } else {
                // line 71
                echo "                        <option value=\"";
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>
                      ";
            }
            // line 73
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\"/></div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-layout\">";
        // line 79
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 83
            echo "                      ";
            if (($this->getAttribute($context["layout"], "layout_id", array()) == (isset($context["config_layout_id"]) ? $context["config_layout_id"] : null))) {
                // line 84
                echo "                        <option value=\"";
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 86
                echo "                        <option value=\"";
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                      ";
            }
            // line 88
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 95
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 97
        echo (isset($context["config_name"]) ? $context["config_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  ";
        // line 98
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 99
            echo "                    <div class=\"invalid-tooltip\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                  ";
        }
        // line 100
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-owner\">";
        // line 103
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 105
        echo (isset($context["config_owner"]) ? $context["config_owner"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "\" id=\"input-owner\" class=\"form-control\"/>
                  ";
        // line 106
        if ((isset($context["error_owner"]) ? $context["error_owner"] : null)) {
            // line 107
            echo "                    <div class=\"invalid-tooltip\">";
            echo (isset($context["error_owner"]) ? $context["error_owner"] : null);
            echo "</div>
                  ";
        }
        // line 108
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-address\">";
        // line 111
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 113
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo (isset($context["config_address"]) ? $context["config_address"] : null);
        echo "</textarea>
                  ";
        // line 114
        if ((isset($context["error_address"]) ? $context["error_address"] : null)) {
            // line 115
            echo "                    <div class=\"invalid-tooltip\">";
            echo (isset($context["error_address"]) ? $context["error_address"] : null);
            echo "</div>
                  ";
        }
        // line 116
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-geocode\">";
        // line 119
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 121
        echo (isset($context["config_geocode"]) ? $context["config_geocode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "\" id=\"input-geocode\" class=\"form-control\"/>
                  <small class=\"form-text text-muted\">";
        // line 122
        echo (isset($context["help_geocode"]) ? $context["help_geocode"] : null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-email\">";
        // line 126
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 128
        echo (isset($context["config_email"]) ? $context["config_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                  ";
        // line 129
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 130
            echo "                    <div class=\"invalid-tooltip\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                  ";
        }
        // line 131
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-telephone\">";
        // line 134
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 136
        echo (isset($context["config_telephone"]) ? $context["config_telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                  ";
        // line 137
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 138
            echo "                    <div class=\"invalid-tooltip\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                  ";
        }
        // line 139
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-fax\">";
        // line 142
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 144
        echo (isset($context["config_fax"]) ? $context["config_fax"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "\" id=\"input-fax\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 148
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card\" style=\"width:  12rem;\">
                    <img src=\"";
        // line 151
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        echo (isset($context["config_image"]) ? $context["config_image"] : null);
        echo "\" id=\"input-image\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-toggle=\"image\" data-target=\"input-image\" data-thumb=\"thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 153
        echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
        echo "</button>
                      <button type=\"button\" data-toggle=\"clear\" data-target=\"input-image\" data-thumb=\"thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 154
        echo (isset($context["button_clear"]) ? $context["button_clear"] : null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-open\">";
        // line 160
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 162
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo (isset($context["config_open"]) ? $context["config_open"] : null);
        echo "</textarea>
                  <small class=\"form-text text-muted\">";
        // line 163
        echo (isset($context["help_open"]) ? $context["help_open"] : null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-comment\">";
        // line 167
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 169
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo (isset($context["config_comment"]) ? $context["config_comment"] : null);
        echo "</textarea>
                  <small class=\"form-text text-muted\">";
        // line 170
        echo (isset($context["help_comment"]) ? $context["help_comment"] : null);
        echo "</small>
                </div>
              </div>
              ";
        // line 173
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 174
            echo "                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
            // line 175
            echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 179
                echo "                        <label class=\"form-check\">
                          ";
                // line 180
                if (twig_in_filter($this->getAttribute($context["location"], "location_id", array()), (isset($context["config_location"]) ? $context["config_location"] : null))) {
                    // line 181
                    echo "                            <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                    // line 182
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "
                          ";
                } else {
                    // line 184
                    echo "                            <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" class=\"form-check-input\"/>
                            ";
                    // line 185
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "
                          ";
                }
                // line 187
                echo "                        </label>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                    </div>
                    <small class=\"form-text text-muted\">";
            // line 190
            echo (isset($context["help_location"]) ? $context["help_location"] : null);
            echo "</small>
                  </div>
                </div>
              ";
        }
        // line 194
        echo "            </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-country\">";
        // line 197
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 201
            echo "                      ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["config_country_id"]) ? $context["config_country_id"] : null))) {
                // line 202
                echo "                        <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 204
                echo "                        <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                      ";
            }
            // line 206
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-zone\">";
        // line 211
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\"> </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-timezone\">";
        // line 217
        echo (isset($context["entry_timezone"]) ? $context["entry_timezone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timezones"]) ? $context["timezones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 221
            echo "                      ";
            if (($this->getAttribute($context["timezone"], "value", array()) == (isset($context["config_timezone"]) ? $context["config_timezone"] : null))) {
                // line 222
                echo "                        <option value=\"";
                echo $this->getAttribute($context["timezone"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["timezone"], "text", array());
                echo "</option>
                      ";
            } else {
                // line 224
                echo "                        <option value=\"";
                echo $this->getAttribute($context["timezone"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["timezone"], "text", array());
                echo "</option>
                      ";
            }
            // line 226
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-language\">";
        // line 231
        echo (isset($context["entry_language"]) ? $context["entry_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 235
            echo "                      ";
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_language"]) ? $context["config_language"] : null))) {
                // line 236
                echo "                        <option value=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 238
                echo "                        <option value=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                      ";
            }
            // line 240
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-admin-language\">";
        // line 245
        echo (isset($context["entry_admin_language"]) ? $context["entry_admin_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 249
            echo "                      ";
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_admin_language"]) ? $context["config_admin_language"] : null))) {
                // line 250
                echo "                        <option value=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 252
                echo "                        <option value=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                      ";
            }
            // line 254
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-currency\">";
        // line 259
        echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    ";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 263
            echo "                      ";
            if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["config_currency"]) ? $context["config_currency"] : null))) {
                // line 264
                echo "                        <option value=\"";
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                      ";
            } else {
                // line 266
                echo "                        <option value=\"";
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                      ";
            }
            // line 268
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "                  </select>
                  <small class=\"form-text text-muted\">";
        // line 270
        echo (isset($context["help_currency"]) ? $context["help_currency"] : null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-currency-engine\">";
        // line 274
        echo (isset($context["entry_currency_engine"]) ? $context["entry_currency_engine"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                    ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currency_engines"]) ? $context["currency_engines"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 278
            echo "                      ";
            if (($this->getAttribute($context["currency_engine"], "value", array()) == (isset($context["config_currency_engine"]) ? $context["config_currency_engine"] : null))) {
                // line 279
                echo "                        <option value=\"";
                echo $this->getAttribute($context["currency_engine"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["currency_engine"], "text", array());
                echo "</option>
                      ";
            } else {
                // line 281
                echo "                        <option value=\"";
                echo $this->getAttribute($context["currency_engine"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["currency_engine"], "text", array());
                echo "</option>
                      ";
            }
            // line 283
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 288
        echo (isset($context["entry_currency_auto"]) ? $context["entry_currency_auto"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                    ";
        // line 291
        if ((isset($context["config_currency_auto"]) ? $context["config_currency_auto"] : null)) {
            // line 292
            echo "                      <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                      <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_currency_auto\" value=\"0\"/> ";
            // line 293
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                    ";
        } else {
            // line 295
            echo "                      <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_currency_auto\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                      <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\"/> ";
            // line 296
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                    ";
        }
        // line 298
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 299
        echo (isset($context["help_currency_auto"]) ? $context["help_currency_auto"] : null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-length-class\">";
        // line 303
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 307
            echo "                      ";
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["config_length_class_id"]) ? $context["config_length_class_id"] : null))) {
                // line 308
                echo "                        <option value=\"";
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                      ";
            } else {
                // line 310
                echo "                        <option value=\"";
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                      ";
            }
            // line 312
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 313
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-weight-class\">";
        // line 317
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    ";
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 321
            echo "                      ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["config_weight_class_id"]) ? $context["config_weight_class_id"] : null))) {
                // line 322
                echo "                        <option value=\"";
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                      ";
            } else {
                // line 324
                echo "                        <option value=\"";
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                      ";
            }
            // line 326
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 333
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 335
        echo (isset($context["entry_product_count"]) ? $context["entry_product_count"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 338
        if ((isset($context["config_product_count"]) ? $context["config_product_count"] : null)) {
            // line 339
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_product_count\" value=\"0\"/> ";
            // line 340
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 342
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_product_count\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\"/> ";
            // line 343
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 345
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 346
        echo (isset($context["help_product_count"]) ? $context["help_product_count"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-admin-limit\">";
        // line 350
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 352
        echo (isset($context["config_limit_admin"]) ? $context["config_limit_admin"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 353
        echo (isset($context["help_limit_admin"]) ? $context["help_limit_admin"] : null);
        echo "</small>
                    ";
        // line 354
        if ((isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null)) {
            // line 355
            echo "                      <div class=\"invalid-tooltip\">";
            echo (isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null);
            echo "</div>
                    ";
        }
        // line 356
        echo "</div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 360
        echo (isset($context["text_review"]) ? $context["text_review"] : null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 362
        echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 365
        if ((isset($context["config_review_status"]) ? $context["config_review_status"] : null)) {
            // line 366
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_review_status\" value=\"0\"/> ";
            // line 367
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 369
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_review_status\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\"/> ";
            // line 370
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 372
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 373
        echo (isset($context["help_review"]) ? $context["help_review"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 377
        echo (isset($context["entry_review_guest"]) ? $context["entry_review_guest"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 380
        if ((isset($context["config_review_guest"]) ? $context["config_review_guest"] : null)) {
            // line 381
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_review_guest\" value=\"0\"/> ";
            // line 382
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 384
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_review_guest\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\"/> ";
            // line 385
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 387
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 388
        echo (isset($context["help_review_guest"]) ? $context["help_review_guest"] : null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 393
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</legend>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-voucher-min\">";
        // line 395
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 397
        echo (isset($context["config_voucher_min"]) ? $context["config_voucher_min"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 398
        echo (isset($context["help_voucher_min"]) ? $context["help_voucher_min"] : null);
        echo "</small>
                    ";
        // line 399
        if ((isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null)) {
            // line 400
            echo "                      <div class=\"invalid-tooltip\">";
            echo (isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null);
            echo "</div>
                    ";
        }
        // line 401
        echo "</div>
                </div>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-voucher-max\">";
        // line 404
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 406
        echo (isset($context["config_voucher_max"]) ? $context["config_voucher_max"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 407
        echo (isset($context["help_voucher_max"]) ? $context["help_voucher_max"] : null);
        echo "</small>
                    ";
        // line 408
        if ((isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null)) {
            // line 409
            echo "                      <div class=\"invalid-tooltip\">";
            echo (isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null);
            echo "</div>
                    ";
        }
        // line 410
        echo "</div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 414
        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 416
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 419
        if ((isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 420
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_tax\" value=\"0\"/> ";
            // line 421
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 423
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_tax\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\"/> ";
            // line 424
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 426
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-tax-default\">";
        // line 430
        echo (isset($context["entry_tax_default"]) ? $context["entry_tax_default"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 433
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 434
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "shipping")) {
            // line 435
            echo "                        <option value=\"shipping\" selected=\"selected\">";
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      ";
        } else {
            // line 437
            echo "                        <option value=\"shipping\">";
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      ";
        }
        // line 439
        echo "                      ";
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "payment")) {
            // line 440
            echo "                        <option value=\"payment\" selected=\"selected\">";
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      ";
        } else {
            // line 442
            echo "                        <option value=\"payment\">";
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      ";
        }
        // line 444
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 445
        echo (isset($context["help_tax_default"]) ? $context["help_tax_default"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-tax-customer\">";
        // line 449
        echo (isset($context["entry_tax_customer"]) ? $context["entry_tax_customer"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 452
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 453
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "shipping")) {
            // line 454
            echo "                        <option value=\"shipping\" selected=\"selected\">";
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      ";
        } else {
            // line 456
            echo "                        <option value=\"shipping\">";
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      ";
        }
        // line 458
        echo "                      ";
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "payment")) {
            // line 459
            echo "                        <option value=\"payment\" selected=\"selected\">";
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      ";
        } else {
            // line 461
            echo "                        <option value=\"payment\">";
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      ";
        }
        // line 463
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 464
        echo (isset($context["help_tax_customer"]) ? $context["help_tax_customer"] : null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 469
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 471
        echo (isset($context["entry_customer_online"]) ? $context["entry_customer_online"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 474
        if ((isset($context["config_customer_online"]) ? $context["config_customer_online"] : null)) {
            // line 475
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_customer_online\" value=\"0\"/> ";
            // line 476
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 478
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_customer_online\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\"/> ";
            // line 479
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 481
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 482
        echo (isset($context["help_customer_online"]) ? $context["help_customer_online"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 486
        echo (isset($context["entry_customer_activity"]) ? $context["entry_customer_activity"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 489
        if ((isset($context["config_customer_activity"]) ? $context["config_customer_activity"] : null)) {
            // line 490
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_customer_activity\" value=\"0\"/> ";
            // line 491
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 493
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_customer_activity\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\"/> ";
            // line 494
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 496
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 497
        echo (isset($context["help_customer_activity"]) ? $context["help_customer_activity"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 501
        echo (isset($context["entry_customer_search"]) ? $context["entry_customer_search"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 504
        if ((isset($context["config_customer_search"]) ? $context["config_customer_search"] : null)) {
            // line 505
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_customer_search\" value=\"0\"/> ";
            // line 506
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 508
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_customer_search\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\"/> ";
            // line 509
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 511
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-customer-group\">";
        // line 515
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      ";
        // line 518
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 519
            echo "                        ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_customer_group_id"]) ? $context["config_customer_group_id"] : null))) {
                // line 520
                echo "                          <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                        ";
            } else {
                // line 522
                echo "                          <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                        ";
            }
            // line 524
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 525
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 526
        echo (isset($context["help_customer_group"]) ? $context["help_customer_group"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 530
        echo (isset($context["entry_customer_group_display"]) ? $context["entry_customer_group_display"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 533
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 534
            echo "                        <label class=\"form-check\">";
            if (twig_in_filter($this->getAttribute($context["customer_group"], "customer_group_id", array()), (isset($context["config_customer_group_display"]) ? $context["config_customer_group_display"] : null))) {
                // line 535
                echo "                            <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                // line 536
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                          ";
            } else {
                // line 538
                echo "                            <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" class=\"form-check-input\"/>
                            ";
                // line 539
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                          ";
            }
            // line 540
            echo "</label>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 542
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 543
        echo (isset($context["help_customer_group_display"]) ? $context["help_customer_group_display"] : null);
        echo "</small>
                    ";
        // line 544
        if ((isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null)) {
            // line 545
            echo "                      <div class=\"invalid-tooltip\">";
            echo (isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null);
            echo "</div>
                    ";
        }
        // line 546
        echo "</div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 549
        echo (isset($context["entry_customer_price"]) ? $context["entry_customer_price"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 552
        if ((isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 553
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_customer_price\" value=\"0\"/> ";
            // line 554
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 556
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_customer_price\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\"/> ";
            // line 557
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 559
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 560
        echo (isset($context["help_customer_price"]) ? $context["help_customer_price"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-login-attempts\">";
        // line 564
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 566
        echo (isset($context["config_login_attempts"]) ? $context["config_login_attempts"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 567
        echo (isset($context["help_login_attempts"]) ? $context["help_login_attempts"] : null);
        echo "</small>
                    ";
        // line 568
        if ((isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null)) {
            // line 569
            echo "                      <div class=\"invalid-tooltip\">";
            echo (isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null);
            echo "</div>
                    ";
        }
        // line 570
        echo "</div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-account\">";
        // line 573
        echo (isset($context["entry_account"]) ? $context["entry_account"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 576
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 577
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 578
            echo "                        ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_account_id"]) ? $context["config_account_id"] : null))) {
                // line 579
                echo "                          <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                        ";
            } else {
                // line 581
                echo "                          <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                        ";
            }
            // line 583
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 584
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 585
        echo (isset($context["help_account"]) ? $context["help_account"] : null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 590
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-invoice-prefix\">";
        // line 592
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 594
        echo (isset($context["config_invoice_prefix"]) ? $context["config_invoice_prefix"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 595
        echo (isset($context["help_invoice_prefix"]) ? $context["help_invoice_prefix"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 599
        echo (isset($context["entry_cart_weight"]) ? $context["entry_cart_weight"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 602
        if ((isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 603
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_cart_weight\" value=\"0\"/> ";
            // line 604
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 606
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_cart_weight\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\"/> ";
            // line 607
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 609
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 610
        echo (isset($context["help_cart_weight"]) ? $context["help_cart_weight"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 614
        echo (isset($context["entry_checkout_guest"]) ? $context["entry_checkout_guest"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 617
        if ((isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 618
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"0\"/> ";
            // line 619
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 621
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\"/> ";
            // line 622
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 624
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 625
        echo (isset($context["help_checkout_guest"]) ? $context["help_checkout_guest"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-checkout\">";
        // line 629
        echo (isset($context["entry_checkout"]) ? $context["entry_checkout"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 632
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 633
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 634
            echo "                        ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_checkout_id"]) ? $context["config_checkout_id"] : null))) {
                // line 635
                echo "                          <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                        ";
            } else {
                // line 637
                echo "                          <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                        ";
            }
            // line 639
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 640
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 641
        echo (isset($context["help_checkout"]) ? $context["help_checkout"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-order-status\">";
        // line 645
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      ";
        // line 648
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 649
            echo "                        ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_order_status_id"]) ? $context["config_order_status_id"] : null))) {
                // line 650
                echo "                          <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                        ";
            } else {
                // line 652
                echo "                          <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                        ";
            }
            // line 654
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 655
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 656
        echo (isset($context["help_order_status"]) ? $context["help_order_status"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-process-status\">";
        // line 660
        echo (isset($context["entry_processing_status"]) ? $context["entry_processing_status"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 663
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 664
            echo "                        <label class=\"form-check\">";
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_processing_status"]) ? $context["config_processing_status"] : null))) {
                // line 665
                echo "                            <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                // line 666
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            } else {
                // line 668
                echo "                            <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" class=\"form-check-input\"/>
                            ";
                // line 669
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            }
            // line 671
            echo "                        </label>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 673
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 674
        echo (isset($context["help_processing_status"]) ? $context["help_processing_status"] : null);
        echo "</small>
                    ";
        // line 675
        if ((isset($context["error_processing_status"]) ? $context["error_processing_status"] : null)) {
            // line 676
            echo "                      <div class=\"invalid-tooltip\">";
            echo (isset($context["error_processing_status"]) ? $context["error_processing_status"] : null);
            echo "</div>
                    ";
        }
        // line 678
        echo "                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-complete-status\">";
        // line 681
        echo (isset($context["entry_complete_status"]) ? $context["entry_complete_status"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 684
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 685
            echo "                        <label class=\"form-check\">
                          ";
            // line 686
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_complete_status"]) ? $context["config_complete_status"] : null))) {
                // line 687
                echo "                            <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                // line 688
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            } else {
                // line 690
                echo "                            <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" class=\"form-check-input\"/>
                            ";
                // line 691
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            }
            // line 693
            echo "                        </label>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 695
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 696
        echo (isset($context["help_complete_status"]) ? $context["help_complete_status"] : null);
        echo "</small>
                    ";
        // line 697
        if ((isset($context["error_complete_status"]) ? $context["error_complete_status"] : null)) {
            // line 698
            echo "                      <div class=\"invalid-tooltip\">";
            echo (isset($context["error_complete_status"]) ? $context["error_complete_status"] : null);
            echo "</div>
                    ";
        }
        // line 699
        echo "</div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-fraud-status\">";
        // line 702
        echo (isset($context["entry_fraud_status"]) ? $context["entry_fraud_status"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      ";
        // line 705
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 706
            echo "                        ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_fraud_status_id"]) ? $context["config_fraud_status_id"] : null))) {
                // line 707
                echo "                          <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                        ";
            } else {
                // line 709
                echo "                          <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                        ";
            }
            // line 711
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 712
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 713
        echo (isset($context["help_fraud_status"]) ? $context["help_fraud_status"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-api\">";
        // line 717
        echo (isset($context["entry_api"]) ? $context["entry_api"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 720
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 721
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apis"]) ? $context["apis"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 722
            echo "                        ";
            if (($this->getAttribute($context["api"], "api_id", array()) == (isset($context["config_api_id"]) ? $context["config_api_id"] : null))) {
                // line 723
                echo "                          <option value=\"";
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>
                        ";
            } else {
                // line 725
                echo "                          <option value=\"";
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>
                        ";
            }
            // line 727
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 728
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 729
        echo (isset($context["help_api"]) ? $context["help_api"] : null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 734
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 736
        echo (isset($context["entry_stock_display"]) ? $context["entry_stock_display"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 739
        if ((isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 740
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_stock_display\" value=\"0\"/> ";
            // line 741
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 743
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_stock_display\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\"/> ";
            // line 744
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 746
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 747
        echo (isset($context["help_stock_display"]) ? $context["help_stock_display"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 751
        echo (isset($context["entry_stock_warning"]) ? $context["entry_stock_warning"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 754
        if ((isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null)) {
            // line 755
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_stock_warning\" value=\"0\"/> ";
            // line 756
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 758
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_stock_warning\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\"/> ";
            // line 759
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 761
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 762
        echo (isset($context["help_stock_warning"]) ? $context["help_stock_warning"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 766
        echo (isset($context["entry_stock_checkout"]) ? $context["entry_stock_checkout"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 769
        if ((isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 770
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"0\"/> ";
            // line 771
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 773
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\"/> ";
            // line 774
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 776
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 777
        echo (isset($context["help_stock_checkout"]) ? $context["help_stock_checkout"] : null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 782
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-affiliate-group\">";
        // line 784
        echo (isset($context["entry_affiliate_group"]) ? $context["entry_affiliate_group"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      ";
        // line 787
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 788
            echo "                        ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_affiliate_group_id"]) ? $context["config_affiliate_group_id"] : null))) {
                // line 789
                echo "                          <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                        ";
            } else {
                // line 791
                echo "                          <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                        ";
            }
            // line 793
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 794
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 798
        echo (isset($context["entry_affiliate_approval"]) ? $context["entry_affiliate_approval"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 801
        if ((isset($context["config_affiliate_approval"]) ? $context["config_affiliate_approval"] : null)) {
            // line 802
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\"/> ";
            // line 803
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 805
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\"/> ";
            // line 806
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 808
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 809
        echo (isset($context["help_affiliate_approval"]) ? $context["help_affiliate_approval"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 813
        echo (isset($context["entry_affiliate_auto"]) ? $context["entry_affiliate_auto"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 816
        if ((isset($context["config_affiliate_auto"]) ? $context["config_affiliate_auto"] : null)) {
            // line 817
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\"/> ";
            // line 818
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 820
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\"/> ";
            // line 821
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 823
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 824
        echo (isset($context["help_affiliate_auto"]) ? $context["help_affiliate_auto"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-affiliate-commission\">";
        // line 828
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 830
        echo (isset($context["config_affiliate_commission"]) ? $context["config_affiliate_commission"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 831
        echo (isset($context["help_affiliate_commission"]) ? $context["help_affiliate_commission"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-affiliate\">";
        // line 835
        echo (isset($context["entry_affiliate"]) ? $context["entry_affiliate"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 838
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 839
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 840
            echo "                        ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_affiliate_id"]) ? $context["config_affiliate_id"] : null))) {
                // line 841
                echo "                          <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                        ";
            } else {
                // line 843
                echo "                          <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                        ";
            }
            // line 845
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 846
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 847
        echo (isset($context["help_affiliate"]) ? $context["help_affiliate"] : null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 852
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-return\">";
        // line 854
        echo (isset($context["entry_return"]) ? $context["entry_return"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 857
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 858
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 859
            echo "                        ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_return_id"]) ? $context["config_return_id"] : null))) {
                // line 860
                echo "                          <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                        ";
            } else {
                // line 862
                echo "                          <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                        ";
            }
            // line 864
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 865
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 866
        echo (isset($context["help_return"]) ? $context["help_return"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-return-status\">";
        // line 870
        echo (isset($context["entry_return_status"]) ? $context["entry_return_status"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      ";
        // line 873
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["return_statuses"]) ? $context["return_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 874
            echo "                        ";
            if (($this->getAttribute($context["return_status"], "return_status_id", array()) == (isset($context["config_return_status_id"]) ? $context["config_return_status_id"] : null))) {
                // line 875
                echo "                          <option value=\"";
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>
                        ";
            } else {
                // line 877
                echo "                          <option value=\"";
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>
                        ";
            }
            // line 879
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 880
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 881
        echo (isset($context["help_return_status"]) ? $context["help_return_status"] : null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 886
        echo (isset($context["text_captcha"]) ? $context["text_captcha"] : null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 888
        echo (isset($context["entry_captcha"]) ? $context["entry_captcha"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 891
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 892
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captchas"]) ? $context["captchas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 893
            echo "                        ";
            if (($this->getAttribute($context["captcha"], "value", array()) == (isset($context["config_captcha"]) ? $context["config_captcha"] : null))) {
                // line 894
                echo "                          <option value=\"";
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>
                        ";
            } else {
                // line 896
                echo "                          <option value=\"";
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>
                        ";
            }
            // line 898
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 899
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 900
        echo (isset($context["help_captcha"]) ? $context["help_captcha"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 904
        echo (isset($context["entry_captcha_page"]) ? $context["entry_captcha_page"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 907
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captcha_pages"]) ? $context["captcha_pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 908
            echo "                        <label class=\"form-check\">
                          ";
            // line 909
            if (twig_in_filter($this->getAttribute($context["captcha_page"], "value", array()), (isset($context["config_captcha_page"]) ? $context["config_captcha_page"] : null))) {
                // line 910
                echo "                            <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                // line 911
                echo $this->getAttribute($context["captcha_page"], "text", array());
                echo "
                          ";
            } else {
                // line 913
                echo "                            <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\" class=\"form-check-input\"/>
                            ";
                // line 914
                echo $this->getAttribute($context["captcha_page"], "text", array());
                echo "
                          ";
            }
            // line 916
            echo "                        </label>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 918
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-logo\">";
        // line 925
        echo (isset($context["entry_logo"]) ? $context["entry_logo"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card\" style=\"width:  12rem;\">
                    <img src=\"";
        // line 928
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" class=\"card-img-top\"/>
                    <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 929
        echo (isset($context["config_logo"]) ? $context["config_logo"] : null);
        echo "\" id=\"input-logo\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-toggle=\"image\" data-target=\"input-logo\" data-thumb=\"thumb-logo\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 931
        echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
        echo "</button>
                      <button type=\"button\" data-toggle=\"clear\" data-target=\"input-logo\" data-thumb=\"thumb-logo\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 932
        echo (isset($context["button_clear"]) ? $context["button_clear"] : null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-icon\">";
        // line 938
        echo (isset($context["entry_icon"]) ? $context["entry_icon"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card\" style=\"width:  12rem;\">
                    <img src=\"";
        // line 941
        echo (isset($context["icon"]) ? $context["icon"] : null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-icon\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" class=\"card-img-top\"/>
                    <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 942
        echo (isset($context["config_icon"]) ? $context["config_icon"] : null);
        echo "\" id=\"input-icon\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-toggle=\"image\" data-target=\"input-icon\" data-thumb=\"thumb-icon\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 944
        echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
        echo "</button>
                      <button type=\"button\" data-toggle=\"clear\" data-target=\"input-icon\" data-thumb=\"thumb-icon\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 945
        echo (isset($context["button_clear"]) ? $context["button_clear"] : null);
        echo "</button>
                    </div>
                  </div>
                  <small class=\"form-text text-muted\">";
        // line 948
        echo (isset($context["help_icon"]) ? $context["help_icon"] : null);
        echo "</small>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 954
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-engine\">";
        // line 956
        echo (isset($context["entry_mail_engine"]) ? $context["entry_mail_engine"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      ";
        // line 959
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "mail")) {
            // line 960
            echo "                        <option value=\"mail\" selected=\"selected\">";
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>
                      ";
        } else {
            // line 962
            echo "                        <option value=\"mail\">";
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>
                      ";
        }
        // line 964
        echo "                      ";
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "smtp")) {
            // line 965
            echo "                        <option value=\"smtp\" selected=\"selected\">";
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>
                      ";
        } else {
            // line 967
            echo "                        <option value=\"smtp\">";
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>
                      ";
        }
        // line 969
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 970
        echo (isset($context["help_mail_engine"]) ? $context["help_mail_engine"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-parameter\">";
        // line 974
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 976
        echo (isset($context["config_mail_parameter"]) ? $context["config_mail_parameter"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 977
        echo (isset($context["help_mail_parameter"]) ? $context["help_mail_parameter"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-smtp-hostname\">";
        // line 981
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 983
        echo (isset($context["config_mail_smtp_hostname"]) ? $context["config_mail_smtp_hostname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 984
        echo (isset($context["help_mail_smtp_hostname"]) ? $context["help_mail_smtp_hostname"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-smtp-username\">";
        // line 988
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 990
        echo (isset($context["config_mail_smtp_username"]) ? $context["config_mail_smtp_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-smtp-password\">";
        // line 994
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 996
        echo (isset($context["config_mail_smtp_password"]) ? $context["config_mail_smtp_password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 997
        echo (isset($context["help_mail_smtp_password"]) ? $context["help_mail_smtp_password"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-smtp-port\">";
        // line 1001
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1003
        echo (isset($context["config_mail_smtp_port"]) ? $context["config_mail_smtp_port"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-smtp-timeout\">";
        // line 1007
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1009
        echo (isset($context["config_mail_smtp_timeout"]) ? $context["config_mail_smtp_timeout"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1014
        echo (isset($context["text_mail_alert"]) ? $context["text_mail_alert"] : null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1016
        echo (isset($context["entry_mail_alert"]) ? $context["entry_mail_alert"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 1019
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mail_alerts"]) ? $context["mail_alerts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1020
            echo "                        <label class=\"form-check\">
                          ";
            // line 1021
            if (twig_in_filter($this->getAttribute($context["mail_alert"], "value", array()), (isset($context["config_mail_alert"]) ? $context["config_mail_alert"] : null))) {
                // line 1022
                echo "                            <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                // line 1023
                echo $this->getAttribute($context["mail_alert"], "text", array());
                echo "
                          ";
            } else {
                // line 1025
                echo "                            <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\" class=\"form-check-input\"/>
                            ";
                // line 1026
                echo $this->getAttribute($context["mail_alert"], "text", array());
                echo "
                          ";
            }
            // line 1028
            echo "                        </label>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1030
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1031
        echo (isset($context["help_mail_alert"]) ? $context["help_mail_alert"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-mail-alert-email\">";
        // line 1035
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1037
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo (isset($context["config_mail_alert_email"]) ? $context["config_mail_alert_email"] : null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1038
        echo (isset($context["help_mail_alert_email"]) ? $context["help_mail_alert_email"] : null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1045
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1047
        echo (isset($context["entry_maintenance"]) ? $context["entry_maintenance"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1050
        if ((isset($context["config_maintenance"]) ? $context["config_maintenance"] : null)) {
            // line 1051
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_maintenance\" value=\"0\"/> ";
            // line 1052
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 1054
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_maintenance\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\"/> ";
            // line 1055
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 1057
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1058
        echo (isset($context["help_maintenance"]) ? $context["help_maintenance"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1062
        echo (isset($context["entry_seo_url"]) ? $context["entry_seo_url"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1065
        if ((isset($context["config_seo_url"]) ? $context["config_seo_url"] : null)) {
            // line 1066
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_seo_url\" value=\"0\"/> ";
            // line 1067
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 1069
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_seo_url\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\"/> ";
            // line 1070
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 1072
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1073
        echo (isset($context["help_seo_url"]) ? $context["help_seo_url"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-robots\">";
        // line 1077
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1079
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo (isset($context["config_robots"]) ? $context["config_robots"] : null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1080
        echo (isset($context["help_robots"]) ? $context["help_robots"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-compression\">";
        // line 1084
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1086
        echo (isset($context["config_compression"]) ? $context["config_compression"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "\" id=\"input-compression\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1087
        echo (isset($context["help_compression"]) ? $context["help_compression"] : null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1092
        echo (isset($context["text_security"]) ? $context["text_security"] : null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1094
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1097
        if ((isset($context["config_password"]) ? $context["config_password"] : null)) {
            // line 1098
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_password\" value=\"0\"/> ";
            // line 1099
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 1101
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_password\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\"/> ";
            // line 1102
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 1104
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1105
        echo (isset($context["help_password"]) ? $context["help_password"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1109
        echo (isset($context["entry_shared"]) ? $context["entry_shared"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1112
        if ((isset($context["config_shared"]) ? $context["config_shared"] : null)) {
            // line 1113
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_shared\" value=\"0\"/> ";
            // line 1114
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 1116
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_shared\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\"/> ";
            // line 1117
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 1119
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1120
        echo (isset($context["help_shared"]) ? $context["help_shared"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-encryption\">";
        // line 1124
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1126
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo (isset($context["config_encryption"]) ? $context["config_encryption"] : null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1127
        echo (isset($context["help_encryption"]) ? $context["help_encryption"] : null);
        echo "</small>
                    ";
        // line 1128
        if ((isset($context["error_encryption"]) ? $context["error_encryption"] : null)) {
            // line 1129
            echo "                      <div class=\"invalid-tooltip\">";
            echo (isset($context["error_encryption"]) ? $context["error_encryption"] : null);
            echo "</div>
                    ";
        }
        // line 1130
        echo "</div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1134
        echo (isset($context["text_upload"]) ? $context["text_upload"] : null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-file-max-size\">";
        // line 1136
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1138
        echo (isset($context["config_file_max_size"]) ? $context["config_file_max_size"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1139
        echo (isset($context["help_file_max_size"]) ? $context["help_file_max_size"] : null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-file-ext-allowed\">";
        // line 1143
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1145
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_ext_allowed"]) ? $context["config_file_ext_allowed"] : null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1146
        echo (isset($context["help_file_ext_allowed"]) ? $context["help_file_ext_allowed"] : null);
        echo "</small>
                    ";
        // line 1147
        if ((isset($context["error_extension"]) ? $context["error_extension"] : null)) {
            // line 1148
            echo "                      <div class=\"invalid-tooltip\">";
            echo (isset($context["error_extension"]) ? $context["error_extension"] : null);
            echo "</div>
                    ";
        }
        // line 1150
        echo "                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-file-mime-allowed\">";
        // line 1153
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1155
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_mime_allowed"]) ? $context["config_file_mime_allowed"] : null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1156
        echo (isset($context["help_file_mime_allowed"]) ? $context["help_file_mime_allowed"] : null);
        echo "</small>
                    ";
        // line 1157
        if ((isset($context["error_mime"]) ? $context["error_mime"] : null)) {
            // line 1158
            echo "                      <div class=\"invalid-tooltip\">";
            echo (isset($context["error_mime"]) ? $context["error_mime"] : null);
            echo "</div>
                    ";
        }
        // line 1160
        echo "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1164
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1166
        echo (isset($context["entry_error_display"]) ? $context["entry_error_display"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1169
        if ((isset($context["config_error_display"]) ? $context["config_error_display"] : null)) {
            // line 1170
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_error_display\" value=\"0\"/> ";
            // line 1171
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 1173
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_error_display\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\"/> ";
            // line 1174
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 1176
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1180
        echo (isset($context["entry_error_log"]) ? $context["entry_error_log"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1183
        if ((isset($context["config_error_log"]) ? $context["config_error_log"] : null)) {
            // line 1184
            echo "                        <label class=\"btn btn-success active\"><input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger\"><input type=\"radio\" name=\"config_error_log\" value=\"0\"/> ";
            // line 1185
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        } else {
            // line 1187
            echo "                        <label class=\"btn btn-success\"><input type=\"radio\" name=\"config_error_log\" value=\"1\"/> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                        <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\"/> ";
            // line 1188
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                      ";
        }
        // line 1190
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-error-filename\">";
        // line 1194
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1196
        echo (isset($context["config_error_filename"]) ? $context["config_error_filename"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "\" id=\"input-error-filename\" class=\"form-control\"/>
                    ";
        // line 1197
        if ((isset($context["error_log"]) ? $context["error_log"] : null)) {
            // line 1198
            echo "                      <div class=\"invalid-tooltip\">";
            echo (isset($context["error_log"]) ? $context["error_log"] : null);
            echo "</div>
                    ";
        }
        // line 1199
        echo "</div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1212
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1234
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1243
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1249
        echo (isset($context["config_zone_id"]) ? $context["config_zone_id"] : null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1256
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);

\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script>
";
        // line 1271
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3321 => 1271,  3303 => 1256,  3293 => 1249,  3284 => 1243,  3272 => 1234,  3247 => 1212,  3232 => 1199,  3226 => 1198,  3224 => 1197,  3218 => 1196,  3213 => 1194,  3207 => 1190,  3202 => 1188,  3197 => 1187,  3192 => 1185,  3187 => 1184,  3185 => 1183,  3179 => 1180,  3173 => 1176,  3168 => 1174,  3163 => 1173,  3158 => 1171,  3153 => 1170,  3151 => 1169,  3145 => 1166,  3140 => 1164,  3134 => 1160,  3128 => 1158,  3126 => 1157,  3122 => 1156,  3116 => 1155,  3111 => 1153,  3106 => 1150,  3100 => 1148,  3098 => 1147,  3094 => 1146,  3088 => 1145,  3083 => 1143,  3076 => 1139,  3070 => 1138,  3065 => 1136,  3060 => 1134,  3054 => 1130,  3048 => 1129,  3046 => 1128,  3042 => 1127,  3036 => 1126,  3031 => 1124,  3024 => 1120,  3021 => 1119,  3016 => 1117,  3011 => 1116,  3006 => 1114,  3001 => 1113,  2999 => 1112,  2993 => 1109,  2986 => 1105,  2983 => 1104,  2978 => 1102,  2973 => 1101,  2968 => 1099,  2963 => 1098,  2961 => 1097,  2955 => 1094,  2950 => 1092,  2942 => 1087,  2936 => 1086,  2931 => 1084,  2924 => 1080,  2918 => 1079,  2913 => 1077,  2906 => 1073,  2903 => 1072,  2898 => 1070,  2893 => 1069,  2888 => 1067,  2883 => 1066,  2881 => 1065,  2875 => 1062,  2868 => 1058,  2865 => 1057,  2860 => 1055,  2855 => 1054,  2850 => 1052,  2845 => 1051,  2843 => 1050,  2837 => 1047,  2832 => 1045,  2822 => 1038,  2816 => 1037,  2811 => 1035,  2804 => 1031,  2801 => 1030,  2794 => 1028,  2789 => 1026,  2784 => 1025,  2779 => 1023,  2774 => 1022,  2772 => 1021,  2769 => 1020,  2765 => 1019,  2759 => 1016,  2754 => 1014,  2744 => 1009,  2739 => 1007,  2730 => 1003,  2725 => 1001,  2718 => 997,  2712 => 996,  2707 => 994,  2698 => 990,  2693 => 988,  2686 => 984,  2680 => 983,  2675 => 981,  2668 => 977,  2662 => 976,  2657 => 974,  2650 => 970,  2647 => 969,  2641 => 967,  2635 => 965,  2632 => 964,  2626 => 962,  2620 => 960,  2618 => 959,  2612 => 956,  2607 => 954,  2598 => 948,  2592 => 945,  2588 => 944,  2583 => 942,  2577 => 941,  2571 => 938,  2562 => 932,  2558 => 931,  2553 => 929,  2547 => 928,  2541 => 925,  2532 => 918,  2525 => 916,  2520 => 914,  2515 => 913,  2510 => 911,  2505 => 910,  2503 => 909,  2500 => 908,  2496 => 907,  2490 => 904,  2483 => 900,  2480 => 899,  2474 => 898,  2466 => 896,  2458 => 894,  2455 => 893,  2451 => 892,  2447 => 891,  2441 => 888,  2436 => 886,  2428 => 881,  2425 => 880,  2419 => 879,  2411 => 877,  2403 => 875,  2400 => 874,  2396 => 873,  2390 => 870,  2383 => 866,  2380 => 865,  2374 => 864,  2366 => 862,  2358 => 860,  2355 => 859,  2351 => 858,  2347 => 857,  2341 => 854,  2336 => 852,  2328 => 847,  2325 => 846,  2319 => 845,  2311 => 843,  2303 => 841,  2300 => 840,  2296 => 839,  2292 => 838,  2286 => 835,  2279 => 831,  2273 => 830,  2268 => 828,  2261 => 824,  2258 => 823,  2253 => 821,  2248 => 820,  2243 => 818,  2238 => 817,  2236 => 816,  2230 => 813,  2223 => 809,  2220 => 808,  2215 => 806,  2210 => 805,  2205 => 803,  2200 => 802,  2198 => 801,  2192 => 798,  2186 => 794,  2180 => 793,  2172 => 791,  2164 => 789,  2161 => 788,  2157 => 787,  2151 => 784,  2146 => 782,  2138 => 777,  2135 => 776,  2130 => 774,  2125 => 773,  2120 => 771,  2115 => 770,  2113 => 769,  2107 => 766,  2100 => 762,  2097 => 761,  2092 => 759,  2087 => 758,  2082 => 756,  2077 => 755,  2075 => 754,  2069 => 751,  2062 => 747,  2059 => 746,  2054 => 744,  2049 => 743,  2044 => 741,  2039 => 740,  2037 => 739,  2031 => 736,  2026 => 734,  2018 => 729,  2015 => 728,  2009 => 727,  2001 => 725,  1993 => 723,  1990 => 722,  1986 => 721,  1982 => 720,  1976 => 717,  1969 => 713,  1966 => 712,  1960 => 711,  1952 => 709,  1944 => 707,  1941 => 706,  1937 => 705,  1931 => 702,  1926 => 699,  1920 => 698,  1918 => 697,  1914 => 696,  1911 => 695,  1904 => 693,  1899 => 691,  1894 => 690,  1889 => 688,  1884 => 687,  1882 => 686,  1879 => 685,  1875 => 684,  1869 => 681,  1864 => 678,  1858 => 676,  1856 => 675,  1852 => 674,  1849 => 673,  1842 => 671,  1837 => 669,  1832 => 668,  1827 => 666,  1822 => 665,  1819 => 664,  1815 => 663,  1809 => 660,  1802 => 656,  1799 => 655,  1793 => 654,  1785 => 652,  1777 => 650,  1774 => 649,  1770 => 648,  1764 => 645,  1757 => 641,  1754 => 640,  1748 => 639,  1740 => 637,  1732 => 635,  1729 => 634,  1725 => 633,  1721 => 632,  1715 => 629,  1708 => 625,  1705 => 624,  1700 => 622,  1695 => 621,  1690 => 619,  1685 => 618,  1683 => 617,  1677 => 614,  1670 => 610,  1667 => 609,  1662 => 607,  1657 => 606,  1652 => 604,  1647 => 603,  1645 => 602,  1639 => 599,  1632 => 595,  1626 => 594,  1621 => 592,  1616 => 590,  1608 => 585,  1605 => 584,  1599 => 583,  1591 => 581,  1583 => 579,  1580 => 578,  1576 => 577,  1572 => 576,  1566 => 573,  1561 => 570,  1555 => 569,  1553 => 568,  1549 => 567,  1543 => 566,  1538 => 564,  1531 => 560,  1528 => 559,  1523 => 557,  1518 => 556,  1513 => 554,  1508 => 553,  1506 => 552,  1500 => 549,  1495 => 546,  1489 => 545,  1487 => 544,  1483 => 543,  1480 => 542,  1473 => 540,  1468 => 539,  1463 => 538,  1458 => 536,  1453 => 535,  1450 => 534,  1446 => 533,  1440 => 530,  1433 => 526,  1430 => 525,  1424 => 524,  1416 => 522,  1408 => 520,  1405 => 519,  1401 => 518,  1395 => 515,  1389 => 511,  1384 => 509,  1379 => 508,  1374 => 506,  1369 => 505,  1367 => 504,  1361 => 501,  1354 => 497,  1351 => 496,  1346 => 494,  1341 => 493,  1336 => 491,  1331 => 490,  1329 => 489,  1323 => 486,  1316 => 482,  1313 => 481,  1308 => 479,  1303 => 478,  1298 => 476,  1293 => 475,  1291 => 474,  1285 => 471,  1280 => 469,  1272 => 464,  1269 => 463,  1263 => 461,  1257 => 459,  1254 => 458,  1248 => 456,  1242 => 454,  1240 => 453,  1236 => 452,  1230 => 449,  1223 => 445,  1220 => 444,  1214 => 442,  1208 => 440,  1205 => 439,  1199 => 437,  1193 => 435,  1191 => 434,  1187 => 433,  1181 => 430,  1175 => 426,  1170 => 424,  1165 => 423,  1160 => 421,  1155 => 420,  1153 => 419,  1147 => 416,  1142 => 414,  1136 => 410,  1130 => 409,  1128 => 408,  1124 => 407,  1118 => 406,  1113 => 404,  1108 => 401,  1102 => 400,  1100 => 399,  1096 => 398,  1090 => 397,  1085 => 395,  1080 => 393,  1072 => 388,  1069 => 387,  1064 => 385,  1059 => 384,  1054 => 382,  1049 => 381,  1047 => 380,  1041 => 377,  1034 => 373,  1031 => 372,  1026 => 370,  1021 => 369,  1016 => 367,  1011 => 366,  1009 => 365,  1003 => 362,  998 => 360,  992 => 356,  986 => 355,  984 => 354,  980 => 353,  974 => 352,  969 => 350,  962 => 346,  959 => 345,  954 => 343,  949 => 342,  944 => 340,  939 => 339,  937 => 338,  931 => 335,  926 => 333,  918 => 327,  912 => 326,  904 => 324,  896 => 322,  893 => 321,  889 => 320,  883 => 317,  877 => 313,  871 => 312,  863 => 310,  855 => 308,  852 => 307,  848 => 306,  842 => 303,  835 => 299,  832 => 298,  827 => 296,  822 => 295,  817 => 293,  812 => 292,  810 => 291,  804 => 288,  798 => 284,  792 => 283,  784 => 281,  776 => 279,  773 => 278,  769 => 277,  763 => 274,  756 => 270,  753 => 269,  747 => 268,  739 => 266,  731 => 264,  728 => 263,  724 => 262,  718 => 259,  712 => 255,  706 => 254,  698 => 252,  690 => 250,  687 => 249,  683 => 248,  677 => 245,  671 => 241,  665 => 240,  657 => 238,  649 => 236,  646 => 235,  642 => 234,  636 => 231,  630 => 227,  624 => 226,  616 => 224,  608 => 222,  605 => 221,  601 => 220,  595 => 217,  586 => 211,  580 => 207,  574 => 206,  566 => 204,  558 => 202,  555 => 201,  551 => 200,  545 => 197,  540 => 194,  533 => 190,  530 => 189,  523 => 187,  518 => 185,  513 => 184,  508 => 182,  503 => 181,  501 => 180,  498 => 179,  494 => 178,  488 => 175,  485 => 174,  483 => 173,  477 => 170,  471 => 169,  466 => 167,  459 => 163,  453 => 162,  448 => 160,  439 => 154,  435 => 153,  426 => 151,  420 => 148,  411 => 144,  406 => 142,  401 => 139,  395 => 138,  393 => 137,  387 => 136,  382 => 134,  377 => 131,  371 => 130,  369 => 129,  363 => 128,  358 => 126,  351 => 122,  345 => 121,  340 => 119,  335 => 116,  329 => 115,  327 => 114,  321 => 113,  316 => 111,  311 => 108,  305 => 107,  303 => 106,  297 => 105,  292 => 103,  287 => 100,  281 => 99,  279 => 98,  273 => 97,  268 => 95,  260 => 89,  254 => 88,  246 => 86,  238 => 84,  235 => 83,  231 => 82,  225 => 79,  218 => 74,  212 => 73,  204 => 71,  196 => 69,  193 => 68,  189 => 67,  183 => 64,  174 => 60,  169 => 58,  160 => 54,  155 => 52,  150 => 49,  144 => 48,  142 => 47,  136 => 46,  131 => 44,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  94 => 31,  89 => 29,  86 => 28,  78 => 24,  75 => 23,  67 => 19,  65 => 18,  59 => 14,  48 => 12,  44 => 11,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="float-right">*/
/*         <button type="submit" id="button-save" form="form-setting" data-toggle="tooltip" title="{{ button_save }}" disabled="disabled" class="btn btn-primary"><i class="fas fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-light"><i class="fas fa-reply"></i></a></div>*/
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
/*   <div class="container-fluid"> {% if error_warning %}*/
/*       <div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*       <div class="alert alert-success alert-dismissible"><i class="fas fa-check-circle"></i> {{ success }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="card">*/
/*       <div class="card-header"><i class="fas fa-pencil-alt"></i> {{ text_edit }}</div>*/
/*       <div class="card-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-setting">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="nav-item"><a href="#tab-general" data-toggle="tab" class="nav-link active">{{ tab_general }}</a></li>*/
/*             <li class="nav-item"><a href="#tab-store" data-toggle="tab" class="nav-link">{{ tab_store }}</a></li>*/
/*             <li class="nav-item"><a href="#tab-local" data-toggle="tab" class="nav-link">{{ tab_local }}</a></li>*/
/*             <li class="nav-item"><a href="#tab-option" data-toggle="tab" class="nav-link">{{ tab_option }}</a></li>*/
/*             <li class="nav-item"><a href="#tab-image" data-toggle="tab" class="nav-link">{{ tab_image }}</a></li>*/
/*             <li class="nav-item"><a href="#tab-mail" data-toggle="tab" class="nav-link">{{ tab_mail }}</a></li>*/
/*             <li class="nav-item"><a href="#tab-server" data-toggle="tab" class="nav-link">{{ tab_server }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-meta-title">{{ entry_meta_title }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_meta_title" value="{{ config_meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title" class="form-control"/>*/
/*                   {% if error_meta_title %}*/
/*                     <div class="invalid-tooltip">{{ error_meta_title }}</div>*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-meta-description">{{ entry_meta_description }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_description" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description" class="form-control">{{ config_meta_description }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-meta-keyword">{{ entry_meta_keyword }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_keyword" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword" class="form-control">{{ config_meta_keyword }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-theme">{{ entry_theme }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_theme" id="input-theme" class="form-control">*/
/*                     {% for theme in themes %}*/
/*                       {% if theme.value == config_theme %}*/
/*                         <option value="{{ theme.value }}" selected="selected">{{ theme.text }}</option>*/
/*                       {% else %}*/
/*                         <option value="{{ theme.value }}">{{ theme.text }}</option>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                   <br/>*/
/*                   <img src="" alt="" id="theme" class="img-thumbnail"/></div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-layout">{{ entry_layout }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_layout_id" id="input-layout" class="form-control">*/
/*                     {% for layout in layouts %}*/
/*                       {% if layout.layout_id == config_layout_id %}*/
/*                         <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                       {% else %}*/
/*                         <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-store">*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-name">{{ entry_name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_name" value="{{ config_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control"/>*/
/*                   {% if error_name %}*/
/*                     <div class="invalid-tooltip">{{ error_name }}</div>*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-owner">{{ entry_owner }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_owner" value="{{ config_owner }}" placeholder="{{ entry_owner }}" id="input-owner" class="form-control"/>*/
/*                   {% if error_owner %}*/
/*                     <div class="invalid-tooltip">{{ error_owner }}</div>*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-address">{{ entry_address }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_address" placeholder="{{ entry_address }}" rows="5" id="input-address" class="form-control">{{ config_address }}</textarea>*/
/*                   {% if error_address %}*/
/*                     <div class="invalid-tooltip">{{ error_address }}</div>*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-geocode">{{ entry_geocode }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_geocode" value="{{ config_geocode }}" placeholder="{{ entry_geocode }}" id="input-geocode" class="form-control"/>*/
/*                   <small class="form-text text-muted">{{ help_geocode }}</small>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-email">{{ entry_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_email" value="{{ config_email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control"/>*/
/*                   {% if error_email %}*/
/*                     <div class="invalid-tooltip">{{ error_email }}</div>*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_telephone" value="{{ config_telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control"/>*/
/*                   {% if error_telephone %}*/
/*                     <div class="invalid-tooltip">{{ error_telephone }}</div>*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-fax">{{ entry_fax }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_fax" value="{{ config_fax }}" placeholder="{{ entry_fax }}" id="input-fax" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-image">{{ entry_image }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="card" style="width:  12rem;">*/
/*                     <img src="{{ thumb }}" alt="" title="" id="thumb-image" data-placeholder="{{ placeholder }}" class="card-img-top"/> <input type="hidden" name="config_image" value="{{ config_image }}" id="input-image"/>*/
/*                     <div class="card-body">*/
/*                       <button type="button" data-toggle="image" data-target="input-image" data-thumb="thumb-image" class="btn btn-primary btn-sm btn-block"><i class="fas fa-pencil-alt"></i> {{ button_edit }}</button>*/
/*                       <button type="button" data-toggle="clear" data-target="input-image" data-thumb="thumb-image" class="btn btn-warning btn-sm btn-block"><i class="fas fa-trash-alt"></i> {{ button_clear }}</button>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-open">{{ entry_open }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_open" rows="5" placeholder="{{ entry_open }}" id="input-open" class="form-control">{{ config_open }}</textarea>*/
/*                   <small class="form-text text-muted">{{ help_open }}</small>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-comment">{{ entry_comment }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_comment" rows="5" placeholder="{{ entry_comment }}" id="input-comment" class="form-control">{{ config_comment }}</textarea>*/
/*                   <small class="form-text text-muted">{{ help_comment }}</small>*/
/*                 </div>*/
/*               </div>*/
/*               {% if locations %}*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_location }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="form-control" style="height: 150px; overflow: auto;">*/
/*                       {% for location in locations %}*/
/*                         <label class="form-check">*/
/*                           {% if location.location_id in config_location %}*/
/*                             <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" checked="checked" class="form-check-input"/>*/
/*                             {{ location.name }}*/
/*                           {% else %}*/
/*                             <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" class="form-check-input"/>*/
/*                             {{ location.name }}*/
/*                           {% endif %}*/
/*                         </label>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_location }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-local">*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-country">{{ entry_country }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_country_id" id="input-country" class="form-control">*/
/*                     {% for country in countries %}*/
/*                       {% if country.country_id == config_country_id %}*/
/*                         <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                       {% else %}*/
/*                         <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-zone">{{ entry_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_zone_id" id="input-zone" class="form-control"> </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-timezone">{{ entry_timezone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_timezone" id="input-timezone" class="form-control">*/
/*                     {% for timezone in timezones %}*/
/*                       {% if timezone.value == config_timezone %}*/
/*                         <option value="{{ timezone.value }}" selected="selected">{{ timezone.text }}</option>*/
/*                       {% else %}*/
/*                         <option value="{{ timezone.value }}">{{ timezone.text }}</option>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-language">{{ entry_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_language" id="input-language" class="form-control">*/
/*                     {% for language in languages %}*/
/*                       {% if language.code == config_language %}*/
/*                         <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/*                       {% else %}*/
/*                         <option value="{{ language.code }}">{{ language.name }}</option>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-admin-language">{{ entry_admin_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_admin_language" id="input-admin-language" class="form-control">*/
/*                     {% for language in languages %}*/
/*                       {% if language.code == config_admin_language %}*/
/*                         <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/*                       {% else %}*/
/*                         <option value="{{ language.code }}">{{ language.name }}</option>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-currency">{{ entry_currency }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_currency" id="input-currency" class="form-control">*/
/*                     {% for currency in currencies %}*/
/*                       {% if currency.code == config_currency %}*/
/*                         <option value="{{ currency.code }}" selected="selected">{{ currency.title }}</option>*/
/*                       {% else %}*/
/*                         <option value="{{ currency.code }}">{{ currency.title }}</option>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                   <small class="form-text text-muted">{{ help_currency }}</small>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-currency-engine">{{ entry_currency_engine }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_currency_engine" id="input-currency-engine" class="form-control">*/
/*                     {% for currency_engine in currency_engines %}*/
/*                       {% if currency_engine.value == config_currency_engine %}*/
/*                         <option value="{{ currency_engine.value }}" selected="selected">{{ currency_engine.text }}</option>*/
/*                       {% else %}*/
/*                         <option value="{{ currency_engine.value }}">{{ currency_engine.text }}</option>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label">{{ entry_currency_auto }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                     {% if config_currency_auto %}*/
/*                       <label class="btn btn-success active"><input type="radio" name="config_currency_auto" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                       <label class="btn btn-danger"><input type="radio" name="config_currency_auto" value="0"/> {{ text_no }}</label>*/
/*                     {% else %}*/
/*                       <label class="btn btn-success"><input type="radio" name="config_currency_auto" value="1"/> {{ text_yes }}</label>*/
/*                       <label class="btn btn-danger active"><input type="radio" name="config_currency_auto" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                   <small class="form-text text-muted">{{ help_currency_auto }}</small>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-length-class">{{ entry_length_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_length_class_id" id="input-length-class" class="form-control">*/
/*                     {% for length_class in length_classes %}*/
/*                       {% if length_class.length_class_id == config_length_class_id %}*/
/*                         <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/*                       {% else %}*/
/*                         <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-weight-class">{{ entry_weight_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_weight_class_id" id="input-weight-class" class="form-control">*/
/*                     {% for weight_class in weight_classes %}*/
/*                       {% if weight_class.weight_class_id == config_weight_class_id %}*/
/*                         <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/*                       {% else %}*/
/*                         <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <fieldset>*/
/*                 <legend>{{ text_product }}</legend>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_product_count }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_product_count %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_product_count" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_product_count" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_product_count" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_product_count" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_product_count }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row required">*/
/*                   <label class="col-sm-2 col-form-label" for="input-admin-limit">{{ entry_limit_admin }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_limit_admin" value="{{ config_limit_admin }}" placeholder="{{ entry_limit_admin }}" id="input-admin-limit" class="form-control"/>*/
/*                     <small class="form-text text-muted">{{ help_limit_admin }}</small>*/
/*                     {% if error_limit_admin %}*/
/*                       <div class="invalid-tooltip">{{ error_limit_admin }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_review }}</legend>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_review }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_review_status %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_review_status" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_review_status" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_review_status" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_review_status" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_review }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_review_guest }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_review_guest %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_review_guest" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_review_guest" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_review_guest" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_review_guest" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_review_guest }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_voucher }}</legend>*/
/*                 <div class="form-group row required">*/
/*                   <label class="col-sm-2 col-form-label" for="input-voucher-min">{{ entry_voucher_min }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_min" value="{{ config_voucher_min }}" placeholder="{{ entry_voucher_min }}" id="input-voucher-min" class="form-control"/>*/
/*                     <small class="form-text text-muted">{{ help_voucher_min }}</small>*/
/*                     {% if error_voucher_min %}*/
/*                       <div class="invalid-tooltip">{{ error_voucher_min }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 <div class="form-group row required">*/
/*                   <label class="col-sm-2 col-form-label" for="input-voucher-max">{{ entry_voucher_max }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_max" value="{{ config_voucher_max }}" placeholder="{{ entry_voucher_max }}" id="input-voucher-max" class="form-control"/>*/
/*                     <small class="form-text text-muted">{{ help_voucher_max }}</small>*/
/*                     {% if error_voucher_max %}*/
/*                       <div class="invalid-tooltip">{{ error_voucher_max }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_tax }}</legend>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_tax }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_tax %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_tax" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_tax" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_tax" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_tax" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-tax-default">{{ entry_tax_default }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_default" id="input-tax-default" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       {% if config_tax_default == 'shipping' %}*/
/*                         <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       {% else %}*/
/*                         <option value="shipping">{{ text_shipping }}</option>*/
/*                       {% endif %}*/
/*                       {% if config_tax_default == 'payment' %}*/
/*                         <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       {% else %}*/
/*                         <option value="payment">{{ text_payment }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                     <small class="form-text text-muted">{{ help_tax_default }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-tax-customer">{{ entry_tax_customer }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_customer" id="input-tax-customer" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       {% if config_tax_customer == 'shipping' %}*/
/*                         <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       {% else %}*/
/*                         <option value="shipping">{{ text_shipping }}</option>*/
/*                       {% endif %}*/
/*                       {% if config_tax_customer == 'payment' %}*/
/*                         <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       {% else %}*/
/*                         <option value="payment">{{ text_payment }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                     <small class="form-text text-muted">{{ help_tax_customer }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_account }}</legend>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_customer_online }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_customer_online %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_customer_online" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_customer_online" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_customer_online" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_customer_online" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_customer_online }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_customer_activity }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_customer_activity %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_customer_activity" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_customer_activity" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_customer_activity" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_customer_activity" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_customer_activity }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_customer_search }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_customer_search %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_customer_search" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_customer_search" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_customer_search" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_customer_search" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-customer-group">{{ entry_customer_group }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_customer_group_id" id="input-customer-group" class="form-control">*/
/*                       {% for customer_group in customer_groups %}*/
/*                         {% if customer_group.customer_group_id == config_customer_group_id %}*/
/*                           <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                         {% else %}*/
/*                           <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                     <small class="form-text text-muted">{{ help_customer_group }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_customer_group_display }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="form-control" style="height: 150px; overflow: auto;">*/
/*                       {% for customer_group in customer_groups %}*/
/*                         <label class="form-check">{% if customer_group.customer_group_id in config_customer_group_display %}*/
/*                             <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" checked="checked" class="form-check-input"/>*/
/*                             {{ customer_group.name }}*/
/*                           {% else %}*/
/*                             <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" class="form-check-input"/>*/
/*                             {{ customer_group.name }}*/
/*                           {% endif %}</label>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_customer_group_display }}</small>*/
/*                     {% if error_customer_group_display %}*/
/*                       <div class="invalid-tooltip">{{ error_customer_group_display }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_customer_price }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_customer_price %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_customer_price" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_customer_price" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_customer_price" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_customer_price" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_customer_price }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-login-attempts">{{ entry_login_attempts }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_login_attempts" value="{{ config_login_attempts }}" placeholder="{{ entry_login_attempts }}" id="input-login-attempts" class="form-control"/>*/
/*                     <small class="form-text text-muted">{{ help_login_attempts }}</small>*/
/*                     {% if error_login_attempts %}*/
/*                       <div class="invalid-tooltip">{{ error_login_attempts }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-account">{{ entry_account }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_account_id" id="input-account" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       {% for information in informations %}*/
/*                         {% if information.information_id == config_account_id %}*/
/*                           <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                         {% else %}*/
/*                           <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                     <small class="form-text text-muted">{{ help_account }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_checkout }}</legend>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-invoice-prefix">{{ entry_invoice_prefix }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_invoice_prefix" value="{{ config_invoice_prefix }}" placeholder="{{ entry_invoice_prefix }}" id="input-invoice-prefix" class="form-control"/>*/
/*                     <small class="form-text text-muted">{{ help_invoice_prefix }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_cart_weight }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_cart_weight %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_cart_weight" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_cart_weight" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_cart_weight" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_cart_weight" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_cart_weight }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_checkout_guest }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_checkout_guest %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_checkout_guest" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_checkout_guest" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_checkout_guest" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_checkout_guest" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_checkout_guest }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-checkout">{{ entry_checkout }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_checkout_id" id="input-checkout" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       {% for information in informations %}*/
/*                         {% if information.information_id == config_checkout_id %}*/
/*                           <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                         {% else %}*/
/*                           <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                     <small class="form-text text-muted">{{ help_checkout }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-order-status">{{ entry_order_status }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_order_status_id" id="input-order-status" class="form-control">*/
/*                       {% for order_status in order_statuses %}*/
/*                         {% if order_status.order_status_id == config_order_status_id %}*/
/*                           <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                         {% else %}*/
/*                           <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                     <small class="form-text text-muted">{{ help_order_status }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-process-status">{{ entry_processing_status }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="form-control" style="height: 150px; overflow: auto;">*/
/*                       {% for order_status in order_statuses %}*/
/*                         <label class="form-check">{% if order_status.order_status_id in config_processing_status %}*/
/*                             <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}" checked="checked" class="form-check-input"/>*/
/*                             {{ order_status.name }}*/
/*                           {% else %}*/
/*                             <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}" class="form-check-input"/>*/
/*                             {{ order_status.name }}*/
/*                           {% endif %}*/
/*                         </label>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_processing_status }}</small>*/
/*                     {% if error_processing_status %}*/
/*                       <div class="invalid-tooltip">{{ error_processing_status }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-complete-status">{{ entry_complete_status }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="form-control" style="height: 150px; overflow: auto;">*/
/*                       {% for order_status in order_statuses %}*/
/*                         <label class="form-check">*/
/*                           {% if order_status.order_status_id in config_complete_status %}*/
/*                             <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}" checked="checked" class="form-check-input"/>*/
/*                             {{ order_status.name }}*/
/*                           {% else %}*/
/*                             <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}" class="form-check-input"/>*/
/*                             {{ order_status.name }}*/
/*                           {% endif %}*/
/*                         </label>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_complete_status }}</small>*/
/*                     {% if error_complete_status %}*/
/*                       <div class="invalid-tooltip">{{ error_complete_status }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-fraud-status">{{ entry_fraud_status }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_fraud_status_id" id="input-fraud-status" class="form-control">*/
/*                       {% for order_status in order_statuses %}*/
/*                         {% if order_status.order_status_id == config_fraud_status_id %}*/
/*                           <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                         {% else %}*/
/*                           <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                     <small class="form-text text-muted">{{ help_fraud_status }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-api">{{ entry_api }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_api_id" id="input-api" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       {% for api in apis %}*/
/*                         {% if api.api_id == config_api_id %}*/
/*                           <option value="{{ api.api_id }}" selected="selected">{{ api.username }}</option>*/
/*                         {% else %}*/
/*                           <option value="{{ api.api_id }}">{{ api.username }}</option>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                     <small class="form-text text-muted">{{ help_api }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_stock }}</legend>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_stock_display }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_stock_display %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_stock_display" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_stock_display" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_stock_display" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_stock_display" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_stock_display }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_stock_warning }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_stock_warning %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_stock_warning" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_stock_warning" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_stock_warning" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_stock_warning" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_stock_warning }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_stock_checkout }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_stock_checkout %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_stock_checkout" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_stock_checkout" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_stock_checkout" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_stock_checkout" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_stock_checkout }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_affiliate }}</legend>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-affiliate-group">{{ entry_affiliate_group }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_group_id" id="input-affiliate-group" class="form-control">*/
/*                       {% for customer_group in customer_groups %}*/
/*                         {% if customer_group.customer_group_id == config_affiliate_group_id %}*/
/*                           <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                         {% else %}*/
/*                           <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_affiliate_approval }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_affiliate_approval %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_affiliate_approval" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_affiliate_approval" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_affiliate_approval" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_affiliate_approval" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_affiliate_approval }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_affiliate_auto }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_affiliate_auto %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_affiliate_auto" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_affiliate_auto" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_affiliate_auto" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_affiliate_auto" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_affiliate_auto }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-affiliate-commission">{{ entry_affiliate_commission }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_affiliate_commission" value="{{ config_affiliate_commission }}" placeholder="{{ entry_affiliate_commission }}" id="input-affiliate-commission" class="form-control"/>*/
/*                     <small class="form-text text-muted">{{ help_affiliate_commission }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-affiliate">{{ entry_affiliate }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_id" id="input-affiliate" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       {% for information in informations %}*/
/*                         {% if information.information_id == config_affiliate_id %}*/
/*                           <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                         {% else %}*/
/*                           <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                     <small class="form-text text-muted">{{ help_affiliate }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_return }}</legend>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-return">{{ entry_return }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_id" id="input-return" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       {% for information in informations %}*/
/*                         {% if information.information_id == config_return_id %}*/
/*                           <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                         {% else %}*/
/*                           <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                     <small class="form-text text-muted">{{ help_return }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-return-status">{{ entry_return_status }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_status_id" id="input-return-status" class="form-control">*/
/*                       {% for return_status in return_statuses %}*/
/*                         {% if return_status.return_status_id == config_return_status_id %}*/
/*                           <option value="{{ return_status.return_status_id }}" selected="selected">{{ return_status.name }}</option>*/
/*                         {% else %}*/
/*                           <option value="{{ return_status.return_status_id }}">{{ return_status.name }}</option>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                     <small class="form-text text-muted">{{ help_return_status }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_captcha }}</legend>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_captcha }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_captcha" id="input-captcha" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       {% for captcha in captchas %}*/
/*                         {% if captcha.value == config_captcha %}*/
/*                           <option value="{{ captcha.value }}" selected="selected">{{ captcha.text }}</option>*/
/*                         {% else %}*/
/*                           <option value="{{ captcha.value }}">{{ captcha.text }}</option>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                     <small class="form-text text-muted">{{ help_captcha }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_captcha_page }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="form-control" style="height: 150px; overflow: auto;">*/
/*                       {% for captcha_page in captcha_pages %}*/
/*                         <label class="form-check">*/
/*                           {% if captcha_page.value in config_captcha_page %}*/
/*                             <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}" checked="checked" class="form-check-input"/>*/
/*                             {{ captcha_page.text }}*/
/*                           {% else %}*/
/*                             <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}" class="form-check-input"/>*/
/*                             {{ captcha_page.text }}*/
/*                           {% endif %}*/
/*                         </label>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-logo">{{ entry_logo }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="card" style="width:  12rem;">*/
/*                     <img src="{{ logo }}" alt="" title="" id="thumb-logo" data-placeholder="{{ placeholder }}" class="card-img-top"/>*/
/*                     <input type="hidden" name="config_logo" value="{{ config_logo }}" id="input-logo"/>*/
/*                     <div class="card-body">*/
/*                       <button type="button" data-toggle="image" data-target="input-logo" data-thumb="thumb-logo" class="btn btn-primary btn-sm btn-block"><i class="fas fa-pencil-alt"></i> {{ button_edit }}</button>*/
/*                       <button type="button" data-toggle="clear" data-target="input-logo" data-thumb="thumb-logo" class="btn btn-warning btn-sm btn-block"><i class="fas fa-trash-alt"></i> {{ button_clear }}</button>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-icon">{{ entry_icon }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="card" style="width:  12rem;">*/
/*                     <img src="{{ icon }}" alt="" title="" id="thumb-icon" data-placeholder="{{ placeholder }}" class="card-img-top"/>*/
/*                     <input type="hidden" name="config_icon" value="{{ config_icon }}" id="input-icon"/>*/
/*                     <div class="card-body">*/
/*                       <button type="button" data-toggle="image" data-target="input-icon" data-thumb="thumb-icon" class="btn btn-primary btn-sm btn-block"><i class="fas fa-pencil-alt"></i> {{ button_edit }}</button>*/
/*                       <button type="button" data-toggle="clear" data-target="input-icon" data-thumb="thumb-icon" class="btn btn-warning btn-sm btn-block"><i class="fas fa-trash-alt"></i> {{ button_clear }}</button>*/
/*                     </div>*/
/*                   </div>*/
/*                   <small class="form-text text-muted">{{ help_icon }}</small>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-mail">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-mail-engine">{{ entry_mail_engine }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_mail_engine" id="input-mail-engine" class="form-control">*/
/*                       {% if config_mail_engine == 'mail' %}*/
/*                         <option value="mail" selected="selected">{{ text_mail }}</option>*/
/*                       {% else %}*/
/*                         <option value="mail">{{ text_mail }}</option>*/
/*                       {% endif %}*/
/*                       {% if config_mail_engine == 'smtp' %}*/
/*                         <option value="smtp" selected="selected">{{ text_smtp }}</option>*/
/*                       {% else %}*/
/*                         <option value="smtp">{{ text_smtp }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                     <small class="form-text text-muted">{{ help_mail_engine }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-mail-parameter">{{ entry_mail_parameter }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_parameter" value="{{ config_mail_parameter }}" placeholder="{{ entry_mail_parameter }}" id="input-mail-parameter" class="form-control"/>*/
/*                     <small class="form-text text-muted">{{ help_mail_parameter }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-mail-smtp-hostname">{{ entry_mail_smtp_hostname }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_hostname" value="{{ config_mail_smtp_hostname }}" placeholder="{{ entry_mail_smtp_hostname }}" id="input-mail-smtp-hostname" class="form-control"/>*/
/*                     <small class="form-text text-muted">{{ help_mail_smtp_hostname }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-mail-smtp-username">{{ entry_mail_smtp_username }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_username" value="{{ config_mail_smtp_username }}" placeholder="{{ entry_mail_smtp_username }}" id="input-mail-smtp-username" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-mail-smtp-password">{{ entry_mail_smtp_password }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_password" value="{{ config_mail_smtp_password }}" placeholder="{{ entry_mail_smtp_password }}" id="input-mail-smtp-password" class="form-control"/>*/
/*                     <small class="form-text text-muted">{{ help_mail_smtp_password }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-mail-smtp-port">{{ entry_mail_smtp_port }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_port" value="{{ config_mail_smtp_port }}" placeholder="{{ entry_mail_smtp_port }}" id="input-mail-smtp-port" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-mail-smtp-timeout">{{ entry_mail_smtp_timeout }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_timeout" value="{{ config_mail_smtp_timeout }}" placeholder="{{ entry_mail_smtp_timeout }}" id="input-mail-smtp-timeout" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_mail_alert }}</legend>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_mail_alert }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="form-control" style="height: 150px; overflow: auto;">*/
/*                       {% for mail_alert in mail_alerts %}*/
/*                         <label class="form-check">*/
/*                           {% if mail_alert.value in config_mail_alert %}*/
/*                             <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}" checked="checked" class="form-check-input"/>*/
/*                             {{ mail_alert.text }}*/
/*                           {% else %}*/
/*                             <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}" class="form-check-input"/>*/
/*                             {{ mail_alert.text }}*/
/*                           {% endif %}*/
/*                         </label>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_mail_alert }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-mail-alert-email">{{ entry_mail_alert_email }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_mail_alert_email" rows="5" placeholder="{{ entry_mail_alert_email }}" id="input-alert-email" class="form-control">{{ config_mail_alert_email }}</textarea>*/
/*                     <small class="form-text text-muted">{{ help_mail_alert_email }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-server">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_maintenance }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_maintenance %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_maintenance" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_maintenance" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_maintenance" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_maintenance" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_maintenance }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_seo_url }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_seo_url %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_seo_url" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_seo_url" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_seo_url" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_seo_url" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_seo_url }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-robots">{{ entry_robots }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_robots" rows="5" placeholder="{{ entry_robots }}" id="input-robots" class="form-control">{{ config_robots }}</textarea>*/
/*                     <small class="form-text text-muted">{{ help_robots }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-compression">{{ entry_compression }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_compression" value="{{ config_compression }}" placeholder="{{ entry_compression }}" id="input-compression" class="form-control"/>*/
/*                     <small class="form-text text-muted">{{ help_compression }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_security }}</legend>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_password }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_password %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_password" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_password" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_password" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_password" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_password }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_shared }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_shared %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_shared" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_shared" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_shared" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_shared" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <small class="form-text text-muted">{{ help_shared }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-encryption">{{ entry_encryption }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_encryption" rows="5" placeholder="{{ entry_encryption }}" id="input-encryption" class="form-control">{{ config_encryption }}</textarea>*/
/*                     <small class="form-text text-muted">{{ help_encryption }}</small>*/
/*                     {% if error_encryption %}*/
/*                       <div class="invalid-tooltip">{{ error_encryption }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_upload }}</legend>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-file-max-size">{{ entry_file_max_size }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_file_max_size" value="{{ config_file_max_size }}" placeholder="{{ entry_file_max_size }}" id="input-file-max-size" class="form-control"/>*/
/*                     <small class="form-text text-muted">{{ help_file_max_size }}</small>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-file-ext-allowed">{{ entry_file_ext_allowed }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_ext_allowed" rows="5" placeholder="{{ entry_file_ext_allowed }}" id="input-file-ext-allowed" class="form-control">{{ config_file_ext_allowed }}</textarea>*/
/*                     <small class="form-text text-muted">{{ help_file_ext_allowed }}</small>*/
/*                     {% if error_extension %}*/
/*                       <div class="invalid-tooltip">{{ error_extension }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label" for="input-file-mime-allowed">{{ entry_file_mime_allowed }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_mime_allowed" rows="5" placeholder="{{ entry_file_mime_allowed }}" id="input-file-mime-allowed" class="form-control">{{ config_file_mime_allowed }}</textarea>*/
/*                     <small class="form-text text-muted">{{ help_file_mime_allowed }}</small>*/
/*                     {% if error_mime %}*/
/*                       <div class="invalid-tooltip">{{ error_mime }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_error }}</legend>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_error_display }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_error_display %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_error_display" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_error_display" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_error_display" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_error_display" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row">*/
/*                   <label class="col-sm-2 col-form-label">{{ entry_error_log }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="btn-group btn-group-toggle" data-toggle="buttons">*/
/*                       {% if config_error_log %}*/
/*                         <label class="btn btn-success active"><input type="radio" name="config_error_log" value="1" checked="checked"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger"><input type="radio" name="config_error_log" value="0"/> {{ text_no }}</label>*/
/*                       {% else %}*/
/*                         <label class="btn btn-success"><input type="radio" name="config_error_log" value="1"/> {{ text_yes }}</label>*/
/*                         <label class="btn btn-danger active"><input type="radio" name="config_error_log" value="0" checked="checked"/> {{ text_no }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group row required">*/
/*                   <label class="col-sm-2 col-form-label" for="input-error-filename">{{ entry_error_filename }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_error_filename" value="{{ config_error_filename }}" placeholder="{{ entry_error_filename }}" id="input-error-filename" class="form-control"/>*/
/*                     {% if error_log %}*/
/*                       <div class="invalid-tooltip">{{ error_log }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'config_theme\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=setting/setting/theme&user_token={{ user_token }}&theme=' + this.value,*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$('#theme').attr('src', html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_theme\']').trigger('change');*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'config_country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{ config_zone_id }}') {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'config_zone_id\']').html(html);*/
/* */
/* 			$('#button-save').prop('disabled', false);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_country_id\']').trigger('change');*/
/* //--></script>*/
/* {{ footer }}*/
/* */
