<?php

/* CLBlogBundle:Advert:view.html.twig */
class __TwigTemplate_0af26e7aef579953d36580cafec585d96de046920f658ea532d752c49e57846e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CLBlogBundle::layout.html.twig", "CLBlogBundle:Advert:view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'clblog_body' => array($this, 'block_clblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CLBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccf9cf3a129616c039ff4eaf0321b60a5ecb67c808eba263d47e464ae9244829 = $this->env->getExtension("native_profiler");
        $__internal_ccf9cf3a129616c039ff4eaf0321b60a5ecb67c808eba263d47e464ae9244829->enter($__internal_ccf9cf3a129616c039ff4eaf0321b60a5ecb67c808eba263d47e464ae9244829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CLBlogBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccf9cf3a129616c039ff4eaf0321b60a5ecb67c808eba263d47e464ae9244829->leave($__internal_ccf9cf3a129616c039ff4eaf0321b60a5ecb67c808eba263d47e464ae9244829_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1be3b5a29c53a27697f931e86cf243d955e41e650cde91651e06a0a70de1a2b9 = $this->env->getExtension("native_profiler");
        $__internal_1be3b5a29c53a27697f931e86cf243d955e41e650cde91651e06a0a70de1a2b9->enter($__internal_1be3b5a29c53a27697f931e86cf243d955e41e650cde91651e06a0a70de1a2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1be3b5a29c53a27697f931e86cf243d955e41e650cde91651e06a0a70de1a2b9->leave($__internal_1be3b5a29c53a27697f931e86cf243d955e41e650cde91651e06a0a70de1a2b9_prof);

    }

    // line 7
    public function block_clblog_body($context, array $blocks = array())
    {
        $__internal_40e4ecd6e2c6cc54c2ee51e6a87f3d67bec18f5188820af9262be780c489786d = $this->env->getExtension("native_profiler");
        $__internal_40e4ecd6e2c6cc54c2ee51e6a87f3d67bec18f5188820af9262be780c489786d->enter($__internal_40e4ecd6e2c6cc54c2ee51e6a87f3d67bec18f5188820af9262be780c489786d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "clblog_body"));

        // line 8
        echo " 
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
\t
  
  <div class=\"well\">
   ";
        // line 14
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()))) {
            // line 15
            echo "<img height='330' width='400' src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\">
";
        }
        // line 17
        echo "<br>
<br>
    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>
  

  <p>
    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("cl_blog_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cl_blog_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'article
    </a>
    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cl_blog_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'article
    </a>
  </p>

";
        
        $__internal_40e4ecd6e2c6cc54c2ee51e6a87f3d67bec18f5188820af9262be780c489786d->leave($__internal_40e4ecd6e2c6cc54c2ee51e6a87f3d67bec18f5188820af9262be780c489786d_prof);

    }

    public function getTemplateName()
    {
        return "CLBlogBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  102 => 28,  95 => 24,  87 => 19,  83 => 17,  75 => 15,  73 => 14,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "CLBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'un article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block clblog_body %}*/
/*  */
/*   <h2>{{ advert.title }}</h2>*/
/*   <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* 	*/
/*   */
/*   <div class="well">*/
/*    {% if advert.image is not null %}*/
/* <img height='330' width='400' src="{{ advert.image.url }}" alt="{{ advert.image.alt }}">*/
/* {% endif %}*/
/* <br>*/
/* <br>*/
/*     {{ advert.content }}*/
/*   </div>*/
/*   */
/* */
/*   <p>*/
/*     <a href="{{ path('cl_blog_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     <a href="{{ path('cl_blog_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier l'article*/
/*     </a>*/
/*     <a href="{{ path('cl_blog_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer l'article*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
