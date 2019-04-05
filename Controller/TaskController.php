<?php

namespace Garamszegi\Bundle\TaskManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of TaskController
 *
 * @author Garamszegi Erik
 */
class TaskController extends AbstractController {

    public function indexActions() {
        return new Response('ok',200);
    }

}
