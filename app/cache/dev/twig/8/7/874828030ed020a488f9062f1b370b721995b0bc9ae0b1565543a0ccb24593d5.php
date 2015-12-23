<?php

/* CLBlogBundle:Advert:index.html.twig */
class __TwigTemplate_189ae9935fe4894f8bdb97be4b68f539581f3cf71f9b58329bc1fd84c6039afc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CLBlogBundle::layout.html.twig", "CLBlogBundle:Advert:index.html.twig", 3);
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
        $__internal_7f38d3d1a0885896fa2ed9c15f574155ee3531fcce66d691bf2e5b7e95efeb2e = $this->env->getExtension("native_profiler");
        $__internal_7f38d3d1a0885896fa2ed9c15f574155ee3531fcce66d691bf2e5b7e95efeb2e->enter($__internal_7f38d3d1a0885896fa2ed9c15f574155ee3531fcce66d691bf2e5b7e95efeb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CLBlogBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f38d3d1a0885896fa2ed9c15f574155ee3531fcce66d691bf2e5b7e95efeb2e->leave($__internal_7f38d3d1a0885896fa2ed9c15f574155ee3531fcce66d691bf2e5b7e95efeb2e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_73defcc5bc4c73402e550d04d231c977b76e8b978553a35d8bbb14c637cebf55 = $this->env->getExtension("native_profiler");
        $__internal_73defcc5bc4c73402e550d04d231c977b76e8b978553a35d8bbb14c637cebf55->enter($__internal_73defcc5bc4c73402e550d04d231c977b76e8b978553a35d8bbb14c637cebf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_73defcc5bc4c73402e550d04d231c977b76e8b978553a35d8bbb14c637cebf55->leave($__internal_73defcc5bc4c73402e550d04d231c977b76e8b978553a35d8bbb14c637cebf55_prof);

    }

    // line 9
    public function block_clblog_body($context, array $blocks = array())
    {
        $__internal_9c8908321913e0acffceb3f9fe66739a86001f23c0e7c5e1f2ac8d6e6c7f0e72 = $this->env->getExtension("native_profiler");
        $__internal_9c8908321913e0acffceb3f9fe66739a86001f23c0e7c5e1f2ac8d6e6c7f0e72->enter($__internal_9c8908321913e0acffceb3f9fe66739a86001f23c0e7c5e1f2ac8d6e6c7f0e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "clblog_body"));

        // line 10
        echo "\t<h2>Liste des articles</h2>
\t
\t<ul>
\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 14
            echo "\t\t<li>
\t\t
\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cl_blog_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
\t\t\t</a>
\t\t\tpar ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
\t\t\tle ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t</li>
\t\t
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "\t\t<li>Pas encore d'articles</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t</ul>
";
        
        $__internal_9c8908321913e0acffceb3f9fe66739a86001f23c0e7c5e1f2ac8d6e6c7f0e72->leave($__internal_9c8908321913e0acffceb3f9fe66739a86001f23c0e7c5e1f2ac8d6e6c7f0e72_prof);

    }

    public function getTemplateName()
    {
        return "CLBlogBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  93 => 24,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  67 => 14,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* */
/* */
/* {% extends "CLBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block clblog_body %}*/
/* 	<h2>Liste des articles</h2>*/
/* 	*/
/* 	<ul>*/
/* 		{% for advert in listAdverts %}*/
/* 		<li>*/
/* 		*/
/* 			<a href="{{ path('cl_blog_view',{'id': advert.id}) }}">*/
/* 				{{ advert.title }}*/
/* 			</a>*/
/* 			par {{ advert.author }},*/
/* 			le {{ advert.date|date('d/m/Y')}}*/
/* 		</li>*/
/* 		*/
/* 		{% else %}*/
/* 		<li>Pas encore d'articles</li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* {% endblock %}*/
/* */
