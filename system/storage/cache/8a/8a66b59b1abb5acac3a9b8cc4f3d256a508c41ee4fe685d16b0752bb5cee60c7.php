<?php

/* extension/dashboard/activity_info.twig */
class __TwigTemplate_8d4568c8fb649c4932b083d8e20f41d6d573baa7113fb1b14b78b1937205f442 extends Twig_Template
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
        echo "<div class=\"card mb-3\">
  <div class=\"card-header\"><i class=\"fas fa-calendar\"></i> ";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
  <ul class=\"list-group\">
    ";
        // line 4
        if ((isset($context["activities"]) ? $context["activities"] : null)) {
            // line 5
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) ? $context["activities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 6
                echo "        <li class=\"list-group-item\">";
                echo $this->getAttribute($context["activity"], "comment", array());
                echo "
          <br/>
          <small class=\"text-muted\"><i class=\"fas fa-clock\"></i> ";
                // line 8
                echo $this->getAttribute($context["activity"], "date_added", array());
                echo "</small>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "      <li class=\"list-group-item text-center\">";
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</li>
    ";
        }
        // line 14
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/activity_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  52 => 12,  49 => 11,  40 => 8,  34 => 6,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="card mb-3">*/
/*   <div class="card-header"><i class="fas fa-calendar"></i> {{ heading_title }}</div>*/
/*   <ul class="list-group">*/
/*     {% if activities %}*/
/*       {% for activity in activities %}*/
/*         <li class="list-group-item">{{ activity.comment }}*/
/*           <br/>*/
/*           <small class="text-muted"><i class="fas fa-clock"></i> {{ activity.date_added }}</small>*/
/*         </li>*/
/*       {% endfor %}*/
/*     {% else %}*/
/*       <li class="list-group-item text-center">{{ text_no_results }}</li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
/* */
