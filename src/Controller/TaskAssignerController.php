<?php

namespace App\Controller;

use App\Repository\EmployeeRepository;
use App\Repository\LabelRepository;
use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskAssignerController extends AbstractController
{
    #[Route('/tarea/listado', name: 'tarea_listar',)]
    public function tareaListar(TaskRepository $taskRepository): Response
    {
        $tasks = $taskRepository->findBy([], ['title'=>'ASC']);
        return $this->render('tarealistado.html.twig', [
            'tasks' => $tasks
        ]);
    }

    #[Route('/empleado/listar', name: 'empleado_listar')]
    public function empleadoListar(EmployeeRepository $employeeRepository): Response
    {

        return $this->render('');
    }

    #[Route('/empleado/nombre/{nombre}', name: "empleado_filtrar", requirements: ['nombre' => '\w+'])]
    public function empleadoFiltrar(EmployeeRepository $employeeRepository, string $nombre): Response
    {

        return $this->render('');
    }

    #[Route('/etiqueta/listar', name: 'etiqueta_listar')]
    public function etiquetaListar(LabelRepository $labelRepository): Response
    {

        return $this->render('');
    }
}