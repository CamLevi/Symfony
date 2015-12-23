<?php

/* CLBlogBundle:Advert:edit.html.twig */
class __TwigTemplate_963b3cd1bc8d10ae4f0a6ffcd8422d4b8be352ebffe21f8660a7a6802512dcf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CLBlogBundle::layout.html.twig", "CLBlogBundle:Advert:edit.html.twig", 1);
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
        $__internal_d4b2ecd9bf2e215d44cf672a1348b1a6f55f10ba04fafd0a033032577d88316f = $this->env->getExtension("native_profiler");
        $__internal_d4b2ecd9bf2e215d44cf672a1348b1a6f55f10ba04fafd0a033032577d88316f->enter($__internal_d4b2ecd9bf2e215d44cf672a1348b1a6f55f10ba04fafd0a033032577d88316f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CLBlogBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4b2ecd9bf2e215d44cf672a1348b1a6f55f10ba04fafd0a033032577d88316f->leave($__internal_d4b2ecd9bf2e215d44cf672a1348b1a6f55f10ba04fafd0a033032577d88316f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e20ef740b5daacd996426692408429be9035f0a2e836cc4e6c2e3a197761808 = $this->env->getExtension("native_profiler");
        $__internal_8e20ef740b5daacd996426692408429be9035f0a2e836cc4e6c2e3a197761808->enter($__internal_8e20ef740b5daacd996426692408429be9035f0a2e836cc4e6c2e3a197761808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8e20ef740b5daacd996426692408429be9035f0a2e836cc4e6c2e3a197761808->leave($__internal_8e20ef740b5daacd996426692408429be9035f0a2e836cc4e6c2e3a197761808_prof);

    }

    // line 7
    public function block_clblog_body($context, array $blocks = array())
    {
        $__internal_c3e6f6e341f9ed9dfed5e3d10a63abce0887dbc11966c275375dae72ab676025 = $this->env->getExtension("native_profiler");
        $__internal_c3e6f6e341f9ed9dfed5e3d10a63abce0887dbc11966c275375dae72ab676025->enter($__internal_c3e6f6e341f9ed9dfed5e3d10a63abce0887dbc11966c275375dae72ab676025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "clblog_body"));

        // line 8
        echo "
  <h2>Modifier un article</h2>

    <form method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cl_blog_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\">
 
   <fieldset>
       <legend>Votre article</legend> 
\t  
       <label for=\"title\">Titre</label>
       <input type=\"text\" name=\"title\" id=\"title\" required value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" />
\t\t<br>
\t\t<br>
       <label for=\"author\">Auteur</label>
       <input type=\"text\" name=\"author\" id=\"author\" required value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo "\" />
\t\t<br>
\t\t<br>
\t\t<label for=\"content\">Contenu</label>
\t\t<textarea type=\"text\" name=\"content\" id=\"content\" required >";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo " </textarea>
\t\t<br>
\t\t<br>
\t\t<label for=\"url\">Url de l'image</label>
\t\t<input type=text name=\"url\" id=\"url\" required  />
\t\t<br>
\t\t<br>
\t\t<label for=\"alt\">Alt de l'image</label>
\t\t<input type=text name=\"alt\" id=\"alt\"  />
\t\t<br>
\t\t<br>
\t\t<input type=\"submit\" value=\"Valider\" />
\t</fieldset>
</form>

  <p>
    Vous éditez un article déjà existant, merci de ne pas changer
    le thème général de l'article déjà publié.
  </p>

  <p>
    <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cl_blog_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'article
    </a>
  </p>

";
        
        $__internal_c3e6f6e341f9ed9dfed5e3d10a63abce0887dbc11966c275375dae72ab676025->leave($__internal_c3e6f6e341f9ed9dfed5e3d10a63abce0887dbc11966c275375dae72ab676025_prof);

    }

    public function getTemplateName()
    {
        return "CLBlogBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 46,  85 => 25,  78 => 21,  71 => 17,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "CLBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier un article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block clblog_body %}*/
/* */
/*   <h2>Modifier un article</h2>*/
/* */
/*     <form method="post" action="{{ path('cl_blog_edit',{id: advert.id}) }}">*/
/*  */
/*    <fieldset>*/
/*        <legend>Votre article</legend> */
/* 	  */
/*        <label for="title">Titre</label>*/
/*        <input type="text" name="title" id="title" required value="{{ advert.title }}" />*/
/* 		<br>*/
/* 		<br>*/
/*        <label for="author">Auteur</label>*/
/*        <input type="text" name="author" id="author" required value="{{ advert.author }}" />*/
/* 		<br>*/
/* 		<br>*/
/* 		<label for="content">Contenu</label>*/
/* 		<textarea type="text" name="content" id="content" required >{{ advert.content }} </textarea>*/
/* 		<br>*/
/* 		<br>*/
/* 		<label for="url">Url de l'image</label>*/
/* 		<input type=text name="url" id="url" required  />*/
/* 		<br>*/
/* 		<br>*/
/* 		<label for="alt">Alt de l'image</label>*/
/* 		<input type=text name="alt" id="alt"  />*/
/* 		<br>*/
/* 		<br>*/
/* 		<input type="submit" value="Valider" />*/
/* 	</fieldset>*/
/* </form>*/
/* */
/*   <p>*/
/*     Vous éditez un article déjà existant, merci de ne pas changer*/
/*     le thème général de l'article déjà publié.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('cl_blog_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'article*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
