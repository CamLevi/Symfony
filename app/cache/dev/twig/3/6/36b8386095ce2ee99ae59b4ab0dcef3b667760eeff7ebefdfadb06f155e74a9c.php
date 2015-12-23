<?php

/* CLBlogBundle:Advert:menu.html.twig */
class __TwigTemplate_39dcd8e420537d40731ca4b92119905febb0bd51049575a141dd0701c49b0857 extends Twig_Template
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
        $__internal_4db6b8e13bc2e9178de8fa874908ca0716c1a2b937575f22cb64f1721ca418d2 = $this->env->getExtension("native_profiler");
        $__internal_4db6b8e13bc2e9178de8fa874908ca0716c1a2b937575f22cb64f1721ca418d2->enter($__internal_4db6b8e13bc2e9178de8fa874908ca0716c1a2b937575f22cb64f1721ca418d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CLBlogBundle:Advert:menu.html.twig"));

        // line 3
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 6
            echo "    <li>
      <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cl_blog_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>";
        
        $__internal_4db6b8e13bc2e9178de8fa874908ca0716c1a2b937575f22cb64f1721ca418d2->leave($__internal_4db6b8e13bc2e9178de8fa874908ca0716c1a2b937575f22cb64f1721ca418d2_prof);

    }

    public function getTemplateName()
    {
        return "CLBlogBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  37 => 8,  33 => 7,  30 => 6,  26 => 5,  22 => 3,);
    }
}
/* {# Ce template n'hérite de personne,*/
/*    tout comme le template inclus avec {{ include() }}. #}*/
/* */
/* <ul class="nav nav-pills nav-stacked">*/
/*   {% for advert in listAdverts %}*/
/*     <li>*/
/*       <a href="{{ path('cl_blog_view', {'id': advert.id}) }}">*/
/*         {{ advert.title }}*/
/*       </a>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
