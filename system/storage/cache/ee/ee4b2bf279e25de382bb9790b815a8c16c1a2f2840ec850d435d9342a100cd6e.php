<?php

/* rhplus/template/common/footer.twig */
class __TwigTemplate_39c18e1416ac503ed7bf8e07beb27470cb83f1cdcbfa3710ccfb5ebb4525f98a extends Twig_Template
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
        echo "<footer>
  <div class=\"container-fluid\">
    <div class=\"row\">
      ";
        // line 4
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 5
            echo "      <div class=\"col-sm-2\">
        <div class=\"btn-group dropup info\">
          <button type=\"button\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
            <i class=\"icon ion-ios-information-outline\"></i>
            <span>";
            // line 9
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</span>
          </button>
          <ul class=\"dropdown-menu pull-right\">
            <li class=\"dropdown-triangle\"></li>
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 14
                echo "            <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "          </ul>
        </div>
      </div>
      ";
        }
        // line 20
        echo "      <div class=\"col-sm-2\">
        <div class=\"btn-group dropup service\">
          <button type=\"button\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
            <i class=\"icon ion-ios-people-outline\"></i>
            <span>";
        // line 24
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</span>
          </button>
          <ul class=\"dropdown-menu pull-right\">
            <li class=\"dropdown-triangle\"></li>
            <li><a href=\"";
        // line 28
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 29
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 30
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
          </ul>
        </div>
      </div>
      <div class=\"col-sm-2\">
        <div class=\"btn-group dropup extra\">
          <button type=\"button\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
            <i class=\"icon ion-ios-flask-outline\"></i>
            <span>";
        // line 38
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</span>
          </button>
          <ul class=\"dropdown-menu pull-right\">
            <li class=\"dropdown-triangle\"></li>
            <li><a href=\"";
        // line 42
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 43
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 44
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 45
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
          </ul>
        </div>
      </div>
      <div class=\"col-sm-2\">
        <div class=\"btn-group dropup user-account\">
          <button type=\"button\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
            <i class=\"icon ion-ios-person-outline\"></i>
            <span>";
        // line 53
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span>
          </button>
          <ul class=\"dropdown-menu pull-right\">
            <li class=\"dropdown-triangle\"></li>
            <li><a href=\"";
        // line 57
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 58
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 59
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 60
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
          </ul>
        </div>
      </div>
      <div class=\"col-sm-2\">
        <div class=\"btn-group dropup social\">
          <button type=\"button\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
            <i class=\"icon ion-ios-world-outline\"></i>
            <span>Social</span>
          </button>
          <ul class=\"dropdown-menu pull-right\">
            <li class=\"dropdown-triangle\"></li>
            ";
        // line 72
        if ((isset($context["twitter"]) ? $context["twitter"] : null)) {
            // line 73
            echo "            <li><a href=\"";
            echo (isset($context["twitter"]) ? $context["twitter"] : null);
            echo "\" title=\"Twitter\">Twitter</a></li>
            ";
        }
        // line 75
        echo "            ";
        if ((isset($context["facebook"]) ? $context["facebook"] : null)) {
            // line 76
            echo "            <li><a href=\"";
            echo (isset($context["facebook"]) ? $context["facebook"] : null);
            echo "\" title=\"Facebook\">Facebook</a></li>
            ";
        }
        // line 78
        echo "            ";
        if ((isset($context["pinterest"]) ? $context["pinterest"] : null)) {
            // line 79
            echo "            <li><a href=\"";
            echo (isset($context["pinterest"]) ? $context["pinterest"] : null);
            echo "\" title=\"Pinterest\">Pinterest</a></li>
            ";
        }
        // line 81
        echo "            ";
        if ((isset($context["instagram"]) ? $context["instagram"] : null)) {
            // line 82
            echo "            <li><a href=\"";
            echo (isset($context["instagram"]) ? $context["instagram"] : null);
            echo "\" title=\"Instagram\">Instagram</a></li>
            ";
        }
        // line 84
        echo "            ";
        if ((isset($context["skype"]) ? $context["skype"] : null)) {
            // line 85
            echo "            <li><a href=\"skype:";
            echo (isset($context["skype"]) ? $context["skype"] : null);
            echo "?call\" title=\"Skype\">Skype</a></li>
            ";
        }
        // line 87
        echo "            ";
        if ((isset($context["linkedin"]) ? $context["linkedin"] : null)) {
            // line 88
            echo "            <li><a href=\"";
            echo (isset($context["linkedin"]) ? $context["linkedin"] : null);
            echo "\" title=\"Linkedin\">Linkedin</a></li>
            ";
        }
        // line 90
        echo "            ";
        if ((isset($context["tumblr"]) ? $context["tumblr"] : null)) {
            // line 91
            echo "            <li><a href=\"";
            echo (isset($context["tumblr"]) ? $context["tumblr"] : null);
            echo "\" title=\"Tumblr\">Tumblr</a></li>
            ";
        }
        // line 93
        echo "            ";
        if ((isset($context["googleplus"]) ? $context["googleplus"] : null)) {
            // line 94
            echo "            <li><a href=\"";
            echo (isset($context["googleplus"]) ? $context["googleplus"] : null);
            echo "\" title=\"Google Plus\">Google+</a></li>
            ";
        }
        // line 96
        echo "            ";
        if ((isset($context["youtube"]) ? $context["youtube"] : null)) {
            // line 97
            echo "            <li><a href=\"";
            echo (isset($context["youtube"]) ? $context["youtube"] : null);
            echo "\" title=\"YouTube\">YouTube</a></li>
            ";
        }
        // line 99
        echo "            ";
        if ((isset($context["etsy"]) ? $context["etsy"] : null)) {
            // line 100
            echo "            <li><a href=\"";
            echo (isset($context["etsy"]) ? $context["etsy"] : null);
            echo "\" title=\"Etsy\">Etsy</a></li>
            ";
        }
        // line 102
        echo "            ";
        if ((isset($context["vkontakte"]) ? $context["vkontakte"] : null)) {
            // line 103
            echo "            <li><a href=\"";
            echo (isset($context["vkontakte"]) ? $context["vkontakte"] : null);
            echo "\" title=\"VK\">VK</a></li>
            ";
        }
        // line 105
        echo "            ";
        if ((isset($context["vimeo"]) ? $context["vimeo"] : null)) {
            // line 106
            echo "            <li><a href=\"";
            echo (isset($context["vimeo"]) ? $context["vimeo"] : null);
            echo "\" title=\"Vimeo\">Vimeo</a></li>
            ";
        }
        // line 108
        echo "          </ul>
        </div>
      </div>
      <div class=\"col-sm-2\">
        <div class=\"btn-group dropup powered\">
          <button type=\"button\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
            <i class=\"icon ion-ios-bolt-outline\"></i>
            <span>Powered</span>
          </button>
          <ul class=\"dropdown-menu\">
            <li class=\"dropdown-triangle\"></li>
            <li><a href=\"http://themeforest.net/user/themefiber\" target=\"_blank\" title=\"design by themefiber\">Design by themefiber</a></li>
            <li><a href=\"http://opencart.com/\" target=\"_blank\" title=\"powered by opencart\">Powered by OpenCart</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>
