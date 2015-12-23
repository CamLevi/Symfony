<?php

/* ::layout.html.twig */
class __TwigTemplate_b942ebe93b622f76e1ab3974fbbb4817ca158524375bf98463743ec13b1f218f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af54b499ec7f8f9a5686163d8f990d03ef7708df21be2e7cd4f8239de4508115 = $this->env->getExtension("native_profiler");
        $__internal_af54b499ec7f8f9a5686163d8f990d03ef7708df21be2e7cd4f8239de4508115->enter($__internal_af54b499ec7f8f9a5686163d8f990d03ef7708df21be2e7cd4f8239de4508115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t  <meta charset=\"utf-8\">
\t  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "\t</head>

\t<body>
\t  <div class=\"container\">
\t\t<div id=\"header\" class=\"jumbotron\">
\t\t  <h1>Voyages</h1>
\t\t  <p>
\t\t\tBienvenue sur ce blog, vous pouvez y partager des avis sur vos voyages ou simplement consulter les articles existants.
\t\t  </p>
\t\t<!--  <p>
\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"http://www.esiea.fr/\">
\t\t\t  Allez sur le site web de l'ESIEA
\t\t\t</a>
\t\t  </p> -->
\t\t</div>

\t\t<div class=\"row\">
\t\t  <div id=\"menu\" class=\"col-md-3\">
\t\t\t<h3>Les articles</h3>
\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t  <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("cl_blog_home");
        echo "\">Accueil</a></li>
\t\t\t  <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("cl_blog_add");
        echo "\">Ajouter un article</a></li>
\t\t\t</ul>

\t\t\t<h4>Derniers articles</h4>
\t\t\t";
        // line 40
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CLBlogBundle:Advert:menu", array("limit" => 3)));
        echo "
\t\t  </div>
\t\t  <div id=\"content\" class=\"col-md-9\">
\t\t\t";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "\t\t  </div>
\t\t</div>

\t\t<hr>

\t\t<footer>
\t\t  <p>Lévi Camille, Huret Sarah, élèves de 4A à l'ESIEA - ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
\t\t</footer>
\t  </div>

\t  ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
\t</body>
</html>";
        
        $__internal_af54b499ec7f8f9a5686163d8f990d03ef7708df21be2e7cd4f8239de4508115->leave($__internal_af54b499ec7f8f9a5686163d8f990d03ef7708df21be2e7cd4f8239de4508115_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a1a7ef6854f4d4736966fe68932ea0cd4ee4bfaf365f4154541f0514e4a99a9 = $this->env->getExtension("native_profiler");
        $__internal_5a1a7ef6854f4d4736966fe68932ea0cd4ee4bfaf365f4154541f0514e4a99a9->enter($__internal_5a1a7ef6854f4d4736966fe68932ea0cd4ee4bfaf365f4154541f0514e4a99a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_5a1a7ef6854f4d4736966fe68932ea0cd4ee4bfaf365f4154541f0514e4a99a9->leave($__internal_5a1a7ef6854f4d4736966fe68932ea0cd4ee4bfaf365f4154541f0514e4a99a9_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65406eef8ac16c3659933decb3d4f7e04146de25e0556f379430b5fc5bb93b57 = $this->env->getExtension("native_profiler");
        $__internal_65406eef8ac16c3659933decb3d4f7e04146de25e0556f379430b5fc5bb93b57->enter($__internal_65406eef8ac16c3659933decb3d4f7e04146de25e0556f379430b5fc5bb93b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t";
        // line 11
        echo "\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t  ";
        
        $__internal_65406eef8ac16c3659933decb3d4f7e04146de25e0556f379430b5fc5bb93b57->leave($__internal_65406eef8ac16c3659933decb3d4f7e04146de25e0556f379430b5fc5bb93b57_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cbcebc7ed9c8b6821883a5ad8ca45daf1a3183587bf57d0f252de3ecff9edec = $this->env->getExtension("native_profiler");
        $__internal_0cbcebc7ed9c8b6821883a5ad8ca45daf1a3183587bf57d0f252de3ecff9edec->enter($__internal_0cbcebc7ed9c8b6821883a5ad8ca45daf1a3183587bf57d0f252de3ecff9edec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "\t\t\t";
        
        $__internal_0cbcebc7ed9c8b6821883a5ad8ca45daf1a3183587bf57d0f252de3ecff9edec->leave($__internal_0cbcebc7ed9c8b6821883a5ad8ca45daf1a3183587bf57d0f252de3ecff9edec_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de4e8e435f3fd996cf2d91064c98cafba86a33c66892492f4683a4ddb27c14b6 = $this->env->getExtension("native_profiler");
        $__internal_de4e8e435f3fd996cf2d91064c98cafba86a33c66892492f4683a4ddb27c14b6->enter($__internal_de4e8e435f3fd996cf2d91064c98cafba86a33c66892492f4683a4ddb27c14b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "\t\t";
        // line 57
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t  ";
        
        $__internal_de4e8e435f3fd996cf2d91064c98cafba86a33c66892492f4683a4ddb27c14b6->leave($__internal_de4e8e435f3fd996cf2d91064c98cafba86a33c66892492f4683a4ddb27c14b6_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 57,  160 => 56,  154 => 55,  147 => 44,  141 => 43,  131 => 12,  128 => 11,  126 => 10,  120 => 9,  108 => 7,  99 => 60,  97 => 55,  90 => 51,  82 => 45,  80 => 43,  74 => 40,  67 => 36,  63 => 35,  41 => 15,  39 => 9,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 	  <meta charset="utf-8">*/
/* 	  <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/* 	  <title>{% block title %}Blog{% endblock %}</title>*/
/* */
/* 	  {% block stylesheets %}*/
/* 		{# On charge le CSS de bootstrap depuis le site directement #}*/
/* 		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/* 		<link href="{{ asset('css/styles.css') }}" rel="stylesheet">*/
/* */
/* 	  {% endblock %}*/
/* 	</head>*/
/* */
/* 	<body>*/
/* 	  <div class="container">*/
/* 		<div id="header" class="jumbotron">*/
/* 		  <h1>Voyages</h1>*/
/* 		  <p>*/
/* 			Bienvenue sur ce blog, vous pouvez y partager des avis sur vos voyages ou simplement consulter les articles existants.*/
/* 		  </p>*/
/* 		<!--  <p>*/
/* 			<a class="btn btn-primary btn-lg" href="http://www.esiea.fr/">*/
/* 			  Allez sur le site web de l'ESIEA*/
/* 			</a>*/
/* 		  </p> -->*/
/* 		</div>*/
/* */
/* 		<div class="row">*/
/* 		  <div id="menu" class="col-md-3">*/
/* 			<h3>Les articles</h3>*/
/* 			<ul class="nav nav-pills nav-stacked">*/
/* 			  <li><a href="{{ path('cl_blog_home') }}">Accueil</a></li>*/
/* 			  <li><a href="{{ path('cl_blog_add') }}">Ajouter un article</a></li>*/
/* 			</ul>*/
/* */
/* 			<h4>Derniers articles</h4>*/
/* 			{{ render(controller("CLBlogBundle:Advert:menu", {'limit': 3})) }}*/
/* 		  </div>*/
/* 		  <div id="content" class="col-md-9">*/
/* 			{% block body %}*/
/* 			{% endblock %}*/
/* 		  </div>*/
/* 		</div>*/
/* */
/* 		<hr>*/
/* */
/* 		<footer>*/
/* 		  <p>Lévi Camille, Huret Sarah, élèves de 4A à l'ESIEA - {{ 'now'|date('Y') }}</p>*/
/* 		</footer>*/
/* 	  </div>*/
/* */
/* 	  {% block javascripts %}*/
/* 		{# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/* 		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* 		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* 	  {% endblock %}*/
/* */
/* 	</body>*/
/* </html>*/
