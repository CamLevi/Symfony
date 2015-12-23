<?php

/* CLBlogBundle::layout.html.twig */
class __TwigTemplate_0178a3678ff8500a26ab36f8e63624bfb895a40e89c0ba48c67fd0c9e4308880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "CLBlogBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'clblog_body' => array($this, 'block_clblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83605a345609d6751214430175e9389a0c27db199f9b3ba08a5e360f23c5fe9f = $this->env->getExtension("native_profiler");
        $__internal_83605a345609d6751214430175e9389a0c27db199f9b3ba08a5e360f23c5fe9f->enter($__internal_83605a345609d6751214430175e9389a0c27db199f9b3ba08a5e360f23c5fe9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CLBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83605a345609d6751214430175e9389a0c27db199f9b3ba08a5e360f23c5fe9f->leave($__internal_83605a345609d6751214430175e9389a0c27db199f9b3ba08a5e360f23c5fe9f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5a1a36dc609701e539a2ae8cd89f08c3342244f768ce67e183ca63acfcb8f59 = $this->env->getExtension("native_profiler");
        $__internal_b5a1a36dc609701e539a2ae8cd89f08c3342244f768ce67e183ca63acfcb8f59->enter($__internal_b5a1a36dc609701e539a2ae8cd89f08c3342244f768ce67e183ca63acfcb8f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Articles - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b5a1a36dc609701e539a2ae8cd89f08c3342244f768ce67e183ca63acfcb8f59->leave($__internal_b5a1a36dc609701e539a2ae8cd89f08c3342244f768ce67e183ca63acfcb8f59_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba55ea5c6a4f3a6023413841e6f7edabb254001036cd91b6bcc9471fff4ee215 = $this->env->getExtension("native_profiler");
        $__internal_ba55ea5c6a4f3a6023413841e6f7edabb254001036cd91b6bcc9471fff4ee215->enter($__internal_ba55ea5c6a4f3a6023413841e6f7edabb254001036cd91b6bcc9471fff4ee215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  <h1>Articles</h1>

  <hr> ";
        // line 13
        echo "
  ";
        // line 15
        echo "  ";
        $this->displayBlock('clblog_body', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_ba55ea5c6a4f3a6023413841e6f7edabb254001036cd91b6bcc9471fff4ee215->leave($__internal_ba55ea5c6a4f3a6023413841e6f7edabb254001036cd91b6bcc9471fff4ee215_prof);

    }

    // line 15
    public function block_clblog_body($context, array $blocks = array())
    {
        $__internal_75d5103d05ad22f42daaee64e1c6bc161a1978aed118848bfe42897a3cd64b24 = $this->env->getExtension("native_profiler");
        $__internal_75d5103d05ad22f42daaee64e1c6bc161a1978aed118848bfe42897a3cd64b24->enter($__internal_75d5103d05ad22f42daaee64e1c6bc161a1978aed118848bfe42897a3cd64b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "clblog_body"));

        // line 16
        echo "  ";
        
        $__internal_75d5103d05ad22f42daaee64e1c6bc161a1978aed118848bfe42897a3cd64b24->leave($__internal_75d5103d05ad22f42daaee64e1c6bc161a1978aed118848bfe42897a3cd64b24_prof);

    }

    public function getTemplateName()
    {
        return "CLBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  79 => 15,  71 => 17,  68 => 15,  65 => 13,  61 => 10,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Articles - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Articles</h1>*/
/* */
/*   <hr> {# balise permettant de délimiter différentes sections #}*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block clblog_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/*   */
