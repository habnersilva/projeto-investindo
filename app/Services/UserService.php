<?php

namespace App\Services;


use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Exception;

class UserService
{

    private $repository;
    private $validator;

    public function __constructor(UserRepository $repository, UserValidator $validator)
    {

        $this->repository = $repository;
        $this->validator = $validator;

    }


    public function store($data)
    {

        $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);

        $usuario = $this->repository->create($data);

        try{

            return [
                'success' => true,
                'message' => "Usuário Cadastrado",
                'data'    => $usuario
            ];

        }catch(Exception $e){

            return [
                'success' => false,
                'message' => "Erro de execução"
            ];

        }

    }



    public function update()
    {

    }

    public function delete()
    {

    }


}