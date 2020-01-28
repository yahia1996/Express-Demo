<?php

/* @moriven/public/css/minimal-slider.css */
class __TwigTemplate_cc9db50ee32ab26b943bf6ebcc4f49684f147315c7d5c218e418851b4975dac5 extends Twig_Template
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
        $__internal_79d5a474423a1f1fec41cab6685f2806f11f9c5d7c9e67bd7ab59f3fde802228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d5a474423a1f1fec41cab6685f2806f11f9c5d7c9e67bd7ab59f3fde802228->enter($__internal_79d5a474423a1f1fec41cab6685f2806f11f9c5d7c9e67bd7ab59f3fde802228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/public/css/minimal-slider.css"));

        $__internal_2858290b9cb3f502eac90eb2fcfab1341e000a699896bee5b20f7cc4dbe470a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2858290b9cb3f502eac90eb2fcfab1341e000a699896bee5b20f7cc4dbe470a3->enter($__internal_2858290b9cb3f502eac90eb2fcfab1341e000a699896bee5b20f7cc4dbe470a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/public/css/minimal-slider.css"));

        // line 1
        echo "/*!
 * Simple and clean slider v1.0 (https://hodalog.com)
 * Copyright 2018 Hodaka Sakamoto
 * Licensed under MIT (https://gitlab.com/hodanov/simple-and-clean-slider/tree/master/LICENSE.md)
 */

/* -----Container----- */

@media screen and (max-width: 767px) {

    .container {
        width: 95%;
    }
}

/* -----Slider----- */

.slide-window {
    width: 100%;
    position: relative;
    overflow: hidden;
}

.slide-window .slide-wrapper {
    position: relative;
    left: 0;
    display: flex;
    -webkit-transition: right 0.5s;
    transition: right 0.5s;
    -webkit-transition: left 0.5s;
    transition: left 0.5s;
}

.slide-window .slide-wrapper .slide {
    position: relative;
    width: 100%;
}

.slide-window .slide-wrapper .slide:before {
    content: \"\";
    display: block;
    padding-top: 41.17%;
}

.slide-window .slide-wrapper .slide .slide-image {
    background-size: cover;
    background-position: 50% 50%;
    overflow: hidden;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
}
.slide-window .slide-wrapper .slide .slide-caption {
    position: absolute;
    bottom:33%;
    left: 15%;
    width: 53%;
    color: #fff;
    background: none;
}

.slide-window .slide-wrapper .slide .slide-caption h3 {
     margin:0rem;
    font-size:3.5rem;
}

.slide-window .slide-wrapper .slide .slide-caption p {
    margin:0rem;
    font-size: 1.2rem;
    color: #ddd;
}
.slide-window .slide-wrapper .slide .slide-caption span {
    color:#ff4e00;
}
@media screen and (max-width: 767px) {

    .slide-window .slide-wrapper .slide .slide-caption h3 {
        font-size: 1.2rem;
    }

    .slide-window .slide-wrapper .slide .slide-caption p {
        font-size: .8rem;
    }
}

.slide-window:hover .slide-control-left {
    left: 1%;
    opacity: 1;
}

.slide-window:hover .slide-control-right {
    right: 1%;
    opacity: 1;
}

.slide-control-left {
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid #fff;
    color: #fff;
    cursor: pointer;
    opacity: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    left: 10%;
    right: auto;
}

.slide-control-left .slide-control-line {
    position: absolute;
    top: 50%;
    width: 2px;
    height: 14px;
    -webkit-transform-origin: 50% 0;
    transform-origin: 50% 0;
    left: 12px;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
}

.slide-control-left .slide-control-line:nth-child(2) {
    -webkit-transform: translateY(1px) rotate(-135deg);
    transform: translateY(1px) rotate(-135deg);
}

.slide-control-left .slide-control-line:after {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: #fff;
    -webkit-transition: background-color 0.3s;
    transition: background-color 0.3s;
}

.slide-control-left:hover {
    background-color: #fff;
}

.slide-control-left:hover .slide-control-line:after {
    background-color: #aaa;
}

.slide-control-left .rotate-left-top:after {
    animation: arrowLineRotation 0.49s;
}

.slide-control-left .rotate-left-down:after {
    animation: arrowLineRotationRev 0.49s;
}

@media screen and (max-width: 767px) {

    .slide-control-left {
        height: 30px;
        width: 30px;
        opacity: 1;
    }

    .slide-control-left .slide-control-line {
        left: 9px;
        height: 10px;
    }
}

@media screen and (max-width: 1023px) {

    .slide-control-left {
        opacity: 1;
        left: 1%;
    }
}

.slide-control-right {
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid #fff;
    color: #fff;
    cursor: pointer;
    opacity: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    right: 10%;
    left: auto;
}

.slide-control-right .slide-control-line {
    position: absolute;
    top: 50%;
    width: 2px;
    height: 14px;
    -webkit-transform-origin: 50% 0;
    transform-origin: 50% 0;
    right: 12px;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}

.slide-control-right .slide-control-line:nth-child(2) {
    -webkit-transform: translateY(1px) rotate(135deg);
    transform: translateY(1px) rotate(135deg);
}

.slide-control-right .slide-control-line:after {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: #fff;
    -webkit-transition: background-color 0.3s;
    transition: background-color 0.3s;
}

.slide-control-right:hover {
    background-color: #fff;
}

.slide-control-right:hover .slide-control-line:after {
    background-color: #aaa;
}

.slide-control-right .rotate-right-down:after {
    animation: arrowLineRotation 0.49s;
}

.slide-control-right .rotate-right-top:after {
    animation: arrowLineRotationRev 0.49s;
}

@media screen and (max-width: 767px) {

    .slide-control-right {
        height: 30px;
        width: 30px;
        opacity: 1;
    }

    .slide-control-right .slide-control-line {
        right: 9px;
        height: 10px;
    }
}

@media screen and (max-width: 1023px) {

    .slide-control-right {
        opacity: 1;
        right: 1%;
    }
}

@keyframes arrowLineRotation {
    to {
        transform: rotate(180deg);
    }
}

@keyframes arrowLineRotationRev {
    to {
        transform: rotate(-180deg);
    }
}

.slide-control-btn ul {
    position: absolute;
    padding: 0;
    bottom: 10%;
    width: 100%;
    display: flex;
    justify-content: left;
    left: 15%;

}

.slide-control-btn ul li {
    margin: 0 5px;
    list-style: none;
}

.slide-control-btn ul li a {
    display: block;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    border: 1px solid #fff;
    cursor: pointer;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
}

.slide-control-btn ul li a.active,
.slide-control-btn ul li a:hover {
    background-color: #fff;
}
@media(max-width:1280px){
\t.slide-window .slide-wrapper .slide .slide-caption {
        position: absolute;
        bottom: 24%;
        left: 15%;
        width: 53%;
    }
    .slide-window .slide-wrapper .slide .slide-caption h3 {
        margin: 0rem;
        font-size: 3rem;
    }
}
@media(max-width:1050px){
\t.slide-window .slide-wrapper .slide .slide-caption h3 {
        margin: 0rem;
        font-size: 2.5rem;
    }
}
@media(max-width:991px){
    .slide-window .slide-wrapper .slide .slide-caption p {
        margin: 0rem;
        font-size: 1rem;
    }
}
@media(max-width:800px){
    .slide-window .slide-wrapper .slide .slide-caption {
        position: absolute;
        bottom: 24%;
        left: 15%;
        width: 65%;
    }
}

@media screen and (max-width: 767px) {
    .slide-control-btn ul {
        margin: .5rem 0;
    }
    .slide-control-btn ul li a {
        width: 10px;
        height: 10px;
    }
}
@media screen and (max-width: 766px) {
    .slide-window .slide-wrapper .slide .slide-caption {
            position: absolute;
            bottom: 21%;
            left: 15%;
            width: 75%;
        }
}
@media screen and (max-width:667px) {
    .slide-window .slide-wrapper .slide .slide-caption {
        position: absolute;
        bottom: 18%;
        left: 15%;
        width: 75%;
    }
    .slide-window .slide-wrapper .slide .slide-caption h3 {
        margin: 0rem;
        font-size: 2rem;
    }
}
@media screen and (max-width:480px) {
    .slide-window .slide-wrapper .slide .slide-caption {
        position: absolute;
        bottom: 21%;
        left: 15%;
        width: 80%;
    }
}
@media screen and (max-width:384px) {
    .slide-window .slide-wrapper .slide .slide-caption h3 {
        margin: 0rem;
        font-size: 1.3rem;
    }
    .slide-window .slide-wrapper .slide .slide-caption p {
        margin: 0rem;
        font-size: 0.75rem;
    }
}
@media screen and (max-width:375px) {
    .slide-window .slide-wrapper .slide .slide-caption {
        position: absolute;
        bottom: 18%;
        left: 15%;
        width: 80%;
    }
    .slide-control-btn ul {
        bottom: 6%;
        width: 100%;
        display: flex;
        justify-content: left;
        left: 15%;
    }
}
/*# sourceMappingURL=style.css.map */";
        
        $__internal_79d5a474423a1f1fec41cab6685f2806f11f9c5d7c9e67bd7ab59f3fde802228->leave($__internal_79d5a474423a1f1fec41cab6685f2806f11f9c5d7c9e67bd7ab59f3fde802228_prof);

        
        $__internal_2858290b9cb3f502eac90eb2fcfab1341e000a699896bee5b20f7cc4dbe470a3->leave($__internal_2858290b9cb3f502eac90eb2fcfab1341e000a699896bee5b20f7cc4dbe470a3_prof);

    }

    public function getTemplateName()
    {
        return "@moriven/public/css/minimal-slider.css";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * Simple and clean slider v1.0 (https://hodalog.com)
 * Copyright 2018 Hodaka Sakamoto
 * Licensed under MIT (https://gitlab.com/hodanov/simple-and-clean-slider/tree/master/LICENSE.md)
 */

/* -----Container----- */

@media screen and (max-width: 767px) {

    .container {
        width: 95%;
    }
}

/* -----Slider----- */

.slide-window {
    width: 100%;
    position: relative;
    overflow: hidden;
}

.slide-window .slide-wrapper {
    position: relative;
    left: 0;
    display: flex;
    -webkit-transition: right 0.5s;
    transition: right 0.5s;
    -webkit-transition: left 0.5s;
    transition: left 0.5s;
}

.slide-window .slide-wrapper .slide {
    position: relative;
    width: 100%;
}

.slide-window .slide-wrapper .slide:before {
    content: \"\";
    display: block;
    padding-top: 41.17%;
}

.slide-window .slide-wrapper .slide .slide-image {
    background-size: cover;
    background-position: 50% 50%;
    overflow: hidden;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
}
.slide-window .slide-wrapper .slide .slide-caption {
    position: absolute;
    bottom:33%;
    left: 15%;
    width: 53%;
    color: #fff;
    background: none;
}

.slide-window .slide-wrapper .slide .slide-caption h3 {
     margin:0rem;
    font-size:3.5rem;
}

.slide-window .slide-wrapper .slide .slide-caption p {
    margin:0rem;
    font-size: 1.2rem;
    color: #ddd;
}
.slide-window .slide-wrapper .slide .slide-caption span {
    color:#ff4e00;
}
@media screen and (max-width: 767px) {

    .slide-window .slide-wrapper .slide .slide-caption h3 {
        font-size: 1.2rem;
    }

    .slide-window .slide-wrapper .slide .slide-caption p {
        font-size: .8rem;
    }
}

.slide-window:hover .slide-control-left {
    left: 1%;
    opacity: 1;
}

.slide-window:hover .slide-control-right {
    right: 1%;
    opacity: 1;
}

.slide-control-left {
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid #fff;
    color: #fff;
    cursor: pointer;
    opacity: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    left: 10%;
    right: auto;
}

.slide-control-left .slide-control-line {
    position: absolute;
    top: 50%;
    width: 2px;
    height: 14px;
    -webkit-transform-origin: 50% 0;
    transform-origin: 50% 0;
    left: 12px;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
}

.slide-control-left .slide-control-line:nth-child(2) {
    -webkit-transform: translateY(1px) rotate(-135deg);
    transform: translateY(1px) rotate(-135deg);
}

.slide-control-left .slide-control-line:after {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: #fff;
    -webkit-transition: background-color 0.3s;
    transition: background-color 0.3s;
}

.slide-control-left:hover {
    background-color: #fff;
}

.slide-control-left:hover .slide-control-line:after {
    background-color: #aaa;
}

.slide-control-left .rotate-left-top:after {
    animation: arrowLineRotation 0.49s;
}

.slide-control-left .rotate-left-down:after {
    animation: arrowLineRotationRev 0.49s;
}

@media screen and (max-width: 767px) {

    .slide-control-left {
        height: 30px;
        width: 30px;
        opacity: 1;
    }

    .slide-control-left .slide-control-line {
        left: 9px;
        height: 10px;
    }
}

@media screen and (max-width: 1023px) {

    .slide-control-left {
        opacity: 1;
        left: 1%;
    }
}

.slide-control-right {
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid #fff;
    color: #fff;
    cursor: pointer;
    opacity: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    right: 10%;
    left: auto;
}

.slide-control-right .slide-control-line {
    position: absolute;
    top: 50%;
    width: 2px;
    height: 14px;
    -webkit-transform-origin: 50% 0;
    transform-origin: 50% 0;
    right: 12px;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}

.slide-control-right .slide-control-line:nth-child(2) {
    -webkit-transform: translateY(1px) rotate(135deg);
    transform: translateY(1px) rotate(135deg);
}

.slide-control-right .slide-control-line:after {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: #fff;
    -webkit-transition: background-color 0.3s;
    transition: background-color 0.3s;
}

.slide-control-right:hover {
    background-color: #fff;
}

.slide-control-right:hover .slide-control-line:after {
    background-color: #aaa;
}

.slide-control-right .rotate-right-down:after {
    animation: arrowLineRotation 0.49s;
}

.slide-control-right .rotate-right-top:after {
    animation: arrowLineRotationRev 0.49s;
}

@media screen and (max-width: 767px) {

    .slide-control-right {
        height: 30px;
        width: 30px;
        opacity: 1;
    }

    .slide-control-right .slide-control-line {
        right: 9px;
        height: 10px;
    }
}

@media screen and (max-width: 1023px) {

    .slide-control-right {
        opacity: 1;
        right: 1%;
    }
}

@keyframes arrowLineRotation {
    to {
        transform: rotate(180deg);
    }
}

@keyframes arrowLineRotationRev {
    to {
        transform: rotate(-180deg);
    }
}

.slide-control-btn ul {
    position: absolute;
    padding: 0;
    bottom: 10%;
    width: 100%;
    display: flex;
    justify-content: left;
    left: 15%;

}

.slide-control-btn ul li {
    margin: 0 5px;
    list-style: none;
}

.slide-control-btn ul li a {
    display: block;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    border: 1px solid #fff;
    cursor: pointer;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
}

.slide-control-btn ul li a.active,
.slide-control-btn ul li a:hover {
    background-color: #fff;
}
@media(max-width:1280px){
\t.slide-window .slide-wrapper .slide .slide-caption {
        position: absolute;
        bottom: 24%;
        left: 15%;
        width: 53%;
    }
    .slide-window .slide-wrapper .slide .slide-caption h3 {
        margin: 0rem;
        font-size: 3rem;
    }
}
@media(max-width:1050px){
\t.slide-window .slide-wrapper .slide .slide-caption h3 {
        margin: 0rem;
        font-size: 2.5rem;
    }
}
@media(max-width:991px){
    .slide-window .slide-wrapper .slide .slide-caption p {
        margin: 0rem;
        font-size: 1rem;
    }
}
@media(max-width:800px){
    .slide-window .slide-wrapper .slide .slide-caption {
        position: absolute;
        bottom: 24%;
        left: 15%;
        width: 65%;
    }
}

@media screen and (max-width: 767px) {
    .slide-control-btn ul {
        margin: .5rem 0;
    }
    .slide-control-btn ul li a {
        width: 10px;
        height: 10px;
    }
}
@media screen and (max-width: 766px) {
    .slide-window .slide-wrapper .slide .slide-caption {
            position: absolute;
            bottom: 21%;
            left: 15%;
            width: 75%;
        }
}
@media screen and (max-width:667px) {
    .slide-window .slide-wrapper .slide .slide-caption {
        position: absolute;
        bottom: 18%;
        left: 15%;
        width: 75%;
    }
    .slide-window .slide-wrapper .slide .slide-caption h3 {
        margin: 0rem;
        font-size: 2rem;
    }
}
@media screen and (max-width:480px) {
    .slide-window .slide-wrapper .slide .slide-caption {
        position: absolute;
        bottom: 21%;
        left: 15%;
        width: 80%;
    }
}
@media screen and (max-width:384px) {
    .slide-window .slide-wrapper .slide .slide-caption h3 {
        margin: 0rem;
        font-size: 1.3rem;
    }
    .slide-window .slide-wrapper .slide .slide-caption p {
        margin: 0rem;
        font-size: 0.75rem;
    }
}
@media screen and (max-width:375px) {
    .slide-window .slide-wrapper .slide .slide-caption {
        position: absolute;
        bottom: 18%;
        left: 15%;
        width: 80%;
    }
    .slide-control-btn ul {
        bottom: 6%;
        width: 100%;
        display: flex;
        justify-content: left;
        left: 15%;
    }
}
/*# sourceMappingURL=style.css.map */", "@moriven/public/css/minimal-slider.css", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/public/css/minimal-slider.css");
    }
}
