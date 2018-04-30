<?php

/* extension/theme/default.twig */
class __TwigTemplate_a2394a67e4fbf7688565cc014e04143a9d0f70d434a134904da74cbb5f12aa99 extends Twig_Template
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
        <button type=\"submit\" form=\"form-theme\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
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
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 25
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme\">
          <fieldset>
            <legend>";
        // line 29
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
            <div class=\"form-group row\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-directory\">";
        // line 31
        echo (isset($context["entry_directory"]) ? $context["entry_directory"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"theme_default_directory\" id=\"input-directory\" class=\"form-control\">
                  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["directories"]) ? $context["directories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["directory"]) {
            // line 35
            echo "                    ";
            if (($context["directory"] == (isset($context["theme_default_directory"]) ? $context["theme_default_directory"] : null))) {
                // line 36
                echo "                      <option value=\"";
                echo $context["directory"];
                echo "\" selected=\"selected\">";
                echo $context["directory"];
                echo "</option>
                    ";
            } else {
                // line 38
                echo "                      <option value=\"";
                echo $context["directory"];
                echo "\">";
                echo $context["directory"];
                echo "</option>
                    ";
            }
            // line 40
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </select>
                <small class=\"form-text text-muted\">";
        // line 42
        echo (isset($context["help_directory"]) ? $context["help_directory"] : null);
        echo "</small>
              </div>
            </div>
            <div class=\"form-group row\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 46
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"theme_default_status\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 49
        if ((isset($context["theme_default_status"]) ? $context["theme_default_status"] : null)) {
            // line 50
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 51
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 53
            echo "                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 54
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 56
        echo "                </select>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 61
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-catalog-limit\">";
        // line 63
        echo (isset($context["entry_product_limit"]) ? $context["entry_product_limit"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"theme_default_product_limit\" value=\"";
        // line 65
        echo (isset($context["theme_default_product_limit"]) ? $context["theme_default_product_limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product_limit"]) ? $context["entry_product_limit"] : null);
        echo "\" id=\"input-catalog-limit\" class=\"form-control\"/>
                <small class=\"form-text text-muted\">";
        // line 66
        echo (isset($context["help_product_limit"]) ? $context["help_product_limit"] : null);
        echo "</small>
                ";
        // line 67
        if ((isset($context["error_product_limit"]) ? $context["error_product_limit"] : null)) {
            // line 68
            echo "                  <div class=\"invalid-tooltip\">";
            echo (isset($context["error_product_limit"]) ? $context["error_product_limit"] : null);
            echo "</div>
                ";
        }
        // line 70
        echo "              </div>
            </div>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-description-limit\">";
        // line 73
        echo (isset($context["entry_product_description_length"]) ? $context["entry_product_description_length"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"theme_default_product_description_length\" value=\"";
        // line 75
        echo (isset($context["theme_default_product_description_length"]) ? $context["theme_default_product_description_length"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product_description_length"]) ? $context["entry_product_description_length"] : null);
        echo "\" id=\"input-description-limit\" class=\"form-control\"/>
                <small class=\"form-text text-muted\">";
        // line 76
        echo (isset($context["help_product_description_length"]) ? $context["help_product_description_length"] : null);
        echo "</small>
                ";
        // line 77
        if ((isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null)) {
            // line 78
            echo "                  <div class=\"invalid-tooltip\">";
            echo (isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null);
            echo "</div>
                ";
        }
        // line 80
        echo "              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 84
        echo (isset($context["text_image"]) ? $context["text_image"] : null);
        echo "</legend>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-image-category-width\">";
        // line 86
        echo (isset($context["entry_image_category"]) ? $context["entry_image_category"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_category_width\" value=\"";
        // line 90
        echo (isset($context["theme_default_image_category_width"]) ? $context["theme_default_image_category_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\"/>
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_category_height\" value=\"";
        // line 93
        echo (isset($context["theme_default_image_category_height"]) ? $context["theme_default_image_category_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                  </div>
                </div>
                ";
        // line 96
        if ((isset($context["error_image_category"]) ? $context["error_image_category"] : null)) {
            // line 97
            echo "                  <div class=\"invalid-tooltip\">";
            echo (isset($context["error_image_category"]) ? $context["error_image_category"] : null);
            echo "</div>
                ";
        }
        // line 99
        echo "              </div>
            </div>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-image-thumb-width\">";
        // line 102
        echo (isset($context["entry_image_thumb"]) ? $context["entry_image_thumb"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_thumb_width\" value=\"";
        // line 106
        echo (isset($context["theme_default_image_thumb_width"]) ? $context["theme_default_image_thumb_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\"/>
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_thumb_height\" value=\"";
        // line 109
        echo (isset($context["theme_default_image_thumb_height"]) ? $context["theme_default_image_thumb_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                  </div>
                </div>
                ";
        // line 112
        if ((isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null)) {
            // line 113
            echo "                  <div class=\"invalid-tooltip\">";
            echo (isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null);
            echo "</div>
                ";
        }
        // line 115
        echo "              </div>
            </div>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-image-popup-width\">";
        // line 118
        echo (isset($context["entry_image_popup"]) ? $context["entry_image_popup"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_popup_width\" value=\"";
        // line 122
        echo (isset($context["theme_default_image_popup_width"]) ? $context["theme_default_image_popup_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\"/>
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_popup_height\" value=\"";
        // line 125
        echo (isset($context["theme_default_image_popup_height"]) ? $context["theme_default_image_popup_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                  </div>
                </div>
                ";
        // line 128
        if ((isset($context["error_image_popup"]) ? $context["error_image_popup"] : null)) {
            // line 129
            echo "                  <div class=\"invalid-tooltip\">";
            echo (isset($context["error_image_popup"]) ? $context["error_image_popup"] : null);
            echo "</div>
                ";
        }
        // line 131
        echo "              </div>
            </div>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-image-product-width\">";
        // line 134
        echo (isset($context["entry_image_product"]) ? $context["entry_image_product"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_product_width\" value=\"";
        // line 138
        echo (isset($context["theme_default_image_product_width"]) ? $context["theme_default_image_product_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\"/>
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_product_height\" value=\"";
        // line 141
        echo (isset($context["theme_default_image_product_height"]) ? $context["theme_default_image_product_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                  </div>
                </div>
                ";
        // line 144
        if ((isset($context["error_image_product"]) ? $context["error_image_product"] : null)) {
            // line 145
            echo "                  <div class=\"invalid-tooltip\">";
            echo (isset($context["error_image_product"]) ? $context["error_image_product"] : null);
            echo "</div>
                ";
        }
        // line 147
        echo "              </div>
            </div>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-image-additional-width\">";
        // line 150
        echo (isset($context["entry_image_additional"]) ? $context["entry_image_additional"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_additional_width\" value=\"";
        // line 154
        echo (isset($context["theme_default_image_additional_width"]) ? $context["theme_default_image_additional_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\"/>
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_additional_height\" value=\"";
        // line 157
        echo (isset($context["theme_default_image_additional_height"]) ? $context["theme_default_image_additional_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                  </div>
                </div>
                ";
        // line 160
        if ((isset($context["error_image_additional"]) ? $context["error_image_additional"] : null)) {
            // line 161
            echo "                  <div class=\"invalid-tooltip\">";
            echo (isset($context["error_image_additional"]) ? $context["error_image_additional"] : null);
            echo "</div>
                ";
        }
        // line 163
        echo "              </div>
            </div>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-image-related\">";
        // line 166
        echo (isset($context["entry_image_related"]) ? $context["entry_image_related"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_related_width\" value=\"";
        // line 170
        echo (isset($context["theme_default_image_related_width"]) ? $context["theme_default_image_related_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-related\" class=\"form-control\"/>
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_related_height\" value=\"";
        // line 173
        echo (isset($context["theme_default_image_related_height"]) ? $context["theme_default_image_related_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                  </div>
                </div>
                ";
        // line 176
        if ((isset($context["error_image_related"]) ? $context["error_image_related"] : null)) {
            // line 177
            echo "                  <div class=\"invalid-tooltip\">";
            echo (isset($context["error_image_related"]) ? $context["error_image_related"] : null);
            echo "</div>
                ";
        }
        // line 179
        echo "              </div>
            </div>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-image-compare\">";
        // line 182
        echo (isset($context["entry_image_compare"]) ? $context["entry_image_compare"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_compare_width\" value=\"";
        // line 186
        echo (isset($context["theme_default_image_compare_width"]) ? $context["theme_default_image_compare_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-compare\" class=\"form-control\"/>
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_compare_height\" value=\"";
        // line 189
        echo (isset($context["theme_default_image_compare_height"]) ? $context["theme_default_image_compare_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                  </div>
                </div>
                ";
        // line 192
        if ((isset($context["error_image_compare"]) ? $context["error_image_compare"] : null)) {
            // line 193
            echo "                  <div class=\"invalid-tooltip\">";
            echo (isset($context["error_image_compare"]) ? $context["error_image_compare"] : null);
            echo "</div>
                ";
        }
        // line 195
        echo "              </div>
            </div>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-image-wishlist\">";
        // line 198
        echo (isset($context["entry_image_wishlist"]) ? $context["entry_image_wishlist"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_wishlist_width\" value=\"";
        // line 202
        echo (isset($context["theme_default_image_wishlist_width"]) ? $context["theme_default_image_wishlist_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-wishlist\" class=\"form-control\"/>
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_wishlist_height\" value=\"";
        // line 205
        echo (isset($context["theme_default_image_wishlist_height"]) ? $context["theme_default_image_wishlist_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                  </div>
                </div>
                ";
        // line 208
        if ((isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null)) {
            // line 209
            echo "                  <div class=\"invalid-tooltip\">";
            echo (isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null);
            echo "</div>
                ";
        }
        // line 211
        echo "              </div>
            </div>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-image-cart\">";
        // line 214
        echo (isset($context["entry_image_cart"]) ? $context["entry_image_cart"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_cart_width\" value=\"";
        // line 218
        echo (isset($context["theme_default_image_cart_width"]) ? $context["theme_default_image_cart_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-cart\" class=\"form-control\"/>
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_cart_height\" value=\"";
        // line 221
        echo (isset($context["theme_default_image_cart_height"]) ? $context["theme_default_image_cart_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                  </div>
                </div>
                ";
        // line 224
        if ((isset($context["error_image_cart"]) ? $context["error_image_cart"] : null)) {
            // line 225
            echo "                  <div class=\"invalid-tooltip\">";
            echo (isset($context["error_image_cart"]) ? $context["error_image_cart"] : null);
            echo "</div>
                ";
        }
        // line 227
        echo "              </div>
            </div>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-image-location\">";
        // line 230
        echo (isset($context["entry_image_location"]) ? $context["entry_image_location"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_location_width\" value=\"";
        // line 234
        echo (isset($context["theme_default_image_location_width"]) ? $context["theme_default_image_location_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-location\" class=\"form-control\"/>
                  </div>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" name=\"theme_default_image_location_height\" value=\"";
        // line 237
        echo (isset($context["theme_default_image_location_height"]) ? $context["theme_default_image_location_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                  </div>
                </div>
                ";
        // line 240
        if ((isset($context["error_image_location"]) ? $context["error_image_location"] : null)) {
            // line 241
            echo "                  <div class=\"invalid-tooltip\">";
            echo (isset($context["error_image_location"]) ? $context["error_image_location"] : null);
            echo "</div>
                ";
        }
        // line 243
        echo "              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 251
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/theme/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 251,  596 => 243,  590 => 241,  588 => 240,  580 => 237,  572 => 234,  565 => 230,  560 => 227,  554 => 225,  552 => 224,  544 => 221,  536 => 218,  529 => 214,  524 => 211,  518 => 209,  516 => 208,  508 => 205,  500 => 202,  493 => 198,  488 => 195,  482 => 193,  480 => 192,  472 => 189,  464 => 186,  457 => 182,  452 => 179,  446 => 177,  444 => 176,  436 => 173,  428 => 170,  421 => 166,  416 => 163,  410 => 161,  408 => 160,  400 => 157,  392 => 154,  385 => 150,  380 => 147,  374 => 145,  372 => 144,  364 => 141,  356 => 138,  349 => 134,  344 => 131,  338 => 129,  336 => 128,  328 => 125,  320 => 122,  313 => 118,  308 => 115,  302 => 113,  300 => 112,  292 => 109,  284 => 106,  277 => 102,  272 => 99,  266 => 97,  264 => 96,  256 => 93,  248 => 90,  241 => 86,  236 => 84,  230 => 80,  224 => 78,  222 => 77,  218 => 76,  212 => 75,  207 => 73,  202 => 70,  196 => 68,  194 => 67,  190 => 66,  184 => 65,  179 => 63,  174 => 61,  167 => 56,  162 => 54,  157 => 53,  152 => 51,  147 => 50,  145 => 49,  139 => 46,  132 => 42,  129 => 41,  123 => 40,  115 => 38,  107 => 36,  104 => 35,  100 => 34,  94 => 31,  89 => 29,  84 => 27,  79 => 25,  76 => 24,  68 => 20,  66 => 19,  59 => 14,  48 => 12,  44 => 11,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="float-right">*/
/*         <button type="submit" form="form-theme" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fas fa-save"></i></button>*/
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
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*       <div class="alert alert-danger alert-dismissible"><i class="fas fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="card">*/
/*       <div class="card-header"><i class="fas fa-pencil-alt"></i> {{ text_edit }}</div>*/
/*       <div class="card-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-theme">*/
/*           <fieldset>*/
/*             <legend>{{ text_general }}</legend>*/
/*             <div class="form-group row">*/
/*               <label class="col-sm-2 col-form-label" for="input-directory">{{ entry_directory }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="theme_default_directory" id="input-directory" class="form-control">*/
/*                   {% for directory in directories %}*/
/*                     {% if directory == theme_default_directory %}*/
/*                       <option value="{{ directory }}" selected="selected">{{ directory }}</option>*/
/*                     {% else %}*/
/*                       <option value="{{ directory }}">{{ directory }}</option>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </select>*/
/*                 <small class="form-text text-muted">{{ help_directory }}</small>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group row">*/
/*               <label class="col-sm-2 col-form-label" for="input-status">{{ entry_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="theme_default_status" id="input-status" class="form-control">*/
/*                   {% if theme_default_status %}*/
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                   {% else %}*/
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_product }}</legend>*/
/*             <div class="form-group row required">*/
/*               <label class="col-sm-2 col-form-label" for="input-catalog-limit">{{ entry_product_limit }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="theme_default_product_limit" value="{{ theme_default_product_limit }}" placeholder="{{ entry_product_limit }}" id="input-catalog-limit" class="form-control"/>*/
/*                 <small class="form-text text-muted">{{ help_product_limit }}</small>*/
/*                 {% if error_product_limit %}*/
/*                   <div class="invalid-tooltip">{{ error_product_limit }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group row required">*/
/*               <label class="col-sm-2 col-form-label" for="input-description-limit">{{ entry_product_description_length }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="theme_default_product_description_length" value="{{ theme_default_product_description_length }}" placeholder="{{ entry_product_description_length }}" id="input-description-limit" class="form-control"/>*/
/*                 <small class="form-text text-muted">{{ help_product_description_length }}</small>*/
/*                 {% if error_product_description_length %}*/
/*                   <div class="invalid-tooltip">{{ error_product_description_length }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_image }}</legend>*/
/*             <div class="form-group row required">*/
/*               <label class="col-sm-2 col-form-label" for="input-image-category-width">{{ entry_image_category }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_category_width" value="{{ theme_default_image_category_width }}" placeholder="{{ entry_width }}" id="input-image-category-width" class="form-control"/>*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_category_height" value="{{ theme_default_image_category_height }}" placeholder="{{ entry_height }}" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_category %}*/
/*                   <div class="invalid-tooltip">{{ error_image_category }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group row required">*/
/*               <label class="col-sm-2 col-form-label" for="input-image-thumb-width">{{ entry_image_thumb }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_thumb_width" value="{{ theme_default_image_thumb_width }}" placeholder="{{ entry_width }}" id="input-image-thumb-width" class="form-control"/>*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_thumb_height" value="{{ theme_default_image_thumb_height }}" placeholder="{{ entry_height }}" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_thumb %}*/
/*                   <div class="invalid-tooltip">{{ error_image_thumb }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group row required">*/
/*               <label class="col-sm-2 col-form-label" for="input-image-popup-width">{{ entry_image_popup }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_popup_width" value="{{ theme_default_image_popup_width }}" placeholder="{{ entry_width }}" id="input-image-popup-width" class="form-control"/>*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_popup_height" value="{{ theme_default_image_popup_height }}" placeholder="{{ entry_height }}" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_popup %}*/
/*                   <div class="invalid-tooltip">{{ error_image_popup }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group row required">*/
/*               <label class="col-sm-2 col-form-label" for="input-image-product-width">{{ entry_image_product }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_product_width" value="{{ theme_default_image_product_width }}" placeholder="{{ entry_width }}" id="input-image-product-width" class="form-control"/>*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_product_height" value="{{ theme_default_image_product_height }}" placeholder="{{ entry_height }}" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_product %}*/
/*                   <div class="invalid-tooltip">{{ error_image_product }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group row required">*/
/*               <label class="col-sm-2 col-form-label" for="input-image-additional-width">{{ entry_image_additional }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_additional_width" value="{{ theme_default_image_additional_width }}" placeholder="{{ entry_width }}" id="input-image-additional-width" class="form-control"/>*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_additional_height" value="{{ theme_default_image_additional_height }}" placeholder="{{ entry_height }}" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_additional %}*/
/*                   <div class="invalid-tooltip">{{ error_image_additional }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group row required">*/
/*               <label class="col-sm-2 col-form-label" for="input-image-related">{{ entry_image_related }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_related_width" value="{{ theme_default_image_related_width }}" placeholder="{{ entry_width }}" id="input-image-related" class="form-control"/>*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_related_height" value="{{ theme_default_image_related_height }}" placeholder="{{ entry_height }}" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_related %}*/
/*                   <div class="invalid-tooltip">{{ error_image_related }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group row required">*/
/*               <label class="col-sm-2 col-form-label" for="input-image-compare">{{ entry_image_compare }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_compare_width" value="{{ theme_default_image_compare_width }}" placeholder="{{ entry_width }}" id="input-image-compare" class="form-control"/>*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_compare_height" value="{{ theme_default_image_compare_height }}" placeholder="{{ entry_height }}" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_compare %}*/
/*                   <div class="invalid-tooltip">{{ error_image_compare }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group row required">*/
/*               <label class="col-sm-2 col-form-label" for="input-image-wishlist">{{ entry_image_wishlist }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_wishlist_width" value="{{ theme_default_image_wishlist_width }}" placeholder="{{ entry_width }}" id="input-image-wishlist" class="form-control"/>*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_wishlist_height" value="{{ theme_default_image_wishlist_height }}" placeholder="{{ entry_height }}" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_wishlist %}*/
/*                   <div class="invalid-tooltip">{{ error_image_wishlist }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group row required">*/
/*               <label class="col-sm-2 col-form-label" for="input-image-cart">{{ entry_image_cart }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_cart_width" value="{{ theme_default_image_cart_width }}" placeholder="{{ entry_width }}" id="input-image-cart" class="form-control"/>*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_cart_height" value="{{ theme_default_image_cart_height }}" placeholder="{{ entry_height }}" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_cart %}*/
/*                   <div class="invalid-tooltip">{{ error_image_cart }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group row required">*/
/*               <label class="col-sm-2 col-form-label" for="input-image-location">{{ entry_image_location }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_location_width" value="{{ theme_default_image_location_width }}" placeholder="{{ entry_width }}" id="input-image-location" class="form-control"/>*/
/*                   </div>*/
/*                   <div class="col-sm-6">*/
/*                     <input type="text" name="theme_default_image_location_height" value="{{ theme_default_image_location_height }}" placeholder="{{ entry_height }}" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if error_image_location %}*/
/*                   <div class="invalid-tooltip">{{ error_image_location }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
