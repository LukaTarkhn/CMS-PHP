<?php


namespace app\controllers;


class ProjectController extends AppController
{
    public function  viewAction() {
        $alias = $this->route['id'];
        $project = \R::findOne('finished_projects', 'id = ?', [$alias]);
        if(!$project) {
            throw  new \Exception('Page not found', 404);
        }

        $this->setMeta($project->title, 'utf-8', $project->title, $project->title, 'lukatarkhnishvili.com');
        $this->set(compact('project'));
    }
}