</body></html>
";
    }

    public function getTemplateName()
    {
        return "rhplus/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 108,  279 => 106,  276 => 105,  270 => 103,  267 => 102,  261 => 100,  258 => 99,  252 => 97,  249 => 96,  243 => 94,  240 => 93,  234 => 91,  231 => 90,  225 => 88,  222 => 87,  216 => 85,  213 => 84,  207 => 82,  204 => 81,  198 => 79,  195 => 78,  189 => 76,  186 => 75,  180 => 73,  178 => 72,  161 => 60,  155 => 59,  149 => 58,  143 => 57,  136 => 53,  123 => 45,  117 => 44,  111 => 43,  105 => 42,  98 => 38,  85 => 30,  79 => 29,  73 => 28,  66 => 24,  60 => 20,  54 => 16,  43 => 14,  39 => 13,  32 => 9,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       {% if informations %}*/
/*       <div class="col-sm-2">*/
/*         <div class="btn-group dropup info">*/
/*           <button type="button" data-toggle="dropdown" class="dropdown-toggle">*/
/*             <i class="icon ion-ios-information-outline"></i>*/
/*             <span>{{ text_information }}</span>*/
/*           </button>*/
/*           <ul class="dropdown-menu pull-right">*/
/*             <li class="dropdown-triangle"></li>*/
/*             {% for information in informations %}*/
/*             <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       <div class="col-sm-2">*/
/*         <div class="btn-group dropup service">*/
/*           <button type="button" data-toggle="dropdown" class="dropdown-toggle">*/
/*             <i class="icon ion-ios-people-outline"></i>*/
/*             <span>{{ text_service }}</span>*/
/*           </button>*/
/*           <ul class="dropdown-menu pull-right">*/
/*             <li class="dropdown-triangle"></li>*/
/*             <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*             <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*             <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-sm-2">*/
/*         <div class="btn-group dropup extra">*/
/*           <button type="button" data-toggle="dropdown" class="dropdown-toggle">*/
/*             <i class="icon ion-ios-flask-outline"></i>*/
/*             <span>{{ text_extra }}</span>*/
/*           </button>*/
/*           <ul class="dropdown-menu pull-right">*/
/*             <li class="dropdown-triangle"></li>*/
/*             <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*             <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*             <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*             <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-sm-2">*/
/*         <div class="btn-group dropup user-account">*/
/*           <button type="button" data-toggle="dropdown" class="dropdown-toggle">*/
/*             <i class="icon ion-ios-person-outline"></i>*/
/*             <span>{{ text_account }}</span>*/
/*           </button>*/
/*           <ul class="dropdown-menu pull-right">*/
/*             <li class="dropdown-triangle"></li>*/
/*             <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*             <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*             <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-sm-2">*/
/*         <div class="btn-group dropup social">*/
/*           <button type="button" data-toggle="dropdown" class="dropdown-toggle">*/
/*             <i class="icon ion-ios-world-outline"></i>*/
/*             <span>Social</span>*/
/*           </button>*/
/*           <ul class="dropdown-menu pull-right">*/
/*             <li class="dropdown-triangle"></li>*/
/*             {% if twitter %}*/
/*             <li><a href="{{ twitter }}" title="Twitter">Twitter</a></li>*/
/*             {% endif %}*/
/*             {% if facebook %}*/
/*             <li><a href="{{ facebook }}" title="Facebook">Facebook</a></li>*/
/*             {% endif %}*/
/*             {% if pinterest %}*/
/*             <li><a href="{{ pinterest }}" title="Pinterest">Pinterest</a></li>*/
/*             {% endif %}*/
/*             {% if instagram %}*/
/*             <li><a href="{{ instagram }}" title="Instagram">Instagram</a></li>*/
/*             {% endif %}*/
/*             {% if skype %}*/
/*             <li><a href="skype:{{ skype }}?call" title="Skype">Skype</a></li>*/
/*             {% endif %}*/
/*             {% if linkedin %}*/
/*             <li><a href="{{ linkedin }}" title="Linkedin">Linkedin</a></li>*/
/*             {% endif %}*/
/*             {% if tumblr %}*/
/*             <li><a href="{{ tumblr }}" title="Tumblr">Tumblr</a></li>*/
/*             {% endif %}*/
/*             {% if googleplus %}*/
/*             <li><a href="{{ googleplus }}" title="Google Plus">Google+</a></li>*/
/*             {% endif %}*/
/*             {% if youtube %}*/
/*             <li><a href="{{ youtube }}" title="YouTube">YouTube</a></li>*/
/*             {% endif %}*/
/*             {% if etsy %}*/
/*             <li><a href="{{ etsy }}" title="Etsy">Etsy</a></li>*/
/*             {% endif %}*/
/*             {% if vkontakte %}*/
/*             <li><a href="{{ vkontakte }}" title="VK">VK</a></li>*/
/*             {% endif %}*/
/*             {% if vimeo %}*/
/*             <li><a href="{{ vimeo }}" title="Vimeo">Vimeo</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-sm-2">*/
/*         <div class="btn-group dropup powered">*/
/*           <button type="button" data-toggle="dropdown" class="dropdown-toggle">*/
/*             <i class="icon ion-ios-bolt-outline"></i>*/
/*             <span>Powered</span>*/
/*           </button>*/
/*           <ul class="dropdown-menu">*/
/*             <li class="dropdown-triangle"></li>*/
/*             <li><a href="http://themeforest.net/user/themefiber" target="_blank" title="design by themefiber">Design by themefiber</a></li>*/
/*             <li><a href="http://opencart.com/" target="_blank" title="powered by opencart">Powered by OpenCart</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </footer>*/
/* </div>*/
/* </body></html>*/
/* */
