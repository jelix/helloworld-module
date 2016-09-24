<?php
/**
 * @author      Laurent Jouanneau
 * @contributor
 * @copyright   2016 Laurent Jouanneau
 * @link        http://www.jelix.org
 * @licence     MIT
 */

class defaultCtrl extends jController {

    function index(){
        // get the object that generates an html page and having a default
        // main template. This "response" object is the one defined globally
        // by the application
        $rep = $this->getResponse('html');

        // fill the <title> element
        $rep->title = 'Hello';

        // In the main template, set the template variable MAIN
        $rep->body->assign('MAIN', '<p>Hello world!</p>');
        return $rep;
    }

    function helloWithTpl(){
        // get an unitialized html response
        $rep = $this->getResponse('html', true);

        // fill the <title> element
        $rep->title = 'Hello From with a template';

        // indicate the main template to use for the page
        $rep->bodyTpl = 'helloworld~hello';

        // assign the template variable $who to the value from the url parameter "who"
        $rep->body->assign('who', $this->param('who','You'));

        return $rep;
    }
}
