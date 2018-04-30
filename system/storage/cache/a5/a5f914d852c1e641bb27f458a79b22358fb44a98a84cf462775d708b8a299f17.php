<?php

/* rhplus/template/information/contact.twig */
class __TwigTemplate_fc6e278fedd547b12d577e3eca5cf134fb77a5d6c994713873c4a88a60a7ff42 extends Twig_Template
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
<div class=\"container\">
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
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
        // line 14
        echo (isset($context["text_location"]) ? $context["text_location"] : null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"row\">
              ";
        // line 18
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 19
            echo "              <div class=\"col-sm-3\"><img src=\"";
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\" alt=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" title=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" class=\"img-thumbnail\" /></div>
              ";
        }
        // line 21
        echo "              <div class=\"col-sm-3\"><strong>";
        echo (isset($context["store"]) ? $context["store"] : null);
        echo "</strong><br>
                <address>
                ";
        // line 23
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "
                </address>
                ";
        // line 25
        if ((isset($context["geocode"]) ? $context["geocode"] : null)) {
            // line 26
            echo "                <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter((isset($context["geocode"]) ? $context["geocode"] : null));
            echo "&hl=";
            echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo (isset($context["button_map"]) ? $context["button_map"] : null);
            echo "</a>
                ";
        }
        // line 28
        echo "              </div>
              <div class=\"col-sm-3\"><strong>";
        // line 29
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo "</strong><br>
                ";
        // line 30
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "<br />
                <br />
                ";
        // line 32
        if ((isset($context["fax"]) ? $context["fax"] : null)) {
            // line 33
            echo "                <strong>";
            echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
            echo "</strong><br>
                ";
            // line 34
            echo (isset($context["fax"]) ? $context["fax"] : null);
            echo "
                ";
        }
        // line 36
        echo "              </div>
              <div class=\"col-sm-3\">
                ";
        // line 38
        if ((isset($context["open"]) ? $context["open"] : null)) {
            // line 39
            echo "                <strong>";
            echo (isset($context["text_open"]) ? $context["text_open"] : null);
            echo "</strong><br />
                ";
            // line 40
            echo (isset($context["open"]) ? $context["open"] : null);
            echo "<br />
                <br />
                ";
        }
        // line 43
        echo "              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-sm-12\">
                ";
        // line 47
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 48
            echo "                <strong>";
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</strong><br />
                ";
            // line 49
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "
                ";
        }
        // line 51
        echo "              </div>
            </div>
          ";
        // line 53
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 54
            echo "          <h3 class=\"panel-title\">";
            echo (isset($context["text_store"]) ? $context["text_store"] : null);
            echo "</h3>
          <div class=\"panel-group\" id=\"accordion\">
            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 57
                echo "            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 59
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo $this->getAttribute($context["location"], "name", array());
                echo "  <i class=\"fa fa-caret-down\"></i></a></h4>
              </div>
              <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 61
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\">
                <div class=\"panel-body\">
                  <div class=\"row\">
                    ";
                // line 64
                if ($this->getAttribute($context["location"], "image", array())) {
                    // line 65
                    echo "                    <div class=\"col-sm-3\"><img src=\"";
                    echo $this->getAttribute($context["location"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\" class=\"img-thumbnail\" /></div>
                    ";
                }
                // line 67
                echo "                    <div class=\"col-sm-3\"><strong>";
                echo $this->getAttribute($context["location"], "name", array());
                echo "</strong><br />
                      <address>
                      ";
                // line 69
                echo $this->getAttribute($context["location"], "address", array());
                echo "
                      </address>
                      ";
                // line 71
                if ($this->getAttribute($context["location"], "geocode", array())) {
                    // line 72
                    echo "                      <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter($this->getAttribute($context["location"], "geocode", array()));
                    echo "&hl=";
                    echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo (isset($context["button_map"]) ? $context["button_map"] : null);
                    echo "</a>
                      ";
                }
                // line 74
                echo "                    </div>
                    <div class=\"col-sm-3\"> <strong>";
                // line 75
                echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
                echo "</strong><br>
                      ";
                // line 76
                echo $this->getAttribute($context["location"], "telephone", array());
                echo "<br />
                      <br />
                      ";
                // line 78
                if ($this->getAttribute($context["location"], "fax", array())) {
                    // line 79
                    echo "                      <strong>";
                    echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
                    echo "</strong><br>
                      ";
                    // line 80
                    echo $this->getAttribute($context["location"], "fax", array());
                    echo "
                      ";
                }
                // line 82
                echo "                    </div>
                    <div class=\"col-sm-3\">
                      ";
                // line 84
                if ($this->getAttribute($context["location"], "open", array())) {
                    // line 85
                    echo "                      <strong>";
                    echo (isset($context["text_open"]) ? $context["text_open"] : null);
                    echo "</strong><br />
                      ";
                    // line 86
                    echo $this->getAttribute($context["location"], "open", array());
                    echo "<br />
                      <br />
                      ";
                }
                // line 89
                echo "                      ";
                if ($this->getAttribute($context["location"], "comment", array())) {
                    // line 90
                    echo "                      <strong>";
                    echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
                    echo "</strong><br />
                      ";
                    // line 91
                    echo $this->getAttribute($context["location"], "comment", array());
                    echo "
                      ";
                }
                // line 93
                echo "                    </div>
                  </div>
                </div>
              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "          </div>
          ";
        }
        // line 101
        echo "        </div>
      </div>
      <br>
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
        // line 106
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <form action=\"";
        // line 109
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
            <fieldset>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 112
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 114
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 115
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 116
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                  ";
        }
        // line 118
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 121
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"email\" value=\"";
        // line 123
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 124
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 125
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                  ";
        }
        // line 127
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 130
        echo (isset($context["entry_enquiry"]) ? $context["entry_enquiry"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 132
        echo (isset($context["enquiry"]) ? $context["enquiry"] : null);
        echo "</textarea>
                  ";
        // line 133
        if ((isset($context["error_enquiry"]) ? $context["error_enquiry"] : null)) {
            // line 134
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_enquiry"]) ? $context["error_enquiry"] : null);
            echo "</div>
                  ";
        }
        // line 136
        echo "                </div>
              </div>
              ";
        // line 138
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
            </fieldset>
            <div class=\"buttons\">
              <div class=\"pull-right\">
                <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 142
        echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
        echo "\" />
              </div>
            </div>
          </form>
        </div>
      </div>
      ";
        // line 148
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
  </div>
</div>
";
        // line 152
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "rhplus/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 152,  393 => 148,  384 => 142,  377 => 138,  373 => 136,  367 => 134,  365 => 133,  361 => 132,  356 => 130,  351 => 127,  345 => 125,  343 => 124,  339 => 123,  334 => 121,  329 => 118,  323 => 116,  321 => 115,  317 => 114,  312 => 112,  306 => 109,  300 => 106,  293 => 101,  289 => 99,  278 => 93,  273 => 91,  268 => 90,  265 => 89,  259 => 86,  254 => 85,  252 => 84,  248 => 82,  243 => 80,  238 => 79,  236 => 78,  231 => 76,  227 => 75,  224 => 74,  214 => 72,  212 => 71,  207 => 69,  201 => 67,  191 => 65,  189 => 64,  183 => 61,  176 => 59,  172 => 57,  168 => 56,  162 => 54,  160 => 53,  156 => 51,  151 => 49,  146 => 48,  144 => 47,  138 => 43,  132 => 40,  127 => 39,  125 => 38,  121 => 36,  116 => 34,  111 => 33,  109 => 32,  104 => 30,  100 => 29,  97 => 28,  87 => 26,  85 => 25,  80 => 23,  74 => 21,  64 => 19,  62 => 18,  55 => 14,  49 => 11,  45 => 10,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">*/
/*     <div id="content" class="col-sm-12">*/
/*       {{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title">{{ text_location }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <div class="row">*/
/*               {% if image %}*/
/*               <div class="col-sm-3"><img src="{{ image }}" alt="{{ store }}" title="{{ store }}" class="img-thumbnail" /></div>*/
/*               {% endif %}*/
/*               <div class="col-sm-3"><strong>{{ store }}</strong><br>*/
/*                 <address>*/
/*                 {{ address }}*/
/*                 </address>*/
/*                 {% if geocode %}*/
/*                 <a href="https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*                 {% endif %}*/
/*               </div>*/
/*               <div class="col-sm-3"><strong>{{ text_telephone }}</strong><br>*/
/*                 {{ telephone }}<br />*/
/*                 <br />*/
/*                 {% if fax %}*/
/*                 <strong>{{ text_fax }}</strong><br>*/
/*                 {{ fax }}*/
/*                 {% endif %}*/
/*               </div>*/
/*               <div class="col-sm-3">*/
/*                 {% if open %}*/
/*                 <strong>{{ text_open }}</strong><br />*/
/*                 {{ open }}<br />*/
/*                 <br />*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="row">*/
/*               <div class="col-sm-12">*/
/*                 {% if comment %}*/
/*                 <strong>{{ text_comment }}</strong><br />*/
/*                 {{ comment }}*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           {% if locations %}*/
/*           <h3 class="panel-title">{{ text_store }}</h3>*/
/*           <div class="panel-group" id="accordion">*/
/*             {% for location in locations %}*/
/*             <div class="panel panel-default">*/
/*               <div class="panel-heading">*/
/*                 <h4 class="panel-title"><a href="#collapse-location{{ location.location_id }}" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">{{ location.name }}  <i class="fa fa-caret-down"></i></a></h4>*/
/*               </div>*/
/*               <div class="panel-collapse collapse" id="collapse-location{{ location.location_id }}">*/
/*                 <div class="panel-body">*/
/*                   <div class="row">*/
/*                     {% if location.image %}*/
/*                     <div class="col-sm-3"><img src="{{ location.image }}" alt="{{ location.name }}" title="{{ location.name }}" class="img-thumbnail" /></div>*/
/*                     {% endif %}*/
/*                     <div class="col-sm-3"><strong>{{ location.name }}</strong><br />*/
/*                       <address>*/
/*                       {{ location.address }}*/
/*                       </address>*/
/*                       {% if location.geocode %}*/
/*                       <a href="https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <div class="col-sm-3"> <strong>{{ text_telephone }}</strong><br>*/
/*                       {{ location.telephone }}<br />*/
/*                       <br />*/
/*                       {% if location.fax %}*/
/*                       <strong>{{ text_fax }}</strong><br>*/
/*                       {{ location.fax }}*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <div class="col-sm-3">*/
/*                       {% if location.open %}*/
/*                       <strong>{{ text_open }}</strong><br />*/
/*                       {{ location.open }}<br />*/
/*                       <br />*/
/*                       {% endif %}*/
/*                       {% if location.comment %}*/
/*                       <strong>{{ text_comment }}</strong><br />*/
/*                       {{ location.comment }}*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*       <br>*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title">{{ text_contact }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*             <fieldset>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="name" value="{{ name }}" id="input-name" class="form-control" />*/
/*                   {% if error_name %}*/
/*                   <div class="text-danger">{{ error_name }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control" />*/
/*                   {% if error_email %}*/
/*                   <div class="text-danger">{{ error_email }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-enquiry">{{ entry_enquiry }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control">{{ enquiry }}</textarea>*/
/*                   {% if error_enquiry %}*/
/*                   <div class="text-danger">{{ error_enquiry }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               {{ captcha }}*/
/*             </fieldset>*/
/*             <div class="buttons">*/
/*               <div class="pull-right">*/
/*                 <input class="btn btn-primary" type="submit" value="{{ button_submit }}" />*/
/*               </div>*/
/*             </div>*/
/*           </form>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
